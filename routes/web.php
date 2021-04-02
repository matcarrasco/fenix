<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersRolesController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/saludo', [EmpresasController::class, 'index'])
                ->middleware('auth')
                ->name('saludo');

require __DIR__.'/auth.php';
