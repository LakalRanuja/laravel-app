<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::post('follow/{user}', 'App\Http\Controllers\FollowsController@store');
Route::post('like/{user}', 'App\Http\Controllers\LikeController@store');

Route::get('/','App\Http\Controllers\PostsController@index');
Route::get('/p/create', 'App\Http\Controllers\PostsController@create');
Route::get('/p/{post}','App\Http\Controllers\PostsController@show');

Route::post('/p', 'App\Http\Controllers\PostsController@store');

Route::get('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
