<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<script>
    function showSide() {
        document.getElementById("sideBar").style.display = "block";
    }

    function hideSide() {
        document.getElementById("sideBar").style.display = "none";
    }
</script>

<?php 

$n3="test";



?>

<body class="flex flex-col gap-y-4">



    <div>
        <h1 class="text-3xl font-bold underline bg-blue-500 top-0 m-0 left-0">
            Hello world!asas
        </h1>
        <div>
            sasas
            <button class="w-32 bg-blue-900" onclick="showSide()">Show</button>
        </div>

        <!-- ========= SideBar ============ -->
        <div class="" id="sideBar" style="display:none">
            <div class="fixed top-0 left-0 w-32 h-screen text-white bg-green-800">Ueeey
                <button class="w-32 bg-red-800" onclick="hideSide()">Hide</button>

            </div>
        </div>
        <!-- ========= SideBar ============ -->

        
        

        <x-rect-test color="orange" :name="$n3"></x-rect-test>


    </div>

    <div>
            <h1>Test Phase Cable</h1>

            <x-block-cable-three></x-block-cable-three>
        </div>

</body>

</html>