@foreach($anodes->where('parent_id',$anode->id) as $anodech)
                                        <script>
                                        console.log("Node: "+"{{$anodech['name']}}");
                                        </script>

                                            @if($loop->first)
                                                <script>
                                                    tarnumCh = "{{$anodech['id']}}"

                                                    document.getElementById(`line${tarnumCh}`).innerHTML = `<x-block-line-h></x-block-line-h>`;
                                                    
                                                    console.log("first"+"{{$anodech['name']}}");

                                                    check="FIRST"

                                                </script>
                                                
                                            @elseif($loop->last)
                                                <script>
                                                    console.log("last"+"{{$anodech['name']}}");
                                                    check="LAST"
                                                </script>

                                            @else
                                                <script>
                                                    console.log("i= "+"{{$loop->iteration}}");  
                                                </script>
                                            @endif
                                        @endforeach