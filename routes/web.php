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
Route::resource('formation','FormationController');
Route::get('categorie/{slug}/formations','FormationController@index')->name('formation.categorie');
Route::get('article/{n}', 'ArticleController@show')->where('n','[1-9]*');
Route::get('facture/{n}', 'FactureController@show')->where('n','[1-9]*');
Route::get('users', 'UsersController@create');
Route::post('users', 'UsersController@store')->name('store.email');
//route nommée utilisée dans le formulaire info


