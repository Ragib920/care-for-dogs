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
    return view('pages.index');
});
Route::get('/recent_activities', function () {
    return view('pages.recent_activities');
});
Route::get('/signin', function () {
    return view('pages.signin');
});
Route::get('/signup', function () {
    return view('pages.signup');
});
Route::get('/forgot_password', function () {
    return view('pages.forgot_password');
});
Route::get('/confirm_code', function () {
    return view('pages.confirm_code');
});
