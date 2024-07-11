<?php

namespace App\Http\Controllers;

use App\Models\Anode;
use App\Models\Acol;

use Illuminate\Http\Request;

class AnodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $anodes = Anode::all();
        $anodesCsorts = Anode::orderby('acol_id','ASC')->get();
        $acols = Acol::all();


        return view('scada.nodes.index', ['anodes' => $anodes, 'acols'=>$acols, 'anodesCsorts'=>$anodesCsorts ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $acols = Acol::all();
        $anodes = Anode::all();

        return view('scada.nodes.create', ['anodes' => $anodes, 'acols'=>$acols]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(Anode $anode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anode $anode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anode $anode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anode $anode)
    {
        //
    }
}
