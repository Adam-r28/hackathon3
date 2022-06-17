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

Route::get('/animals', ['App\Http\Controllers\AnimalsController', 'list']);
Route::get('/animals/detail', ['App\Http\Controllers\AnimalsController', 'detail'])->name('animal.detail');
Route::get('/animals/search', ['App\Http\Controllers\AnimalsController', 'search']);

Route::get('/owners', ['App\Http\Controllers\OwnerController', 'list']);
Route::get('/owners/detail', ['App\Http\Controllers\OwnerController', 'detail']);
Route::get('/owners/search', ['App\Http\Controllers\OwnerController', 'search']);

Route::get('/search', ['App\Http\Controllers\AnimalsController', 'search'])->name('search');

Route::get('/animals/create', ['App\Http\Controllers\AnimalsController', 'create']);
Route::post('/animals', ['App\Http\Controllers\AnimalsController', 'store']);
