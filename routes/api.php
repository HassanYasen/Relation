<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('/user/{id}/profile', [UserController::class, 'show']);
Route::get('/user/{id}/post', [UserController::class, 'show1']);
Route::get('/post/{id}/category', [UserController::class, 'show2']);
