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

Route::get('/', function () {
    return view('welcome');

});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/vacancies-list','VacanciesListController@index');

Route::post('/vacancies-list','VacanciesListController@filter');

Route::get('/vacancies-list/{id}',['uses' =>'VacanciesListController@showVac'])->where('id', '[0-9]+');




Route::group(['middleware' => 'auth'], function () {

    Route::get('vacancies/{id}', ['uses' =>'VacanciesController@showVac'])->where('id', '[0-9]+');
    Route::get('/vacancies','VacanciesController@index');
    Route::post('/vacancies','VacanciesController@sorter');
    Route::get('/dashboard','DashboardController@index');
    Route::get('/vacancies/add','AddVacController@index');
    Route::post('/vacancies/add','AddVacController@create');

});
