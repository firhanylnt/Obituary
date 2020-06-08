<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function(){
	
	Route::group(['namespace' => 'Auth'], function(){
		Route::get('login', 'LoginController@showForm');
		Route::post('login', 'LoginController@login')->name('admin.login');
		Route::post('register', 'RegisterController@register')->name('admin.register');
		Route::post('logout', 'LoginController@logout')->middleware('auth')->name('admin.logout');
	});

	Route::group(['middleware' => 'auth' ,'namespace' => 'Admin'], function(){
		Route::get('dashboard', 'DashboardController@index')->name('dashboard');
		Route::resource('users', 'UserController');
	});
});

Auth::routes();

Route::group(['name'=>'web.', 'namespace'=>'Frontend'], function(){
	Route::get('/', ['as'=>'home.index', 'uses'=>'HomeController@index']);
	Route::get('login', ['as'=>'login.index', 'uses'=>'Login@index']);
	Route::get('register', ['as'=>'login.register', 'uses'=>'Login@register']);
	Route::get('upload', ['as'=>'upload.index', 'uses'=>'UploadController@index']);
	Route::post('upload_data', ['as'=>'upload_data', 'uses'=>'UploadController@upload_data']);
	Route::get('upload/{slug}', ['as'=>'upload.show', 'uses'=>'UploadController@show']);
});