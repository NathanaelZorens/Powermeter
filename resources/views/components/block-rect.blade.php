<?php



$wid = 192;
$hei = 120;


$col = "$color";

$n = "$name";




?>

<!-- <script>
    //var a, b, c;

    function showSide(name,color) {
        document.getElementById("sideBar").style.display = "block";

        var newName = name;
        document.getElementById('rectName').innerHTML = "Nama: " + newName;
        document.getElementById('sideBarI').style.borderColor= color;


    }

    function hideSide() {
        document.getElementById("sideBar").style.display = "none";
    }

    function showSideED() {
    document.getElementById("sideBarED").style.display = "block";
}

    function myFunc(name) {
        //name="Oi"

        alert(name)
    }
</script> -->


<div class="">
    <!-- ========= SideBar ============ -->
    <div class="z-50" id="sideBar" style="display:none;">
        <div class="fixed z-50 top-0 right-0 w-52 md:w-72 h-screen overflow-auto text-white bg-gray-800 flex flex-col border-solid border-4 border-white" id="sideBarI">

            <h1 class="mt-5 mx-auto h-fit text-xl md:t  ext-3xl font-bold">Detail</h1>

            <div class="py-3 md:py-10 mx-auto my-3 w-full md:w-64 mt-24 md:mt-52 border-2 border-solid md:border-dashed border-white" id="detailBox">

                <div class="m-3 p-2 ">


                    <h1 class="text-xl font-bold" id="rectName">name</h1>
                    <ul>
                        <li>
                            Data 1: {{$desc1}}
                        </li>
                        <li>
                            Data 2: {{$desc2}}
                        </li>
                        <li>
                            Data 3: {{$desc3}}
                        </li>
                    </ul>
                </div>

                <div class="m-3 p-2">


                    <h1 class="text-xl font-bold" id="rectName">Action</h1>
                    <div class="flex flex-col w-32 ">
                        <div>
                            <button class="bg-green-700 m-2 px-2 text-sm w-full flex rounded border-solid border border-white" onclick="showSideED()">
                                <div class="mr-auto flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <p class="m-auto">Edit</p>

                                </div>


                            </button>
                        </div>

                        <div>
                            <form action="/anodes/{{$n}}" method="post" id="deleteBtn">
                                @method('delete')
                                @csrf
                                <input type="hidden" name="destinaton" value="dia">
                                <button class="bg-red-600 m-2 px-2 text-sm w-full flex rounded border-solid border border-white" onclick="return confirmDelete()">
                                    <div class="mr-auto flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6 m-auto">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                        </svg>
                                        <p class="m-auto">Delete</p>
                                    </div>
                                </button>
                            </form>
                        </div>

                        <div>
                            <button class="bg-indigo-600 m-2 px-2 text-sm w-full flex rounded border-solid border border-white" onclick="showSideAdd('{{$name}}')">
                                <div class="mr-auto flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-6 m-auto">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15M9 12l3 3m0 0 3-3m-3 3V2.25" />
                                    </svg>

                                    <p class="m-auto">Add Child</p>
                                </div>
                            </button>
                        </div>

                    </div>
                </div>
            </div>

            <button class="mt-4 mx-auto w-24 md:w-32 h-10 bg-red-300 hover:bg-red-500 text-black rounded" onclick="hideSide()">Hide</button>

        </div>
    </div>
    <!-- ========= SideBar ============ -->


    <!-- ========= SideBar: for EDIT ============ -->
    <div class="z-50 " id="sideBarED" style="display:none;">
        <div class="fixed z-50 top-0 right-0 w-52 md:w-72 h-screen overflow-auto text-white bg-gray-800 flex flex-col border-solid border-4 border-white" id="sideBarI">

            <h1 class="mt-5 mx-auto h-fit text-xl md:text-xl font-bold">Edit Node</h1>

            <div class="py-3 md:py-10 mx-auto my-3 w-full md:w-64 mt-24 md:mt-52 border-2 border-solid md:border-dashed border-white" id="detailBox">

                <div class="m-auto w-full md:w-fit">

                    <form action="/anodes" id="editForm" method="post">
                        @csrf
                        @method('put')

                        <div class="m-2">
                            <label for="name">Nama:</label><br>
                            <input class="border-black border-solid border h-8 text-black px-1 w-full" type="text" id="nameED" name="name" ><br>
                        </div>


                        <div class="m-2">
                            <label for="column">Column:</label><br>
                            <select onchange="this.nextElementSibling.value=this.value" class="border-black border-solid border h-8 text-black px-1 w-full" name="acol_id" id="columnED">
                                <option selected id="selectedColumn">value</option>
                                <option> -- select column -- </option>

                                <option value="x">
                                    <p>x</p>
                                </option>

                            </select><br>

                        </div>



                        <div class="m-2">
                            <label for="parent">Parent:</label><br>
                            <select class="border-black border-solid border h-8 text-black px-1 w-full" name="parent_id" id="parentED">
                                <option selected id="selectedParent">value</option>
                                <option> -- select node -- </option>


                                <option value="x">
                                    <p>#X</p>
                                </option>


                            </select><br>
                        </div>

                        <div class="m-2 ">
                            <label for="color">Color:</label><br>
                            <select class="border-black border-solid border h-8 text-black px-1 w-full" name="color" id="colorED">

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

                        <div id="rowED">
                            <input type="hidden" id="arow_id" name="arow_id" value='x'><br>
                        </div>

                        <div class="w-fit mx-auto ">
                            <button class="bg-blue-400 hover:bg-blue-800 mx-auto p-2 w-24 rounded text-black" type="submit" id="submitNode">Submit</button>
                        </div>
                    </form>

                </div>

            </div>
            <button class="mt-4 mx-auto w-24 md:w-32 h-10 bg-red-300 hover:bg-red-500 rounded text-black" onclick="hideSideED()">Cancel</button>

        </div>
    </div>
    <!-- ========= SideBar ============ -->


    <!-- ========= SideBar: for Add ============ -->
    <div class="z-50 " id="sideBarAdd" style="display:none;">
        <div class="fixed z-50 top-0 right-0 w-52 md:w-72 h-screen overflow-auto text-white bg-gray-800 flex flex-col border-solid border-4 border-white" id="sideBarI">

            <h1 class="mt-5 mx-auto h-fit text-xl md:text-xl font-bold">Add Child Node</h1>

            <div class="py-3 md:py-10 mx-auto my-3 w-full md:w-64 mt-24 md:mt-52 border-2 border-solid md:border-dashed border-white" id="detailBox">

                <div class="m-auto w-full md:w-fit">

                    <form action="/anodes" id="addForm" method="post">
                        @csrf
                        <div class="m-2">
                            <label for="name">Nama:</label><br>
                            <input class="border-black border-solid border h-8 text-black px-1 w-full" type="text" id="nameAdd" name="name"><br>
                        </div>


                        <div class="m-2">
                            <label for="column">Column:</label><br>
                            <select onchange="this.nextElementSibling.value=this.value" class="border-black border-solid border h-8 text-black px-1 w-full" name="acol_id" id="columnAdd">
                                <option selected id="selectedColumn">value</option>
                                <option> -- select column -- </option>

                                <option value="x">
                                    <p>x</p>
                                </option>

                            </select><br>

                        </div>



                        <div class="m-2">
                            <label for="parent">Parent:</label><br>
                            <select class="border-black border-solid border h-8 text-black px-1 w-full" name="parent_id" id="parentAdd">
                                <option selected id="selectedParent">value</option>
                                <option> -- select node -- </option>


                                <option value="x">
                                    <p>#X</p>
                                </option>


                            </select><br>
                        </div>

                        <div class="m-2 ">
                            <label for="color">Color:</label><br>
                            <select class="border-black border-solid border h-8 text-black px-1 w-full" name="color" id="colorAdd">

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

                        

                        <div id="rowAdd">
                            <input type="hidden" name="arow_id" value='6'><br>
                        </div>

                        <div class="w-fit mx-auto ">
                            <button class="bg-blue-400 hover:bg-blue-800 mx-auto p-2 w-24 rounded text-black" type="submit" id="submitNode">Submit</button>
                        </div>
                    </form>

                </div>

            </div>
            <button class="mt-4 mx-auto w-24 md:w-32 h-10 bg-red-300 hover:bg-red-500 rounded text-black" onclick="hideSideAdd()">Cancel</button>

        </div>
    </div>
    <!-- ========= SideBar ============ -->






    <div class="mx-auto rounded-lg w-16 overflow-clip md:w-32 h-full md:h-fit  z-0 bg-gray-400 hover:bg-gray-200" style="border-style:solid; border-width:2px; border-color:<?php echo $color ?>;">


        <div class="">

            <button class="" onclick="showSide('{{$name}}','{{$color}}')" style="display:block">
                <div class="m-2">
                    <div class="flex truncate">
                        <h4 class="text-gray-900 text-md md:text-lg font-bold mr-1">#{{$id}}</h4>

                        <svg class="justify-end" height="20" width="80" xmlns="http://www.w3.org/2000/svg">
                            <polygon points="10,7 15,19 5,19" style="fill: <?php echo $col ?> ;stroke:black;stroke-width:2" />
                        </svg>
                    </div>

                    <div class="hidden md:flex" style="color:black">
                        <p class="h-fit text-sm">Name: {{$name}}</p>


                    </div>

                </div>
            </button>



        </div>

        <!-- <svg height="120" width="200" viewBox="0 0 200 120" xmlns="http://www.w3.org/2000/svg">
        <rect width="200" height="120" rx="6" fill="rgb(229 231 235)">
    </svg> -->


    </div>

</div>

<!-- border komponen keseluruhan (div) sama border rect-nya svg biar pas pakai nilai yang sama atau selisih 2 (yang svg lebih kecil)  -->