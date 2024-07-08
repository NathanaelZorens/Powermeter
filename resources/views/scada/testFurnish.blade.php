<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>


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

    line=`<x-block-line-v></x-block-line-v>`
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
                                    @if ($anode->parent_id==1)
                                    <div class="my-0 mx-auto w-fit " >
                                        <x-block-rect color="{{$anode['color']}}" name="{{$anode['name']}}" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>
                                        <x-block-line-v></x-block-line-v>

                                    </div>
                                    <div class="border border-yellow-500 border-solid my-0 p-2 flex" id="node{{$anode['id']}}">
                                    </div>
                                    @else

                                        <!-- generate line/connector  ===================================================-->
                                        <?php
                                        $anodeFst=$anodes->where('parent_id',$anode->parent_id)->first();
                                        $anodeLst=$anodes->where('parent_id',$anode->parent_id)->last();
                                        //$halfAnode=0;
                                        
                                        $allAnode=$anodes->where('parent_id',$anode->parent_id)->count();
                                        if ($allAnode%2==0){
                                            $halfAnode=($allAnode/2);
                                            echo $halfAnode;
                                        }
                                        else {
                                            $halfAnode=($allAnode+1)/2;
                                            echo $halfAnode;
                                        }
                                        $halfAnode=$allAnode/2;
                                        $anodeHlf=$anodes->where('parent_id',$anode->parent_id)->skip($halfAnode)->first();

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
                                            <script>
                                                line=`<h1 class="text-white">FIRST</h1>`
                                                lineX=`<x-block-line-h></x-block-line-h>`
                                            </script>
                                        @elseif($anode->id==$anodeLst->id)
                                            <script>
                                                line=`<h1 class="text-white">LAST</h1>`
                                                //line=`Fuu`
                                            </script>
                                        @elseif($anode->id==$anodeHlf->id)
                                            <script>
                                                line=`<h1 class="text-white">MID</h1>`
                                                //line=`Fuu`
                                            </script>
                                        @else
                                        <script>
                                                line=`<x-block-line-v></x-block-line-v>`
                                            </script>
                                        @endif
                                        @endisset
                                        

                                        <!-- generate node  ==================================================-->
                                        <script>
                                            tarnum = "node{{$anode['parent_id']}}"
                                            
                                                    
                                            divCont = ` <div class="border-white  border-dashed mx-1">`+
                                                        `<div id="line{{$anode['id']}}" class="border-green-400 border-0 border-solid">`+
                                                            line+
                                                        `</div>`+
                                                        
                                                        `<x-block-rect color="{{$anode['color']}}" name="{{$anode['name']}}" desc1="aaaa" desc2="bbbb" desc3="cccc"></x-block-rect>

                                                        
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





















</body>

</html>