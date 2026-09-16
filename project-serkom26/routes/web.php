<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/tables', function () { return view('tables');});
Route::get('/charts', function () { return view('charts');});
Route::get('/layout-static', function () { return view('layout-static');});
Route::get('/layout-sidenav-light', function () { return view('layout-sidenav-light');});
Route::get('/login', function () { return view('login');});
Route::get('/register', function () { return view('register');});
Route::get('/password', function () { return view('password');});
