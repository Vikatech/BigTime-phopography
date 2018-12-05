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

Route::get('/home',         'HomeController@index')->name('home');
Route::get('/photography',  'PageController@photography')->name('photography');
Route::get('/video',        'PageController@video')->name('video');
Route::get('/training',     'PageController@training')->name('training');
Route::get('/instrumentation', 'PageController@instrumentation')->name('instrumentation');
Route::get('/services',     'PageController@services')->name('services');
Route::get('/dashboard',     'PageController@dashboard')->name('dashboard');

Route::get('/serviceform',   'PageController@serviceform')->name('serviceform');
Route::get('/registernysc',   'PageController@registernyscform')->name('registernysc');


Route::post('/dashboard', 'MemberFormController@store')->name('nys');


/*Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => \
'auth'), function () {
Route::get('users', 'UsersController@index');
});*/

//Admin Route
Route::get('/admin',   'AdminController@index');
Route::get('/admin/{id?}',   'AdminController@show');
Route::get('/admin/{id?}/edit',   'AdminController@edit');
Route::post('/admin/{id?}/edit',   'AdminController@update');
Route::post('/ticket/{id?}/delete','AdminController@destroy');


Route::post('/dashboard','picsController@store')->name('imag');
