<?php

namespace App\Http\Controllers;

use App\Models\Acol;
use App\Models\Anode;
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
        $oldVal=$data['oldParent'];
        $currentNode=Anode::where('id',$data['id'])->first();
        $parent=$currentNode->parent_id;
        $outputDiv='';

        $outputDiv='
                                <option selected value=';
                                $outputDiv.= $oldVal; 
                                $outputDiv.=' id=selectedParent>' ;
        $outputDiv .=$oldVal; 
        $outputDiv .='</option>
                                
                    ';


        foreach($anodeall as $anode){
        $outputDiv .= '<option value="'.$anode->id.'" id="selectParent">
                                    <p>#'.$anode->id.'</p>
                                </option>';
        }

        return response()->json([
            "anodeall" => $anodeall,
            "outputDiv"=> $outputDiv, 
            "parent" => $parent
        ]);
        
        //return $anodeall;
        
    }

    public function getRow(Request $request) {
        $data=$request->all();
        $parentNode=Anode::where('id',$data['parentId'])->first();
        $currentNodeRow=($parentNode->arow_id) + 1;
                        
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

}
