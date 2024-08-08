<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acol;
use App\Models\Anode;
use App\Models\Arow;

class DiagramController extends Controller
{
    //
    public function index() {
        $acols = Acol::all();
        $arows = Arow::all();
        $anodesX = Anode::all();
        $anodesXX = Anode::orderby('id', 'ASC')->get();
        $anodes = Anode::orderby('arow_id', 'ASC')->get();
        $anodeall = Anode::orderby('id', 'ASC')->get();

        return view('scada.testFurnish', ['acols' => $acols, 'arows' => $arows, 'anodes' => $anodes, 'anodeall' => $anodeall]);
    }

    public function detail($detail){
        $acolsX = Acol::all();
        $acols=Anode::orderby('id','ASC')->where('id',$detail)->get();
        $arows = Arow::all();
        $anodesX = Anode::all();
        $anodesXX = Anode::orderby('id','ASC')->get();
        $anodes = Anode::orderby('arow_id','ASC')->get();
        $anodeall = Anode::orderby('id','ASC')->get();

        return view('scada.detailColumn', compact('acols','arows','anodes','anodeall'));

    }
}
