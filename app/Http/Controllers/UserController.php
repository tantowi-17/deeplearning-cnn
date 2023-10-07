<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();

        $this->data['title'] = 'Users | ' . config('app.name');
        $this->data['description'] = '';
        $this->data['keywords'] = '';

        $this->data['users'] = $users;

        return view('user/index', $this->data);
    }
}
