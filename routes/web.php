<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kotakcontroller;
use App\Http\Controllers\dasbordcontroller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dasbord', function () {
    return view('dasbord');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/kontakcontroller', [kotakcontroller::class, 'index']);

route::get('/dasbordcontroller', [dasbordcontroller::class,'index']);
