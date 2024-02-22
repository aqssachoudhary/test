<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class CustomerController extends Controller
{
    public function index()
    {
        $customerss=User::get();
        return view('customer.index',compact('customerss'));
    }

    public function create(){


        return view('customer.create');
    }
    public function show(){

        return view('customer.group');
    }

    public function edit($id){
            $customer=User::where('id',$id)->first();
            return view('customer.edit',compact('customer'));
    }


    
     public function store(Request $request){

        $blog= new User;

        $blog->name=$request->name;
        $blog->lname=$request->lname;
        $blog->email=$request->email;
        $blog->pic=$request->pic;
        $blog->bank_detail=$request->details;
        $blog->passport=$request->passport;
        $blog->fb_id=$request->fb;
        $blog->dob=$request->dob;
        $blog->address=$request->address;
        $blog->customer_type=$request->type;
        $blog->gender=$request->gender;
        $blog->mobile=$request->mobile;
        $blog->save();

      return redirect('customer')->with('success','Record Added');
    }

    public function update(Request $request,$idd){
        
        $blog=User::where('id',$idd)->first();
        $blog->name=$request->name;
        $blog->lname=$request->lname;
        $blog->email=$request->email;
        $blog->pic=$request->pic;
        $blog->bank_detail=$request->details;
        $blog->passport=$request->passport;
        $blog->fb_id=$request->fb;
        $blog->dob=$request->dob;
        $blog->address=$request->address;
        $blog->customer_type=$request->type;
        $blog->gender=$request->gender;
        $blog->mobile=$request->mobile;
        $blog->save();
        return redirect('customer')->with('success','Record Added');
    }
    
}
