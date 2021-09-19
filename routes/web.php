<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\VeterinarioController;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/login',[LoginController::class,'index'])->name('login');

Route::post('/login',[LoginController::class,'store']);
Route::post('/logout',[LogoutController::class,'store'])->name('logout');

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/veterinarios',[VeterinarioController::class,'index'])->name('veterinarios');
Route::get('/veterinarios/create',[VeterinarioController::class,'create'])->name('veterinarios.create');
Route::post('/veterinarios/create',[VeterinarioController::class,'store']);
Route::get('/veterinarios/{veterinario}/edit',[VeterinarioController::class,'edit'])->name('veterinarios.edit');
Route::put('/veterinarios/{veterinario}',[VeterinarioController::class,'update'])->name('veterinarios.update');
Route::delete('/veterinarios/{veterinario}',[VeterinarioController::class,'destroy'])->name('veterinarios.destroy');

Route::get('/agenda',[CitasController::class,'index'])->name('agenda');
Route::get('/agenda/create',[CitasController::class,'create'])->name('agenda.create');
Route::get('/agenda/{cita}/edit',[CitasController::class,'edit'])->name('agenda.edit');

Route::post('/agenda/create',[CitasController::class,'store']);
Route::put('/agenda/cancel/{cita}',[CitasController::class,'cancelar'])->name('agenda.cancel');
Route::put('/agenda/{cita}',[CitasController::class,'update'])->name('agenda.update');


