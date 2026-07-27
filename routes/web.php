<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'pages.home');
Route::view('/catalog', 'pages.catalog');
Route::view('/category', 'pages.category');
Route::view('/category/product', 'pages.product');
Route::view('/blog', 'pages.blog');
Route::view('/blog/article', 'pages/article');
