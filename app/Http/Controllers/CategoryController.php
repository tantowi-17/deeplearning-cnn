<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $category = Category::all();

        $this->data['title'] = 'Category | ' . config('app.name');
        $this->data['description'] = '';
        $this->data['keywords'] = '';

        $this->data['categories'] = $category;

        return view('category/index', $this->data);
    }
}
