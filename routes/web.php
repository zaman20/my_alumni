<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/events',function(){ return view('events');});
Route::get('/news',function(){return view('news');});
Route::get('/dashboard',function(){return view('backend.dashboard');});
Route::get('/all-post',function(){return view('backend.posts');});
Route::get('/create-post',function(){return view('backend.add-post');});
Route::get('/all-account',function(){return view('backend.accounts');});
Route::get('/create-user',function(){return view('backend.add-user');});
Route::get('/all-message',function(){return view('backend.message');});
Route::get('/login',function(){ return view('backend.login');});
