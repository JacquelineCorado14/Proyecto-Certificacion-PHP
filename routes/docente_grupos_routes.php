<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteGrupoController;


Route::group(['prefix' => 'docentes_grupos', 'middleware' => 'auth_docentes'], function() {
    Route::get('/', [DocenteGrupoController::Class,'index'])->name('docentes_grupos.index');
    Route::get('/show/{id}', [DocenteGrupoController::Class,'show'])->name('docentes_grupos.show');
    Route::get('/create', [DocenteGrupoController::Class,'create'])->name('docentes_grupos.create');
    Route::post('/create', [DocenteGrupoController::Class,'store'])->name('docentes_grupos.store');
    Route::get('/edit/{id}', [DocenteGrupoController::Class,'edit'])->name('docentes_grupos.edit');
    Route::post('/edit/{id}', [DocenteGrupoController::Class,'update'])->name('docentes_grupos.update');
    Route::get('/delete/{id}', [DocenteGrupoController::Class,'delete'])->name('docentes_grupos.delete');
    Route::post('/delete/{id}', [DocenteGrupoController::Class,'destroy'])->name('docentes_grupos.destroy');
});