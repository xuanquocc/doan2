<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index1(){
        return view('admin.users.register',[
            'title' => 'Trang Đăng Ký'
        ]);
    }
}
