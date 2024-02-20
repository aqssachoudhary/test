@extends('layouts.app')

@section('content')
<div class="content-wrapper" style="min-height: 1276px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add Customer</h1>
                  <small>Customer list</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12 lobipanel-parent-sortable ui-sortable" data-lobipanel-child-inner-id="7Yw8FUqSMp">
                     <div class="panel panel-bd lobidrag lobipanel lobipanel-sortable" data-inner-id="7Yw8FUqSMp" data-index="0">
                        <div class="panel-heading ui-sortable-handle">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="clist.html"> 
                              <i class="fa fa-list"></i>  Customer List </a>  
                           </div>
                        <div class="dropdown"><ul class="dropdown-menu dropdown-menu-right"><li><a data-func="editTitle" data-tooltip="Edit title" data-toggle="tooltip" data-title="Edit title" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon ti-pencil"></i><span class="control-title">Edit title</span></a></li><li><a data-func="unpin" data-tooltip="Unpin" data-toggle="tooltip" data-title="Unpin" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon ti-move"></i><span class="control-title">Unpin</span></a></li><li><a data-func="reload" data-tooltip="Reload" data-toggle="tooltip" data-title="Reload" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon ti-reload"></i><span class="control-title">Reload</span></a></li><li><a data-func="minimize" data-tooltip="Minimize" data-toggle="tooltip" data-title="Minimize" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon ti-minus"></i><span class="control-title">Minimize</span></a></li><li><a data-func="expand" data-tooltip="Fullscreen" data-toggle="tooltip" data-title="Fullscreen" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon ti-fullscreen"></i><span class="control-title">Fullscreen</span></a></li><li><a data-func="close" data-tooltip="Close" data-toggle="tooltip" data-title="Close" data-placement="bottom" data-original-title="" title=""><i class="panel-control-icon ti-close"></i><span class="control-title">Close</span></a></li></ul><div class="dropdown-toggle" data-toggle="dropdown"><span class="panel-control-icon glyphicon glyphicon-cog"></span></div></div></div>
                        <div class="panel-body">
                           <form method="POST" action="{{url('customer') }}">
                               @csrf
                                                             <div class="form-group">
                                 <label>First Name</label>
                                 <input type="text" class="form-control" placeholder="Enter First Name" required="" name="name">
                              </div>
                              <div class="form-group">
                                 <label>Last Name</label>
                                 <input type="text" class="form-control" placeholder="Enter last Name" required="" name="lname">
                              </div>
                              <div class="form-group">
                                 <label>Email</label>
                                 <input type="email" class="form-control" placeholder="Enter Email" required="" name="email">
                              </div>
                              <div class="form-group">
                                 <label>Mobile</label>
                                 <input type="number" class="form-control" placeholder="Enter Mobile" required="" name="mobile">
                              </div>
                              <div class="form-group">
                                 <label>Picture upload</label>
                                 <input type="file" name="picture">
                                 <input type="hidden" name="pic">
                              </div>
                              <div class="form-group">
                                 <label>Bank details</label>
                                 <input type="text" class="form-control" placeholder="Enter Bank details" required="" name="details">
                              </div>
                              <div class="form-group">
                                 <label>Passport</label>
                                 <input type="text" class="form-control" placeholder="Enter Passport details" required="" name="passport">
                              </div>
                              <div class="form-group">
                                 <label>Facebook Id</label>
                                 <input type="text" class="form-control" placeholder="Enter Facebook details" required="" name="fb">
                              </div>
                              <div class="form-group">
                                 <label>Date of Birth</label>
                                 <input id="minMaxExample" type="text" class="form-control hasDatepicker" placeholder="Enter Date..." name="dob">
                              </div>
                              <div class="form-group">
                                 <label>Address</label>
                                 <textarea class="form-control" rows="3" required="" name="address"></textarea>
                              </div>
                              <div class="form-group">
                                 <label>Customer type</label>
                                 <select class="form-control" name="type">
                                    <option>vendor</option>
                                    <option>vip</option>
                                    <option>regular</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Gender</label><br>
                                 <label class="radio-inline"><input name="gender" value="1" checked="checked" type="radio">Male</label> 
                                 <label class="radio-inline"><input name="gender" value="0" type="radio">Female</label>
                              </div>
                              <div class="form-check">
                                 <label>Status</label><br>
                                 <label class="radio-inline">
                                 <input type="radio" name="status" value="1" checked="checked">Active</label>
                                 <label class="radio-inline"><input type="radio" name="status" value="0">Inctive</label>
                              </div>
                              <div class="reset-button">
                                 <button class="btn btn-warning">Reset</button>
                                 <button  class="btn btn-success">Save</button>
                                  
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
         @endsection