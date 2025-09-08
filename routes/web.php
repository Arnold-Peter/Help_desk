<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth\AuthenticationContoller;

Route::get('/', [App\Http\Controllers\Auth\AuthenticationContoller::class, 'login_form']);
Route::get('/registration', [App\Http\Controllers\Auth\AuthenticationContoller::class, 'register_form'])->name('reg');
Route::get('/test', [App\Http\Controllers\Auth\AuthenticationContoller::class, 'test']);
Route::post('/register',[App\Http\Controllers\Auth\AuthenticationContoller::class, 'registration'])->name('register');
Route::post('/login',[App\Http\Controllers\Auth\AuthenticationContoller::class, 'login'])->name('login');
Route::get('/staff/dashboard',[App\Http\Controllers\StaffController::class, 'index'])->name('staff-dashboard');
Route::get('/customer/dashboard',[App\Http\Controllers\CustomerController::class, 'index'])->name('customer-dashboard');
Route::get('/admin/dashboard',[App\Http\Controllers\AdminController::class, 'index'])->name('admin-dashboard');

