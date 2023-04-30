<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
//Rutas Exteriores
Route::get('/', function () {
    return view('inicio.index');
});
Route::get('/conocenos', function () {
    return view('legal.misionvision');
});
Route::get('/empleos', function () {
    return view('empleos.index');
});
Route::get('/politica-privacidad', function () {
    return view('legal.pprivacidad');
});
Route::get('/politica-uso', function () {
    return view('legal.puso');
});
Route::get('/aviso-privacidad', function () {
    return view('legal.aprivacidad');
});
//Rutas de Error
Route::get('/error-400', function () {
    abort(400, 'Bad request');
});
Route::get('/error-404', function () {
    abort(404, 'Not found');
});
Route::get('/error-500', function () {
    abort(500, 'Internal server error');
});
//Activando las rutas de verificación de la autenticación
Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
