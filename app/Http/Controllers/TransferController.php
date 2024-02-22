<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receive;
use App\Http\Requests\Blog\Send;

class TransferController extends Controller
{
    public function index()
    {
        $transfer=Receive::get();
        return view('customer.transaction',compact('transfer'));
    }
     public function store(request $request)
    {
        $send=new Receive;
        $send->deposit=$request->deposit;
        $send->to=$request->to;
         $send->date=$request->date;
         $send->description=$request->description;
         $send->amount=$request->amount;
         $send->tags=$request->tags;

         $send->save();

      return redirect('customer')->with('success','Record Added');
    }
    public function trans()
    {
    
        return view('customer.viewtranscation');
}
public function view()
    {
    
        return view('customer.balance');
}
}
