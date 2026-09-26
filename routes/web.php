<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kotakcontroller;
use App\Http\Controllers\dasbordcontroller;
use App\Http\Controllers\prodackcontroller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dasbord', function () {
    return view('dasbord');
});
Route::get('/kotak', function () {
    return view('kotak');
});
Route::get('/prodack', [prodackcontroller::class, 'index']);



Route::get('/kontakcontroller', [kotakcontroller::class, 'index']);

route::get('/dasbordcontroller', [dasbordcontroller::class,'index']);
