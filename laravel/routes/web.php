<?php

use App\Http\Controllers\ProfessoresController;
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
    return view('painel.index');
})->name('inicio');

Route::resource('/', ProfessoresController::class);

Route::get('/{id}/edit', [ProfessoresController::class, 'edit']);

Route::put('/{id}', [ProfessoresController::class, 'update']);

Route::delete('/{id}', [ProfessoresController::class, 'destroy']);
