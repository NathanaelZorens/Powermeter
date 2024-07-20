<?php

namespace App\Http\Controllers;

use App\Models\Acol;
use App\Models\Anode;
use Illuminate\Http\Request;

class AcolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        

        if(request()->has('search'))
        {

            $acols= Acol::orderby('id','ASC')->where('name','like','%' . request()->get('search','') . '%')->orWhere('id','like','%' . request()->get('search','') . '%')->get();

        }

        else{
            $acols = Acol::all();
        }


        return view('scada.acols.index', ['acols' => $acols]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $acols = Acol::all();


        return view('scada.acols.create', ['acols' => $acols]);
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

        

        return redirect('/acols');
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
        $rules = [ 
            'name' => 'required|max:255',
        ];


        $validatedData= $request->validate($rules);

        Acol::where('id', $acol->id)->update($validatedData);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Acol $acol)
    {
        //
        Anode::where('acol_id', $acol->id)->delete();
        
        //Anode::destroy($nodes);

        Acol::destroy($acol->id);


        return redirect()->back();
    }
}
