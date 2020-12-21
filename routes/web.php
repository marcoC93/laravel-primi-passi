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
    "hello world";
    return view('welcome');
});
Route::get('/duplicate', function () {

     $data = [
         'nome' => 'Marco',
     ];

    return view('duplicate',$data);

});
