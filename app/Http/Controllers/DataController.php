<?php

namespace App\Http\Controllers;

use App\Models\Acol;
use App\Models\Anode;
use App\Models\Arow;
use Illuminate\Http\Request;

class DataController extends Controller
{
    //Anode List view
    public function showData(Request $request) {
        $data=$request->all();
        $anodeall=Anode::where('acol_id',$data['value'])->get();
        $outputDiv='
                                <option disabled selected value> -- select parent -- </option>
                                
                    ';
        if($anodeall->count()==0){
        $outputDiv .= '<option value="1" id="selectParent">
        <p>set as Root</p>
        </option>';
        }
        else{
        foreach($anodeall as $anode){
        $outputDiv .= '<option value="'.$anode->id.'" id="selectParent">
                                    <p>#'.$anode->id.'</p>
                                </option>';
        }
        }

        return response()->json([
            "anodeall" => $anodeall,
            "outputDiv"=> $outputDiv
        ]);
        
        //return $anodeall;
        
    }

    public function showDataED(Request $request) {
        $data=$request->all();
        $anodeall=Anode::where('acol_id',$data['value'])->get();
        
        //$oldVal=$data['oldParent'];
        $outputDiv='';

        $outputDiv='
                                <option selected value id=selectedParent>' ;
        $outputDiv .= '--select parent--'; 
        $outputDiv .='</option>
                                
                    ';


        foreach($anodeall as $anode){
        $outputDiv .= '<option value="'.$anode->id.'" id="selectParent">
                                    <p>#'.$anode->id.'</p>
                                </option>';
        }

        return response()->json([
            "anodeall" => $anodeall,
            "outputDiv"=> $outputDiv
        ]);
        
        //return $anodeall;
        
    }

    public function showDataEDFirstClick(Request $request) {  
        $data=$request->all();
        $anodeall=Anode::where('acol_id',$data['value'])->get();
        $acols=Acol::all();
        $oldVal=$data['oldParent'];
        $oldValCol=$data['value'];
        $currentNode=Anode::where('id',$data['id'])->first();
        $parent=$currentNode->parent_id;

        $outputDiv='';
        $outputDivCol='';

        
        if(Anode::where('parent_id',$data['id'])->exists()){
            $outputDiv = '
            <option selected value=';
            $outputDiv .= $oldVal;
            $outputDiv .= ' id=selectedParent>';
            $outputDiv .= $oldVal;
            $outputDiv .= '</option>';

            $outputDiv .= '<option disabled >!-cannot change if has child-!</option>';

            $outputDivCol = '
            <option selected value=';
            $outputDivCol .= $oldValCol;
            $outputDivCol .= ' id=selectedColumn>';
            $outputDivCol .= $oldValCol;
            $outputDivCol .= '</option>'; 

            $outputDivCol .= '<option disabled>!-cannot change if has child-!</option>';

        } 
        else {
            $outputDiv = '
            <option selected value=';
            $outputDiv .= $oldVal;
            $outputDiv .= ' id=selectedParent>';
            $outputDiv .= $oldVal;
            $outputDiv .= '</option>';


            foreach ($anodeall as $anode) {
                $outputDiv .= '<option value="' . $anode->id . '" id="selectParent">
                <p>#' . $anode->id . '</p>
            </option>';
            }

            $outputDivCol = '
            <option selected value=';
            $outputDivCol .= $oldValCol;
            $outputDivCol .= ' id=selectedColumn>';
            $outputDivCol .= $oldValCol;
            $outputDivCol .= '</option>';
            
            foreach ($acols as $acol) {
                $outputDivCol .= '<option value="' . $acol->id . '" id="selectColumn">
                <p>' . $acol->name . '</p>
            </option>';
            }

        }


        

        return response()->json([
            "anodeall" => $anodeall,
            "outputDiv"=> $outputDiv, 
            "outputDivCol"=> $outputDivCol, 
            "parent" => $parent
        ]);
        
        //return $anodeall;
        
    }

    public function getRow(Request $request) {
        $data=$request->all();
        $parentNode=Anode::where('id',$data['parentId'])->first();
        $currentNodeRow=($parentNode->arow_id) + 1;
        $newName="Row$currentNodeRow";
        if(Arow::where('id',$currentNodeRow)->count()<1){
            Arow::create([
                'id' => $currentNodeRow,
                'name' => $newName
            ]);
        }



        $outputDiv='<input type="hidden" name="arow_id" value='; 
        $outputDiv.=$currentNodeRow;
        $outputDiv.='><br>';

       

        return response()->json([
            
            "outputDiv"=> $outputDiv
        ]);
        
        //return $anodeall;
        
    }

    



    //Diagram View
    public function getDeleteData(Request $request) {
        $data=$request->all();
        $anodeall=Anode::where('name',$data['name'])->first();
        $nodeId=$anodeall->id;

        return response()->json([
            "nodeId"=>$nodeId
        ]);
        
        //return $anodeall;
        
    }

    public function getAddChildData(Request $request) {
        $data=$request->all();
        $anodeall=Anode::where('name',$data['name'])->first();
        $nodeId=$anodeall->id;
        $nodeCol=$anodeall->acol_id;
        $currentNodeRow=($anodeall->arow_id)+1;
        
        $outputDivCol='<option  selected value='; 
        $outputDivCol.=$nodeCol;
        $outputDivCol.=' id="selectedColumn" >';
        $outputDivCol.=$nodeCol;
        $outputDivCol.='</option>';

        $outputDivParent='<option  selected value='; 
        $outputDivParent.=$nodeId;
        $outputDivParent.=' id="selectedNode" >';
        $outputDivParent.=$nodeId;
        $outputDivParent.='</option>';

        $newName="Row$currentNodeRow";
        if(Arow::where('id',$currentNodeRow)->count()<1){
            Arow::create([
                'id' => $currentNodeRow,
                'name' => $newName
            ]);
        }

        $outputDivRow='<input type="hidden" name="arow_id" value='; 
        $outputDivRow.=$currentNodeRow;
        $outputDivRow.='><br>';




        return response()->json([
            "nodeId"=>$nodeId,
            "nodeCol"=>$nodeCol,
            "outDivPr"=>$outputDivParent,
            "outDivCol"=>$outputDivCol,
            "outDivRow"=>$outputDivRow
        ]);
        
        //return $anodeall;
        
    }


    public function getEditData(Request $request) {
        $data=$request->all();
        
        $anodeall=Anode::where('name',$data['name'])->first();
        $acols=Acol::all();
        
        $nodeId=$anodeall->id;
        $nodeName=$anodeall->name;
        $nodeClr=$anodeall->color;        
        $nodeCol=$anodeall->acol_id;
        $nodeRow=$anodeall->arow_id;
        $nodeParent=$anodeall->parent_id;

        $parentList=Anode::where('acol_id',$nodeCol)->get();

        //$currentNodeRow=($anodeall->arow_id)+1;
        if(Anode::where('parent_id',$anodeall->id)->exists()){
            $outputDivCol='<option  selected value='; 
            $outputDivCol.=$nodeCol;
            $outputDivCol.=' id="selectedColumn" >';
            $outputDivCol.=$nodeCol;
            $outputDivCol.='</option>';

            $outputDivCol .= '<option disabled >!-cannot change if has child-!</option>';


            $outputDivParent='<option  selected value='; 
            $outputDivParent.=$nodeParent;
            $outputDivParent.=' id="selectedNode" >#';
            $outputDivParent.=$nodeParent;
            $outputDivParent.='</option>';

            $outputDivParent .= '<option disabled >!-cannot change if has child-!</option>';

        }
        else{
            $outputDivCol='<option  selected value='; 
            $outputDivCol.=$nodeCol;
            $outputDivCol.=' id="selectedColumn" >';
            $outputDivCol.=$nodeCol;
            $outputDivCol.='</option>';
    
            foreach($acols as $acol){
            $outputDivCol .= '<option value="'.$acol->id.'" id="selectColumn">
                <p>'.$acol->name.'</p>
            </option>';
            }
            
    
            $outputDivParent='<option  selected value='; 
            $outputDivParent.=$nodeParent;
            $outputDivParent.=' id="selectedNode" >#';
            $outputDivParent.=$nodeParent;
            $outputDivParent.='</option>';
    
            foreach ($parentList as $anode) {
                $outputDivParent .= '<option value="' . $anode->id . '" id="selectParent">
                                            <p>#' . $anode->id . '</p>
                                        </option>';
            }
        }
       


        $outputDivRow='<input type="hidden" name="arow_id" value='; 
        $outputDivRow.=$nodeRow;
        $outputDivRow.='><br>';



        return response()->json([
            "nodeId"=>$nodeId,
            "nodeCol"=>$nodeCol,
            "nodeClr"=>$nodeClr,
            "outDivPr"=>$outputDivParent,
            "outDivCol"=>$outputDivCol,
            "outDivRow"=>$outputDivRow
        ]);
        
        //return $anodeall;
        
    }

    //Acols View
    public function getAcolDataED(Request $request){
        $data=$request->all();
        $acols=Acol::where('id',$data['id'])->first();
        $acolName=$acols->name;

        return response()->json([
            "acolName"=>$acolName,
            
        ]);
    }
}
