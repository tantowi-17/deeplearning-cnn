<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::user()) {
            if(Auth::user()->role == 'admin') {
                return redirect(route('dashboard'));
            }

            $this->data['title'] = 'Main | ' . config('app.name');
            $this->data['description'] = '';
            $this->data['keywords'] = '';

//            return view('home/user/index', $this->data);

        } else {
            return redirect(route('login'));
        }
    }
}
