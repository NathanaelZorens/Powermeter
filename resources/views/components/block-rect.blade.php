<?php

$wid = 192;
$hei = 120;




$col = "$color";

$n = "$name"

?>

<script>
    //var a, b, c;

    function showSide(name) {
        document.getElementById("sideBar").style.display = "block";

        var newName = name;
        document.getElementById('rectName').innerHTML = "Nama: " + newName;

    }

    function hideSide() {
        document.getElementById("sideBar").style.display = "none";
    }

    function myFunc(name) {
        //name="Oi"

        alert(name)
    }
</script>


<div>
    <!-- ========= SideBar ============ -->
    <div class="z-50 " id="sideBar" style="display:none;">
        <div class=" fixed z-50 top-0 right-0 w-32 md:w-72 h-screen overflow-auto text-white bg-gray-600 flex flex-col border-solid border-4 border-white">
            <div class="mx-auto w-64">
                <div class="m-3 p-2">
                <h1 class="text-xl font-bold">Detail</h1>

                <h1 id="rectName">name</h1>
                </div>

            </div>
            <button class="mt-4 mx-auto w-12 md:w-32 h-10 bg-red-300 hover:bg-red-500" onclick="hideSide()">Hide</button>

        </div>
    </div>
    <!-- ========= SideBar ============ -->

    <div class="rounded-lg w-32 overflow-clip md:w-52 h-full md:h-fit sticky z-0 bg-gray-400 hover:bg-gray-200" style="border-style:solid; border-width:2px; border-color:<?php echo $color ?>;">


        <div class="">

            <button class="" onclick="showSide('<?php echo $name ?>')" style="">
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



        </div>

        <!-- <svg height="120" width="200" viewBox="0 0 200 120" xmlns="http://www.w3.org/2000/svg">
        <rect width="200" height="120" rx="6" fill="rgb(229 231 235)">
    </svg> -->


    </div>

</div>

<!-- border komponen keseluruhan (div) sama border rect-nya svg biar pas pakai nilai yang sama atau selisih 2 (yang svg lebih kecil)  -->