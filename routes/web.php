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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{name}', function ($name) {
    return "Hello $name";
});

route::get("/plus/{num1}/{num2}", function ($num1, $num2) {
    return $num1 + $num2;
});

route::get('/showdetail/{text1}/{text2}/{text3}', function ($text1, $text2, $text3) {
    return "สวัสดี, $text1 คุณมีอายุ $text2 ปี และคุณพูดว่า '$text3'";
});
