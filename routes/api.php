<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/contacts', 'ContactsController@index');
Route::post('/contact/create', 'ContactsController@create');
Route::get('/contact/{id}/edit', 'ContactsController@edit');
Route::put('/contact/{id}/update', 'ContactsController@update');
Route::delete('/contact/{id}/delete', 'ContactsController@delete');
