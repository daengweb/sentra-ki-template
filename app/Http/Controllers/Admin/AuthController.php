<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showFormLogin(){
        return view('admin.auth.login');
    }

    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|string'
        ]);
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('admin/dashboard');
        }
        return redirect()->back()->withInput()->withErrors(['email' => 'Email or password is incorrect.']);

    }
        
}
