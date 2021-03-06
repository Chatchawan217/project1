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

// Route::get('/user/{name}', function ($name) {
//     return "Hello $name";
// });

// route::get("/plus/{num1}/{num2}", function ($num1, $num2) {
//     return $num1 + $num2;
// });

// route::get('/showdetail/{text1}/{text2}/{text3}', function ($text1, $text2, $text3) {
//     return "สวัสดี, $text1 คุณมีอายุ $text2 ปี และคุณพูดว่า '$text3'";
// });

Route::get('/', 'HomeController@index');
Route::get('/greeting/{name}', 'HomeController@greeting');
Route::get('/calculator/{n1}/{n2}/{n3}', 'HomeController@calculator');

Route::get('/user', 'UserController@index');
Route::get('/user/show/{id}', 'UserController@show');
Route::get('/user/update/{id}', 'UserController@update');

Route::get('/todo', 'TodoController@index');
Route::get('/todo/show/{id}', 'TodoController@show');
Route::get('/todo/delete/{id}', 'TodoController@delete');
