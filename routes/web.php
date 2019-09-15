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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'group', 'as' => 'group.'], function () {
    Route::get('/',[ 'as' => 'index', 'uses' => 'RoleController@index'] );
    Route::get('getDataRoles',[ 'as' => 'getDataRoles', 'uses' => 'RoleController@getDataRoles'] );
    Route::get('create',[ 'as' => 'create', 'uses' => 'RoleController@create'] );
    Route::post('store',[ 'as' => 'store', 'uses' => 'RoleController@store'] );
    Route::get('edit/{id}',[ 'as' => 'edit', 'uses' => 'RoleController@edit'] );
    Route::post('update',[ 'as' => 'update', 'uses' => 'RoleController@update'] );
    Route::post('delete',[ 'as' => 'delete', 'uses' => 'RoleController@destroy'] );
});

// Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
//     Route::get('/',[ 'as' => 'index', 'uses' => 'UsersController@index'] );
//     Route::get('getDataUsers', [ 'as' => 'getDataUsers', 'uses' => 'UsersController@getDataUsers' ]);
//     Route::get('create',[ 'as' => 'create', 'uses' => 'UsersController@create'] );
//     Route::get('edit/{id}', ['as'   => 'edit', 'uses'    => 'UsersController@edit']);
//     Route::get('delete/{id}', ['as' => 'delete', 'uses'  => 'UsersController@destroy']);
//     Route::get('show/{id}', ['as' => 'show', 'uses'  => 'UsersController@show']);
//     Route::post('store', ['as' => 'store', 'uses'  => 'UsersController@store']);
//     Route::post('update', ['as' => 'update', 'uses'  => 'UsersController@update']);
// });

Route::group(['middleware' => 'role:administrador', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('users/getDataUsers', [ 'as' => 'users.getDataUsers', 'uses' => 'UsersController@getDataUsers' ]);
    Route::resource('users', 'UsersController');

});

Route::group(['middleware' => 'role:admin|user', 'prefix' => 'settings'], function () {
    Route::get('profile', ['as' => 'profile', 'uses'  => 'UsersController@profile']);
});
