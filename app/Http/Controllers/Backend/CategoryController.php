<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function viewCategory()
    {
        $category = Category::latest()->get();
        return view('admin.category.category_view', compact('category'));
    }

    public function categoryStore(Request $request)
    {
        $request->validate([
            'category_name_en' => 'required',
            'category_name_ind' => 'required',
            'category_icon' => 'required',
        ],
        [
            'category_name_en.required' => 'Input category En Wajib Diisi',
            'category_name_ind.required' => 'Input category Ind Wajib Diisi',
            'category_icon.required' => 'Input category Icon Wajib Diisi',
        ]
    );
        Category::insert([
            'category_name_en' => $request->category_name_en,
            'category_name_ind' => $request->category_name_ind,
            'category_slug_en' => strtolower(str_replace(' ', '-', $request->category_name_en)),
            'category_slug_ind' => strtolower(str_replace(' ', '-', $request->category_name_ind)),
            'category_icon' => $request->category_icon,
        ]);

        $notification = array(
            'message' => 'Category Data Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function categoryEdit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.category_edit', compact('category'));
    }

    public function categoryUpdate(Request $request, $id)
    {
        Category::findOrFail($id)->update([
            'category_name_en' => $request->category_name_en,
            'category_name_ind' => $request->category_name_ind,
            'category_slug_en' => strtolower(str_replace(' ', '-', $request->category_name_en)),
            'category_slug_ind' => strtolower(str_replace(' ', '-', $request->category_name_ind)),
            'category_icon' => $request->category_icon,
        ]);

        $notification = array(
            'message' => 'Category Data Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.category')->with($notification);
    }
}
