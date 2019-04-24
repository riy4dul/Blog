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

Route::get ('/',[
    'uses'=> 'frontend\HomeController@index',
    'as'=>'/'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');

});

Route::group(['middleware' =>'auth' , 'namespace' => 'backend'], function(){
    Route::get('post-list','PostController@index')->name('postList');
    Route::get('post-add','PostController@create')->name('postAdd');
    Route::post('post-store','PostController@store')->name('postStore');
    Route::get('post-edit/{id}','PostController@edit')->name('postEdit');
    Route::post('post-update','PostController@update')->name('postUpdate');
    Route::post('post-delete/{id}','PostController@destroy')->name('postDestroy');

    Route::get('category-list','CategoryController@index')->name('categoryList');
    Route::get('category-add','CategoryController@create')->name('categoryAdd');
    Route::post('category-store','CategoryController@store')->name('categoryStore');
    Route::get('category-edit/{id}','CategoryController@edit')->name('categoryEdit');
    Route::post('category-update','CategoryController@update')->name('categoryUpdate');
    Route::post('category-delete/{id}','CategoryController@destroy')->name('categoryDestroy');

    Route::get('contact','ContactController@index')->name('contactWithMe');
});