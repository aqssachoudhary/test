<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\deposit;
use App\Http\Requests\debit;

class TranscationController extends Controller
{
    public function new(){
         $deposit=deposit::get();

        return view('customer.deposit',compact('deposit'));
    }
    public function store(request $request)
    {
        $send=new deposit;
        $send->account=$request->account;
        $send->description=$request->description;
         $send->amount=$request->amount;
         $send->save();

      return redirect('customer')->with('success','Record Added');
    }
}
