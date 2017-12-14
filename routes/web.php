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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Route::get('/home','HomeController@index');
Route::get('/summary','HomeController@testfunction');
Route::post('service-summary','HomeController@servicesummary');
Route::get('portal','HomeController@portal');
Route::post('portal','HomeController@portal');
Route::get('/payment','HomeController@payment');
Route::post('/getService','HomeController@getService');
