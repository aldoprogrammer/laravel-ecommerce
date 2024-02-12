<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function viewSubCategory()
    {
        $subcategory = SubCategory::latest()->get();
        return view('admin.category.subcategory_view', compact('subcategory'));
    }
}
