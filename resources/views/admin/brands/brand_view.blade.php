@extends('admin.admin_master')
@section('content')

<section class="content">
    <div class="row">
<div class="col-12">
    <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title">Data Table With Full Features</h3>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
           <div class="table-responsive">
             <div id="example1_wrapper"
             class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row">
</div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
               <thead>
                   <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 108.135px;">Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 178.271px;">Position</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 75.3333px;">Office</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 27.6667px;">Age</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 70.0104px;">Start date</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 62.5833px;">Salary</th></tr>
               </thead>
               <tbody>
               <tr role="row" class="odd">
                       <td class="sorting_1">Airi Satou</td>
                       <td>Accountant</td>
                       <td>Tokyo</td>
                       <td>33</td>
                       <td>2008/11/28</td>
                       <td>$162,700</td>
                   </tr><tr role="row" class="even">
                       <td class="sorting_1">Angelica Ramos</td>
                       <td>Chief Executive Officer (CEO)</td>
                       <td>London</td>
                       <td>47</td>
                       <td>2009/10/09</td>
                       <td>$1,200,000</td>
                   </tr><tr role="row" class="odd">
                       <td class="sorting_1">Ashton Cox</td>
                       <td>Junior Technical Author</td>
                       <td>San Francisco</td>
                       <td>66</td>
                       <td>2009/01/12</td>
                       <td>$86,000</td>
                   </tr><tr role="row" class="even">
                       <td class="sorting_1">Bradley Greer</td>
                       <td>Software Engineer</td>
                       <td>London</td>
                       <td>41</td>
                       <td>2012/10/13</td>
                       <td>$132,000</td>
                   </tr><tr role="row" class="odd">
                       <td class="sorting_1">Brenden Wagner</td>
                       <td>Software Engineer</td>
                       <td>San Francisco</td>
                       <td>28</td>
                       <td>2011/06/07</td>
                       <td>$206,850</td>
                   </tr><tr role="row" class="even">
                       <td class="sorting_1">Brielle Williamson</td>
                       <td>Integration Specialist</td>
                       <td>New York</td>
                       <td>61</td>
                       <td>2012/12/02</td>
                       <td>$372,000</td>
                   </tr><tr role="row" class="odd">
                       <td class="sorting_1">Bruno Nash</td>
                       <td>Software Engineer</td>
                       <td>London</td>
                       <td>38</td>
                       <td>2011/05/03</td>
                       <td>$163,500</td>
                   </tr><tr role="row" class="even">
                       <td class="sorting_1">Caesar Vance</td>
                       <td>Pre-Sales Support</td>
                       <td>New York</td>
                       <td>21</td>
                       <td>2011/12/12</td>
                       <td>$106,450</td>
                   </tr><tr role="row" class="odd">
                       <td class="sorting_1">Cara Stevens</td>
                       <td>Sales Assistant</td>
                       <td>New York</td>
                       <td>46</td>
                       <td>2011/12/06</td>
                       <td>$145,600</td>
                   </tr><tr role="row" class="even">
                       <td class="sorting_1">Cedric Kelly</td>
                       <td>Senior Javascript Developer</td>
                       <td>Edinburgh</td>
                       <td>22</td>
                       <td>2012/03/29</td>
                       <td>$433,060</td>
                   </tr></tbody>
               <tfoot>
                   <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
               </tfoot>
             </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
           </div>
       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->

   </div>
</div>
</section>
   @endsection
