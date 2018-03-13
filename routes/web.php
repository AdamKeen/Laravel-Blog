<?php

use App\Post;
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

  $posts = Post::orderBy('created_at', 'asc')->get();

  return view('home', [
      'posts' => $posts,
  ]);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Admin Routes

Route::get('/admin', function () {

  return view('admin/home');

})->middleware('auth');

Route::get('/admin/posts', function () {

  $posts = Post::orderBy('created_at', 'asc')->get();

  return view('admin/posts', [
      'posts' => $posts,
  ]);

})->middleware('auth');

Route::get('/admin/posts/new', function () {

  return view('admin/new-post');

})->middleware('auth');

Route::post('/admin/posts/create', function (Request $request) {

  $validator = Validator::make($request->all(), [
    'title' => 'required|max:255',
    'description' => 'required|max:255',
    'slug' => 'required|max:100',
    'author' => 'required|max:50',
    'content' => 'required',
  ]);

  if ($validator->fails()) {
      return redirect('/')
          ->withInput()
          ->withErrors($validator);
  }

  $post = new post;
  $post->title = $request->title;
  $post->description = $request->description;
  $post->slug = $request->slug;
  $post->author = $request->author;
  $post->content = $request->content;
  $post->save();

  return redirect('/admin/posts');

})->middleware('auth');

Route::get('/admin/posts/edit/{post}', function (Post $post) {

  return view('admin/edit-post', [
			'post' => $post,
	]);

})->middleware('auth');

Route::delete('/admin/posts/delete/{post}', function (Post $post) {

  $post->delete();
	return redirect('/admin/posts');

})->middleware('auth');
