<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\userController::class, 'login_form']);
Route::get('/registration', [App\Http\Controllers\userController::class, 'register_form'])->name('registration');
Route::post('/login', [App\Http\Controllers\userController::class, 'login'])->name('login');
Route::post('/register', [App\Http\Controllers\userController::class, 'registration'])->name('reg');
Route::get('/admin/dashboard',[App\Http\Controllers\AdminController::class, 'index'])->name('admin_dashboard');
Route::get('/staff/dashboard',[App\Http\Controllers\StaffController::class, 'index'])->name('Staff_dashboard');
Route::get('/customer/dashboard', [App\Http\Controllers\CustomerController::class, 'index']);
Route::get('/admin/add', [App\Http\Controllers\AddController::class, 'index'])->name('Add_User');
Route::get('/admin/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('Profile');
Route::get('/admin/report', [App\Http\Controllers\ReportController::class, 'index'])->name('Report');



