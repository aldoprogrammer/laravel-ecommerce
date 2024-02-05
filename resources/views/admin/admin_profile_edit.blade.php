@extends('admin.admin_master')
@section('content')



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
                           <div class="form-group">
                               <h5>Basic Text Input <span class="text-danger">*</span></h5>
                               <div class="controls">
                                   <input type="text" name="text" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                               <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                           </div>
                           <div class="form-group">
                               <h5>Email Field <span class="text-danger">*</span></h5>
                               <div class="controls">
                                   <input type="email" name="email" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                           </div>

                           <div class="form-group">
                               <h5>File Input Field <span class="text-danger">*</span></h5>
                               <div class="controls">
                                   <input type="file" name="file" class="form-control" required=""> <div class="help-block"></div></div>
                           </div>

                       <div class="text-xs-right">
                           <button type="submit"
                           class="btn btn-rounded btn-info">
                           Submit</button>
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

@endsection
