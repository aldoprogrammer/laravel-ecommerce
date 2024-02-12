<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function viewSubCategory()
    {
        $categories = Category::orderby('category_name_en', 'ASC')->get();
        $subcategory = SubCategory::latest()->get();
        return view('admin.category.subcategory_view', compact('subcategory', 'categories'));
    }


    public function subCategoryStore(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'subcategory_name_en' => 'required',
            'subcategory_name_ind' => 'required',
        ],
        [
            'subcategory_name_en.required' => 'Input subcategory En Wajib Diisi',
            'subcategory_name_ind.required' => 'Input subcategory Ind Wajib Diisi',
            'category_id.required' => 'Kategori harap dipilih',
        ]

    );


    SubCategory::insert([
        'category_id' => $request->category_id,
        'subcategory_name_en' => $request->subcategory_name_en,
        'subcategory_name_ind' => $request->subcategory_name_ind,
        'subcategory_slug_en' => strtolower(str_replace(' ', '-', $request->subcategory_name_en)),
        'subcategory_slug_ind' => strtolower(str_replace(' ', '-', $request->subcategory_name_ind)),
    ]);


        $notification = array(
            'message' => 'SubCategory Data Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }


    public function subCategoryEdit($id)
    {
        $categories = Category::orderby('category_name_en', 'ASC')->get();
        $subcategory = SubCategory::findOrFail($id);
        return view('admin.category.subcategory_edit', compact('subcategory', 'categories'));
    }


}
