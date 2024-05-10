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

        <div class="bg-gray-800 p-0 w-96 md:w-auto h-auto m-4 flex">
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
            
            <svg width="100" >
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








    </div>
</body>

</html>