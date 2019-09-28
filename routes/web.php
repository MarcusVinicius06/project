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

Route::get('/', 'Portal\HomeController@index')->name('home');

Route::get('/', ['as' => 'portal', 'uses' => 'Portal\HomeController@index']);
Route::get('/sobre', ['as' => 'sobre', 'uses' => 'Portal\HomeController@pageSobre']);
Route::get('/depoimentos', ['as' => 'depoimentos', 'uses' => 'Portal\HomeController@pageDepoimentos']);
Route::get('/oportunidades', ['as' => 'oportunidades', 'uses' => 'Portal\HomeController@pageOportunidades']);
Route::get('/eventos', ['as' => 'eventos', 'uses' => 'Portal\HomeController@pageEventos']);




Route::group(['middleware' => 'role:administrador', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('users/getDataUsers', [ 'as' => 'users.getDataUsers', 'uses' => 'UsersController@getDataUsers' ]);
    Route::resource('users', 'UsersController');

    Route::get('group/getDataRoles', [ 'as' => 'group.getDataRoles', 'uses' => 'RoleController@getDataRoles']);
    Route::resource('group', 'RoleController');
});

Route::group(['middleware' => 'permission:user', 'prefix' => 'settings'], function () {
    Route::get('profile', ['as' => 'profile', 'uses'  => 'UsersController@profile']);
});
