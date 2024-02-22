
         @extends('layouts.app')

@section('content')
<div class="content-wrapper" style="min-height: 1276px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-suitcase"></i>
               </div>
               <div class="header-title">
                  <h1>New Recurring invoices</h1>
                  <small>New Recurring invoices Details</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel lobidisable panel-bd">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>New Recurring invoices</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6" method="post" action="{{url('customer/refrence')}}">
                              @csrf
                              <div class="form-group">
                                 <label>Reference No.</label>
                                 <input type="text" class="form-control" placeholder="Ref No." required name="Reference_No">
                              </div>
                              <div class="form-group">
                                 <label>Recurring Every</label>
                                 <select class="form-control" name="Recurring_Every">
                                    <option>Day</option>
                                    <option>Week</option>
                                    <option>Month</option>
                                    <option>Year</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Select Department:</label>
                                 <select class="form-control" name="Select_Department">
                                    <option>Technology</option>
                                    <option>Grapics design</option>
                                    <option>Sports</option>
                                    <option>Food</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Start Date</label>
                                 <div class=" input-group date form_date redate">
                                    <input id='minMaxExample' type="text" name="Start_Date" class="form-control years" name=""><span class="input-group-addon"><a href="#"><i class="fa fa-calendar"></i></a></span>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label>End Date</label>
                                 <div class=" input-group date form_date redate">
                                    <input id='minMaxExample2' type="text" name="End_Date" class="form-control years"><span class="input-group-addon"><a href="#"><i class="fa fa-calendar"></i></a></span>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label>Select Client</label>
                                 <select class="form-control" name="Select_Client">
                                    <option>Ricky Martin</option>
                                    <option>Ed sheeren</option>
                                    <option>Alan walker</option>
                                    <option>Enriquie</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Notes</label><br>
                                 <textarea name="Notes" rows="3"></textarea>
                              </div>
                              <div class="form-group">
                                 <button class="btn btn-warning">Reset</button>
                                 <button class="btn btn-add">Save</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <footer class="main-footer">
            <strong>Copyright &copy; 2016-2017 <a href="#">thememinister</a>.</strong> All rights reserved.
         </footer>
      </div>
      @endsection