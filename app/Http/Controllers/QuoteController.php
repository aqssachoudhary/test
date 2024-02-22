<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nquote;
use App\Http\Requests\Blog\newrequest;

class QuoteController extends Controller
{
    public function index()

    {
        $deposit=nquote::get();
        return view('customer.sales',compact('deposit'));
    }
    public function store(request $request)
    {
        $send=new nquote;
        $send->subject=$request->subject;
        $send->customer=$request->customer;
         $send->quotes=$request->quotes;
         $send->entry_date=$request->entry_date;
         $send->expiry_date =$request->expiry_date ;
         $send->Mobile=$request->Mobile;
          $send->Stage=$request->Stage;
           $send->Sales_tax=$request->Sales_tax;
            $send->Discount=$request->Discount;
             

         $send->save();

      return redirect('customer')->with('success','Record Added');
    }
}
