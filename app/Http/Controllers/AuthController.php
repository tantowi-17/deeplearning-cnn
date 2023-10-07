<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
		 if(Auth::user()) {
             if(Auth::user()->role == 'admin') {
                 return redirect(route('dashboard'));
             } else {
                 return redirect('dashboard');
             }
		 }

         $this->data['title'] = 'Login | ' . config('app.name');
         $this->data['description'] = '';
         $this->data['keywords'] = '';

        return view('auth/login');
    }

    public function login_process(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        $data = [
            'name' => $request->name,
            'password' => $request->password
        ];
        if (Auth::attempt($data)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('failed','Email atau password salah !');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
