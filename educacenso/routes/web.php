<?php

use App\Http\Controllers\TurmaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/turmas', [TurmaController::class, 'index']);
Route::get('/turmas/show/{id}', [TurmaController::class, 'show']);
Route::get('/turmas/create', [TurmaController::class, 'create']);
Route::post('/turmas/store', [TurmaController::class, 'store']);
Route::get('/turmas/edit/{id}', [TurmaController::class, 'edit']);
Route::post('/turmas/update', [TurmaController::class, 'update']);
Route::get('/turmas/destroy/{id}', [TurmaController::class, 'destroy']);
