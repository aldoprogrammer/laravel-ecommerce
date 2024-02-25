@extends('admin.admin_master')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Product Tags En</h5>
                                    <div class="controls">
                                        <input type="text" name="product_tags_en" class="form-control"
                                        data-role="tagsinput" value="Lorem,Ipsum,Amet">
                                        @error('product_tags_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Product Tags Ind</h5>
                                    <div class="controls">
                                        <input type="text" name="product_tags_ind" class="form-control"
                                        data-role="tagsinput" value="Lorem,Ipsum,Amet">
                                        @error('product_tags_ind')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Product Size En</h5>
                                    <div class="controls">
                                        <input type="text" name="product_size_en" class="form-control"
                                        data-role="tagsinput" value="XL,M,L">
                                        @error('product_size_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Product Size Ind</h5>
                                        <div class="controls">
                                            <input type="text" name="product_size_ind" class="form-control"
                                            data-role="tagsinput" value="XL,M,L">
                                            @error('product_size_ind')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Product Color En</h5>
                                    <div class="tags-default">
                                        <input type="text" name="product_color_en" class="form-control"
                                        data-role="tagsinput" value="Red,Blue,White">
                                        @error('product_color_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h5>Product Color Ind</h5>
                                    <div class="controls">
                                        <input type="text" name="product_color_ind" class="form-control"
                                        data-role="tagsinput" value="Merah,Biru,Putih">
                                        @error('product_color_ind')
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
                    </div>
                  </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="controls">
                                    <fieldset>
                                        <input type="checkbox" id="checkbox_2"
                                        value="1" name="hot_deals">
                                        <label for="checkbox_2">Hot Deals</label>
                                    </fieldset>
                                    <fieldset>
                                        <input type="checkbox" id="checkbox_3" value="1"
                                        name="featured">
                                        <label for="checkbox_3">Featured</label>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="controls">
                                    <fieldset>
                                        <input type="checkbox" id="checkbox_4"
                                         value="1" name="special_offer">
                                        <label for="checkbox_4">Special Offers</label>
                                    </fieldset>
                                    <fieldset>
                                        <input type="checkbox" id="checkbox_5" value="1"
                                        name="special_deals">
                                        <label for="checkbox_5">Special Deals</label>
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
  <script type="text/javascript">
    $(document).ready(function(){
        $('select[name="category_id"]').on('change', function(){
            var category_id = $(this).val();
            if(category_id){
                $.ajax({
                    url: "{{  url('/category/subcategory/ajax') }}/"+category_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data){
                        var d =$('select[name="subcategory_id"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' +
                                value.subcategory_name_en + '</option>');
                        });
                    },
                });
            }else{
                alert('danger');
            }
            // console.log(category_id);
        });
        $('select[name="subcategory_id"]').on('change', function(){
            var subcategory_id = $(this).val();
            if(subcategory_id){
                $.ajax({
                    url: "{{  url('/category/subsubcategory/ajax') }}/"+subcategory_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data){
                        var d =$('select[name="subsubcategory_id"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="subsubcategory_id"]').append('<option value="'+ value.id +'">' +
                                value.subsubcategory_name_en + '</option>');
                        });
                    },
                });
            }else{
                alert('danger');
            }
            // console.log(category_id);
        });
    })




</script>
@endsection
