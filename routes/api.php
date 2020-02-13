<?php

use Illuminate\Http\Request;

use App\Article;
use App\User;
 
//Articles Routes//
Route::group(['middleware' => 'auth:api'], function() {
    Route::get('articles', 'ArticleController@index');
    
    Route::get('articles/{article}', 'ArticleController@show');

    Route::post('articles', 'ArticleController@store');

    Route::put('articles/{article}', 'ArticleController@update');

    Route::delete('articles/{article}', 'ArticleController@delete');
});
 
// Users routes//
Route::group(['middleware' => 'auth:api'], function() {
    Route::get('users', 'UserController@index');
    
    Route::get('users/{user}', 'UserController@show');

    Route::post('users', 'UserController@store');

    Route::put('users/{user}', 'UserController@update');

    Route::delete('users/{user}', 'UserController@delete');
});

Route::post('register', 'Auth\RegisterController@register');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@login');

Route::middleware('auth:api')->get('/user',
    function (Request $request) {
        return $request->user();
    });
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
