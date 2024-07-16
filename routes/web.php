<?php

use App\Http\Controllers\AcolController;
use App\Http\Controllers\AnodeController;

use App\Http\Controllers\HistoryController;
use App\Models\Acol;
use App\Models\Anode;
use App\Models\Arow;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::group(['prefix'=> '/history'], function () {

    Route::get('/',[HistoryController::class,'index'])->name('history.index');
});

Route::get('/scada', function () {
    return view('scada.index');
})->name('scada');

Route::get('/draw', function () {
    return view('scada.testDraw');
})->name('draw');

Route::get('/col', function () {
    return view('scada.testColumn');
})->name('col');

Route::get('/comp', function () {
    return view('scada.testComp');
})->name('comp');

Route::get('/side', function () {
    return view('scada.testSidebar');
})->name('side');

Route::get('/dia', function () {

    $acols = Acol::all();

    
    //$anodes = Anode::where ('acol_id', '=', '1')->get();
    
    $anodes = Anode::all();

    //return view('scada.diagramtest', ['acols' => Acol::all(), 'anodes' => Anode::all() ]);
    
    return view('scada.diagramtest', ['acols' => $acols, 'anodes' => $anodes  ]);

})->name('dia');


Route::get('/new', function () {

    $acols = Acol::all();
    $arows = Arow::all();
    
    //$anodes = Anode::where ('acol_id', '=', '1')->get();
    
    $anodes = Anode::all();
    $anodesx = Anode::all();


    //return view('scada.diagramtest', ['acols' => Acol::all(), 'anodes' => Anode::all() ]);
    
    return view('scada.testBranch', ['acols' => $acols, 'arows' => $arows, 'anodes' => $anodes, 'anodesx' => $anodesx  ]);

})->name('new');


Route::get('/ele', function () {

    $acols = Acol::all();
    $arows = Arow::all();
    
    //$anodes = Anode::where ('acol_id', '=', '1')->get();
    
    $anodes = Anode::all();
    $anodesx = Anode::all();


    //return view('scada.diagramtest', ['acols' => Acol::all(), 'anodes' => Anode::all() ]);
    
    return view('scada.testElement', ['acols' => $acols, 'arows' => $arows, 'anodes' => $anodes, 'anodesx' => $anodesx  ]);

})->name('fin');

Route::get('/fin', function () {

    $acols = Acol::all();
    $arows = Arow::all();
    
    //$anodes = Anode::where ('acol_id', '=', '1')->get();
    
    $anodesX = Anode::all();
    $anodesXX = Anode::orderby('id','ASC')->get();
    $anodes = Anode::orderby('arow_id','ASC')->get();
    

    //return view('scada.diagramtest', ['acols' => Acol::all(), 'anodes' => Anode::all() ]);
    
    return view('scada.testFurnish', ['acols' => $acols, 'arows' => $arows, 'anodes' => $anodes]);

})->name('fin');




Route::get('/dash', function () {

    $acols = Acol::all();

    
    //$anodes = Anode::where ('acol_id', '=', '1')->get();
    
    $anodes = Anode::all();

    //return view('scada.diagramtest', ['acols' => Acol::all(), 'anodes' => Anode::all() ]);
    
    return view('scada.dash', ['acols' => $acols, 'anodes' => $anodes  ]);

})->name('dash');

//Route::get('/columns', [AcolController::class, 'index']);
//Route::get('/columns/create', [AcolController::class, 'create'])->name('columns.create');
Route::resource('/columns', AcolController::class);

Route::resource('/anodes', AnodeController::class);
