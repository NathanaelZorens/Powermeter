<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<?php

$n1 = "Unit No 1";
$n2 = "Unit No 2";
$n3 = "Unit No 3";

$d1 = "A";
$d2 = "B";
$d3 = "C";



?>

<script>
    


    function addBlock() {
        // var code = '<p class="h-4 w-fit p-4 bg-blue-300">TEST<p/>';
        // document.getElementById("myId").innerHTML = code;
        tarnum = document.getElementById("target").value;

        document.getElementById(`slot${tarnum}`).innerHTML = `
        <x-block-line-v></x-block-line-v>` +
        `<h1 class="text-white">${tarnum}</h1>
        <x-block-rect color="white" name="Utama" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>
        `

        ;

    }

    function changeColor(color) {
        const list = document.getElementById("test2").classList;
        list.remove("bg-blue-600");
        //list.add("bg-red-600");
        list.add(`bg-${color}-600`); //PENTING!!, Referensi cara naruh variabel utk dimasukkin ke attribute/class
    }


    // document.getElementById("jumlah").onclick = function() {
    //     num=document.getElementById("jumlah").value
    //     alert(num);
    //     //myFunction()
    // };

    function myFunction() {
        num = document.getElementById("jumlah").value
        //document.getElementById("demo").innerHTML = num;
        const list = document.getElementById("demo").classList;

        list.remove(list.item(5));
        list.add(`grid-cols-${num}`);
        //alert(list.item(5)) 



    }
</script>
</script>


<body class="flex flex-col gap-y-4 bg-black p-4 ">
    <h1 class="text-3xl font-bold underline text-white ">
        Test App
    </h1>

    <div class="border-2 border-solid border-white p-2 ">




        <!-- test Event Listener -->

        <label class="text-white" for="jumlah">banyak grid:</label>
        <select class="w-fit" name="jumlah" id="jumlah">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>

        </select>
        <button class="w-fit bg-white text-black p-2" onclick="myFunction()">enter</button>

        <label class="text-white" for="target">target:</label>
        <input type="text" id="target">
        <button class="w-fit bg-white text-black p-2" onclick="addBlock()">enter</button>

        <div id="demo" class="w-fit text-black bg-gray-800 p-3 grid grid-cols-5">
            <!-- test Event Listener -->
            <div id="slot1" class="p-2 m-2 bg-red-600">01</div>
            <div id="slot2" class="p-2 m-2 bg-gray-600">02</div>
            <div id="slot3" class="p-2 m-2 bg-blue-600">03</div>
            <div id="slot4" class="p-2 m-2 bg-green-500">04</div>
            <div id="slot5" class="p-2 m-2 bg-pink-500">05</div>

            <div id="slot6" class="p-2 m-2 bg-orange-300">06</div>
            <div id="slot7" class="p-2 m-2 bg-sky-300">07</div>
            <div id="slot8" class="p-2 m-2 bg-gray-400">08</div>
            <div id="slot9" class="p-2 m-2 bg-purple-600">09</div>
            <div id="slot10" class="p-2 m-2 bg-gray-200">10</div>




        </div>


    </div>




    <div class="border-2 border-solid border-white p-2 ">
        <button class="text-white w-fit bg-yellow-700 p-2" onclick="addBlock()">Add</button>

        <div id="myId" class="text-white">
            test
        </div>
    </div>


    <div class="border-2 border-solid border-white p-2">
        <button class="w-fit bg-yellow-200 text-black p-2" onclick="changeColor('red')">Change</button>

        <div id="test2" class="w-fit text-white bg-blue-600">
            test Class List
        </div>
    </div>


    <div class="border-2 border-solid border-white p-2">
        <!-- <button class="w-fit bg-yellow-200 text-black p-2" onclick="changeColor('red')">Change</button> -->

        <div id="test2" class="w-fit text-white bg-orange-500">
            test JSON
        </div>

        <div>
            <!-- <script>
                fetch('./scada/employees.json')
                    .then(res => res.json())
                    .then(data => {
                        console.log(data);
                    });
            </script> -->

            <div class="emp"></div>

        </div>


    </div>



    <div class="border-2 border-solid border-white p-2">
        <!-- <button class="w-fit bg-yellow-200 text-black p-2" onclick="changeColor('red')">Change</button> -->

        <div id="test2" class="w-fit text-white bg-orange-500">
            test Eloquent
        </div>


        <div class=" mx-2 ">



            <x-block-rect color="white" name="Master" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>
            <x-block-line-v></x-block-line-v>

        </div>
        
        <div class="rounded-md border-2 border-dashed border-gray-200 flex w-fit md:w-fit h-auto p-0 m-auto md:m-auto overflow-auto">


            

            @foreach ($acols as $acol)

            <div class="block">
                @foreach ($anodes as $anode)
                @if( $anode->acol_id == $acol->id)
                <!-- <div class="bg-white">
                <p class="text-black">{{$anode['name']}}</p>
             </div> -->

                <div class="mx-2">


                    <x-block-line-v></x-block-line-v>

                    <x-block-rect color="{{$anode['color']}}" name="{{$anode['name']}}" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>


                </div>
                @endif
                @endforeach
            </div>
            @endforeach
            
        </div>


    </div>



    <div class="rounded-md border-2 border-solid border-gray-200 grid grid-cols-9 w-fit md:w-fit h-auto gap-2 p-5 m-auto md:m-auto overflow-auto">

        <x-block-blank></x-block-blank>
        <x-block-blank></x-block-blank>
        <x-block-blank></x-block-blank>
        <x-block-blank></x-block-blank>
        <x-block-rect color="white" name="Utama" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>
        <x-block-blank></x-block-blank>
        <x-block-blank></x-block-blank>
        <x-block-blank></x-block-blank>
        <x-block-blank></x-block-blank>

        <x-block-blank></x-block-blank>
        <x-block-blank></x-block-blank>
        <x-block-blank></x-block-blank>
        <x-block-blank></x-block-blank>
        <x-block-line-v></x-block-line-v>
        <x-block-blank></x-block-blank>
        <x-block-blank></x-block-blank>
        <x-block-blank></x-block-blank>
        <x-block-blank></x-block-blank>


        <x-block-rect color="red" name="1" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>
        <x-block-line-h></x-block-line-h>
        <x-block-rect color="blue" name="2" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>
        <x-block-line-h></x-block-line-h>

        <x-block-rect color="magenta" name="3" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>
        <x-block-line-h></x-block-line-h>

        <x-block-rect color="gray" name="4" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>
        <x-block-line-h></x-block-line-h>

        <x-block-rect color="orange" name="5" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>



    </div>

    <div class="rounded-md border-2 border-solid border-gray-200 grid grid-cols-9 w-fit md:w-fit h-auto gap-2 p-5 m-auto md:m-auto overflow-auto">

        <x-rect-test color="red" name="Master"></x-rect-test>

        <x-rect-test color="blue" name="B"></x-rect-test>




    </div>
</body>

</html>