<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;


Route::group(['prefix' => 'docentes', 'middleware' => 'auth_docentes'], function() {
    Route::get('/', [DocenteController::Class,'index'])->name('docentes.index');
    Route::get('/show/{id}', [DocenteController::Class,'show'])->name('docentes.show');
    Route::get('/create', [DocenteController::Class,'create'])->name('docentes.create');
    Route::post('/create', [DocenteController::Class,'store'])->name('docentes.store');
    Route::get('/edit/{id}', [DocenteController::Class,'edit'])->name('docentes.edit');
    Route::post('/edit/{id}', [DocenteController::Class,'update'])->name('docentes.update');
    Route::get('/delete/{id}', [DocenteController::Class,'delete'])->name('docentes.delete');
    Route::post('/delete/{id}', [DocenteController::Class,'destroy'])->name('docentes.destroy');
});

Route::get('/docentes/login', [DocenteController::Class,'showLoginForm'])->name('docentes.showLoginForm');
Route::post('/docentes/login', [DocenteController::Class,'login'])->name('docentes.login');
Route::get('/docentes/logout', [DocenteController::Class,'logout'])->name('docentes.logout');

