<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

#Auth Routes
Route::group(['prefix' => 'auth','middleware'=>'web'],function(){
	Route::auth();
});

#Sys Routes
Route::group(['prefix'=>'sys','middleware'=>'web'], function()
{
	Route::post('/role/{id}/assign_permission', 'Backend\RoleController@assignPermission');
	Route::post('/role/{id}/assign_user', 'Backend\RoleController@assignUser');
	Route::get('role/create', 'Backend\RoleController@create');	
    Route::resource('role', 'Backend\RoleController');

    Route::resource('user', 'Backend\UserController');

	Route::resource('permission', 'Backend\PermissionController');
});

#Admin Routes
Route::group(['prefix' => 'admin','middleware'=>'web'], function()
{
	Route::get('dashboard', 'Backend\HomeController@index');
 //    Route::get('post', 'Backend\PostController@index');
	// Route::get('post/create', 'Backend\PostController@create');
	// Route::post('post', 'Backend\PostController@store');
	Route::resource('post','Backend\PostController');
});

#Front-end Routes
Route::group(['middleware' => 'web'], function () {

	Route::resource('/','Web\HomeController');

	Route::get('/blog/{slug}','Web\GuideController@singlePost');
	Route::resource('/blog','Web\GuideController');

});


