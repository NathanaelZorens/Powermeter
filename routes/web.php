<?php

use App\Http\Controllers\HistoryController;
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