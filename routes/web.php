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

// contact
Route::get('/admin/contact', 'BackController@contact');
Route::get('/admin/contact/{id}', 'BackController@contactView');

// blog
Route::get('/admin/blog/category', 'BackController@category');
Route::post('/admin/blog/category', 'BackController@categoryStore');
Route::get('/admin/blog/category/{id}/delete', 'BackController@categoryDestroy');

Route::get('/admin/blog/tag', 'BackController@tag');
Route::post('/admin/blog/tag', 'BackController@tagStore');
Route::get('/admin/blog/tag/{id}/delete', 'BackController@tagDestroy');

Route::get('/admin/blog', 'BackController@blog');
Route::get('/admin/blog/add', 'BackController@blogCreate');
Route::post('/admin/blog/add', 'BackController@blogStore');
Route::get('/admin/blog/{id}/edit', 'BackController@blogEdit');
Route::post('/admin/blog/{id}/edit', 'BackController@blogUpdate');
Route::get('/admin/blog/{id}/delete', 'BackController@blogDestroy');

//user Route
Route::get('admin/user', 'BackController@user');
Route::get('admin/user/add', 'BackController@userAdd');
Route::post('admin/user/add', 'BackController@userStore');
Route::get('admin/user/{id}/edit', 'BackController@userEdit');
Route::post('admin/user/{id}/edit', 'BackController@userUpdate');
Route::get('admin/user/{id}/delete', 'BackController@userDestroy');

Route::get('/', 'FrontController@index');

Route::get('/about', 'FrontController@about');

Route::get('/contact', 'FrontController@contact');
Route::post('/contact', 'FrontController@store');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/blog', 'FrontController@blog');
Route::get('/blog/{url}', 'FrontController@single');

Route::get('/{url}', 'FrontController@UnitBisnis');
