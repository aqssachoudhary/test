<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\people;
use App\Http\Requests\group;

class ListController extends Controller
{
    public function create(){
        $list=people::get();


        return view('customer.create',compact('list'));
    }
     public function store(group $request){

        $blog= new people;

        $blog->first_name=$request->name;
        $blog->last_name=$request->lname;
        $blog->save();

      return redirect('people')->with('success','Record Added');
    }
}

  }