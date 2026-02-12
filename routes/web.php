<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\LoginController::class , 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class , 'login'])->name('login.submit');
Route::post('/logout', [App\Http\Controllers\LogoutController::class , 'logout'])->name('logout');

// Dashboard Routes
Route::middleware([\App\Http\Middleware\JwtMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', [\App\Http\Controllers\admin\AdminDashboardController::class , 'index'])->name('admin.dashboard');
    Route::get('/admin/users', [\App\Http\Controllers\admin\users\AdminUserController::class , 'index'])->name('admin.users');
    Route::post('/admin/users', [\App\Http\Controllers\admin\users\AdminUserController::class , 'store'])->name('admin.users.store');
    Route::put('/admin/users/{user}', [\App\Http\Controllers\admin\users\AdminUserController::class , 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{user}', [\App\Http\Controllers\admin\users\AdminUserController::class , 'destroy'])->name('admin.users.destroy');
    Route::view('/hr/dashboard', 'dashboards.hr.hr-dashboard')->name('hr.dashboard');
    Route::view('/employees/dashboard', 'dashboards.employees.employees-dashboard')->name('employees.dashboard');
});
