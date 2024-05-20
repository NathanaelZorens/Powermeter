<?php

$wid = 192;
$hei = 120;




$col = "$color";

$n = "$name";




?>

<script>
    //var a, b, c;

    function showSideT(name, color) {
        document.getElementById("sideBarT").style.display = "block";

        var newName = name;
        document.getElementById('rectName').innerHTML = newName;

        var newColor = color;
        document.getElementById("rectName").style.color = newColor;


    }

    function hideSideT() {
        document.getElementById("sideBarT").style.display = "none";
    }

    function myFunc(name) {
        //name="Oi"

        alert(name);
    }
</script>


<div>
    <!-- ========= SideBar ============ -->
    <div class="" id="sideBarT" style="display:none; z-index:0; color:black">
        <div class=" fixed top-0 right-0 w-64 h-screen text-white bg-purple-800 flex flex-col">
            <h2>Sidebar from rect test</h2>
            <button class="w-32 bg-red-800" onclick="hideSideT()">Hide</button>

            <h1 id="rectName">name</h1>

        </div>
    </div>
    <!-- ========= SideBar ============ -->

    <div class="rounded-lg w-32 overflow-clip md:w-52 z-0 bg-gray-400 hover:bg-gray-200" style="border-style:solid; border-width:2px; border-color:<?php echo $color ?>">
        <!-- showSideT('<?php echo $name ?>') -->

        
        <div>

            <button class="w-52" onclick="showSideT('<?php echo $n ?>','<?php echo $col ?>')" style="z-index: 1;">
                <div class="m-2">
                    <div class="flex truncate">
                        <h4 class="text-gray-700 text-md md:text-lg font-bold mr-1">{{$name}}</h4>
                        <svg class="justify-end" height="20" width="80" xmlns="http://www.w3.org/2000/svg">
                            <polygon points="10,1 15,19 5,19" style="fill: <?php echo $col ?> ;stroke:black;stroke-width:2" />
                        </svg>
                    </div>
                    <p class=" w-fit">{{$name}}</p>

                    <div class=" grid-cols-2 hidden md:grid" style="color:black">
                        <p class="h-fit text-sm">Data 1: </p>
                        <p class="h-fit text-sm">Data 2: </p>
                        <p class="h-fit text-sm">Data 3: </p>

                    </div>

                </div>
            </button>



        </div>

        <!-- <svg height="120" width="200" viewBox="0 0 200 120" xmlns="http://www.w3.org/2000/svg">
        <rect width="200" height="120" rx="6" fill="rgb(229 231 235)">
    </svg> -->


    </div>
    <div class="w-32 md:w-52 h-fit mx-auto md:mx-auto justify-center hover:bg-gray-400">
        <svg class="m-auto" width="200" height="100" viewBox="0 0 200 100">
            <line x1="100" y1="0" x2="100" y2="100" style="stroke:#44ff00;stroke-width:2" />
        </svg>



    </div>

</div>

<!-- border komponen keseluruhan (div) sama border rect-nya svg biar pas pakai nilai yang sama atau selisih 2 (yang svg lebih kecil)  -->