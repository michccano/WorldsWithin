<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WorldsWithinController extends Controller
{
    public function getData(Request $request){
        $jsonobj = [
            "project" => $request->project,
            "sort" => $request->sort,
            "method" => $request->method_name,
            "page" => (integer)$request->page,
            "priceOnly" => filter_var($request->priceOnly,FILTER_VALIDATE_BOOLEAN),
            "filters" => $request->filters,
            "sliders" => [
                "minPrice" => (integer)$request->minPrice,
                "maxPrice" => (integer)$request->maxPrice,
                "minRank" => (integer)$request->minRank,
                "maxRank" => (integer)$request->maxRank
            ]];
        $data =str_replace("[]","{}",json_encode($jsonobj));
        //dd($data);
        $client = new Client([
            'headers' => ['Content-Type' => 'application/json']
        ]);

        $response= $client->request("POST","https://cnft.tools/project/worldswithin",['body' => $data]);
        $result = json_decode($response->getBody());
        return response()->json($result);
    }

    public function search_data($keyword){
        $client = new Client();

        $response= $client->request("GET","https://cnft.tools/search/worldswithin");
        $result = json_decode($response->getBody());
        $data = [];
        foreach ($result->stats as $stat){
            if(stripos($stat->assetName, $keyword) !== false)
                array_push($data,$stat);
        }
        return response()->json($data);
    }

    public function getSingleData($assetId){
        $client = new Client();

        $response= $client->request("GET","https://cnft.tools/project/worldswithin/".$assetId);
        $result = json_decode($response->getBody());
        return response()->json($result);
    }
}
