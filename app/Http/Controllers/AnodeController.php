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
        
        
        $anodes = Anode::orderby('id','ASC');
        $anodeall = Anode::orderby('id','ASC')->get();
        $anodeallX = Anode::where('acol_id','1')->get();


        $anodesCsorts = Anode::orderby('acol_id','ASC')->get();
        $acols = Acol::all();
        
        if(request()->has('search'))
        {
            if(request()->get('searchFilter','')=='all'){
                $anodes= Anode::orderby('id','ASC')->where('name','like','%' . request()->get('search','') . '%')->orWhere('color','like','%' . request()->get('search','') . '%')->orWhere('id','like','%' . request()->get('search','') . '%');
            }

            else{
                $anodes= Anode::orderby('id','ASC')->where(request()->get('searchFilter',''),'like','%' . request()->get('search','') . '%');
            }
        }

        if(request()->has('sort'))
        {
            $anodes= Anode::orderby(request()->get('sort',''),'ASC');
        }


        return view('scada.anodes.index', ['anodes' => $anodes->paginate(15), 'anodeall'=>$anodeall, 'acols'=>$acols, 'anodesCsorts'=>$anodesCsorts ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $acols = Acol::all();
        $anodes = Anode::all();

        return view('scada.anodes.create', ['anodes' => $anodes, 'acols'=>$acols]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //$anodeall = Anode::orderby('id','ASC')->get();
 
        

        $validatedData= $request->validate([
            'name' => 'required|max:255',
            'color' => 'required|max:255',
            'parent_id' => 'required|max:255',
            'acol_id' => 'required|max:255',
            'arow_id' => 'required|max:255'
        ]);

        Anode::create($validatedData);

        

        // return redirect('/anodes');
        return redirect()->back();

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
        //

        $rules = [ 
            'name' => 'required|max:255',
            'color' => 'required|max:255',
            'parent_id' => 'required|max:255',
            'acol_id' => 'required|max:255',
            'arow_id' => 'required|max:255'
        ];


        // $anode=Anode::where('id', request()->get('id',''));

        // $anode->name = request()->get('name','');
        // $anode->color = request()->get('color', '');
        // $anode->parent_id = request()->get('parent_id','');
        // $anode->acol_id = request()->get('acol_id','');
        // $anode->save();

        $validatedData= $request->validate($rules);

        Anode::where('id', $anode->id)->update($validatedData);

        return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anode $anode)
    {
        //
        Anode::where('parent_id', $anode->id)->delete();

        Anode::destroy($anode->id);

        return redirect()->back();


    }
}
