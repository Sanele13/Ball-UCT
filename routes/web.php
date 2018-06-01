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
    return view('home');
});

Route::get('/results_and_fixtures', function () {
    return view('results_and_fixtures');
});

Route::get('/mvp_race', function () {
    return view('mvp_race');
});

Route::get('/teams', function () {
    return view('teams');
});

Route::get('/standings', function () {
    return view('standings');
});

Route::get('/test','TeamsController@test');