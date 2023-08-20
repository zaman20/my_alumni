<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;



Route::get('/',[AppController::class,'homePage']);
Route::get('/events',function(){ return view('events');});
Route::get('/news',function(){return view('news');});
Route::get('/dashboard',function(){return view('backend.dashboard');});
Route::get('/all-post',[AppController::class,'showPost']);
Route::get('/create-post',function(){return view('backend.add-post');});
Route::get('/all-account',[AppController::class,'allUser']);
Route::get('/create-user',function(){return view('backend.add-user');});
Route::get('/all-message',function(){return view('backend.message');});
Route::get('/admin',function(){ return view('backend.login');});
Route::get('/login',function(){ return view('loginfront');});
Route::get('/register',function(){ return view('register');});

Route::post('/add-post',[AppController::class,'addPost']);
Route::post('/dlt-post',[AppController::class,'dltPost']);
Route::get('/edit-post/{id}',[AppController::class,'editPost']);
Route::post('/edit-post-submit',[AppController::class,'updatePost']);
Route::get('/post-single/{id}',[AppController::class,'singlePost']);
Route::get('/contact-us',[AppController::class,'contactUs']);
Route::post('/register-user',[AppController::class,'registerUser']);
