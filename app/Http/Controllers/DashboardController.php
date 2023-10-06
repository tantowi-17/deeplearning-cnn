<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function __construct() {
        if(!Auth::user()) {
            return redirect(route('login'));
        }

    }

    public function index(Request $request)
    {
        $this->data['title'] = 'Dashboard | ' . config('app.name');
        $this->data['description'] = '';
        $this->data['keywords'] = '';

        $this->data['page_title'] = 'Home';

        return view('layout/dashboard', $this->data);
    }
}
