<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Auth::routes();

Route::post('follow/{user}', 'App\Http\Controllers\FollowsController@store');

Route::get('/', 'App\Http\Controllers\PostsController@index');

Route::get('p/{post}', 'App\Http\Controllers\PostsController@show');
Route::get('create', 'App\Http\Controllers\PostsController@create');
Route::post('p', 'App\Http\Controllers\PostsController@store')->name('storePost');

Route::get('/profile/{user}', 'App\Http\Controllers\ProfilesController@index')->name('profile.show');

Route::get('/profile/{user}/edit', 'App\Http\Controllers\ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'App\Http\Controllers\ProfilesController@update')->name('profile.update');
