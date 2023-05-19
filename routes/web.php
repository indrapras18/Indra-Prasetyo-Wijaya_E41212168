<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/create', [App\Http\Controllers\DataController::class, 'create'])->name('create');

Route::get('/tampildata', [App\Http\Controllers\DataController::class, 'tampildata'])->name('tampildata');

Route::get('delete/{id}', [DataController::class, 'delete'])->name('delete');

Route::get('tampildataupdate/{id}', [DataController::class, 'tampildataupdate'])->name('tampildataupdate');

Route::post('/update/{id}', [App\Http\Controllers\DataController::class, 'update'])->name('update');
