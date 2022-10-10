<?php

use App\Http\Controllers\Danhmuc;
use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;
use App\Http\Controller\Admin\Users\LoginController;

Route::get('admin/users/login', [LoginController::class, 'index']);
