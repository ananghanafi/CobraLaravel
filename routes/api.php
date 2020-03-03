<?php

use Illuminate\Http\Request;

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
Route::get('/home_user', 'User@index');
Route::get('/login', 'User@login');
Route::post('/login_post', 'User@loginPost');
Route::get('/register', 'User@register');
Route::post('/register_post', 'User@registerPost');
Route::get('/logout', 'User@logout');