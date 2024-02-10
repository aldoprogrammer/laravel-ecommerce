<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function viewCategory()
    {
        $category = Category::latest()->get();
        return view('admin.category.category_view', compact('category'));
    }
}
