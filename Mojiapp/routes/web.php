<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/characters', 'CharacterController@index')->name('chara.list');
Route::get('/chara/{id}', 'CharacterController@show')->name('chara.detail');

Route::get('/', function () {
    return redirect('/characters');
});
