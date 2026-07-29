<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/','App\Http\Controllers\MainController@createMainPageData');

Route::get('/catalog', 'App\Http\Controllers\MainController@createCatalogData');

Route::get('/blog', 'App\Http\Controllers\MainController@createBlogData');

Route::get('/category', 'App\Http\Controllers\MainController@createCategoryData');

// Route::view('/category/product', 'pages.product');
Route::get('/category/product', 'App\Http\Controllers\MainController@createCategoryExtraData');

Route::view('/blog/article', 'pages/article');
