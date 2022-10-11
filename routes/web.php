<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Danhmuc;
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;
use App\Http\Controllers\Admin\Users\LoginController;

Route::get('admin/users/login', [LoginController::class, 'index']);
Route::post('admin/users/login/store', [LoginController::class, 'store'])->name('admin.users.store');

Route::get('admin/main', [MainController::class, 'index'])->name('admin');
