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

        document.getElementById(`slot${tarnum}`).innerHTML = `<x-block-line-v></x-block-line-v>`;

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

            @foreach ($arows as $arow)

            <script>
                console.log("Row detected");
            </script>
            @endforeach


            @foreach ($acols as $acol)

            <div class="block w-fit">
                @foreach ($anodes as $anode)
                @if( $anode->acol_id == $acol->id)
                <!-- <div class="bg-white">
                <p class="text-black">{{$anode['name']}}</p>
             </div> -->


                <div class="mx-2">


                    <x-block-line-v></x-block-line-v>

                    <x-block-rect color="{{$anode['color']}}" name="{{$anode['name']}}" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>

                    <?php
                    $Nname = $anode['name']
                    ?>

                    <script>
                        console.log("{{$anode['name']}}" + ' is printed'); //<== cara reference php variable ke script
                    </script>  

                </div>
                
                <div class="flex bg-white">
                @foreach($anodesx as $anodex)
                @if($anodex->parent_id == $anode->id)
                <script>
                    console.log("{{$anodex['name']}}" + ' detected - child of ' + "{{$anode['name']}}");
                </script>

                
                    <div class="mx-2">

                        
                        <x-block-line-v></x-block-line-v>

                        <x-block-rect color="{{$anodex['color']}}" name="{{$anodex['name']}}" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>
                        

                        <?php
                        $Nname = $anode['name']
                        ?>

                        <script>
                            console.log("{{$anodex['name']}}" + ' is printed'); //<== cara reference php variable ke script
                        </script>

                    </div>
                
                @endif
                @endforeach
                </div>

                @endif
                @endforeach
            </div>
            @endforeach
            
        </div>


    </div>




</body>

</html>