@extends('admin.admin_master')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit SubCategory</h3>
                    </div>
                    <form action="{{ route('subcategory.store') }}" method="post">
                        @csrf
                        <div class="col-12">
                            <div class="form-group">
                                <h5>Category List</h5>
                                <div class="controls">
                                    <select name="category_id"
                                    id="" class="form-control">
                                        <option selected="" disabled="">--- Pilih Category ---</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $category->id ==
                                                $subcategory->category_id ?
                                                'selected' : '' }}
                                                >{{ $category->category_name_en }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <h5>SubCategory Name Eng
                                    <span class="text-danger">*</span>
                                </h5>
                                <div class="controls">
                                    <input type="text" value="{{ $subcategory->subcategory_name_en }}"
                                    name="subcategory_name_en" class="form-control"
                                    >
                                    @error('subcategory_name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>SubCategory Name Ind
                                    <span class="text-danger">*</span>
                                </h5>
                                <div class="controls">
                                    <input type="text" value="{{ $subcategory->subcategory_name_ind }}"
                                    name="subcategory_name_ind" class="form-control"
                                    >
                                    @error('subcategory_name_ind')
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

