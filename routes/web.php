<?php

use App\Posts;
use Illuminate\Http\Request;

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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Admin Routes

Route::get('/admin', function () {

  return view('admin/home');

})->middleware('auth');

Route::get('/admin/posts', function () {

  return view('admin/posts');

})->middleware('auth');

Route::get('/admin/posts/new', function () {

  return view('admin/new-post');

})->middleware('auth');

Route::get('/admin/posts/create', function () {

  // Post creation logic

})->middleware('auth');

Route::get('/admin/posts/edit/{post}', function () {

  return view('admin/edit-post');

})->middleware('auth');

Route::get('/admin/posts/delete/{post}', function () {

  // Delete logic

})->middleware('auth');
