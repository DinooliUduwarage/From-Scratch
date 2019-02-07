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

Route::get('/about', function () {
    return view('pages.about');
});


*/

Route::get('/', 'PagesController@index'); //index view
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts','PostsController');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('export', 'MyController@export')->name('export');
Route::get('importExportView', 'MyController@importExportView');

Route::get('exports', 'ExportExcelController@index');