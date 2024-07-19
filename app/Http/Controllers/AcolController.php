<?php

namespace App\Http\Controllers;

use App\Models\Acol;
use Illuminate\Http\Request;

class AcolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $acols = Acol::all();

        return view('scada.columns.index', ['acols' => $acols]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $acols = Acol::all();

        return view('scada.columns.create', ['acols' => $acols]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData= $request->validate([
            'name' => 'required|max:255'
        ]);

        Acol::create($validatedData);

        

        return redirect('/columns');
        // return response()->json([
        //     "key"=> $request->all()
        // ]);
        
        //return response($request);

    }

    /**
     * Display the specified resource.
     */
    public function show(Acol $acol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Acol $acol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Acol $acol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Acol $acol)
    {
        //
        Acol::destroy($acol->id);

        return redirect()->back();
    }
}
