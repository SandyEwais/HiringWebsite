<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\UsersController;

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

Route::get('/',[JobsController::class,'index'])->name('index');
Route::get('/create-jobs',[JobsController::class,'create'])->name('create-jobs');
Route::post('/store-job',[JobsController::class,'store'])->name('store-job');
Route::get('/show-jobs',[JobsController::class, 'show'])->name('show-jobs');
Route::post('/filtering',[JobsController::class, 'filter'])->name('filter');

Route::get('about/about-us',[UsersController::class, 'about'])->name('about'); //marked!
Route::get('/contact',[UsersController::class, 'contact'])->name('contact');

Route::post('/store-message',[MessagesController::class,'store'])->name('store-message');
Route::get('/messages',[MessagesController::class, 'show'])->name('show-messages');

Route::post('/view',[MessagesController::class,'showModal'])->name('showModal');

