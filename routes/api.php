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
//Credentials
Route::post('/register', 'AccountsController@register');
Route::post('/login', 'AccountsController@login');
Route::post('/logout', 'AccountsController@logout');




Route::group(['middleware' => ['jwt.verify']], function() {
    //Token Verification
    Route::get('/verify', "VerifyController@verify");

    //Testing by getting accounts
    Route::get('/accounts', 'AccountsController@index');
});;
