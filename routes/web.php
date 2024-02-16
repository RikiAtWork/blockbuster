<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('movies.index');
// });

Route::resource('peliculas', PeliculasController::class)->only(['index', 'show', 'edit', 'create', 'update', 'destroy', 'store']);
Route::resource('usuarios', UsuarioController::class)->only(['index', 'show']);

Route::get('/', [UsuarioController::class, 'index'])->name('usuarios.index');

Route::get('peliculas', [PeliculasController::class, 'index'])->name('movies.index');
Route::post('/filtro/autor', [PeliculasController::class, 'filtro'])->name('movies.filtro');


