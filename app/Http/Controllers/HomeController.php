<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $epochTenCount10 = Training::where('epoch', 10)->count();
        $epochTenCount20 = Training::where('epoch', 20)->count();
        $epochTenCount50 = Training::where('epoch', 50)->count();
        $epochTenCount100 = Training::where('epoch', 100)->count();

        $epoch10Accuracy = Training::where('epoch', 10)
            ->max('accuracy');
        $epoch20Accuracy = Training::where('epoch', 20)
            ->max('accuracy');
        $epoch50Accuracy = Training::where('epoch', 50)
            ->max('accuracy');
        $epoch100Accuracy = Training::where('epoch', 100)
            ->max('accuracy');

        if(Auth::user()) {
            $this->data['title'] = 'Dashboard | ' . config('app.name');
            $this->data['description'] = '';
            $this->data['keywords'] = '';

            $this->data['epochTenCount10'] = $epochTenCount10;
            $this->data['epochTenCount20'] = $epochTenCount20;
            $this->data['epochTenCount50'] = $epochTenCount50;
            $this->data['epochTenCount100'] = $epochTenCount100;

            $this->data['epoch10Accuracy'] = round($epoch10Accuracy, 2);
            $this->data['epoch20Accuracy'] = round($epoch20Accuracy, 2);
            $this->data['epoch50Accuracy'] = round($epoch50Accuracy, 2);
            $this->data['epoch100Accuracy'] = round($epoch100Accuracy, 2);

            return view('layout/dashboard', $this->data);
        } else {
            return redirect(route('login'));
        }
    }
}
