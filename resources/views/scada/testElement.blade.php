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
    function showSide(name,color) {
        document.getElementById("sideBar").style.display = "block";

        var newName = name;
        document.getElementById('rectName').innerHTML = "Nama: " + newName;
        document.getElementById('sideBarI').style.borderColor= color;


    }

    function hideSide() {
        document.getElementById("sideBar").style.display = "none";
    }
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

        <div class="rounded-md border-2 border-solid border-gray-200 flex w-fit md:w-fit h-auto p-0 m-auto md:m-auto overflow-auto">

           @foreach($acols as $acol)
           <div class="border border-dotted border-green-400 p-3 m-2">
                <h1 class="text-white">Col</h1>


                @foreach($anodes as $anode)
                    
                    @if($anode->acol_id == $acol->id)
                                    @if ($anode->id == $anode->parent_id)
                                    <div class="text-whte bg-red-400 p-3 my-2 mx-auto w-fit " >
                                        <h1>{{$anode['name']}}</h1>
                                    </div>
                                    <div class="border border-yellow-500 border-solid m-2 p-2 flex" id="node{{$anode['id']}}">
                                    </div>
                                    @else
                                        <script>
                                            tarnum = "node{{$anode['parent_id']}}"
                                            
                                            divContX = `<div class="border-white border border-dashed mx-1">
                                                        <div class="text-whte bg-orange-400 p-3 my-2 mx-auto w-fit">
                                                        {{$anode['name']}}
                                                        </div>

                                                        <div class="text-whte p-1 m-1 flex" id="node{{$anode['id']}}"> 
                                                        </div>
                                                    </div>`;
                                            
                                                    
                                            divCont = ` <div class="border-white border border-dashed mx-1">
                                                        <x-block-line-v></x-block-line-v>
                                                        <x-block-rect color="{{$anode['color']}}" name="{{$anode['name']}}" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>

                                                        
                                                        <div class="text-whte p-1 m-1 flex" id="node{{$anode['id']}}"> 
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