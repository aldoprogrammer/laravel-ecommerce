@extends('admin.admin_master')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Category</h3>
                    </div>
                    <form action="{{ route('category.update', $category->id) }}"
                    method="post" >
                        @csrf
                        <div class="col-12">
                            <input type="hidden" name="id" value="{{ $category->id }}">
                            <input type="hidden" name="old_icon" value="{{ $category->category_icon }}">
                            <div class="form-group">
                                <h5>Category Name Eng
                                    <span class="text-danger">*</span>
                                </h5>
                                <div class="controls">
                                    <input type="text" value="{{ $category->category_name_en }}"
                                    name="category_name_en" class="form-control"
                                    >
                                    @error('category_name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Category Name Ind
                                    <span class="text-danger">*</span>
                                </h5>
                                <div class="controls">
                                    <input type="text" value="{{ $category->category_name_ind }}"
                                    name="category_name_ind" class="form-control"

                                    >
                                    @error('category_name_ind')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Category Icon
                                    <span class="text-danger">*</span>
                                </h5>
                                <div class="controls">
                                    <input type="text" name="category_icon" class="form-control"
                                    value="{{ $category->category_icon }}">
                                    @error('category_icon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <input type="submit" value="Update Data"
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
@endsection
