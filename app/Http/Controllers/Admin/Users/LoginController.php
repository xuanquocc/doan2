<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.users.login', [
            'title' => 'Đăng Nhập Hệ Thống',
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // $hashed = Hash::make($request->password);
        
        $email = $request->email;
        $password = $request->password;

        $users = DB::table('users')->get();
        foreach($users as $user) {
            if (Hash::check($password, $user->password) && $email == $user->email) {
                return redirect()->route('admin');
            }
        }
        return redirect()->back();
    }
}
