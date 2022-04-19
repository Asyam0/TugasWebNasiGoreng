<?php

use App\Http\Controllers\AdminMakananController;
use App\Http\Controllers\AdminMinumanController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\PagesController;

//Static Pages Controller *by Asyam Rafli XI Tel13
Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact');

//Controller Untuk Menu
Route::get('/menu', [MenuController::class, 'index']);

//Controller AdminMakanan
Route::get('admin', [AdminMakananController::class, 'index']);
Route::get('tambahmakan', [AdminMakananController::class, 'create']);
Route::post('tambahmakan', [AdminMakananController::class, 'store']);
Route::get('delete/{id}', [AdminMakananController::class, 'destroy']);
// // //Controller AdminMinuman
Route::get('admin', [AdminMinumanController::class, 'index']);
Route::get('tambahminum', [AdminminumanController::class, 'create']);
Route::post('tambahminum', [AdminminumanController::class, 'store']);
Route::get('destroy/{id}', [AdminMinumanController::class, 'destroy']);

//Login Admin
Route::get('login', [LoginController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
