<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newmodel;
use APP\Http\Requests\Blog\Voice;

class NivoicesController extends Controller
{
    public function index()
    {
        $deposit=Newmodel::get();
        return view('customer.voices',compact('deposit'));
    }
    public function store(request $request)
    {
        $send=new Newmodel;
        $send->Item_code=$request->Item_code;
        $send->Item_Name=$request->Item_Name;
         $send->Quantity=$request->Quantity;
         $send->Price=$request->Price;
         $send->Tax =$request->Tax ;
         $send->Discount=$request->Discoun;
          $send->Total=$request->Total;
           
             

         $send->save();

      return redirect('customer')->with('success','Record Added');
    }
}
