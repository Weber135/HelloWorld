<?php
# @Date:   2020-10-06T09:17:35+01:00
# @Last modified time: 2020-10-06T09:53:15+01:00




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

Route ::get('/helloworld', function () {
  return '<h1>Hello Wolrd</h1>';
});

Route ::get('/ronanweber', function () {
  return view('welcome');
});
