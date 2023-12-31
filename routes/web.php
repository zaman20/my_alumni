<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;



Route::get('/',[AppController::class,'homePage']);
Route::get('/events',[AppController::class,'events']);
Route::get('/news',[AppController::class,'news']);
Route::get('/jobs',[AppController::class,'jobs']);
Route::get('/dashboard',[AppController::class,'dashboard']);
Route::get('/all-post',[AppController::class,'showPost']);
Route::get('/create-post',function(){return view('backend.add-post');});
Route::get('/all-account',[AppController::class,'allUser']);
Route::get('/create-user',function(){return view('backend.add-user');});
Route::get('/all-message',[AppController::class,'viewMessage']);
Route::get('/admin',function(){ return view('backend.login');});
Route::get('/login',function(){ return view('loginfront');});
Route::get('/register',function(){ return view('register');});
Route::get('/job-post-member',function(){ return view('job-post');});
Route::get('/about-us',function(){ return view('about');});
Route::get('/sponsor',function(){ return view('sponsor');});
Route::get('/gallery',function(){ return view('gallery');});
Route::get('/read-message/{id}',[AppController::class,'readMessage']);
Route::post('/delete-message',[AppController::class,'deleteMessage']);


Route::post('/add-post',[AppController::class,'addPost']);
Route::post('/dlt-post',[AppController::class,'dltPost']);
Route::get('/edit-post/{id}',[AppController::class,'editPost']);
Route::post('/edit-post-submit',[AppController::class,'updatePost']);
Route::get('/post-single/{id}',[AppController::class,'singlePost']);
Route::get('/contact-us',[AppController::class,'contactUs']);
Route::post('/send-message',[AppController::class,'sendMessage']);
Route::post('/register-user',[AppController::class,'registerUser']);
Route::post('/check-login',[AppController::class,'checkLogin']);
Route::post('/approve-member',[AppController::class,'approveMember']);
Route::get('/members',[AppController::class,'members']);
Route::post('/search-member',[AppController::class,'searchMembers']);
Route::get('/logout-member',[AppController::class,'logout']);
