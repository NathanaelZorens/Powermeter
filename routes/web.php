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