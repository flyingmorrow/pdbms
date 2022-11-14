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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home/search', 'HomeController@search');
Route::get('/home/detail/{id}', 'HomeController@detailshow');
Route::get('/admin', 'DataController@index')->name('admin');
Route::post('/admin/save', 'DataController@save');
Route::get('/admin/downloadData', "ExcelController@export");
Route::post('/admin/importData', "ExcelController@import");