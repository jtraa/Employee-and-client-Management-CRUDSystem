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

Route::get('/', 'PagesController@index');

Route::get('/company-list', 'PagesController@company');

Route::get('/employee-list', 'PagesController@employee');

// Route::get('/employee-list/{id}/{name}', function ($id, $name) {
//     return 'This is user ' .$name. ' with an id of ' .$id;
// });




