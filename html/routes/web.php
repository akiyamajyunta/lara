<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;



Route::get('/', function () {
    return view('main');   
});


Route::get('/main', [MainController::class, 'index'])->name('main.list');
Route::get('/main/{id}', [MainController::class, 'show'])->name('main.show');