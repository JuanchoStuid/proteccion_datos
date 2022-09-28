<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('cliente/{campo?}/{enlace?}', [HomeController::class, 'cliente'])->name('cliente');
Route::get('cliente1/{campo?}/{enlace?}', [HomeController::class, 'cliente1'])->name('cliente1');
Route::get('cliente_create/{campo?}/{enlace?}', [HomeController::class, 'create'])->name('create');
Route::post('empleados', [HomeController::class, 'store'])->name('empleados');

Route::get('/formato', function () {
    return view('formato');
});
