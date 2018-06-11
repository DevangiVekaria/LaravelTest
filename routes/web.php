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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('products','ProductController',array('except' => array('search')));
Route::get('products/search/category/{categoryId?}/product/{productName?}','ProductController@search');
Route::get('pdfview',array('as'=>'pdfview','uses'=>'ProductController@pdfview'));


