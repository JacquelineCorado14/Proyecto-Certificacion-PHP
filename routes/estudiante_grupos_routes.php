<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteGrupoController;


Route::group(['prefix' => 'estudiantes_grupos'], function() {
    Route::get('/', [EstudianteGrupoController::Class,'index'])->name('estudiantes_grupos.index');
    Route::get('/show/{id}', [EstudianteGrupoController::Class,'show'])->name('estudiantes_grupos.show');
    Route::get('/create', [EstudianteGrupoController::Class,'create'])->name('estudiantes_grupos.create');
    Route::post('/create', [EstudianteGrupoController::Class,'store'])->name('estudiantes_grupos.store');
    Route::get('/edit/{id}', [EstudianteGrupoController::Class,'edit'])->name('estudiantes_grupos.edit');
    Route::post('/edit/{id}', [EstudianteGrupoController::Class,'update'])->name('estudiantes_grupos.update');
    Route::get('/delete/{id}', [EstudianteGrupoController::Class,'delete'])->name('estudiantes_grupos.delete');
    Route::post('/delete/{id}', [EstudianteGrupoController::Class,'destroy'])->name('estudiantes_grupos.destroy');
});