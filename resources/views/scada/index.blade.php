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

<body class="flex flex-col gap-y-4 bg-black p-4 ">
    <h1 class="text-3xl font-bold underline text-white ">
        Test App
    </h1>

    <div class="rounded-md border-2 border-solid border-gray-200 grid grid-cols-5 w-fit md:w-fit h-auto gap-0 p-5 m-auto md:m-auto overflow-auto">


        <x-block-blank></x-block-blank>
        <x-block-blank></x-block-blank>
        <x-block-rect color="orange" name="Utama" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>
        <x-block-blank></x-block-blank>
        <x-block-blank></x-block-blank>

        <x-block-blank></x-block-blank>
        <x-block-blank></x-block-blank>
        <x-block-line-v></x-block-line-v>
        <x-block-blank></x-block-blank>
        <x-block-blank></x-block-blank>




        <!-- row1 -->
        <x-block-rect color="red" :name="$n1" :desc1="$d1" :desc2="$d2" :desc3="$d3"></x-block-rect>

        <x-block-line-h></x-block-line-h>

        <x-block-rect color="blue" :name="$n2" :desc1="$d1" :desc2="$d2" :desc3="$d3"></x-block-rect>

        <x-block-line-h></x-block-line-h>

        <x-block-rect color="yellow" :name="$n3" :desc1="$d1" :desc2="$d2" :desc3="$d3"></x-block-rect>

        <!-- row2 -->
        <x-block-line-v></x-block-line-v>

        <x-block-blank></x-block-blank>

        <x-block-line-v></x-block-line-v>

        <x-block-blank></x-block-blank>

        <x-block-line-v></x-block-line-v>



        <!-- row3 -->

        <x-block-rect color="yellow" :name="$n3" :desc1="$d1" :desc2="$d2" :desc3="$d3"></x-block-rect>

        <x-block-blank></x-block-blank>

        <x-block-rect color="red" :name="$n1" :desc1="$d1" :desc2="$d2" :desc3="$d3"></x-block-rect>

        <x-block-line-h></x-block-line-h>

        <x-block-rect color="blue" :name="$n2" :desc1="$d1" :desc2="$d2" :desc3="$d3"></x-block-rect>


        <!-- row4 -->
        <x-block-line-v></x-block-line-v>

        <x-block-blank></x-block-blank>

        <x-block-line-v></x-block-line-v>

        <x-block-blank></x-block-blank>

        <x-block-line-v></x-block-line-v>

        <!-- row5 -->

        <x-block-rect color="purple" name="Unit X" desc1="xx" desc2="special" desc3="123"></x-block-rect>

        <x-block-line-h></x-block-line-h>

        <x-block-rect color="orange" :name="$n1" :desc1="$d1" :desc2="$d2" :desc3="$d3"></x-block-rect>

        <x-block-blank></x-block-blank>

        <x-block-rect color="blue" :name="$n2" :desc1="$d1" :desc2="$d2" :desc3="$d3"></x-block-rect>


    </div>
</body>

</html>