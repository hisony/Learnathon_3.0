<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});




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


Route::get('/admin',function(){
    return view("admin");
});

// Route::get('/courses',function(){
//     return view("courses");
// });


Route::post('/add', [UserController::class,'addUser']);

Route::post('/addCourse', [CourseController::class,'addCourse']);

Route::get('/courses', [CourseController::class,'courses']);
Route::get('/offeredCourses', [CourseController::class,'offeredCourses']);

Route::post('/logged', [UserController::class,'loginCheck']);

