<?php

use App\Http\Controllers\PeriodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/transportes', [seila::class, 'index']);


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

Route::get('/transportes-turmas/show/{id}', [TurmasController::class, 'show'])->where('id', '[0-9]+');
Route::get('/transportes-turmas/create', [TurmasController::class, 'create']);
Route::post('/transportes-turmas/store', [TurmasController::class, 'store']);
Route::get('/transportes-turmas/edit/{id}', [TurmasController::class, 'edit'])->where('id', '[0-9]+');
Route::post('/transportes-turmas/update', [TurmasController::class, 'update']);
Route::get('/transportes-turmas/destroy/{id}', [TurmasController::class, 'destroy'])->where('id', '[0-9]+');
