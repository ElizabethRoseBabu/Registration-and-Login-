<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('home', 'AdminController@home');
Route::get('adminhome', 'AdminController@adminhome');

Route::get('registration', 'AdminController@register');
Route::post('add_users', 'AdminController@add_user');
Route::get('log', 'AdminController@log');
Route::post('login_request',  'AdminController@login_request');
Route::get('logout',  'AdminController@logout');
Route::get('list',  'AdminController@userList');
Route::get("update/{id}",'AdminController@edit');
Route::get("updatestock",'AdminController@update');
Route::get('delete/{id}','AdminController@delete');