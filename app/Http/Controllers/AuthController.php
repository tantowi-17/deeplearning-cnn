<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Validator;

class AuthController extends Controller
{
    public function __construct()
    {
        //
    }

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

    public function loginprocess(Request $request)
    {
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            return response()->json(
                [
                    'success' => true,
                    'redirect' => '/dashboard'
                ]
            );
        }

        return response()->json(['success' => false]);
    }

    // public function processLogin(Request $request)
    // {
    //     if($request->ajax()) {

    //         $rules = [
    //             'email' => 'required|email',
    //             'password' => 'required'
    //         ];

    //         $validator = validator()->make(request()->all(), $rules);

    //         if ($validator->fails()) {

    //             return response()->json([
    //                 'success' => false,
    //                 'message' => 'Harap Masukkan Email dan Password Yang Valid'
    //             ], 200);

    //         } else {

    //             $email      = $request->input('email');
    //             $password   = $request->input('password');

    //             if(Auth::guard('web')->attempt(['email' => $email, 'password' => $password], true)) {

    //                 if(Auth::user()->role == 'ADMIN') {
    //                     $url = url('dashboard');
    //                 } else {
    //                     $url = url('home');
    //                 }

    //                 return response()->json([
    //                     'success' => true,
    //                     'redirectTo' => $url,
    //                     'message' => 'Silahkan Klik Untuk Melanjutkan'
    //                 ], 200);
    //             } else {
    //                 return response()->json([
    //                     'success' => false,
    //                     'message' => 'Kombinasi Email dan Password Tidak Sesuai'
    //                 ], 200);
    //             }

    //         }

    //     }
    // }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect(route('login'));
    }
}
