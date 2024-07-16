<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


</head>


<script>
    //var a, b, c;
    

    function showSide() {
        document.getElementById("sideBar").style.display = "block";
        


    }

    function showSideED(id, name, acol, parent, color) {
        document.getElementById("sideBarED").style.display = "block";

        document.getElementById("nameED").value = name
        document.getElementById("nameED").innerHTML = name

        document.getElementById("selectedColumn").value = acol
        document.getElementById("selectedColumn").innerHTML = acol

        document.getElementById("selectedParent").value = parent
        document.getElementById("selectedParent").innerHTML = parent

        document.getElementById("selectedColor").value = color

        let string = color;
        nColor = string[0].toUpperCase() + string.slice(1);

        document.getElementById("selectedColor").innerHTML = nColor


        document.getElementById("idED").value = id
        

        document.getElementById("editForm").action = "/anodes/" + id



    }

    function hideSideED() {
        document.getElementById("sideBarED").style.display = "none";

    }

    function showSearch() {
        document.getElementById("searchBar").style.display = "block";
        document.getElementById("searchButton").style.display = "none";

        document.getElementById("sortBar").style.display = "none";
        document.getElementById("sortButton").style.display = "block";



    }

    function showSort() {
        document.getElementById("sortBar").style.display = "block";
        document.getElementById("sortButton").style.display = "none";

        document.getElementById("searchBar").style.display = "none";
        document.getElementById("searchButton").style.display = "block";


    }

    function showFilter() {
        document.getElementById("filterBar").style.display = "block";
        document.getElementById("filterButton").style.display = "none";
    }

    function getFilter() {
        filterVal = document.getElementById("filter").value;
        document.getElementById(filterVal).style.display = "block";

    }

    function hideSide() {
        document.getElementById("sideBar").style.display = "none";
    }

    function myFunc(name) {
        //name="Oi"

        alert(name)
    }
</script>



<body class="flex flex-col gap-0 text-white bg-black">

    <x-navbar-scada></x-navbar-scada>

    <!-- <a class="w-fit p-1 m-4 bg-blue-300" href="/anodes/create">Add</a> -->

    <div class="mx-auto mt-4" id="nodeOptions">
        <div class="bg-gray-700 rounded mb-2 border-gray-400 border-2 border-solid flex">
            <button class="border-2 border-gray-300 border-solid w-24 p-1 m-4 h-12 bg-gray-800 hover:bg-gray-400 rounded" onclick="showSide()">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 m-auto">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>

                    <p class="m-auto">Add</p>

                </div>
            </button>

            <div class="flex" id="searchOpt">
                <button class="border-2 border-gray-300 border-solid w-24 p-1 m-4 h-12 bg-gray-800 hover:bg-gray-400 rounded" onclick="showSearch()" id="searchButton" style="display: block;">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 m-auto">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>


                        <p class="m-auto">Search</p>

                    </div>
                </button>
                <div class="m-4 flex border-gray-300 border-2 border-solid rounded bg-gray-800 h-12" id="searchBar" style="display: none;">
                    <div class="my-auto h-full">
                        <form action="/anodes" class="flex my-auto mx-1 h-full">
                            <select class="w-20 h-8 m-auto text-black text-sm p-1 border-2 border-gray-300 border-solid bg-gray-200 hover:bg-white focus:bg-white rounded" name="searchFilter" id="searchFilter">
                                <!-- <option disabled selected value> -- select color -- </option> -->
                                <option value="all">All (Name, Color, Number)</option>
                                <option value="id">No.ID</option>
                                <option value="acol_id">Column</option>
                                <option value="parent_id">Parent</option>

                            </select><br>
                            <p class="text-lg font-bold my-auto mx-2">:</p>
                            <input class="w-28 h-8 m-auto text-black p-1 border-2 border-gray-300 border-solid bg-gray-200 hover:bg-white focus:bg-white rounded" type="text" id="search" name="search" placeholder="search...">
                            <div class="w-fit my-auto ml-2">
                                <button class="border-2 border-gray-300 border-solid w-24 p-1 mx-auto my-auto h-full bg-gray-700 hover:bg-gray-600 text-white rounded text-sm" type="submit" id="submitSearch">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="flex" id="sortOpt">
                <button class="right border-2 border-gray-300 border-solid w-24 p-1 m-4 h-12 bg-gray-800 hover:bg-gray-400 rounded" onclick="showSort()" id="sortButton" style="display: block;">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 m-auto">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                        </svg>



                        <p class="m-auto">Sort by</p>

                    </div>
                </button>
                <div class="m-4 flex border-gray-300 border-2 border-solid rounded bg-gray-800 h-12" id="sortBar" style="display: none;">
                    <div class="my-auto h-full">
                        <form action="/anodes" class="flex my-auto mx-1 h-full">

                            <select class="w-28 h-8 m-auto text-black p-1 border-2 border-gray-300 border-solid bg-gray-200 hover:bg-white focus:bg-white rounded" name="sort" id="sort">
                                <!-- <option disabled selected value> -- select color -- </option> -->
                                <option value="id">Node ID</option>
                                <option value="acol_id">Column</option>
                                <option value="parent_id">Parent</option>



                            </select><br>
                            <div class="w-fit my-auto ml-2">
                                <button class="border-2 border-gray-300 border-solid w-24 p-1 mx-auto my-auto h-full bg-gray-700 hover:bg-gray-600 text-white rounded text-sm" type="submit" id="submitSearch">Sort</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!-- <div class="flex" id="filterOpt">
                <button class="border-2 border-gray-300 border-solid w-24 p-1 m-4 h-12 bg-gray-800 hover:bg-gray-400 rounded" onclick="showFilter()" id="filterButton" style="display: block;">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                        </svg>




                        <p class="m-auto">Filter by</p>

                    </div>
                </button>
                <div class="m-4 flex border-gray-300 border-2 border-solid rounded bg-gray-800 h-12" id="filterBar" style="display: block;">
                    <div class="my-auto h-full">
                        <form action="/anodes" class="flex my-auto mx-1 h-full">

                            <select class="w-28 h-8 m-auto text-black p-1 border-2 border-gray-300 border-solid bg-gray-200 hover:bg-white focus:bg-white rounded" name="filter" id="filter" onchange="getFilter()">
                                
                                <option value="optColumn">Column</option>
                                <option value="optParent">Parent</option>
                            </select><br>

                            <select class="w-28 h-8 m-auto text-black p-1 border-2 border-gray-300 border-solid bg-gray-200 hover:bg-white focus:bg-white rounded" name="filterQ" id="filterQ">
                                
                                
                                <option value="acol_id">Column1</option>
                                <option value="parent_id">Column2</option>
                                
                            </select><br>
                            <div class="w-fit my-auto ml-2">
                                <button class="border-2 border-gray-300 border-solid w-24 p-1 mx-auto my-auto h-full bg-gray-700 hover:bg-gray-600 text-white rounded text-sm" type="submit" id="submitFilter">Filter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->


        </div>


        <div class="mx-auto" id="mainTable">

            <table class="gap-2 border-2 border-white border-solid border-spacing-2 mx-auto">
                <tr class="border-2 border-white border-solid">
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Column</th>
                    <th>Parent</th>
                    <th>Color</th>


                    <th class="w-32">Action</th>
                </tr>

                @foreach ($anodes as $anode)

                <tr class="border-2 h-2 even:bg-gray-900 odd:bg-gray-800 text-lg" id="tblRow">
                    <td class="w-12 h-2 m-auto text-center">{{$anode['id']}}</td>
                    <td class="w-32 h-2 m-auto text-left">{{$anode['name']}}</td>
                    <td class="w-20 h-2 m-auto text-center">{{$anode['acol_id']}}</td>
                    <td class="w-20 h-2 m-auto text-center">{{$anode['parent_id']}}</td>


                    <!-- <td class="w-32 h-2 m-auto justify-center">{{$anode['color']}}</td> -->

                    <td class="w-32 h-2 m-auto justify-center">
                        <div class="flex ">
                            <svg class="my-auto" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                <circle r="5" cx="11" cy="10" fill="{{$anode['color']}}" stroke="white" />
                            </svg>
                            <?php echo ucfirst("{$anode['color']}"); ?>
                        </div>
                    </td>

                    <?php
                    $idNode = $anode['id'];
                    $nameNode = $anode['name'];
                    $acolNode = $anode['acol_id'];
                    $parentNode = $anode['parent_id'];
                    $colorNode = $anode['color'];

                    $nodeData = array($idNode, $nameNode, $acolNode, $parentNode, $colorNode);
                    ?>


                    <td class="w-32 m-auto justify-center">
                        <div class="flex">
                            <button class="bg-green-700 m-2 px-2 text-sm flex rounded border-solid border border-white " onclick="showSideED('{{$idNode}}','{{$nameNode}}','{{$acolNode}}','{{$parentNode}}','{{$colorNode}}')">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>



                                <p class="m-auto">Edit</p>
                            </button>

                            <form action="/anodes/{{$anode->id}}" method="post">
                                @method('delete')
                                @csrf
                                <button class="bg-red-600 m-2 px-2 text-sm flex rounded border-solid border border-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6 m-auto">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>
                                    <p class="m-auto">Delete</p>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>






                @endforeach


            </table>

        </div>
        <div class="mx-auto text-white ">
            <div class="mx-auto my-2">
                {{$anodes->appends($_GET)->links() }}
            </div>
        </div>
    </div>



    <p class="text-yellow-200 bg-black">test</p>

    <!-- ========= SideBar ============ -->
    <div class="z-50 " id="sideBar" style="display:none;">
        <div class="fixed z-50 top-0 right-0 w-32 md:w-72 h-screen overflow-auto text-white bg-gray-800 flex flex-col border-solid border-4 border-white" id="sideBarI">

            <h1 class="mt-5 mx-auto h-fit text-xl md:text-xl font-bold">Add Node</h1>

            <div class="py-10 mx-auto my-3 w-64 mt-52 md:mt-52 border-2 border-none md:border-dashed border-white" id="detailBox">

                <div class="m-auto w-fit">

                    <form method="post" action="/anodes">
                        @csrf
                        <div class="m-2">
                            <label for="name">Nama:</label><br>
                            <input class="border-black border-solid border h-8 text-black px-1" type="text" id="name" name="name"><br>
                        </div>

                        <div class="m-2">
                            <label for="column">Column:</label><br>
                            <select onchange="this.nextElementSibling.value=this.value" class="border-black border-solid border h-8 text-black px-1 w-full" name="acol_id" id="column" onchange="setColVal()">
                                <option disabled selected value> -- select column -- </option>
                                @foreach($acols as $acol)
                                <option value="{{$acol['id']}}" id="selectColumn">
                                    <p>{{$acol['name']}}</p>
                                </option>
                                @endforeach
                            </select><br>

                        </div>

                        <div class="m-2">
                            <label for="parent">Parent:</label><br>
                            <select class="border-black border-solid border h-8 text-black px-1 w-full" name="parent_id" id="parent">
                                <option disabled selected value> -- select node -- </option>
                                @foreach($anodeall as $anode)
                                <option value="{{$anode['id']}}" id="selectParent">
                                    <p>#{{$anode['id']}}</p>
                                </option>
                                @endforeach
                            </select><br>
                        </div>

                        

                        <div class="m-2 ">
                            <label for="color">Color:</label><br>
                            <select class="border-black border-solid border h-8 text-black px-1 w-full" name="color" id="color">
                                
                                <option disabled selected value> -- select color -- </option>
                                
                                <option value="red">🔥 Red</option>
                                <option value="blue">💧 Blue </option>
                                <option value="yellow">⚡ Yellow</option>
                                <option value="gray">💿 Gray </option>
                                <option value="green">🍀 Green </option>
                                <option value="magenta">🌺 Pink </option>
                                <option value="white">🐑 White </option>
                                <option value="purple">🍇 Purple </option>
                                <option value="orange">🍊 Orange </option>
                                

                            </select><br>
                        </div>

                        <div class="w-fit mx-auto ">
                            <button class="bg-blue-400 hover:bg-blue-800 mx-auto p-2 w-24 rounded text-black" type="submit" id="submitNode">Submit</button>
                        </div>
                    </form>

                </div>

            </div>
            <button class="mt-4 mx-auto w-12 md:w-32 h-10 bg-red-300 hover:bg-red-500 rounded text-black" onclick="hideSide()">Cancel</button>

        </div>
    </div>
    <!-- ========= SideBar ============ -->



    <!-- ========= SideBar: for EDIT ============ -->
    <div class="z-50 " id="sideBarED" style="display:none;">
        <div class="fixed z-50 top-0 right-0 w-32 md:w-72 h-screen overflow-auto text-white bg-gray-800 flex flex-col border-solid border-4 border-white" id="sideBarI">

            <h1 class="mt-5 mx-auto h-fit text-xl md:text-xl font-bold">Edit Node</h1>

            <div class="py-10 mx-auto my-3 w-64 mt-52 md:mt-52 border-2 border-none md:border-dashed border-white" id="detailBox">

                <div class="m-auto w-fit">

                    <form action="/anodes" id="editForm" method="post">
                        @csrf
                        @method('put')

                        <div class="m-2">
                            <label for="name">Nama:</label><br>
                            <input class="border-black border-solid border h-8 text-black px-1" type="text" id="nameED" name="name"><br>
                        </div>

                        <div class="m-2">
                            <label for="column">Column:</label><br>
                            <select onchange="this.nextElementSibling.value=this.value" class="border-black border-solid border h-8 text-black px-1 w-full" name="acol_id" id="column">
                                <option selected id="selectedColumn">value</option>
                                <option> -- select column -- </option>
                                @foreach($acols as $acol)
                                <option value="{{$acol['id']}}">
                                    <p>{{$acol['name']}}</p>
                                </option>
                                @endforeach
                            </select><br>

                        </div>



                        <div class="m-2">
                            <label for="parent">Parent:</label><br>
                            <select class="border-black border-solid border h-8 text-black px-1 w-full" name="parent_id" id="parent">
                                <option selected id="selectedParent">value</option>
                                <option> -- select node -- </option>


                                <?php
                                $selCol=2;
                                $anodea = $anodeall->where('acol_id', $selCol);
                                ?>

                                @foreach($anodea as $anode)
                                <option value="{{$anode['id']}}">
                                    <p>#{{$anode['id']}}</p>
                                </option>
                                @endforeach

                            </select><br>
                        </div>

                        <div class="m-2 ">
                            <label for="color">Color:</label><br>
                            <select class="border-black border-solid border h-8 text-black px-1 w-full" name="color" id="color">

                                <option selected id="selectedColor"> -- select color -- </option>
                                <option value="red">🔥 Red</option>
                                <option value="blue">💧 Blue </option>
                                <option value="yellow">⚡ Yellow</option>
                                <option value="gray">💿 Gray </option>
                                <option value="green">🍀 Green </option>
                                <option value="magenta">🌺 Pink </option>
                                <option value="white">🐑 White </option>
                                <option value="purple">🍇 Purple </option>
                                <option value="orange">🍊 Orange </option>



                            </select><br>
                        </div>

                        <input type="hidden" id="idED" name="id"><br>
                        <?php
                        $anodePrt = $anodes->where('id', $anode['parent_id'])->first();
                        $parentRow = $anodePrt->arow_id;
                        $nodeRow = 1 + $parentRow;
                        ?>
                        @isset($parentRow)
                        <input type="hidden" id="arow_id" name="arow_id" value='<?php echo $nodeRow ?>'><br>
                        @endisset

                        <div class="w-fit mx-auto ">
                            <button class="bg-blue-400 hover:bg-blue-800 mx-auto p-2 w-24 rounded text-black" type="submit" id="submitNode">Submit</button>
                        </div>
                    </form>

                </div>

            </div>
            <button class="mt-4 mx-auto w-12 md:w-32 h-10 bg-red-300 hover:bg-red-500 rounded text-black" onclick="hideSideED()">Cancel</button>

        </div>
    </div>
    <!-- ========= SideBar ============ -->


</body>

</html>