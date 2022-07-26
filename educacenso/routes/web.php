<?php

use App\Http\Controllers\TurmaController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/turmas', [TurmaController::class, 'index']);
Route::get('/turmas/show/{id}', [TurmaController::class, 'show'])->where('id', '[0-9]+');
Route::get('/turmas/create', [TurmaController::class, 'create']);
Route::post('/turmas/store', [TurmaController::class, 'store']);
Route::get('/turmas/edit/{id}', [TurmaController::class, 'edit'])->where('id', '[0-9]+');
Route::post('/turmas/update', [TurmaController::class, 'update']);
Route::get('/turmas/destroy/{id}', [TurmaController::class, 'destroy'])->where('id', '[0-9]+');

Route::get('/transportes-periodos/show/{id}', [PeriodoController::class, 'show'])->where('id', '[0-9]+');
Route::get('/transportes-periodos/create', [PeriodoController::class, 'create']);
Route::post('/transportes-periodos/store', [PeriodoController::class, 'store']);
Route::get('/transportes-periodos/edit/{id}', [PeriodoController::class, 'edit'])->where('id', '[0-9]+');
Route::post('/transportes-peridos/update', [PeriodoController::class, 'update']);
Route::get('/transportes-periodos/destroy/{id}', [PeriodoController::class, 'destroy'])->where('id', '[0-9]+');

Route::get('/transportes-cursos/show/{id}', [CursosController::class, 'show'])->where('id', '[0-9]+');
Route::get('/transportes-cursos/create', [CursosController::class, 'create']);
Route::post('/transportes-cursos/store', [CursosController::class, 'store']);
Route::get('/transportes-cursos/edit/{id}', [CursosController::class, 'edit'])->where('id', '[0-9]+');
Route::post('/transportes-cursos/update', [CursosController::class, 'update']);
Route::get('/transportes-cursos/destroy/{id}', [CursosController::class, 'destroy'])->where('id', '[0-9]+');
