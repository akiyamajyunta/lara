<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;



Route::get('/', function () {
    return view('main');   
});


Route::get('/main', [MainController::class, 'index'])->name('main.list');

Route::post('/main/delete', [MainController::class, 'delete'])->name('main.delete');

Route::get('/main/{id}', [MainController::class, 'show'])->name('main.show');
Route::get('/all', [MainController::class, 'all'])->name('main.all');

Route::post('/create', [MainController::class, 'create'])->name('main.create');

Route::get('/edit', [MainController::class, 'edit'])->name('main.edit');

Route::post('/update', [MainController::class, 'update'])->name('main.update');

Route::post('/rewrite', [MainController::class, 'rewrite'])->name('main.rewrite');
