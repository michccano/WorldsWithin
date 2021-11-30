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
}
