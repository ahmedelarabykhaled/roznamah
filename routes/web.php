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

Route::group(['prefix'=>'/'],function()
{
	Route::get('/', 'User\UserController@index');
	Route::get('category/{id}', 'User\UserController@category');
	Route::get('subcategory/{id}', 'User\UserController@subcategory');
});

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
	Route::get('dashboard','Admin\DashboardController@index');
	Route::resource('day','Admin\DayController');
	Route::resource('category','Admin\CategoryController');
	Route::resource('subcategory','Admin\SubCategoryController');
	Route::get('logout',function()
	{
		auth()->logout();
		return redirect('/');
	});
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
