<?php


use App\zzz_test;
// Home Route 

Route::get('/', 'ClientsController@index');

// Create Route 

Route::get('/create', 'ClientsController@create');
Route::get('create/store', 'ClientsController@store');

// Show Route 

Route::get('/show', 'ClientsController@show');

// Distroy Route 

Route::get('/destroy/{id}', 'ClientsController@destroy');

// Edit Route 

Route::get('/edit/{id}', 'ClientsController@edit');
Route::get('edit/update/{id}', 'ClientsController@update');

// Search Route 

Route::post('/search','ClientsController@searchFind');
Route::get('/searchPatient', 'ClientsController@searchform');
Route::get('/searchPatient', 'ClientsController@searchform');

// History Route 

Route::get('/history/{id}', 'PatientsHistory@history');
Route::get('/storeDeseases', 'PatientsHistory@store');


// Test Rote

Route::get('/test', 'TestController@test');
Route::get('/test-store','TestController@store');













