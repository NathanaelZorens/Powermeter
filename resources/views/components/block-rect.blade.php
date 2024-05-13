<?php

$wid = 192;
$hei = 120;




$col = "$color";



?>

<script>
function myFunction() {
    alert("clicked!");
}
</script>

<div class="rounded-lg " style="border-style:solid; border-width:2px; border-color:<?php echo $color ?>">
    <div >
        <button class="absolute z-40 opacity-0 hover:opacity-100" onclick="myFunction()">
        <svg height="120" width="200" viewBox="0 0 200 120" xmlns="http://www.w3.org/2000/svg">
            <rect width="200" height="120" rx="6" fill="white" fill-opacity="0.8">
        </svg>
        </button>
    </div>

    <div>
        <div class="absolute m-2">
            <div class="flex">
                <h4 class="text-gray-700 text-lg font-bold mr-1">{{$name}}</h4>
                <svg height="20" width="80" xmlns="http://www.w3.org/2000/svg">
                    <polygon points="10,1 15,19 5,19" style="fill: <?php echo $col ?> ;stroke:black;stroke-width:2" />
                </svg>
            </div>
            <p>{{$name}}</p>

            <div class="grid grid-cols-2" style="color:black">
                <p class="h-fit text-sm">Data 1: {{$desc1}}</p>
                <p class="h-fit text-sm">Data 2: {{$desc2}}</p>
                <p class="h-fit text-sm">Data 3: {{$desc3}}</p>

            </div>



        </div>
    </div>

    <svg height="120" width="200" viewBox="0 0 200 120" xmlns="http://www.w3.org/2000/svg">
        <rect width="200" height="120" rx="6" fill="rgb(229 231 235)">
    </svg>


</div>

<!-- border komponen keseluruhan (div) sama border rect-nya svg biar pas pakai nilai yang sama atau selisih 2 (yang svg lebih kecil)  -->