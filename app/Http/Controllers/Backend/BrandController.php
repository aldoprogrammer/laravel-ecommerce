<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BrandController extends Controller
{
    public function viewBrand()
    {
        $brands = Brand::latest()->get();
        return view('admin.brands.brand_view', compact('brands'));
    }

    public function brandStore(Request $request)
    {
        $request->validate([
            'brand_name_en' => 'required',
            'brand_name_ind' => 'required',
            'brand_image' => 'required',
        ],
        [
            'brand_name_en.required' => 'Input Brand En Wajib Diisi',
            'brand_name_ind.required' => 'Input Brand Ind Wajib Diisi',
            'brand_image.required' => 'Input Brand Image Wajib Diisi',
        ]
    );
        $image = $request->file('brand_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/brand/'.$name_gen);
        $save_url = 'upload/brand/'.$name_gen;
        Brand::insert([
            'brand_name_en' => $request->brand_name_en,
            'brand_name_ind' => $request->brand_name_ind,
            'brand_slug_en' => strtolower(str_replace(' ', '-', $request->brand_name_en)),
            'brand_slug_ind' => strtolower(str_replace(' ', '-', $request->brand_name_ind)),
            'brand_image' => $save_url,
        ]);

        $notification = array(
            'message' => 'Brand Data Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);



    }
}
