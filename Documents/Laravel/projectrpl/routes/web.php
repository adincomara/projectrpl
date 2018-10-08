<?php

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

Route::get('/', 'Page@index');
Route::get('/product_summary','Page@product_summary');
Route::get('/products','Page@products');
Route::get('/register', function(){
    return view('register');
});
Route::get('/product_detail','Page@product_detail');
Route::get('/login',function(){
    return view('login');
});
Route::get('/forgetpass',function(){
    return view('forgetpass');
});
Route::get('/faq',function(){
    return view('faq');
});
