<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\VacanciesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UpdateProfileController;



Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::post('/dashboard',[DashboardController::class,'update_profile']);
Route::post('/profile_picture',[UpdateProfileController::class,'update'])->name('profile.change');

Route::resource('vacancies', VacanciesController::class);
Route::resource('category', CategoryController::class);

Route::resource('programs', ProgramsController::class);

Route::resource('blog', BlogController::class);

Route::get('/gallery',[GalleryController::class,'index'])->name('gallery');

Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/contact',[ContactController::class,'index'])->name('contact');

//auth
Route::post('/login',[LoginController::class,'store'])->name('login');
Route::post('/logout',[LogoutController::class,'store'])->name('logout');


Route::get('/test/blog',[BlogController::class, 'test'])->name('test.blog');




