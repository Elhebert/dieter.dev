<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', fn () => view('welcome'))->name('home');
Route::get('/career', fn () => view('career'))->name('career');
Route::get('/uses', fn () => view('uses'))->name('uses');
Route::get('/blog/{slug}', [PostsController::class, 'show'])->name('blog');
Route::get('/resume', [ResumeController::class, 'show'])->name('resume');
