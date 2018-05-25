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
Route::get('/','HomeController@Index');
Route::get('type/{id}','HomeController@getNewsByType');
Route::get('detail/{id}','HomeController@getDetailNews');
Route::post('search','HomeController@postSearch');
Route::get('admin', function(){
	return view('admin.role.add');
});

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'category'], function(){
		Route::get('list','Admin\CategoryController@getListCategory');
		Route::get('add','Admin\CategoryController@getAddCategory');
		Route::post('add','Admin\CategoryController@postAddCategory');
		Route::get('edit/{id}','Admin\CategoryController@getEditCategory');
		Route::post('edit/{id}', 'Admin\CategoryController@postEditCategory');
		Route::get('delete/{id}','Admin\CategoryController@getDeleteCategory');
	});
	Route::group(['prefix'=>'type'], function(){
		Route::get('list','Admin\TypeController@getListType');
		Route::get('add','Admin\TypeController@getAddType');
		Route::post('add','Admin\TypeController@postAddType');
		Route::get('edit/{id}','Admin\TypeController@getEditType');
		Route::post('edit/{id}', 'Admin\TypeController@postEditType');
		Route::get('delete/{id}','Admin\TypeController@getDeleteType');
	});
	Route::group(['prefix'=>'vote'], function(){
		Route::get('list','Admin\VoteController@getListVote');
		Route::get('add','Admin\VoteController@getAddVote');
		Route::post('add','Admin\VoteController@postAddVote');
		Route::get('edit/{id}','Admin\VoteController@getEditVote');
		Route::post('edit/{id}', 'Admin\VoteController@postEditVote');
		Route::get('delete/{id}','Admin\VoteController@getDeleteVote');
	});
});