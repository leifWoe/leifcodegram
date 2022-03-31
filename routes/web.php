<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
//use App\Http\Controllers\PostsController; -> wird nicht gebraucht

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

Auth::routes();

Route::get('/p/{post}', 'App\Http\Controllers\PostsController@show');
Route::get('/p/create', 'App\Http\Controllers\PostsController@create');
Route::post('/p', 'App\Http\Controllers\PostsController@store');

Route::get('/profile/{user}', 'App\Http\Controllers\ProfilesController@index')->name('profile.show');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');