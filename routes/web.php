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
Route::get('/hello', 'IndexController@index')->middleware('auth');

Route::get('hello/auth', 'indexController@getAuth');
Route::post('hello/auth', 'indexController@postAuth');

Route::get('hello/add', 'IndexController@add');
Route::post('hello/add', 'IndexController@create');

Route::get('hello/edit', 'IndexController@edit');
Route::post('hello/edit', 'IndexController@update');

Route::get('hello/del', 'IndexController@del');
Route::post('hello/del', 'IndexController@remove');

Route::get('hello/show', 'indexController@show');

Route::get('person', 'PersonController@index');

Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');

Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');

Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');

Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');

Route::get('board', 'BoardController@index');
Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');

Route::resource('rest', 'Restappcontroller');
Route::get('hello/rest', 'IndexController@rest');

Route::get('hello/session', 'IndexController@ses_get');
Route::post('hello/session', 'IndexController@ses_put');

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
