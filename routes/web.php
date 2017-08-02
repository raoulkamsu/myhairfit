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
})->name('welcome');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::put('/posts/update/{posts}', 'PostController@update')->name('user.put');

Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/posts/{categorie}/{post}', 'PostController@show')->name('posts.show');

Route::get('/posts/create', 'PostController@showcreate')->name('posts.create');
Route::post('/posts/create', 'PostController@store')->name('posts.create.submit');

Route::put('/posts/edit', 'PostController@showmodify')->name('posts.edit');
Route::post('/posts/edit', 'PostController@modify')->name('posts.edit.submit');

Route::delete('/posts/{categorie}/{post}', 'PostController@destroy')->name('posts.delete');

Route::get('/posts/{categorie}/{post}/replies', 'PostReplyController@store');
Route::get('/posts/{categorie}', 'PostController@index');


Route::prefix('/admin')->group(function(){
    
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    
});

