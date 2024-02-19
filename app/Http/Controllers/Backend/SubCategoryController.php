<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
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


    public function subCategoryUpdate(Request $request, $id)
    {
        SubCategory::findOrFail($id)->update([
            'category_id' => $request->category_id,
            'subcategory_name_en' => $request->subcategory_name_en,
            'subcategory_name_ind' => $request->subcategory_name_ind,
            'subcategory_slug_en' => strtolower(str_replace(' ', '-', $request->category_name_en)),
            'subcategory_slug_ind' => strtolower(str_replace(' ', '-', $request->category_name_ind)),
        ]);

        $notification = array(
            'message' => 'SubCategory Data Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.subcategory')->with($notification);
    }


    public function subCategoryDelete($id)
    {
        SubCategory::findOrFail($id)->delete();
        $notification = array(
            'message' => 'SubCategory Data Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function subSubCategory()
    {
        $categories = Category::orderby('category_name_en', 'ASC')->get();
        $subsubcategory = SubSubCategory::latest()->get();
        return view('admin.category.sub_subcategory_view', compact('subsubcategory', 'categories'));
    }


    public function getSubCategoryAjax($category_id)
    {
        $subcategory = SubCategory::where('category_id', $category_id)->orderBy('subcategory_name_en',
        'ASC')->get();
        return json_encode($subcategory);
    }


    public function subSubCategoryStore(Request $request)
    {
        // $data = [
        //     'category_id' => $request->category_id,
        //     'subcategory_id' => $request->subcategory_id,
        //     'subsubcategory_name_en' => $request->subsubcategory_name_en,
        //     'subsubcategory_name_ind' => $request->subsubcategory_name_ind,
        //     'subsubcategory_slug_en' => strtolower(str_replace(' ', '-', $request->subsubcategory_name_en)),
        //     'subsubcategory_slug_ind' => strtolower(str_replace(' ', '-', $request->subsubcategory_name_ind)),
        // ];
        // dd($data);

        $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'subsubcategory_name_en' => 'required',
            'subsubcategory_name_ind' => 'required',
        ],
        [
            'subsubcategory_name_en.required' => 'Input subsubcategory En Wajib Diisi',
            'subsubcategory_name_ind.required' => 'Input subsubcategory Ind Wajib Diisi',
            'category_id.required' => 'Kategori harap dipilih',
            'subcategory_id.required' => 'Sub Kategori harap dipilih',
        ]);

        SubSubCategory::insert([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'subsubcategory_name_en' => $request->subsubcategory_name_en,
            'subsubcategory_name_ind' => $request->subsubcategory_name_ind,
            'subsubcategory_slug_en' => strtolower(str_replace(' ', '-', $request->subsubcategory_name_en)),
            'subsubcategory_slug_ind' => strtolower(str_replace(' ', '-', $request->subsubcategory_name_ind)),
        ]);


            $notification = array(
                'message' => 'Sub-SubCategory Data Inserted Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        }


}
