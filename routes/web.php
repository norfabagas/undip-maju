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
Auth::routes();

// admin routes
Route::get('/admin', 'BackController@index');

// general information
Route::get('/admin/general', 'BackController@general');
Route::post('/admin/general', 'BackController@generalstore');

// unit bisnis
Route::get('/admin/unit', 'BackController@unit');
Route::get('/admin/unit/{id}/edit', 'BackController@unitEdit');
Route::post('/admin/unit/{id}/edit', 'BackController@unitEditStore');
Route::get('/admin/unit/misi/{id}', 'BackController@unitMisi');
Route::post('/admin/unit/misi/{id}', 'BackController@unitMisiStore');
Route::get('/admin/unit/misi/{id}/delete', 'BackController@unitMisiDelete');
Route::get('/admin/unit/nilai/{id}', 'BackController@unitNilai');
Route::post('/admin/unit/nilai/{id}', 'BackController@unitNilaiStore');
Route::get('/admin/unit/nilai/{id}/delete', 'BackController@unitNilaiDelete');

// contat
Route::get('/admin/contact', 'BackController@contact');
Route::get('/admin/contact/{id}', 'BackController@contactView');

Route::get('/', 'FrontController@index');

Route::get('/about', 'FrontController@about');

Route::get('/contact', 'FrontController@contact');
Route::post('/contact', 'FrontController@store');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/blog', 'FrontController@blog');

Route::get('/{url}', 'FrontController@UnitBisnis');
