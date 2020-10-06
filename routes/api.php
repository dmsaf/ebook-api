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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*Route::get('books', 'App\Http\Controllers\BookController@index'); // show all data
Route::post('books', 'App\Http\Controllers\BookController@store'); // create new data
Route::get('books', 'App\Http\Controllers\BookController@show'); // show data by id
Route::put('books', 'App\Http\Controllers\BookController@update'); // update data
Route::delete('books', 'App\Http\Controllers\BookController@destroy'); // delete data*/

Route::resource('books', 'App\Http\Controllers\BookController');
Route::resource('authors', 'App\Http\Controllers\AuthorController');

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('user-profile', 'AuthController@userProfile');
});
