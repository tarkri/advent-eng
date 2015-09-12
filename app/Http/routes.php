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

//Homepage
Route::get('/', 'PagesController@index');
//Life Sciences Services
Route::group(['prefix' => 'life-sciences-services'], function () {
    //Overview
    Route::get('/', 'PagesController@lssIndex');
    //Qualification and Validation Services
    Route::get('qualification-and-validation-services', 'PagesController@lssQvs');
    //Process Development Services
    Route::get('process-development-services', 'PagesController@lssPds');
    //Engineering Services
    Route::get('engineering-services', 'PagesController@lssEs');
    //Project Management Services
    Route::get('project-management-services', 'PagesController@lssPms');
    //Training Products
    Route::get('training-products', 'PagesController@lssTp');
    //Publications
    Route::get('publications', 'PagesController@lssPub');
});
//Energy Sector Services
Route::group(['prefix' => 'energy-sector-services'], function () {
    //Overview
    Route::get('/', 'PagesController@essIndex');
    //Engineering Services
    Route::get('engineering-services', 'PagesController@essEs');
    //Consulting Services
    Route::get('consulting-services', 'PagesController@essCs');
    //Software Familiarity
    Route::get('software-familiarity', 'PagesController@essSf');
    //Industry Codes and Standards
    Route::get('industry-codes-and-standards', 'PagesController@essIcs');
    //Clients
    Route::get('clients', 'PagesController@essCli');
    //Integrated Head Assembly
    Route::get('integrated-head-assembly', 'PagesController@essIha');
    //Projects
    Route::get('projects', 'PagesController@essProj');
});
//Careers
Route::group(['prefix' => 'careers'], function() {
    //Index
    Route::get('/', 'PagesController@careers');
    //Job Postings
    Route::get('jobs', 'PagesController@jobs');
    //Benefits
    Route::get('benefits', 'PagesController@benefits');
});
//Company
Route::get('company', 'PagesController@company');
//Contact
Route::get('contact', 'PagesController@contact');