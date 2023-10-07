<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::user()) {
            $this->data['title'] = 'Main | ' . config('app.name');
            $this->data['description'] = '';
            $this->data['keywords'] = '';

            return view('layout/dashboard', $this->data);
        } else {
            return redirect(route('login'));
        }
    }
}
