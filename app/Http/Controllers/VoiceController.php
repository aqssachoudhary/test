<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Refrence;
use App\Http\Requests\Blog\nirequest;

class VoiceController extends Controller
{
    public function index()
    {
        $blogs=Refrence::get();
        return view('customer.nivoices', compact('blogs'));
    }
    public function store(request $request)
    {
        $send=new Refrence;
        $send->Reference_No=$request->Reference_No;
        $send->Recurring_Every=$request->Recurring_Every;
         $send->Select_Department=$request->Select_Department;
         $send->Start_Date=$request->Start_Date;
         $send->End_Date =$request->End_Date ;
         $send->Select_Client=$request->Select_Client;
          $send->Notes=$request->Notes;
             

         $send->save();

      return redirect('customer')->with('success','Record Added');
    }
}
