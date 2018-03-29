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

Route::get('/add_person_form', [
    'uses' => 'MainController@addPersonView',
    'as' => 'personView'
]);

Route::get('/odas', [
    'uses' => 'MainController@addOdasView',
    'as' => 'odasView'
]);

Route::get('/others', [
    'uses' => 'MainController@addOthersView',
    'as' => 'othersView'
]);

Route::get('/perview_sheet', [
    'uses' => 'MainController@perviewSheet',
    'as' => 'perviewSheet'
]);

Route::post('/add_person', [
    'uses' => 'MainController@addPerson'
]);

Route::post('/add_points', [
    'uses' => 'MainController@addPoints'
]);

Route::post('/add_other_points', [
    'uses' => 'MainController@addOtherPoints'
]);
