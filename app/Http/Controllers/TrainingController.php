<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index(Request $request)
    {
        $report = Training::all();

        $this->data['title'] = 'Training | ' . config('app.name');
        $this->data['description'] = '';
        $this->data['keywords'] = '';

        $this->data['train'] = $report;

        return view('training/index', $this->data);
    }
}
