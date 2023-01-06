<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\commentController;

//==================================================================//
//---------------------*TEMPLATE*-----------------------------------//
//==================================================================//

Route::get('/',[UserController::class,'index'])->name('index');
Route::get('About',[UserController::class,'about'])->name('about');
Route::get('blog',[UserController::class,'blog'])->name('blog');
Route::get('postdetails/{id}',[UserController::class,'postdetails'])->name('postdetails');
Route::get('viewCategory/{id}',[UserController::class,'viewCategory'])->name('viewCategory');
Route::get('contact',[UserController::class,'contact'])->name('contact');


//==================================================================//
//----------------------authguard-----------------------------------//
//==================================================================//
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/login/blogger', [LoginController::class,'showBloggerLoginForm']);
Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);
Route::get('/register/blogger', [RegisterController::class,'showBloggerRegisterForm']);

Route::post('/login/admin', [LoginController::class,'adminLogin']);
Route::post('/login/blogger', [LoginController::class,'bloggerLogin']);
Route::post('/register/admin', [RegisterController::class,'createAdmin']);
Route::post('/register/blogger', [RegisterController::class,'createBlogger']);

Route::group(['middleware' => 'auth:blogger'], function () {
    Route::view('/blogger', 'blogger');
});

Route::group(['middleware' => 'auth:admin'], function () {
    
    Route::view('/admin', 'admin');
});

Route::get('logout', [LoginController::class,'logout']);

//==================================================================//
//--------------------------BlogCrud--------------------------------//
//==================================================================//

Route::get('students', [StudentController::class, 'index'])->name('students');
Route::get('add-student', [StudentController::class, 'create']);
Route::post('add-student', [StudentController::class, 'store']);
Route::get('edit-student/{id}', [StudentController::class, 'edit']);
Route::put('update-student/{id}', [StudentController::class, 'update']);
Route::delete('delete-student/{id}', [StudentController::class, 'destroy']);

//=====================================================================//
//----------------------Contact_Crud-----------------------------------//
//=====================================================================//

Route::get('contacts', [ContactController::class, 'index'])->name('contacts');
Route::get('add-contact', [ContactController::class, 'create']);
Route::post('add-contact', [ContactController::class, 'store'])->name('contact-store');
Route::get('edit-contact/{id}', [ContactController::class, 'edit']);
Route::put('update-contact/{id}', [ContactController::class, 'update']);
Route::delete('delete-contact/{id}', [ContactController::class, 'destroy']);


//======================================================================//
//----------------------ctegories_Crud-----------------------------------//
//======================================================================//


Route::get('categorys', [CategoryController::class, 'index'])->name('categorys');
Route::get('add-category', [CategoryController::class, 'create']);
Route::post('add-category', [CategoryController::class, 'store']);
Route::get('edit-category/{id}', [CategoryController::class, 'edit']);
Route::put('update-category/{id}', [CategoryController::class, 'update']);
Route::delete('delete-category/{id}', [CategoryController::class, 'destroy']);

//======================================================================//
//----------------------Comment-----------------------------------//
//======================================================================//

Route::get('comments', [commentController::class, 'index'])->name('comments');
Route::get('add-comment', [commentController::class, 'create']);
Route::post('add-comment', [commentController::class, 'store'])->name('add-comment');
Route::get('edit-comment/{id}', [commentController::class, 'edit']);
Route::put('update-comment/{id}', [commentController::class, 'update']);
Route::delete('delete-comment/{id}', [commentController::class, 'destroy']);

//======================================================================//
//----------------------admin dashboard-----------------------------------//
//======================================================================//