<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('home');
})->name('homepage');

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
Route::post('/produtos/novo', [ProdutosController::class, 'store'])->name('registrar.produto');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [AuthController::class, 'dashboard'])->name('admin');
Route::get('/admin/show', [ContactsController::class, 'show'])->name('admin.show');

Route::post('/contacts/create', [ContactsController::class, 'store'])->name('create.contacts');

Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::post('/admin/login/do', [AuthController::class, 'login'])->name('admin.login.do');
