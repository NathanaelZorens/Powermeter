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

            
          
            <!-- Cara ngecek dia parent atau bukan -->
           @foreach($acols as $acol)
           <div class="border border-dotted border-green-400 p-3 m-2">
                <h1 class="text-white">Col</h1>

                @foreach($anodes as $anodec)
                        
                        @if($anodec->where('parent_id',$anodec->id)->exists())
                            
                        <script>
                            console.log("{{$anodec['name']}}" + " is a parent");
                        </script>

                        @else

                        <script>
                            console.log("{{$anodec['name']}}" + " is a child");
                        </script>

                        @endif
                    
                @endforeach


                @foreach($anodes as $anode)
                    @if($anode->arow_id == $arows->last()->id)
                        @continue
                    @endif

                    @if($anode->acol_id == $acol->id)

                    

                    <script>
                        console.log("===="+"{{$anode['name']}}"+"====");
                    </script>

                        @foreach($anodes as $anodex)
                                                  
                            @if($anodex->parent_id == $anode->id)
                            <script>
                                console.log("{{$anodex['name']}}");
                           </script>
                            @endif
                            
                        
                        @endforeach
                    

                    @endif
                @endforeach
           </div>
           @endforeach


            
        </div>


    </div>