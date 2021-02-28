<?php

use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\DescansoController;
use App\Http\Controllers\EntrevistaController;
use App\Http\Controllers\SystemController;
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


Route::get('/', [SystemController::class, 'index'])->name('index');
Route::get('index',[SystemController::class,'index'])->name('index');

Route::get('descanso/create',[DescansoController::class,'create'])->name('descanso.create');
Route::delete('descanso/{id}',[DescansoController::class, 'destroy'])->name('descanso.destroy');
Route::get('descanso/{id}',[DescansoController::class,'show'])->name('descanso.show');
Route::post('descanso',[DescansoController::class,'salvar'])->name('descanso.salvar');
Route::put('/descanso/{id}',[DescansoController::class,'update'])->name('descanso.update');

Route::get('entrevista/create',[EntrevistaController::class,'create'])->name('entrevista.create');
Route::delete('entrevista/{id}',[EntrevistaController::class, 'destroy'])->name('entrevista.destroy');
Route::get('entrevista/{id}',[EntrevistaController::class,'show'])->name('entrevista.show');
Route::post('entrevista',[EntrevistaController::class,'salvar'])->name('entrevista.salvar');
Route::put('/entrevista/{id}',[EntrevistaController::class,'update'])->name('entrevista.update');

Route::get('candidato/create',[CandidatoController::class,'create'])->name('candidato.create');
Route::delete('candidato/{id}',[CandidatoController::class, 'destroy'])->name('candidato.destroy');
Route::get('candidato/{id}',[CandidatoController::class,'show'])->name('candidato.show');
Route::post('candidato',[CandidatoController::class,'salvar'])->name('candidato.salvar');
Route::put('/candidato/{id}',[CandidatoController::class,'update'])->name('candidato.update');
