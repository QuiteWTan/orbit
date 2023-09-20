<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home');
})->name('Home');

Route::get('login', function () {
    return view('pages.auth.login');
})->name('auth.login.show');

Route::get('signup', function () {
    return view('pages.auth.signup');
})->name('auth.signup.show');

Route::get('discussion', function () {
    return view('pages.discussion.index');
})->name('index');

Route::get('discussion/details', function () {
    return view('pages.discussion.show');
})->name('show');

Route::get('discussion/create', function () {
    return view('pages.discussion.form');
})->name('dicussions.create');

Route::get('answers/1', function () {
    return view('pages.answers.form');
})->name('answers.edit');


Route::get('users/wete', function () {
    return view('pages.users.show');
})->name('profile');

Route::get('users/wete/edit', function () {
    return view('pages.users.form');
})->name('users.edit');