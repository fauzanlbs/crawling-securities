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

Route::get('/', function (App\Result $result) {
     $data = $result->orderBy('id', 'desc')->get();
     $last = $result->orderBy('id', 'desc')->first();
     $time = $last->created_at;
    return view('welcome', compact('data', 'time'));
});
