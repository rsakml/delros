<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\ProjectDetailController;
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
Route::get('/',[HomeController::class,'home'])->name('index');

Route::get('/contact',[ContactController::class,'contact1'])->name('contact');

Route::get('/blog',[BlogController::class,'blog1'])->name('blog');

Route::get('/blog-detail',[BlogDetailController::class,'blogDetail1'])->name('blog-detail');

Route::get('/project-detail',[ProjectDetailController::class,'projectDetail1'])->name('project-detail');


//ubah route bbbb