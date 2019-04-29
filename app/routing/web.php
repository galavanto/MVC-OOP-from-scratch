<?php


// Middleware doesn't do anything yet..
Route::get('/','HomepageController@home')->middleware(['checkLogged']);

Route::get('/user/listings','HomepageController@listings');
Route::get('/new/listing','HouseController@listing');

// Adding new listing
Route::post('/new/listing','HouseController@newListing');


// Everything to do with the user

Route::get('/signup','UserController@insert');
Route::post('/user/save','UserController@save');

Route::get('/signin','UserController@indexLogin');
Route::post('/login','UserController@login');

Route::get('/logout','UserController@logout');


// Profile
// Middleware doesn't do anything yet..
Route::get('/user','HomepageController@profile')->middleware(['checkLogged']);