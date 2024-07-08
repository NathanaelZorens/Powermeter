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


$d1 = "A";
$d2 = "B";
$d3 = "C";



?>

<body class="flex flex-col gap-y-4">
    <h1 class="text-3xl font-bold underline ">
        Test Comp
    </h1>

    <div class="bg-gray-800 grid grid-cols-5 w-fit md:w-fit h-auto gap-1 p-1 m-4">

        <!-- row1 -->
        <x-block-rect colorText="white" color="red" :name="$n1" :desc1="$d1" :desc2="$d2" :desc3="$d3"></x-block-rect>

        <x-block-line-h></x-block-line-h>

        <x-block-rect colorText="white" color="blue" :name="$n2" :desc1="$d1" :desc2="$d2" :desc3="$d3"></x-block-rect>

        <x-block-line-h></x-block-line-h>

        <x-block-rect colorText="black" color="yellow" :name="$n3" :desc1="$d1" :desc2="$d2" :desc3="$d3"></x-block-rect>

        <!-- row2 -->
        <x-block-line-v></x-block-line-v>

        <x-block-blank></x-block-blank>

        <x-block-line-v></x-block-line-v>

        <x-block-blank></x-block-blank>

        <x-block-blank></x-block-blank>


        <!-- row3 -->

        <x-block-rect colorText="black" color="yellow" :name="$n3" :desc1="$d1" :desc2="$d2" :desc3="$d3"></x-block-rect>

        <x-block-blank></x-block-blank>

        <x-block-rect colorText="white" color="red" :name="$n1" :desc1="$d1" :desc2="$d2" :desc3="$d3"></x-block-rect>

        <x-block-line-h></x-block-line-h>

        <x-block-rect colorText="white" color="blue" :name="$n2" :desc1="$d1" :desc2="$d2" :desc3="$d3"></x-block-rect>


        <x-block-blank></x-block-blank>
        <x-block-blank></x-block-blank>
        <x-block-line-v></x-block-line-v>
        <x-block-blank></x-block-blank>
        <x-block-blank></x-block-blank>


        <x-block-blank></x-block-blank>
        <x-block-rect colorText="black" color="yellow" :name="$n3" :desc1="$d1" :desc2="$d2" :desc3="$d3"></x-block-rect>
        <x-block-joint-x></x-block-joint-x>
        <x-block-rect colorText="black" color="yellow" :name="$n3" :desc1="$d1" :desc2="$d2" :desc3="$d3"></x-block-rect>
        <x-block-joint-ldl></x-block-joint-ldl>




    </div>

    <div class="m-3">
        <svg class="bg-blue-600"  width="350" height="250" viewBox="0 0 350 250" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <marker id="circle" markerWidth="100" markerHeight="100" refX="0" refY="0" >
            <circle cx="0" cy="0" r="3" fill="black" />
            </marker>
            <marker id="arrow" markerWidth="10" markerHeight="10" refX="5" refY="5" orient="auto">
            <path d="M 0 0 L 10 5 L 0 10 z" fill="black" />
            </marker>
        </defs>
        <line x1="50" y1="100" x2="300" y2="200" stroke="red" stroke-width="3" marker-start="url(#circle)" marker-end="url(#arrow)" />
        
        </svg>

    </div>

</body>

</html>