<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<?php

$n1 = "Unit No 1";
$n2 = "Unit No 2";
$n3 = "Unit No 3";

$d1 = "A";
$d2 = "B";
$d3 = "C";

?>

<script>
    function addBlock() {
        // var code = '<p class="h-4 w-fit p-4 bg-blue-300">TEST<p/>';
        // document.getElementById("myId").innerHTML = code;
        tarnum = document.getElementById("target").value;

        document.getElementById(`slot${tarnum}`).innerHTML = `<x-block-line-v></x-block-line-v>`;

    }

    function changeColor(color) {
        const list = document.getElementById("test2").classList;
        list.remove("bg-blue-600");
        //list.add("bg-red-600");
        list.add(`bg-${color}-600`); //PENTING!!, Referensi cara naruh variabel utk dimasukkin ke attribute/class
    }


    // document.getElementById("jumlah").onclick = function() {
    //     num=document.getElementById("jumlah").value
    //     alert(num);
    //     //myFunction()
    // };

    function myFunction() {
        num = document.getElementById("jumlah").value
        //document.getElementById("demo").innerHTML = num;
        const list = document.getElementById("demo").classList;

        list.remove(list.item(5));
        list.add(`grid-cols-${num}`);
        //alert(list.item(5)) 



    }
</script>
</script>
















<body class="flex flex-col gap-y-4 bg-black p-4 ">
    <h1 class="text-3xl font-bold underline text-white ">
        Test App
    </h1>



    







  <div class="border-2 border-solid border-white p-2 w-fit">
        <!-- <button class="w-fit bg-yellow-200 text-black p-2" onclick="changeColor('red')">Change</button> -->

        <div id="test2" class="w-fit text-white bg-orange-500">
            test branch
        </div>


        <div class=" mx-2 ">



            <x-block-rect color="white" name="Master" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>
            <x-block-line-v></x-block-line-v>

        </div>

        <div class="rounded-md border-2 border-dashed border-gray-200 flex w-fit md:w-fit h-auto p-0 m-auto md:m-auto overflow-auto">

           @foreach($acols as $acol)
           <div class="border border-dotted border-green-400 p-3 m-2">
                <h1 class="text-white">Col</h1>


                @foreach($anodes as $anode)
                    
                    @if($anode->acol_id == $acol->id)
                                    @if ($anode->id == $anode->parent_id)
                                    <div class="text-whte bg-red-400 p-3 m-2" >
                                        <h1>{{$anode['name']}}</h1>
                                    </div>
                                    <div class="border border-yellow-500 border-solid m-2 flex" id="node{{$anode['id']}}">
                                    </div>
                                    @else

                                    <script>
                                        tarnum = "node{{$anode['parent_id']}}"
                                        
                                        divCont = `<div>
                                                    <div class="text-whte bg-orange-400 p-3 m-2">
                                                    {{$anode['name']}}
                                                    </div>
                                                    <div class="text-whte p-3 m-2 flex" id="node{{$anode['id']}}"> 
                                                    </div>
                                                   </div>`;

                                        newDiv = document.createElement('div');

                                        newDiv.innerHTML = divCont;

                                        parentDiv=document.getElementById(`${tarnum}`);
                                        
                                        parentDiv.appendChild(newDiv);
                                    </script>
                                    
                                    @endif
                                    

                                
                            
                            
                            
                        
                    
                    @endif
                @endforeach
           </div>
           @endforeach
            
        </div>


    </div>





<!-- ====================================================================================== -->






    <div class="border-2 border-solid border-white p-2 w-fit">
        <!-- <button class="w-fit bg-yellow-200 text-black p-2" onclick="changeColor('red')">Change</button> -->

        <div id="test2" class="w-fit text-white bg-orange-500">
            test branch 5
        </div>


        <div class="border border-yellow-400 border-dotted m-1 block">

                <?php
                $abc=0;
                ?>

                @while($abc<'5')
                <div class="bg-blue-100 h-fit w-fit m-2">
                    
                <div class="text-orange-500">
                <?php $acold = $acols->where('id',$abc)->first(); ?>
                    @isset($acold)
                        {{$acold['name']}}            
                    @endisset    
                </div>
                   
                </div>
                 <script>
                    console.log("loop activated");
                    <?php 
                        $abc=$abc+1
                    ?>
                 </script>
                @endwhile

                </div>


        <div class=" mx-2 ">



            <x-block-rect color="white" name="Master" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>
            <x-block-line-v></x-block-line-v>

        </div>

        <div class="rounded-md border-2 border-dashed border-gray-200 flex w-fit md:w-fit h-auto p-0 m-auto md:m-auto overflow-auto">

           @foreach($acols as $acol)
           <div class="border border-dotted border-green-400 p-3 m-2">
                
                @foreach($anodes->where('acol_id',$acol->id) as $anodep)
                @if($anodep->parent_id == $anodep->id)
                                <div class="text-whte bg-blue-400 p-3 m-2">{{$anodep['name']}} the parent</div>
                @endif
                @endforeach
                <!-- =================================================== Loop for each node-->
                <?php 
                    $continue=1;
                    $count=0;
                    $countch=0;
                    $continuech=1;
                ?>
                @while($continue==1)
                    <?php 
                    $anode=$anodes->where('acol_id',$acol->id)->where('id',$count)->first();

                    $max=$anodes->count()
                    ?>

                    @isset($anode)
                        <div class="text-orange-300">
                        {{$anode['name']}}       
                        </div>     
                        @if($anode->where('parent_id',$count)->exists())
                            <div class="bg-blue-400 text-purple-700"> 
                            
                                    @while($continuech==1)
                                        <?php  
                                        $anodech=$anode->where('parent_id',$count)->where('id',$countch)->first(); 
                                        ?>
                                            @isset($anodech)
                                                <h1 class="text-lime-400">{{$anodech['name']}}</h1>
                                                
                                            @endisset
                                            <?php 
                                                    $countch=$countch+1;
                                                    $continuech=1;

                                                ?>
                                            @if($countch>$max)
                                                <?php 
                                                    $continuech=0;
                                                    $countch=0;
                                                ?>
                                            @endif
                                    @endwhile
                                
                            </div>                        
                        @endif
                    @endisset   

                    <?php 
                    $count=$count+1;
                    $continue=1
                    ?>

                    @if($count>$max)
                    <?php 
                    $continue=0
                    ?>
                    <script>
                        console.log("{{$count}}");
                    </script>
                    @endif
                @endwhile

           </div>

           <!-- ============================================================== -->
           @endforeach
            
        </div>


    </div>


<!-- ======================================================== -->






<body class="flex flex-col gap-y-4 bg-black p-4 ">
    <h1 class="text-3xl font-bold underline text-white ">
        Test App
    </h1>


    <div class="border-2 border-solid border-white p-2 w-fit">
        <!-- <button class="w-fit bg-yellow-200 text-black p-2" onclick="changeColor('red')">Change</button> -->

        <div id="test2" class="w-fit text-white bg-orange-500">
            test branch 4
        </div>


        <div class=" mx-2 ">



            <x-block-rect color="white" name="Master" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>
            <x-block-line-v></x-block-line-v>

        </div>

        <div class="rounded-md border-2 border-dashed border-gray-200 flex w-fit md:w-fit h-auto p-0 m-auto md:m-auto overflow-auto">

           @foreach($acols as $acol)
           <div class="border border-dotted border-green-400 p-3 m-2">
                
                @foreach($anodes->where('acol_id',$acol->id) as $anodep)
                @if($anodep->parent_id == $anodep->id)
                                <div class="text-whte bg-blue-400 p-3 m-2">{{$anodep['name']}} the parent</div>
                @endif
                @endforeach

                @foreach($arows as $arow)
                
                <!-- <div class="border border-yellow-400 border-dotted m-1 flex">
                </div> -->


                <!-- @foreach($anodes->where('acol_id',$acol->id)->where('parent_id','id') as $anodep)
                <div class="text-whte bg-blue-400 p-3 m-2">{{$anodep['name']}} the parent</div>
                @endforeach -->
                

                <div class="border border-yellow-400 border-dotted m-1 flex">

                @foreach($anodes->where('acol_id',$acol->id)->where('arow_id',$arow->id) as $anode)
                    @if($anode->where('parent_id',$anode->id)->exists())
                        <div class="border-white border border-dashed m-2 flex">

                        
                        @foreach($anodes->where('parent_id',$anode->id) as $anodech)
                            
                            <!-- @if($anodech->parent_id == $anodech->id)
                                <div class="text-whte bg-blue-400 p-3 m-2">{{$anode['name']}} the parent</div>
                            
                            @else -->
                            
                            <div class="text-whte bg-blue-400 p-0 m-2 w-5 h-5">{{$anodech['id']}}</div>

                            <div class="bg-orange-200">
                                <h1 class="bg-white">space</h1>
                                @foreach($anodes->where('parent_id',$anodech->id) as $anodeg)
                                    <div class="text-whte bg-red-400 p-0 m-2 w-5 h-5">{{$anodeg['id']}}</div>

                                @endforeach

                            </div>
                            

                            <!-- @endif -->
                        @endforeach
                        </div>
                        
                    @endif
                @endforeach

                </div>

                @endforeach

           </div>
           @endforeach
            
        </div>


    </div>


<!-- ======================================================== -->

    <div class="border-2 border-solid border-white p-2 w-fit">
        <!-- <button class="w-fit bg-yellow-200 text-black p-2" onclick="changeColor('red')">Change</button> -->

        <div id="test2" class="w-fit text-white bg-orange-500">
            test branch 3
        </div>


        <div class=" mx-2 ">



            <x-block-rect color="white" name="Master" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>
            <x-block-line-v></x-block-line-v>

        </div>

        <div class="rounded-md border-2 border-dashed border-gray-200 flex w-fit md:w-fit h-auto p-0 m-auto md:m-auto overflow-auto">

           @foreach($acols as $acol)
           <div class="border border-dotted border-green-400 p-3 m-2">
                
                @foreach($anodes->where('acol_id',$acol->id) as $anodep)
                @if($anodep->parent_id == $anodep->id)
                                <div class="text-whte bg-blue-400 p-3 m-2">{{$anodep['name']}} the parent</div>
                @endif
                @endforeach

                @foreach($arows as $arow)
                
                <!-- <div class="border border-yellow-400 border-dotted m-1 flex">
                </div> -->


                <!-- @foreach($anodes->where('acol_id',$acol->id)->where('parent_id','id') as $anodep)
                <div class="text-whte bg-blue-400 p-3 m-2">{{$anodep['name']}} the parent</div>
                @endforeach -->
                

                <div class="border border-yellow-400 border-dotted m-1 flex">

                @foreach($anodes->where('acol_id',$acol->id)->where('arow_id',$arow->id) as $anode)
                    @if($anode->where('parent_id',$anode->id)->exists())
                        <div class="border-white border border-dashed m-2 flex">

                        
                        @foreach($anodes->where('parent_id',$anode->id) as $anodech)
                            
                            <!-- @if($anodech->parent_id == $anodech->id)
                                <div class="text-whte bg-blue-400 p-3 m-2">{{$anode['name']}} the parent</div>
                            
                            @else -->
                            
                            <div class="text-whte bg-blue-400 p-0 m-2 w-5 h-5">{{$anodech['id']}}</div>
                            

                            <!-- @endif -->
                        @endforeach
                        </div>
                        
                    @else    
                        @continue
                    

                    @endif
                @endforeach

                </div>

                @endforeach

           </div>
           @endforeach
            
        </div>


    </div>

<!-- ============================================================================================================================================= -->

    <div class="border-2 border-solid border-white p-2">
        <!-- <button class="w-fit bg-yellow-200 text-black p-2" onclick="changeColor('red')">Change</button> -->

        <div id="test2" class="w-fit text-white bg-orange-500">
            test branch
        </div>


        <div class=" mx-2 ">



            <x-block-rect color="white" name="Master" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>
            <x-block-line-v></x-block-line-v>

        </div>

        <div class="rounded-md border-2 border-dashed border-gray-200 flex w-fit md:w-fit h-auto p-0 m-auto md:m-auto overflow-auto">

           @foreach($acols as $acol)
           <div class="border border-dotted border-green-400 p-3 m-2">
                <h1 class="text-white">Col</h1>


                @foreach($anodes as $anode)
                    
                    
                    @if($anode->acol_id == $acol->id)
                    
                    <!-- ngecek dia parent atau bukan -->
                    @if($anode->where('parent_id',$anode->id)->exists()) 

                        
                        <div class="text-whte bg-red-400 p-3 m-2">{{$anode['name']}}</div>
                        <div class="border border-yellow-500 border-solid m-2 ">
                            
                            @foreach($anodes as $anodech)

                                    @if ($anodech->id == $anodech->parent_id)
                                        @continue
                            
                                    @elseif($anodech->parent_id == $anode->id)


                                    <div class="text-whte bg-blue-400 p-3 m-2">{{$anodech['name']}} child of {{$anode['name']}}</div>
                                    


                                    @endif
                                    

                                
                            @endforeach
                            
                            </div>
                            
                        
                    @endif 
                    @endif
                @endforeach
           </div>
           @endforeach
            
        </div>


    </div>















</body>

</html>