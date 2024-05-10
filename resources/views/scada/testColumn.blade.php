<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<?php
$wid = 192;
$hei = 100;
$line = "s";
?>

<body class="flex flex-col gap-y-4 m-1">
    <h1 class="text-3xl font-bold">
        Test Draw with Svg
    </h1>




    <div class="m-2">

        <div class="bg-gray-800 p-0 w-fit md:w-fit h-auto m-4 grid grid-cols-3">
            <div class="m-0 p-0 bg-gray-200 w-48">
                <div class="absolute">
                    <h4 class="text-white text-lg font-bold">test</h4>
                    <p>Test Test</p>

                    <svg height="20" width="80" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="10,1 15,19 5,19" style="fill:lime;stroke:purple;stroke-width:3" />
                    </svg>

                </div>

                <svg class="bg-white" height="100" width="192" viewBox="0 0 192 100" xmlns="http://www.w3.org/2000/svg">
                    <rect width="<?php echo $wid ?>" height="<?php echo $hei ?>" fill="red">
                </svg>

                <svg class="" height="100">
                    <line x1="100" y1="0" x2="100" y2="100" style="stroke:blue;stroke-width:2" />
                </svg>
            </div>
            <!-- ========================================= -->

            <svg width="192">
                <line x1="0" y1="50" x2="200" y2="50" style="stroke:blue;stroke-width:2" />
            </svg>

            <div>
                <div class="absolute">
                    <h4 class="text-white text-lg font-bold">test</h4>
                    <p>Test Test</p>

                    <svg height="20" width="80" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="10,1 15,19 5,19" style="fill:lime;stroke:purple;stroke-width:3" />
                    </svg>

                </div>

                <svg height="100" width="200" xmlns="http://www.w3.org/2000/svg">
                    <rect width="<?php echo $wid ?>" height="<?php echo $hei ?>" fill="red">
                </svg>


            </div>
        </div>

        <p> <?php echo $wid, " ", $hei; ?> </p>

        <?php echo $line ?>

        <div class="bg-blue-900 grid grid-cols-5 w-fit gap-2 p-2">
            <div class="w-5 h-5 bg-yellow-400 font-bold text-black text-center">A</div>
            <div class="w-5 h-5 bg-yellow-400 font-bold text-black text-center">B</div>
            <div class="w-5 h-5 bg-yellow-400 font-bold text-black text-center">C</div>
            <div class="w-5 h-5 bg-yellow-400 font-bold text-black text-center">D</div>
            <div class="w-5 h-5 bg-yellow-400 font-bold text-black text-center">E</div>

            <div class="w-5 h-5 bg-yellow-400 font-bold text-black text-center">F</div>
            <div class="w-5 h-5 bg-yellow-400 font-bold text-black text-center">G</div>
            <div class="w-5 h-5 bg-yellow-400 font-bold text-black text-center">H</div>
            <div class="w-5 h-5 bg-yellow-400 font-bold text-black text-center">I</div>
            <div class="w-5 h-5 bg-yellow-400 font-bold text-black text-center">J</div>

        </div>








    </div>
</body>

</html>