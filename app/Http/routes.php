<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//HOMEPAGE
Route::get('/', 'PagesController@index');

/*================================
//LIFE SCIENCES SERVICES
================================*/
Route::group(['prefix' => 'life-sciences-services'], function(){
	
	//OVERVIEW
	Route::get('/', 'PagesController@lssIndex');
	
});

/*===============================
//ENERGY SECTOR SERVICES
===============================*/
Route::group(['prefix' => 'energy-sector-services'], function(){
	
	//OVERVIEW
	Route::get('/', 'PagesController@essIndex');
	
});