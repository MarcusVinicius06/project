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

Route::get('/', 'Portal\HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/portal', ['as' => 'portal', 'uses' => 'Portal\HomeController@index']);
Route::get('/sobre', ['as' => 'sobre', 'uses' => 'Portal\HomeController@pageSobre']);
Route::get('/depoimentos', ['as' => 'depoimentos', 'uses' => 'Portal\HomeController@pageDepoimentos']);
Route::get('/oportunidades', ['as' => 'oportunidades', 'uses' => 'Portal\HomeController@pageOportunidades']);
Route::get('/eventos', ['as' => 'eventos', 'uses' => 'Portal\HomeController@pageEventos']);




Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('users/getDataUsers', [ 'as' => 'users.getDataUsers', 'uses' => 'UsersController@getDataUsers' ]);
    Route::resource('users', 'UsersController');

    Route::get('group/getDataRoles', [ 'as' => 'group.getDataRoles', 'uses' => 'RoleController@getDataRoles']);
    Route::resource('group', 'RoleController');
});

Route::group(['middleware' => 'role:user', 'prefix' => 'settings'], function () {
    Route::get('profile', ['as' => 'profile', 'uses'  => 'UsersController@profile']);
});
