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

Route::get('/', function () {
 return view('master');
});
Route::get('/trang-chu', function () {
 return view('pages.home');
});
Route::get('/product', function () {
 return view('pages.product');
});
Route::get('/news', function () {
 return view('pages.news');
});
Route::get('/contact', function () {
 return view('pages.contact');
});
Route::get('/admin','adminController@index');
Route::get('/dashboard','AdminController@show_dashnoard');
?>
