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
    return view('youtube');
});

//Route::get("/site","Youtube@index");

//pass parameters
//Route::get("/site/{site}","Youtube@index");


/* Login */

/*Route::get('/',function(){
    return view('admin.login');
});*/

//Route::post('/login',"Login@index");

Auth::routes(['verify' => true]);

Route::get('/home','HomeController@index')->name('home');

Route::get('customer','CustomerController@index');

Route::post('customer','CustomerController@store');

Route::resource('crud','CrudController');

Route::get('contact','ContactController@create');
Route::post('contact','ContactController@store');