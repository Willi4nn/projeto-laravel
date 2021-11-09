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

use App\Http\Controllers\ProdutosController;

Route::get('/', function () {
    return view(view: 'home');
})->name('home');

Route::get('/auth', function () {
    return view(view: 'auth');
})->name('auth');

Route::get('/howweare', function () {
    return view(view: 'howweare');
})->name('howweare');

Route::get('/contact', function () {
    return view(view: 'contact');
})->name('contact');

Route::get('/produtos/productpage', function () {
    return view(view: 'productpage');
})->name('productpage');

Route::get('/highlights', function () {
    return view(view: 'highlights');
})->name('highlights');

Route::get('/produtos/novo', [ProdutosController::class, 'create']);
Route::post('/produtos/novo', [ProdutosController::class, 'store'])->name('registrar_produto');
Route::get('/register/novo', [UserController::class, 'index']);
