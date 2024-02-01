<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $report = Report::all();

        $this->data['title'] = 'Report | ' . config('app.name');
        $this->data['description'] = '';
        $this->data['keywords'] = '';

        $this->data['reports'] = $report;

        return view('report/index', $this->data);
    }
}
