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

Route::get('/user/{id}',function($id){
    $user=\App\Models\User::findOrfail($id);
    dd($user->profile);
});

Route::get('/profile/{id}',function($id){
    $profile=\App\Models\profile::findOrfail($id);
    dd($profile->user);
});

Route::get('/user/{id}/post',function($id){
    $user=\App\Models\User::findOrfail($id);
    dd($user->post);
});

Route::get('/post/{id}/user',function($id){
    $post=\App\Models\post::findOrfail($id);
    dd($post->user);
});

Route::get('/posts/{id}/categories',function($id){
    $post=\App\Models\post::findOrfail($id);
    dd($post->categories);
});

Route::get('/categories/{id}/posts',function($id){
    $categories=\App\Models\category::findOrfail($id);
    dd($categories->posts);
});