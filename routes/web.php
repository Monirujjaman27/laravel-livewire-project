<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ExtrapagesController;
use App\Http\Livewire\Slider;
// use App\Http\Livewire\Post;
use App\Http\Controllers\backend\DashboardController;


Route::get('/', [HomeController::class, 'index'])->name('website.index');
Route::get('/resume-download/{file}', [HomeController::class, 'downloadResume'])->name('downloadResume');

// categoryBy portfolioi 
Route::get('/data/{id}', [HomeController::class, 'getProtfoliobyid'])->name('website.catById');


// contact page route 
Route::get('/contact', [HomeController::class, 'contact'])->name('website.contact');
// about page route 
Route::get('/about', [HomeController::class, 'about'])->name('website.about');
Route::get('/packages', [HomeController::class, 'packages'])->name('website.packages');
Route::get('/packageDetails', [HomeController::class, 'packageDetails'])->name('website.packageDetails');

// about page route 
Route::get('/projects', [HomeController::class, 'projects'])->name('website.projects');

Route::get('/code', [ExtrapagesController::class, 'code'])->name('website.code');

Route::get('/faq', [ExtrapagesController::class, 'faq'])->name('website.faq');


route::get('/dashboard', function ()
{
    return view('Dashboard');
})->name('dashboard');

// admin panel route


Route::get('/admin/slider', [DashboardController::class, 'slider'])->name('admin.slider');
// Route::get('/admin/post', Post::class);
