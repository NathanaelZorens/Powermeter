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

    function showSide(name, color) {
        document.getElementById("sideBar").style.display = "block";

        //var newName = name;
        //document.getElementById('rectName').innerHTML = "Nama: " + newName;
        //document.getElementById('sideBarI').style.borderColor = color;


    }

    function hideSide() {
        document.getElementById("sideBar").style.display = "none";
    }

    function myFunc(name) {
        //name="Oi"

        alert(name)
    }
</script>



<body class="flex flex-col gap-y-4 text-white bg-black">
    <h1 class="text-3xl font-bold underline bg-red-500 ">
        Node List
    </h1>

    <!-- <a class="w-fit p-1 m-4 bg-blue-300" href="/nodes/create">Add</a> -->
    <button class="border-2 border-gray-300 border-solid w-24 p-1 m-4 bg-gray-800 hover:bg-gray-400" onclick="showSide()">Add</button>




    <div>

        <table class="gap-2 border-2 border-white border-solid border-spacing-2">
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



                <td class="w-32 m-auto justify-center">Xxx</td>
            </tr>






            @endforeach


        </table>

    </div>



    <p class="text-yellow-200 bg-black">test</p>

    <!-- ========= SideBar ============ -->
    <div class="z-50 " id="sideBar" style="display:block;">
        <div class="fixed z-50 top-0 right-0 w-32 md:w-72 h-screen overflow-auto text-white bg-gray-800 flex flex-col border-solid border-4 border-white" id="sideBarI">

            <h1 class="mt-5 mx-auto h-fit text-xl md:text-xl font-bold">Add Node</h1>

            <div class="py-10 mx-auto my-3 w-64 mt-52 md:mt-52 border-2 border-none md:border-dashed border-white" id="detailBox">

                <div class="m-auto w-fit">

                    <form method="post" action="/nodes">
                        @csrf
                        <div class="m-2">
                            <label for="name">Nama:</label><br>
                            <input class="border-black border-solid border h-8 text-black px-1" type="text" id="name" name="name"><br>
                        </div>

                        <div class="m-2">
                            <label for="column">Column:</label><br>
                            <input class="border-black border-solid border h-8 text-black px-1" type="text" id="name" name="name"><br>
                        </div>

                        <div class="m-2">
                            <label for="parent">Parent:</label><br>
                            <input class="border-black border-solid border h-8 text-black px-1" type="text" id="name" name="name"><br>
                        </div>

                        <div class="m-2 ">
                            <label for="color">Color:</label><br>
                            <select class="border-black border-solid border h-8 text-black px-1 w-full" name="color" id="color">
                                <option disabled selected value> -- select color -- </option>
                                <option value="red">Red 🔥</option>
                                <option value="blue">Blue 💧</option>
                                <option value="yellow">Yellow ⚡</option>
                                <option value="gray">Gray 💿</option>
                                <option value="green">Green 🍀</option>
                                <option value="magenta">Pink 🌺</option>
                                <option value="white">White 🐑</option>
                                <option value="purple">Purple 🍇</option>
                                <option value="orange">Orange 🍊</option>


                            </select><br>
                        </div>

                        <div class="w-fit mx-auto bg-green-400">
                            <button class="bg-blue-400 hover:bg-blue-800 mx-auto p-2 w-24" type="submit" id="submitCol">Submit</button>
                        </div>
                    </form>

                </div>

            </div>
            <button class="mt-4 mx-auto w-12 md:w-32 h-10 bg-red-300 hover:bg-red-500" onclick="hideSide()">Cancel</button>

        </div>
    </div>
    <!-- ========= SideBar ============ -->

</body>

</html>