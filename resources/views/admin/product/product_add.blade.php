@extends('admin.admin_master')
@section('content')
<div class="container-full">
    <!-- Main content -->
    <section class="content">

     <!-- Basic Forms -->
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Add Products</h4>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col">
                <form novalidate>
                  <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Brands List</h5>
                                    <div class="controls">
                                        <select name="brands_id"
                                        id="" class="form-control">
                                            <option selected="" disabled="">--- Pilih Brands ---</option>
                                            @foreach ($brands as $item)
                                                <option value="{{ $item->id }}"
                                                    {{-- {{ $category->id == $subsubcategory->category_id ?
                                                    'selected' : ''}} --}}
                                                    >{{ $item->brand_name_en }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('brands_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Category List</h5>
                                    <div class="controls">
                                        <select name="category_id"
                                        id="" class="form-control">
                                            <option selected="" disabled="">--- Pilih Category ---</option>
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}"
                                                    {{-- {{ $category->id == $subsubcategory->category_id ?
                                                    'selected' : ''}} --}}
                                                    >{{ $item->category_name_en }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Sub-Category List</h5>
                                    <div class="controls">
                                        <select name="subcategory_id"
                                        id="" class="form-control">
                                            <option selected="" disabled="">--- Pilih Sub-Category ---</option>
                                        </select>
                                        @error('subcategory_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Sub->SubCategory</h5>
                                    <div class="controls">
                                        <select name="subsubcategory_id"
                                        id="" class="form-control">
                                            <option selected="" disabled="">--- Pilih Sub-SubCategory ---</option>
                                            {{-- @foreach ($brands as $item)
                                                <option value="{{ $item->id }}"
                                                    {{-- {{ $category->id == $subsubcategory->category_id ?
                                                    'selected' : ''}}
                                                    >{{ $item->brand_name_en }}
                                                </option>
                                            @endforeach --}}
                                        </select>
                                        @error('subsubcategory_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Product Name En</h5>
                                    <div class="controls">
                                        <input type="text" name="product_name_en" class="form-control">
                                        @error('product_name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Product Name Ind</h5>
                                    <div class="controls">
                                            <input type="text" name="product_name_ind" class="form-control">
                                        @error('product_name_ind')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Product Code</h5>
                                    <div class="controls">
                                        <input type="text" name="product_code" class="form-control">
                                        @error('product_code')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Product Quantity</h5>
                                    <div class="controls">
                                        <input type="text" name="product_qty" class="form-control">
                                        @error('product_qty')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Product Selling Price</h5>
                                    <div class="controls">
                                            <input type="text" name="selling_price" class="form-control">
                                        @error('selling_price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Product Discount Price</h5>
                                    <div class="controls">
                                        <input type="text" name="discount_price" class="form-control">
                                        @error('discount_price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Thubmnail Products</h5>
                                    <div class="controls">
                                        <input type="file" name="product_thumbnail" class="form-control" required>

                                        @error('product_thumbnail')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Multiple Image</h5>
                                    <div class="controls">
                                            <input type="text" name="multiple_img[]" class="form-control">

                                        @error('multiple_img[]')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Deskripsi Singkat Bhasa Inggris</h5>
                                    <div class="controls">
                                        <textarea name="short_descp_en" class="form-control"
                                        placeholder="masukkan deskripsi ">
                                        </textarea>
                                        @error('short_descp_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Deskripsi Singkat Indonesia</h5>
                                    <div class="controls">
                                        <textarea name="short_descp_ind" class="form-control"
                                        placeholder="masukkan deskripsi indo ">
                                        </textarea>
                                        @error('short_descp_ind')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Deskripsi Panjang Bhasa Inggris</h5>
                                    <div class="controls">
                                        <textarea id="editor1" name="long_descp_en" rows="10" cols="80">
                                            Spesifikasi barang:
                                        </textarea>
                                        @error('long_descp_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Deskripsi Panjang Indonesia</h5>
                                    <div class="controls">
                                        <textarea id="editor2" name="long_descp_ind" rows="10" cols="80">
                                            Spesifikasi barang:
                                        </textarea>
                                        @error('long_descp_ind')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <h5>Email Field <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
                        </div>
                        <div class="form-group">
                            <h5>File Input Field <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="file" name="file" class="form-control" required> </div>
                        </div>
                        <div class="form-group">
                            <h5>Basic Select <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <select name="select" id="select" required class="form-control">
                                    <option value="">Select Your City</option>
                                    <option value="1">India</option>
                                    <option value="2">USA</option>
                                    <option value="3">UK</option>
                                    <option value="4">Canada</option>
                                    <option value="5">Dubai</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Textarea <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <textarea name="textarea" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>
                            </div>
                        </div>
                    </div>
                  </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5>Checkbox <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="checkbox" id="checkbox_1" required value="single">
                                    <label for="checkbox_1">Check this custom checkbox</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5>Checkbox Group <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <fieldset>
                                        <input type="checkbox" id="checkbox_2" required value="x">
                                        <label for="checkbox_2">I am unchecked Checkbox</label>
                                    </fieldset>
                                    <fieldset>
                                        <input type="checkbox" id="checkbox_3" value="y">
                                        <label for="checkbox_3">I am unchecked too</label>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-xs-right">
                        <input type="submit" value="Add Data"
                                class="btn btn-primary btn-rounded
                                mb-5">
                    </div>
                </form>

            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
@endsection
