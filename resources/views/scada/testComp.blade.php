<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<?php

$n1 = "Rect No 1";

$n2 = "Rect No 2";

$n3 = "Rect No 3";



?>

<body class="flex flex-col gap-y-4">
    <h1 class="text-3xl font-bold underline ">
        Test Comp
    </h1>

    <div class="bg-gray-200 grid grid-cols-5 w-fit md:w-fit h-auto gap-2 p-1 m-4">

        <!-- row1 -->
        <x-block-rect color="red" :name="$n1"></x-block-rect>

        <x-block-line-h></x-block-line-h>

        <x-block-rect color="blue" :name="$n2"></x-block-rect>

        <x-block-line-h></x-block-line-h>

        <x-block-rect color="yellow" :name="$n3"></x-block-rect>

        <!-- row2 -->
        <x-block-line-v></x-block-line-v>

        <x-block-blank></x-block-blank>

        <x-block-line-v></x-block-line-v>

        <x-block-blank></x-block-blank>

        <x-block-blank></x-block-blank>


        <!-- row3 -->

        <x-block-rect color="yellow" :name="$n3"></x-block-rect>

        <x-block-blank></x-block-blank>

        <x-block-rect color="red" :name="$n1"></x-block-rect>

        <x-block-line-h></x-block-line-h>

        <x-block-rect color="blue" :name="$n2"></x-block-rect>




    </div>
</body>

</html>