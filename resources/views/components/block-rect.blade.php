<?php

$wid = 192;
$hei = 120;




$col = "$color";



?>

<script>
    function showSide() {
        document.getElementById("sideBar").style.display = "block";
    }

    function hideSide() {
        document.getElementById("sideBar").style.display = "none";
    }
</script>




<div class="rounded-lg w-32 overflow-clip md:w-52 z-0 bg-gray-400 hover:bg-gray-200" style="border-style:solid; border-width:2px; border-color:<?php echo $color ?>">

    <div>
        <button onclick="showSide()">
            <div class="m-2">
                <div class="flex truncate">
                    <h4 class="text-gray-700 text-md md:text-lg font-bold mr-1">{{$name}}</h4>
                    <svg class="justify-end" height="20" width="80" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="10,1 15,19 5,19" style="fill: <?php echo $col ?> ;stroke:black;stroke-width:2" />
                    </svg>
                </div>
                <p class=" w-fit">{{$name}}</p>

                <div class=" grid-cols-2 hidden md:grid" style="color:black">
                    <p class="h-fit text-sm">Data 1: {{$desc1}}</p>
                    <p class="h-fit text-sm">Data 2: {{$desc2}}</p>
                    <p class="h-fit text-sm">Data 3: {{$desc3}}</p>

                </div>



            </div>
        </button>

        <!-- ========= SideBar ============ -->
        <div class="" id="sideBar" style="display:none">
            <div class="fixed top-0 right-0 w-32 h-screen text-white bg-green-800">Ueeey
                <button class="w-32 bg-red-800" onclick="hideSide()">Hide</button>
                <p class=" w-fit">{{$name}}</p>
                <p class="h-fit text-sm">Data 1: {{$desc1}}</p>
                <p class="h-fit text-sm">Data 2: {{$desc2}}</p>
                <p class="h-fit text-sm">Data 3: {{$desc3}}</p>
            </div>
        </div>
        <!-- ========= SideBar ============ -->

    </div>

    <!-- <svg height="120" width="200" viewBox="0 0 200 120" xmlns="http://www.w3.org/2000/svg">
        <rect width="200" height="120" rx="6" fill="rgb(229 231 235)">
    </svg> -->


</div>

<!-- border komponen keseluruhan (div) sama border rect-nya svg biar pas pakai nilai yang sama atau selisih 2 (yang svg lebih kecil)  -->