<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


// Route::view("/abbas","test");

Route::get('/login',function(){
    return view("login");
});

Route::get('/registration',function(){
    return view("registration");
});


Route::get('/student',function(){
    return view("student");
});


Route::get('/teacher',function(){
    return view("teacher");
});


Route::get('/instructor',function(){
    return view("instructor");
});


Route::post('/add', [UserController::class,'addUser']);

Route::post('/logged', [UserController::class,'loginCheck']);

