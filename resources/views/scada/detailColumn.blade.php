<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src='{{ asset("customjs/diagram_functions.js") }}'></script>

</head>









<body class="flex flex-col  bg-black  w-full h-full overflow-auto">

    <x-navbar-scada></x-navbar-cada>




        </div>

        <div class="border-0 border-solid border-white p-2 w-fit h-fit overflow-auto mx-auto md:flex block ">
            <!-- <button class="w-fit bg-yellow-200 text-black p-2" onclick="changeColor('red')">Change</button> -->



            <div class="rounded-md border-2 border-solid border-gray-200 block md:flex w-fit md:w-full h-fit p-0 m-auto md:my-auto md:m-3 overflow-auto">

                @foreach($acols as $acol)

                <div class="ml-2 mt-2 absolute text-gray-200 flex">
                    <button onclick="javascript:history.back()" class="m-auto hover:text-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 m-auto">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                    </button>
                    <h1 class="right-0 m-auto text-md font-bold">Column #{{$acol['id']}}</h1>
                </div>
                
                

                <div class="border-0 border-dotted border-green-400 p-3 m-auto ">
                    <!-- <h1 class="text-white">Col</h1> -->

                    @foreach($arows as $arow)


                    @foreach($anodes as $anode)

                    @if($anode->acol_id == $acol->id and $anode->arow_id == $arow->id)
                    @if ($anode->parent_id==1)
                    <br/>
                    <div class="my-0 mx-auto w-fit">
                        <x-block-rect-detail color="{{$anode['color']}}" id="{{$anode['id']}}" name="{{$anode['name']}}" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect-detail>
                        <x-block-line-v></x-block-line-v>

                    </div>
                    <div class="border border-yellow-500 border-solid my-0 mx-auto p-2 flex w-fit" id="node{{$anode['id']}}">
                    </div>
                    @else


                    <!-- connector ke bawah utk parent ================================-->
                    <?php

                    $anodeC = $anodes->where('parent_id', $anode->parent_id)->first();

                    $isParent = $anodeC->where('parent_id', $anode->id)->exists();
                    ?>
                    @isset($isParent)
                    @if($isParent==true)
                    <script>
                        downL = `<x-block-line-v></x-block-line-v>`
                    </script>
                    @else
                    <script>
                        downL = ``
                    </script>
                    @endif
                    @endisset


                    <!-- generate line/connector  ===================================================-->
                    <?php
                    $anodeFst = $anodes->where('parent_id', $anode->parent_id)->first();
                    $anodeLst = $anodes->where('parent_id', $anode->parent_id)->last();
                    //$halfAnode=0;

                    $allAnode = $anodes->where('parent_id', $anode->parent_id)->count();
                    if ($allAnode % 2 == 0) {
                        $halfAnode = ($allAnode / 2);
                    } else {
                        $halfAnode = ($allAnode + 1) / 2;
                    }
                    $halfAnode = $allAnode / 2;
                    $anodeHlf = $anodes->where('parent_id', $anode->parent_id)->skip($halfAnode)->first();

                    ?>

                    @isset($anodeFst)

                    <script>
                        console.log("main count {{$anode['id']}}");
                        console.log("result F {{$anodeFst['id']}}");
                        console.log("result L {{$anodeLst['id']}}");
                        console.log("result H {{$anodeHlf['id']}}");

                        console.log("total {{$allAnode}}");
                    </script>
                    @if($anode->id==$anodeFst->id)
                    @if($allAnode=='1')
                    <script>
                        lineXX = `<x-block-joint-ldr></x-block-joint-ldr>`
                        lineXX = `<h1 class="text-white">FIRST</h1>`
                        line = `<x-block-joint-i></x-block-joint-i>`
                    </script>
                    @else
                    <script>
                        line = `<x-block-joint-ldr></x-block-joint-ldr>`
                        lineXX = `<h1 class="text-white">FIRST</h1>`
                        lineX = `<x-block-line-h></x-block-line-h>`
                    </script>
                    @endif
                    @elseif($anode->id==$anodeLst->id)
                    <script>
                        line = `<x-block-joint-ldl></x-block-joint-ldl>`
                        //line=`Fuu`
                    </script>
                    @elseif($anode->id==$anodeHlf->id)
                    <script>
                        line = `<x-block-joint-t></x-block-joint-t>`
                        //line=`Fuu`
                    </script>
                    @else
                    <script>
                        line = `<x-block-joint-t></x-block-joint-t>`
                    </script>
                    @endif
                    @endisset

                    @if($anode->phase==1)
                    <script>
                        cabletype = `<x-block-cable-one></x-block-cable-one>`
                    </script>
                    @elseif($anode->phase==2)
                    <script>
                        cabletype = `<x-block-cable-two></x-block-cable-two>`
                    </script>
                    @else
                    <script>
                        cabletype = `<x-block-cable-three></x-block-cable-three>`
                    </script>
                    @endif


                    <!-- generate node  ==================================================-->
                    <script>
                        tarnum = "node{{$anode['parent_id']}}"


                        divCont = ` <div class="border-white border-0 border-dashed mx-0">` +
                            `<div id="line{{$anode['id']}}" class="border-green-400 border-0 border-solid w-full mx-auto">` +
                            `<div class="mx-auto border-green-400 border-0 border-solid">` +
                            line +
                            cabletype +
                            `</div>` +
                            `</div>` +

                            `<div class="m-1">
                                                        <x-block-rect-detail color="{{$anode['color']}}" id="{{$anode['id']}}" name="{{$anode['name']}}" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect-detail>
                                                        </div>

                                                        <div>` +
                            downL +
                            `</div>` +

                            `<div class="text-whte p-1 m-1 flex" id="node{{$anode['id']}}"> 
                                                        </div>
                                                    </div>`;


                        newDiv = document.createElement('div');

                        newDiv.innerHTML = divCont;

                        parentDiv = document.getElementById(`${tarnum}`);

                        parentDiv.appendChild(newDiv);

                        console.log("Node Created: " + "{{$anode['id']}}");
                    </script>






                    @endif








                    @endif
                    @endforeach

                    @endforeach
                </div>

                @endforeach





                <!-- Detail box -->
                <!-- <div class="border-solid rounded-md border-gray-600 border-2 w-fit h-full md:mx-5 m-auto md:my-auto text-white p-2">

            <div class="w-52 h-full mx-auto my-0 font-bold text-lg">
                <ul>
                    <li>A :</li>
                    <li>B :</li>

                    <li>C :</li>

                    <li>D :</li>

                    <li>E :</li>

                    <li>F :</li>

                    <li>G :</li>

                </ul>


            </div>
        </div>     -->





            </div>




















            <script src='{{ asset("customjs/diagram_functions.js") }}'></script>


</body>

</html>