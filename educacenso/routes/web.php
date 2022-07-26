<?php

use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\RespostaController;
use App\Http\Controllers\TurmaController;
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

Route::get('/periodos/show/{id}', [PeriodoController::class, 'show'])->where('id', '[0-9]+');
Route::get('/periodos/create', [PeriodoController::class, 'create']);
Route::post('/periodos/store', [PeriodoController::class, 'store']);
Route::get('/periodos/edit/{id}', [PeriodoController::class, 'edit'])->where('id', '[0-9]+');
Route::post('/peridos/update', [PeriodoController::class, 'update']);
Route::get('/periodos/destroy/{id}', [PeriodoController::class, 'destroy'])->where('id', '[0-9]+');

Route::get('/cursos/show/{id}', [CursoController::class, 'show'])->where('id', '[0-9]+');
Route::get('/cursos/create', [CursoController::class, 'create']);
Route::post('/cursos/store', [CursoController::class, 'store']);
Route::get('/cursos/edit/{id}', [CursoController::class, 'edit'])->where('id', '[0-9]+');
Route::post('/cursos/update', [CursoController::class, 'update']);
Route::get('/cursos/destroy/{id}', [CursoController::class, 'destroy'])->where('id', '[0-9]+');

Route::get('/respostas', [RespostaController::class, 'index']);
