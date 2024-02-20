@extends('admin.admin_master')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Sub-SubCategory</h3>
                    </div>
                    <form action="{{ route('subsubcategory.store') }}" method="post">

                        @csrf
                        <div class="col-12">
                            <div class="form-group">
                                <h5>Category List</h5>
                                <div class="controls">
                                    <select name="category_id"
                                    id="" class="form-control">
                                        <option selected="" disabled="">--- Pilih Category ---</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == $subsubcategory->category_id ? 'selected' : ''}}>{{ $category->category_name_en }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>SubCategory List</h5>
                                <div class="controls">
                                    <select name="subcategory_id"
                                    id="" class="form-control">
                                        <option selected="" disabled="" >--- Pilih SubCategory ---</option>
                                        @foreach ($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}" {{ $subcategory->id == $subsubcategory->subcategory_id ? 'selected' : ''}}>{{ $subcategory->subcategory_name_en }}</option>
                                        @endforeach
                                    </select>
                                    @error('subcategory_id	')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <h5>Sub->SubCategory Name Eng
                                    <span class="text-danger">*</span>
                                </h5>
                                <div class="controls">
                                    <input type="text" value="{{ $subsubcategory->subsubcategory_name_en }}"
                                    name="subsubcategory_name_en" class="form-control"
                                    >
                                    @error('subsubcategory_name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Sub->SubCategory Name Ind
                                    <span class="text-danger">*</span>
                                </h5>
                                <div class="controls">
                                    <input type="text" value="{{ $subsubcategory->subsubcategory_name_ind }}"
                                    name="subsubcategory_name_ind" class="form-control"
                                    >
                                    @error('subsubcategory_name_ind	')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <input type="submit" value="Add Data"
                                class="btn btn-primary btn-rounded
                                mb-5">
                           </div>
                        </div>
                    </form>

                </div>
                <!-- /.box -->

            </div>
        </div>
    </section>
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
        })
    </script>
@endsection


