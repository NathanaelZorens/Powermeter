<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src='{{ asset("customjs/diagram_functions.js") }}'></script>

</head>









<body class="flex flex-col  bg-black  w-fit h-full overflow-auto">

    <x-navbar-scada></x-navbar-cada>

        <div class="border-0 border-solid border-white p-2 w-fit overflow-auto m-5">
            <!-- <button class="w-fit bg-yellow-200 text-black p-2" onclick="changeColor('red')">Change</button> -->


            <div class=" mx-2 my-4 ">




            </div>

            <div class="rounded-md border-2 border-solid border-gray-200 block md:flex w-fit md:w-fit h-auto p-0 m-auto md:m-auto overflow-auto">

                @foreach($acols as $acol)
                <div class="border-0 border-dotted border-green-400 p-3 m-2">
                    <!-- <h1 class="text-white">Col</h1> -->

                    @foreach($arows as $arow)


                    @foreach($anodes as $anode)

                    @if($anode->acol_id == $acol->id and $anode->arow_id == $arow->id)
                    @if ($anode->parent_id==1)
                    <div class="my-0 mx-auto w-fit">
                        <x-block-rect color="{{$anode['color']}}" id="{{$anode['id']}}" name="{{$anode['name']}}" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>
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
                            cabletype+
                            `</div>` +
                            `</div>` +

                            `<div class="m-1">
                                                        <x-block-rect color="{{$anode['color']}}" id="{{$anode['id']}}" name="{{$anode['name']}}" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>
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


                    <div class="w-fit h-6 border-solid border-0 bg-yellow-500 text-gray-800 hover:bg-yellow-300 hover:text-orange-800 rounded-b-lg">
                        <a href="{{ route('det',[ 'detail' => $acol->id ]) }}">
                            <div class="m-auto flex px-1 font-medium">

                                <h1 class=" mr-2">See details...</h1>


                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 m-auto">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                </svg>



                            </div>
                        </a>
                    </div>
                </div>



                @endforeach

            </div>



        </div>







        <!-- <div class="z-50 fixed" id="sideBarX" style="display:none;">
        <div class="fixed z-50 top-0 right-0 w-32 md:w-72 h-screen overflow-auto text-white bg-gray-800 flex flex-col border-solid border-4 border-white" id="sideBarI">
            
            <h1 class="mt-5 mx-auto h-fit text-xl md:text-3xl font-bold">Detail</h1>

            <div class="py-10 mx-auto my-3 w-64 mt-52 md:mt-52 border-2 border-none md:border-dashed border-white" id="detailBox">

                <div class="m-3 p-2">


                    <h1 class="text-xl font-bold" id="rectName">name</h1>
                    <ul>
                        <li>
                            Data 1: aa
                        </li>
                        <li>
                            Data 2: aa
                        </li>
                        <li>
                            Data 3: aa
                        </li>
                    </ul>
                </div>

            </div>
            <button class="mt-4 mx-auto w-12 md:w-32 h-10 bg-red-300 hover:bg-red-500" onclick="hideSide()">Hide</button>

        </div>
    </div> -->











        <script src='{{ asset("customjs/diagram_functions.js") }}'></script>


</body>

</html>