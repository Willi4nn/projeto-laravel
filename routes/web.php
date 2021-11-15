<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

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
    return view('home');
})->name('home');

Route::get('/auth', function () {
    return view('auth');
})->name('auth');

Route::get('/howweare', function () {
    return view('howweare');
})->name('howweare');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/highlights', function () {
    return view('highlights');
})->name('highlights');

Route::get('/produtos/novo', [ProdutosController::class, 'create'])->name('productpage');
Route::post('/produtos/novo', [ProdutosController::class, 'store'])->name('registrar_produto');
