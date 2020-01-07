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

Route::get("/", "OutController@index");

Route::get("verify", "VerifyController@index");
Route::post("verifying","VerifyController@verifying");
Route::post("logout","VerifyController@logout");


Route::middleware(['verify'])->group(function () {
	Route::get("home","HomeController@index");
	Route::get("api","HomeController@api");
});