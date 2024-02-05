@extends('admin.admin_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<div class="container-full">


    <section class="content">

        <!-- Basic Forms -->
         <div class="box">
           <div class="box-header with-border">
             <h4 class="box-title">Edit Profile</h4>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="row">
               <div class="col">
                   <form novalidate="">
                     <div class="row">
                       <div class="col-12">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <h5>Username <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text"
                                        name="name" class="form-control"
                                        required="" value="{{ $editData->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <h5>Email <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="email" name="email"
                                        class="form-control" required=""
                                        value="{{ $editData->email }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <h5>Profile Picture <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input id="image" type="file" name="file"
                                        class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <img class="rounded-circle" id="showImage"
                                src="{{ (!empty($adminData->profile_photo_path))
                                  ? url('upload/admin_images/'.$adminData->profile_photo_path)
                                  : url('upload/no_image.jpg')}}"
                                alt="User Avatar" style="width: 100px; height:100px;">
                            </div>
                        </div>



                       <div class="text-xs-right">
                            <input type="submit" value="Update"
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
  </div>

  <script type="text/javascript">

    $(document).ready(function(){
      $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
          $('#showImage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
      });
    });
  </script>

@endsection
