<?php



Route::get('/','HomepageController@home');

Route::get('/user/listings','HomepageController@listings');
Route::get('/new/listing','HouseController@listing');



// Everything to do with the user

Route::get('/signup','UserController@insert');
Route::post('/user/save','UserController@save');

Route::get('/signin','UserController@indexLogin');
Route::post('/login','UserController@login');

Route::get('/logout','UserController@logout');


// Profile
Route::get('/user','HomepageController@profile');