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


Route::get('/', function(){
    return view('welcome');
});

Route::get('/pages', 'PagesController@index');
Route::get('/faq', 'PagesController@faq');
Route::get('/lifestyle', 'PagesController@lifestyle');
Route::get('/resources', 'PagesController@resouces');
Route::get('/secretsauce', 'PagesController@secretsauce');

/** https://thewebtier.com/laravel/understanding-roles-permissions-laravel/ */
Route::group(['middleware' => 'role:admin'], function() {
    Route::get('/admin', function() {
       return 'Welcome Admin';
    });
 });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
