<?php

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

Route::get('/', function () { return view('welcome');})->name('home');
Route::get('/about',function () {return view('about');})->name('about');
Route::get('/articles',function () {return view('articles.index');})->name('articles');
Route::get('/six-reasons-to-never-learn-programming',function () {return view('articles.firstart');})->name('firstart');
Route::get('/how-to-manage-my-time-and-be-more-productive',function () {return view('articles.secondart');})->name('secondart');
Route::get('/how-to-start-learning-programming',function () {return view('articles.thirdart');})->name('thirdart');
