<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->

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


<body class="flex flex-col gap-y-4 bg-black text-white">
    <h1 class="text-3xl font-bold underline bg-red-500 ">
        Column List
    </h1>


    <!-- ========= SideBar ============ -->
    <div class="z-50 " id="sideBar" style="display:none;">
        <div class="fixed z-50 top-0 right-0 w-32 md:w-72 h-screen overflow-auto text-white bg-gray-800 flex flex-col border-solid border-4 border-white" id="sideBarI">

            <h1 class="mt-5 mx-auto h-fit text-xl md:text-xl font-bold">Add Column</h1>

            <div class="py-10 mx-auto my-3 w-64 mt-52 md:mt-52 border-2 border-none md:border-dashed border-white" id="detailBox">

                <div class="m-auto w-fit">

                    <form method="post" action="/columns">
                        @csrf
                        <div class="m-2">
                            <label for="name">Nama:</label><br>
                            <input class="border-black border-solid border h-8 text-black px-1" type="text" id="name" name="name"><br>
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


    <div>

        <!-- <div><a class="border-2 border-gray-300 border-solid w-24 p-1 m-4 bg-gray-800 hover:bg-gray-400" href="/columns/create">Add</a></div> -->
        <button class="border-2 border-gray-300 border-solid w-24 p-1 m-4 bg-gray-800 hover:bg-gray-400" onclick="showSide()">Add</button>


        <table class="gap-2 border-2 border-gray-300 border-solid border-spacing-2 m-2">
            <tr class="border-2 border-gray-300 border-solid">
                <th>No.</th>
                <th>Nama</th>
                <th class="w-32">Aksi</th>
            </tr>

            @foreach ($acols as $acol)
            <tr>
                <td class="w-2 m-auto justify-center p-2">{{$acol['id']}}</td>
                <td class="w-32 m-auto justify-center p-2">{{$acol['name']}}</td>
                <td class="w-32 m-auto justify-center p-2">Xxx</td>
            </tr>
            @endforeach


        </table>

    </div>



    <p class="text-yellow-200 bg-black">test</p>



    <!-- <script>
        $(document).ready(function() {
            let subCol = document.getElementById("submitCol");



            subCol.addEventListener("click", function() {
                //console.log("Test Submit");
                let name = $('#name').val();
                // console.log(name);
                $.ajax({
                    url: "/columns",
                    type: "POST",
                    headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
                    cache: false,
                    data: {

                        "name": name
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })
            })


        });
    </script> -->

</body>

</html>