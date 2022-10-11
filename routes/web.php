<?php

use App\Http\Controllers\Admin\MainController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\Users\RegisterController;
use Illuminate\Support\Facades\Auth;

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::get('admin/users/register', [RegisterController::class, 'index1']);
Route::post('admin/users/login/store', [LoginController::class, 'store'])->name('admin.users.store');

Route::middleware(['auth'])->group(function () {
    Route::get('admin/main', [MainController::class, 'index'])->name('admin');
});
