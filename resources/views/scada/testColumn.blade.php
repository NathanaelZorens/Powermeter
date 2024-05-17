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
            <div class="m-0 p-0 bg-gray-200 w-48 h-fit">
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

                
            </div>
            <!-- ========================================= -->

            <svg width="192" height="100" class="bg-white">
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
            <svg class="" height="100" width="192">
                    <line x1="100" y1="0" x2="100" y2="100" style="stroke:blue;stroke-width:2" />
                </svg>
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


        <div class="bg-green-700 grid grid-cols-5 w-fit md:w-fit h-auto gap-1 p-1 m-4">
            <!-- ================Rectangle=========== -->
            <div class="w-fit h-fit m-0 bg-white">
                <div class="absolute">
                    <h4 class="text-white text-lg font-bold">Rect 1</h4>
                    <p>Rect 1</p>

                    <svg height="20" width="80" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="10,1 15,19 5,19" style="fill:lime;stroke:purple;stroke-width:3" />
                    </svg>

                </div>

                <svg class="bg-white" height="100" width="192" viewBox="0 0 192 100" xmlns="http://www.w3.org/2000/svg">
                    <rect width="<?php echo $wid ?>" height="<?php echo $hei ?>" fill="purple">
                </svg>
            </div>
            <!-- ================Rectangle=========== -->

            <!-- ================HorizLine============== -->
            <div class="w-fit h-fit m-0">
                <svg width="192" height="100">
                    <line x1="0" y1="50" x2="200" y2="50" style="stroke:blue;stroke-width:2" />
                </svg>
            </div>
            <!-- ================HorizLine============== -->

            <!-- ================Rectangle=========== -->
            <div>
                <div class="absolute">
                    <h4 class="text-white text-lg font-bold">Rect 1</h4>
                    <p>Rect 1</p>

                    <svg height="20" width="80" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="10,1 15,19 5,19" style="fill:lime;stroke:purple;stroke-width:3" />
                    </svg>

                </div>

                <svg class="bg-white" height="100" width="192" viewBox="0 0 192 100" xmlns="http://www.w3.org/2000/svg">
                    <rect width="<?php echo $wid ?>" height="<?php echo $hei ?>" fill="purple">
                </svg>
            </div>
            <!-- ================Rectangle=========== -->


            <!-- ================HorizLine============== -->
            <svg width="192" height="100">
                <line x1="0" y1="50" x2="200" y2="50" style="stroke:blue;stroke-width:2" />
            </svg>
            <!-- ================HorizLine============== -->



            <!-- ================Rectangle=========== -->
            <div>
                <div class="absolute">
                    <h4 class="text-white text-lg font-bold">Rect 1</h4>
                    <p>Rect 1</p>

                    <svg height="20" width="80" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="10,1 15,19 5,19" style="fill:lime;stroke:purple;stroke-width:3" />
                    </svg>

                </div>

                <svg class="bg-white" height="100" width="192" viewBox="0 0 192 100" xmlns="http://www.w3.org/2000/svg">
                    <rect width="<?php echo $wid ?>" height="<?php echo $hei ?>" fill="purple">
                </svg>
            </div>
            <!-- ================Rectangle=========== -->


            <!-- ================VerticLine============== -->
            <div>
                <svg class="" width="192" height="100">
                    <line x1="100" y1="0" x2="100" y2="100" style="stroke:blue;stroke-width:2" />
                </svg>
            </div>
            <!-- ================VerticLine============== -->

            <!-- ================BlankSpace============== -->

            <div>
                <svg class="" width="192" height="100">
                     <rect width="<?php echo $wid ?>" height="<?php echo $hei ?>" fill="none">

                </svg>
            </div>

            <!-- ================BlankSpace============== -->
            
            <!-- ================VerticLine============== -->
            <div>
                <svg class="" width="192" height="100">
                    <line x1="100" y1="0" x2="100" y2="100" style="stroke:blue;stroke-width:2" />
                </svg>
            </div>
            <!-- ================VerticLine============== -->


            <!-- ================BlankSpace============== -->

            <div>
                <svg class="" width="192" height="100">
                     <rect width="<?php echo $wid ?>" height="<?php echo $hei ?>" fill="none">

                </svg>
            </div>

            <!-- ================BlankSpace============== -->


            <!-- ================BlankSpace============== -->

            <div>
                <svg class="" width="192" height="100">
                     <rect width="<?php echo $wid ?>" height="<?php echo $hei ?>" fill="none">

                </svg>
            </div>

            <!-- ================BlankSpace============== -->

            <!-- ================Rectangle=========== -->
            <div>
                <div class="absolute">
                    <h4 class="text-white text-lg font-bold">Rect 1</h4>
                    <p>Rect 1</p>

                    <svg height="20" width="80" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="10,1 15,19 5,19" style="fill:lime;stroke:purple;stroke-width:3" />
                    </svg>

                </div>

                <svg class="bg-white" height="100" width="192" viewBox="0 0 192 100" xmlns="http://www.w3.org/2000/svg">
                    <rect width="<?php echo $wid ?>" height="<?php echo $hei ?>" fill="purple">
                </svg>
            </div>
            <!-- ================Rectangle=========== -->


             <!-- ================HorizLine============== -->
             <svg width="192" height="100">
                <line x1="0" y1="50" x2="200" y2="50" style="stroke:blue;stroke-width:2" />
            </svg>
            <!-- ================HorizLine============== -->

            <!-- ================Rectangle=========== -->
            <div>
                <div class="absolute">
                    <h4 class="text-white text-lg font-bold">Rect 1</h4>
                    <p>Rect 1</p>

                    <svg height="20" width="80" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="10,1 15,19 5,19" style="fill:lime;stroke:purple;stroke-width:3" />
                    </svg>

                </div>

                <svg class="bg-white" height="100" width="192" viewBox="0 0 192 100" xmlns="http://www.w3.org/2000/svg">
                    <rect width="<?php echo $wid ?>" height="<?php echo $hei ?>" fill="purple">
                </svg>
            </div>
            <!-- ================Rectangle=========== -->


                        <!-- ================XJointLine============== -->
                        <div class="">
                <svg class="" width="192" height="100">
                    <circle cx="96" cy="50" r="10" fill="none" stroke="yellow" stroke-width="2"/>
                    <line x1="96" y1="0" x2="96" y2="100" style="stroke:red;stroke-width:2" />
                    <line x1="0" y1="50" x2="192" y2="50" style="stroke:blue;stroke-width:2" />

                </svg>
            </div>
            <!-- ================XJointLine============== -->

            <!-- ================TJointLine============== -->
            
            <div class="bg-white">
                <!-- lr u/d -->
                <svg class="" width="192" height="100" transform="rotate(180)">
                    <circle cx="96" cy="50" r="10" fill="none" stroke="green" stroke-width="2"/>
                    <line x1="96" y1="50" x2="96" y2="100" style="stroke:red;stroke-width:2" />
                    <line x1="0" y1="50" x2="192" y2="50" style="stroke:blue;stroke-width:2" />
                </svg>

                <!-- ud l/r -->
                <svg class="" width="192" height="100" transform="rotate(180)">
                    <circle cx="96" cy="50" r="10" fill="none" stroke="green" stroke-width="2"/>
                    <line x1="96" y1="0" x2="96" y2="100" style="stroke:red;stroke-width:2" />
                    <line x1="96" y1="50" x2="192" y2="50" style="stroke:blue;stroke-width:2" />
                </svg>
                
            </div>
            <!-- ================TJointLine============== -->

            <!-- ================LJointLine============== -->
            <div class="bg-white">
                <svg class="" width="192" height="100">
                    <circle cx="96" cy="50" r="10" fill="none" stroke="purple" stroke-width="2"/>
                    <line x1="96" y1="0" x2="96" y2="50" style="stroke:red;stroke-width:2" />
                    <line x1="96" y1="50" x2="192" y2="50" style="stroke:blue;stroke-width:2" />

                </svg>
            </div>
            <!-- ================LJointLine============== -->


        </div>





    </div>
</body>

</html>