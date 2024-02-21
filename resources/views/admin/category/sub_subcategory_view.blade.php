@extends('admin.admin_master')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <section class="content">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Data Table Sub-SubCategory</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-striped dataTable"
                                            role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>Category</th>
                                                    <th>SubCategory Name</th>
                                                    <th>Sub -> SubCategory Ind</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($subsubcategory as $item)
                                                    <tr role="row" class="odd">
                                                        <td>{{ $item->category->category_name_en }}</td>
                                                        <td>{{ $item->subcategory->subcategory_name_en }}</td>
                                                        <td>{{ $item->subsubcategory_name_ind }}</td>

                                                        <td>
                                                            <a href="{{ route('subsubcategory.edit', $item->id) }}"
                                                                class="btn btn-info">
                                                            <i class="fa fa-edit"></i></a>
                                                            <a href="{{ route('subsubcategory.delete', $item->id) }}"
                                                            id="delete"
                                                                class="btn btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                                            Showing 1 to 10 of 57 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="example1_previous"><a href="#" aria-controls="example1"
                                                        data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="example1" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="example1" data-dt-idx="2" tabindex="0"
                                                        class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="example1" data-dt-idx="3" tabindex="0"
                                                        class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="example1" data-dt-idx="4" tabindex="0"
                                                        class="page-link">4</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="example1" data-dt-idx="5" tabindex="0"
                                                        class="page-link">5</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="example1" data-dt-idx="6" tabindex="0"
                                                        class="page-link">6</a></li>
                                                <li class="paginate_button page-item next" id="example1_next"><a
                                                        href="#" aria-controls="example1" data-dt-idx="7"
                                                        tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <div class="col-12 col-lg-4">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add  Sub-SubCategory</h3>
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
                                            <option value="{{ $category->id }}">{{ $category->category_name_en }}</option>
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
                                    <input type="text"
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
                                    <input type="text"
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


