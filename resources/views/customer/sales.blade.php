@extends('layouts.app')

@section('content')
<div class="content-wrapper" style="min-height: 1276px;">
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-file-text"></i>
               </div>
               <div class="header-title">
                  <h1>Add quotes</h1>
                  <small >Quotes list</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content" >
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="quote.html"> 
                              <i class="fa fa-list"></i>  Quotes List</a>  
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6" action="{{url('customer/quote')}}" method="post">
                               @csrf
                               
                              <div class="form-group">
                                 <label>Subject</label>
                                 <input type="text" class="form-control" placeholder="Enter Subject" required name="subject">
                              </div>
                              <div class="form-group">
                                 <label> Select Customer</label>
                                 <select class="form-control" name="customer">
                                    <option>Anna adams</option>
                                    <option>Elen walker</option>
                                    <option>ricky ponting</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Quotes</label>
                                 <input type="text" class="form-control" placeholder="Enter Quotes" required name="quotes">
                              </div>
                              <div class="form-group">
                                 <label>Entry date</label>
                                 <input type="text" id='minMaxExample' name="entry_date" class="form-control years">
                              </div>
                              <div class="form-group">
                                 <label>Expiry date</label>
                                 <input type="text" id='minMaxExample2' name="expiry_date" class="form-control years">
                              </div>
                              <div class="form-group">
                                 <label>Mobile</label>
                                 <input type="number" class="form-control" placeholder="Enter Mobile" required name="Mobile">
                              </div>
                              <div class="form-group">
                                 <label>Stage</label>
                                 <select class="form-control" name="Stage">
                                    <option>Draft</option>
                                    <option>accept</option>
                                    <option>cancel</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Sales tax</label>
                                 <input type="number" class="form-control" placeholder="Enter tax" name="Sales_tax">
                              </div>
                              <div class="form-group">
                                 <label>Discount</label>
                                 <input type="text" class="form-control" placeholder="Enter Discount" required name="Discount">
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