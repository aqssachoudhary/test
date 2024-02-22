
         @extends('layouts.app')

@section('content')
         <div class="content-wrapper" style="min-height: 1276px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-sticky-note-o"></i>
               </div>
               <div class="header-title">
                  <h1>Add Invoices</h1>
                  <small>Invoices list</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="clist.html"> 
                              <i class="fa fa-list"></i>  Invoices</a>  
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6" method="post" action="{{url('customer/voice')}}">
                              @csrf
                              <div class="form-group">
                                 <label>Item code</label>
                                 <input type="number" class="form-control" placeholder="Enter Item code" required name="Item_code">
                              </div>
                              <div class="form-group">
                                 <label>Item Name</label>
                                 <input type="text" class="form-control" placeholder="Enter Item Name" required name="Item_Name">
                              </div>
                              <div class="form-group">
                                 <label>Quantity</label>
                                 <input type="number" class="form-control" placeholder="Enter Quantity" required name="Quantity">
                              </div>
                              <div class="form-group">
                                 <label>Price</label>
                                 <input type="number" class="form-control" placeholder="Enter Price" required name="Price">
                              </div>
                              <div class="form-group">
                                 <label>Tax</label>
                                 <select class="form-control" name="Tax">
                                    <option>Yes</option>
                                    <option>NO</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Discount</label>
                                 <input type="number" class="form-control" placeholder="Enter Discount" required name="Discount">
                              </div>
                              <div class="form-group">
                                 <label>Total</label>
                                 <input type="number" class="form-control" placeholder="Enter total" required name="Total">
                              </div>
                              <div class="reset-button">
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