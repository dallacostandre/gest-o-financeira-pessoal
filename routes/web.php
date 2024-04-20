<?php

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

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/transacoes', [App\Http\Controllers\TransacoesController::class, 'create'])->name('transacoes.create');
Route::post('/transacoes', [App\Http\Controllers\TransacoesController::class, 'store'])->name('transacoes.store');
Route::get('/transacoes/{id}/edit', [App\Http\Controllers\TransacoesController::class, 'edit'])->name('transacoes.edit');
Route::put('/transacoes/{id}', [App\Http\Controllers\TransacoesController::class, 'update'])->name('transacoes.update');
Route::delete('/transacoes/{id}', [App\Http\Controllers\TransacoesController::class, 'destroy'])->name('transacoes.destroy');
