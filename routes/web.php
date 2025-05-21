<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;

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

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Link::class, 'helloworld']);

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('index', function () {
	return view('index');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('pertemuan4', function () {
	return view('pertemuan4');
});

Route::get('pertemuan4withtoggle', function () {
	return view('pertemuan4withtoggle');
});

Route::get('frontend', function () {
	return view('frontend');
});
