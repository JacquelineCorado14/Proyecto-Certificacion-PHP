<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;


Route::group(['prefix' => 'estudiante'], function() {
    Route::get('/', [EstudianteController::Class,'index'])->name('estudiantes.index');
    Route::get('/show/{id}', [EstudianteController::Class,'show'])->name('estudiantes.show');
    Route::get('/create', [EstudianteController::Class,'create'])->name('estudiantes.create');
    Route::post('/create', [EstudianteController::Class,'store'])->name('estudiantes.store');
    Route::get('/edit/{id}', [EstudianteController::Class,'edit'])->name('estudiantes.edit');
    Route::post('/edit/{id}', [EstudianteController::Class,'update'])->name('estudiantes.update');
    Route::get('/delete/{id}', [EstudianteController::Class,'delete'])->name('estudiantes.delete');
    Route::post('/delete/{id}', [EstudianteController::Class,'destroy'])->name('estudiantes.destroy');
});