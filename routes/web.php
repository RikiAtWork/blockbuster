<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculasController;

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

Route::get('/', [PeliculasController::class, 'index'])->name('movies.index');

