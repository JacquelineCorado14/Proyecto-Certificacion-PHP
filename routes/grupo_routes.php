<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrupoController;

Route::group(['prefix' => 'grupos', 'middleware' => 'auth_docentes'], function() {
    Route::get('/', [GrupoController::Class,'index'])->name('grupos.index');
    Route::get('/show/{id}', [GrupoController::Class,'show'])->name('grupos.show');
    Route::get('/create', [GrupoController::Class,'create'])->name('grupos.create');
    Route::post('/create', [GrupoController::Class,'store'])->name('grupos.store');
    Route::get('/edit/{id}', [GrupoController::Class,'edit'])->name('grupos.edit');
    Route::post('/edit/{id}', [GrupoController::Class,'update'])->name('grupos.update');
    Route::get('/delete/{id}', [GrupoController::Class,'delete'])->name('grupos.delete');
    Route::post('/delete/{id}', [GrupoController::Class,'destroy'])->name('grupos.destroy');
});