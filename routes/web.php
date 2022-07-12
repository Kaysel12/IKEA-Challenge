<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvitadosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


Route::get('/', HomeController::class);

Route::get('invitados/formulario', [InvitadosController::class, 'create'])->name('invitados.create');

Route::post('invitados/formulario', [InvitadosController::class, 'store'])->name('invitados.store');

Route::get('invitados/registro', [InvitadosController::class, 'index'])->name('invitados.index')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
