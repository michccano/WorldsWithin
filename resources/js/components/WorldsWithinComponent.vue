<template>

    <div>
        <!-- another section -->

        <div class="container-fluid flex g-0 overflow100">
            <div class="row g-0 overflow100" style="padding-left:0px!important">
                <div class="col-sm  order-xs-1 custombar " id="sidenav" style="top: 96px; height: calc(100% - 96px);">

                    <div style="padding:0px 15px 0px 15px">
                        <span style="font-size:1.5rem">Worlds Within</span><br>




                        Circulation: 12582<br>

                    </div>
                    <div class="side_box_img">
                        <img src="img/worldswithin.png">
                    </div>


                    <div class="search">
                         <span class="src_txt">
                            Search By Serial:
                         </span> <br>
                        <input type="text" placeholder="search" v-model="search.key" size="10" @change="searchData"> <br>

                        <div v-if="search.arrLength !== 0">
                        <h5 style="color: gray">Result</h5>
                        <p style="cursor: pointer;color: blue" @click="getSingleData('WorldsWithin00001')"
                           data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">WorldWithin00001</p>
                        </div>

                        <br>
                        <div class="method">
                            Sort: <select name="method" v-model="method_name" @change="methodChangeGetData">
                            <option value="serial" selected>Serial</option>
                            <option value="price">Price</option>
                        </select>
                        </div>

                        <select name="sort" id="sort" v-model="sort" @change="methodChangeGetData">
                            <option value="asc">Asc</option>
                            <option value="desc">Dsc</option>

                        </select>



                        <div class="check">For Sale Only: <input type="checkbox" v-model="priceOnly" @change="methodChangeGetData"></div>


                        <div style="padding-bottom:20px">
                            Price Filter:<br>
                            <input type="text" placeholder="min" id="lowprice" size="4" v-model="minPrice">
                            <input class="mt-2" type="text" placeholder="max" id="highprice" size="4" v-model="maxPrice">
                            <br>
                            <button class="go" @click="methodChangeGetData">Go</button>
                        </div>
                        <div id="results">Results Found: 12582</div>
                        <hr>





                        <span class="traits">Traits</span>
                        <button onclick="colaps()" id="traitshide">Traits <i class="fas fa-angle-down" id="angle"></i> </button>
                        <div id="traitsxyzhahaha">


                            Worldtype<br>
                            <select class="worldType">
                                <option value="x">Any</option>


                                <option value="Outer World">Outer World [6242]</option>


                                <option value="Inner World">Inner World [6340]</option>

                            </select>
                            <br>

                            Fog<br>
                            <select class="worldType">
                                <option value="x">Any</option>


                                <option  value="0">0 [1223]</option>


                                <option  value="0.5">0.5 [1231]</option>


                                <option  value="0.75">0.75 [1294]</option>


                                <option value="0.25">0.25 [1327]</option>


                                <option value="1">1 [7507]</option>

                            </select>
                            <br>

                            Traits<br>
                            <select class="worldType">
                                <option value="x">Any</option>


                                <option  value="weirdface">weirdface [245]</option>


                                <option  value="face6d">face6d [246]</option>


                                <option  value="trees2d">trees2d [251]</option>


                                <option  value="face4d">face4d [261]</option>


                                <option value="torii_weird">torii_weird [262]</option>


                                <option value="face3d">face3d [262]</option>


                                <option  value="trees1d">trees1d [263]</option>


                                <option  value="face8d">face8d [264]</option>


                                <option  value="face10d">face10d [268]</option>


                                <option  value="face5d">face5d [269]</option>


                                <option value="face1d">face1d [277]</option>


                                <option  value="face2d">face2d [291]</option>


                                <option  value="face7d">face7d [293]</option>


                                <option  value="pyramid_face3d">pyramid_face3d [297]</option>


                                <option value="pyramid_weird">pyramid_weird [312]</option>


                                <option value="Type_K">Type_K [737]</option>


                                <option value="Type_H">Type_H [739]</option>


                                <option value="Type_G">Type_G [742]</option>


                                <option value="Type_N">Type_N [756]</option>


                                <option value="Type_P">Type_P [766]</option>


                                <option value="Type_J">Type_J [772]</option>


                                <option value="Type_M">Type_M [778]</option>


                                <option value="Type_E">Type_E [783]</option>


                                <option value="Type_C">Type_C [785]</option>


                                <option value="Type_F">Type_F [791]</option>


                                <option value="Type_B">Type_B [802]</option>


                                <option value="Type_D">Type_D [808]</option>


                                <option value="Type_I">Type_I [812]</option>


                                <option value="Type_A">Type_A [814]</option>


                                <option value="Type_L">Type_L [843]</option>


                                <option value="Type_O">Type_O [854]</option>


                                <option value="cubes">cubes [1019]</option>


                                <option value="pyramids">pyramids [1031]</option>


                                <option value="mushrooms">mushrooms [1041]</option>


                                <option value="towers">towers [1066]</option>


                                <option value="trees">trees [1070]</option>


                                <option value="torii">torii [1084]</option>


                                <option value="cylinders">cylinders [1091]</option>


                                <option value="apparatus">apparatus [1119]</option>


                                <option value="Constant snow">Constant snow [2083]</option>


                                <option value="Constant rain">Constant rain [2114]</option>


                                <option value="Constant dust">Constant dust [2134]</option>


                                <option value="Seasonal Weather">Seasonal Weather [3108]</option>

                            </select>
                            <br>

                            Terraintrait<br>
                            <select class="worldType">
                                <option value="x">Any</option>


                                <option value="noise">noise [2449]</option>


                                <option value="spikes">spikes [2481]</option>


                                <option value="canyon">canyon [2522]</option>


                                <option value="hills">hills [2559]</option>


                                <option value="flat">flat [2571]</option>

                            </select>
                            <br>

                            Relics<br>
                            <select class="worldType">
                                <option value="x">Any</option>


                                <option value="top1">top1 [344]</option>


                                <option value="top2">top2 [347]</option>


                                <option value="windmill2">windmill2 [355]</option>


                                <option value="top3">top3 [356]</option>


                                <option value="windmill1">windmill1 [360]</option>


                                <option value="tower">tower [400]</option>


                                <option value="None">None [10456]</option>

                            </select>
                            <br>

                            Relicscount<br>
                            <select class="worldType">
                                <option value="x">Any</option>


                                <option value="2">2 [36]</option>


                                <option value="1">1 [2090]</option>


                                <option value="0">0 [10456]</option>

                            </select>
                            <br>

                            <br>
                            <button class="go">Reset</button>
                        </div>
                    </div>
                </div>
            </div>



            <!-- sec -->

            <div class="top_right">
                <div class="container right_sec">
                    <div class="txt_boxx">
                        <h1>Find Over <span class="txt_clr">20 million</span>  <br> books in worlds Within</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, harum facilis labore aut quasi voluptatum, eius vel quo autem, et optio aperiam enim porro iste!</p>
                    </div>
                </div>

            </div>

            <!-- end sec -->






            <!-- Modal -->


            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"></button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="modals_head">
                        <h1>World Within</h1>
                        <a href="">Powered By the CDINO Stakepool.</a>
                    </div>
                    <hr>
                    <div class="color-box">
                        <div class="color_txt">
                            <span>https://cnft.tools/worldswithin/1<i class="far fa-clipboard ms-2 icn"></i> <i class="fab fa-twitter ms-2 icn"></i></span>
                        </div>
                    </div>
                    <div class="color-box">
                        <div class="disclaimer">
        <span>Disclaimer: <br>
          CNFT Tools rarity rankings are just one tool to help you value NFTs. We are using the more accepted rarity calculation with the addition of category normalisation. No mathematical model can be perfect but we believe this to be the most fair currently. <br> <br>

          Rarity Rankings are calculated from what has been minted on chain. They are subject to change as more NFT's are minted.</span>
                        </div>
                    </div>


                    <div class="sidebar">
                        <div class="first_side">
                            <div class="color-box">
                                <h4>{{singleData.assetName}}</h4>
                            </div>
                            <div class="color-box">
                                <p class="Score">Rarity Score: N/A</p>
                            </div>
                            <div class="color-box">
                                <img src="img/1.png" alt="">
                            </div>
                            <div class="color-box">
                                <p class="Score">Rarity Score: N/A</p>
                            </div>
                        </div>




                        <div class="second_side">
                            <div class="color-box">
                                <span>WorldType</span>
                                <div class="d-flex justify-content-between">
                                    <span class="clr_txt">{{singleData.worldType}}</span>
                                    <span class="txt_num"> 50.42%</span>
                                </div>
                            </div>
                            <div class="color-box">
                                <span>Fog</span>
                                <div class="d-flex justify-content-between">
                                    <span class="clr_txt">{{singleData.fog}}</span>
                                    <span class="txt_num"> 10.32%</span>
                                </div>
                            </div>
                            <div class="color-box">
                                <span>Traits</span>
                                <div class="d-flex justify-content-between">
                                    <span class="clr_txt">{{singleData.traits[0]}}</span>
                                    <span class="txt_num">16.95%</span>
                                </div>
                                <div class="d-flex justify-content-between">
            <span class="clr_txt">{{singleData.traits[1]}}
            </span>
                                    <span class="txt_num">2.46%</span>
                                </div>
                                <div class="d-flex justify-content-between">
            <span class="clr_txt">{{singleData.traits[2]}}

              </span>
                                    <span class="txt_num">6.46%</span>
                                </div>
                            </div>
                            <div class="color-box">
                                <span>TerrainTrait </span>
                                <div class="d-flex justify-content-between">
                                    <span class="clr_txt">{{singleData.terrainTrait}}</span>
                                    <span class="txt_num"> 20.05%</span>
                                </div>
                            </div>
                            <div class="color-box">
                                <span>Relics  </span>
                                <div class="d-flex justify-content-between">
            <span class="clr_txt">{{singleData.relics}}
            </span>
                                    <span class="txt_num">  83.13%
            </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <!-- end modal -->

            <div class="col-sm mobilemain" id="mobilemain">


                <div class="grid" id="searchresult">
                    <div v-for="data in worldsWithinData">
                        <div class="zoom showbox"  @click="getSingleData(data.assetName)"
                             data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                        <div class="rank">
                            Rank: N/A

                        </div>
                        <div class="bg-image hover-zoom fade-in sec_img">
                            <div class="mainImage">
                                <a href="#responsive">

                                    <img src="img/1.png" class="boximage">
                                </a>
                            </div>
                        </div>

                        <div class="product_num">
                            #{{data.assetID}}
                            <div class="product_rate">
                                <div v-if="data.price === 'x'">
                                <button class="btn btn-secondary btn-sm ">Not For Sale</button>
                                </div>
                                <div v-else>
                                    <button class="btn btn-info btn-sm ">{{data.price/1000000}} ADA</button>
                                </div>
                            </div>
                        </div>


                    </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- footer -->

        <div class="last_sec">

            Page: <select name="page" id="page" v-model="page_number" @change="getData">
            <option v-for="item in pages">{{item}}</option>
            </select>
            <div class="last_txt">Results Found: 12582 Time Taken: 0.0180 secs</div>



        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    name: 'WorldsWithin',
    data() {
        return {
            filters: [],
            project: "worldswithin",
            sort: "asc",
            method_name: "serial",
            stats: [],
            worldsWithinData: [],
            pages: 1,
            page_number: 1,
            priceOnly: false,
            minPrice: "",
            maxPrice: "",
            minRank: "",
            maxRank: "",
            singleData: {
                assetName: "",
                worldType: "",
                fog: "",
                traits:[],
                terrainTrait:"",
                relics:"",
            },
            search: {
                key: "",
                arr: [],
                arrLength: 0,
            }
        }
    },

    mounted() {
        axios.post('/api/get-data',{
            project: this.project,
            sort: this.sort,
            method_name: this.method_name,
            page: this.page_number,
            priceOnly: this.priceOnly,
            filters: this.filters,
            minPrice: 0,
            maxPrice: 0,
            minRank: 0,
            maxRank: 0
        })
            .then(( response ) => {
                this.worldsWithinData = response.data.stats
                this.pages = response.data.params.maxPages
            })
            .catch(error => {
                console.log(error)
            });
    },

    methods: {
        getData() {
            axios.post('/api/get-data', {
                project: this.project,
                sort: this.sort,
                method_name: this.method_name,
                page: this.page_number,
                priceOnly: this.priceOnly,
                filters: this.filters,
                minPrice: 0,
                maxPrice: 0,
                minRank: 0,
                maxRank: 0
            })
                .then((response) => {
                    this.worldsWithinData = response.data.stats
                    this.pages = response.data.params.maxPages
                })
                .catch(error => {
                    console.log(error)
                });
        },

        methodChangeGetData() {
            axios.post('/api/get-data', {
                project: this.project,
                sort: this.sort,
                method_name: this.method_name,
                page: 1,
                priceOnly: this.priceOnly,
                filters: this.filters,
                minPrice: this.minPrice,
                maxPrice: this.maxPrice,
                minRank: 0,
                maxRank: 0
            })
                .then((response) => {
                    this.worldsWithinData = response.data.stats
                    this.pages = response.data.params.maxPages
                    this.page_number = 1
                })
                .catch(error => {
                    console.log(error)
                });
        },

        getSingleData(asset){
            axios.post('/api/single-data/'+asset, {
            })
                .then((response) => {
                    this.singleData.assetName = response.data.assetName
                    this.singleData.worldType = response.data.worldType
                    this.singleData.fog = response.data.fog
                    this.singleData.traits = response.data.traits.traits
                    this.singleData.terrainTrait = response.data.traits.terrainTrait
                    this.singleData.relics = response.data.traits.relics[0]
                })
                .catch(error => {
                    console.log(error)
                });
        },

        searchData(){
            axios.post('/api/search/'+this.search.key, {
            })
                .then((response) => {
                    this.search.arrLength = response.data.length
                    this.search.arr = response.data
                    console.log(this.search.arr)
                })
                .catch(error => {
                    console.log(error)
                });
        }

    }
}
</script>
