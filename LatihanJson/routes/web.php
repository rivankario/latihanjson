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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/nomor1', [App\Http\Controllers\LatihanJson::class,'getLatihanSatu']);
Route::get('/nomor2', [App\Http\Controllers\LatihanJson::class,'getLatihanDua']);
Route::get('/nomor3', [App\Http\Controllers\LatihanJson::class,'getLatihanTiga']);
Route::get('/nomor4', [App\Http\Controllers\LatihanJson::class,'getLatihanEmpat']);
Route::get('/nomor5', [App\Http\Controllers\LatihanJson::class,'getLatihanLima']);
