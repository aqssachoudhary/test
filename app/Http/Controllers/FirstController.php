<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trial;
use App\Http\Requests\Blog\TrialPage;
use Hash;
class FirstController extends Controller
{
    public function index()
    {
        $trial=Trial::get();
       return view('trial.test.testss',compact('trial'));
    }

    public function create(TrialPage $request)
    {
        $trsld=new Trial;
        $trsld->name=$request->name;
        $trsld->email=$request->email;
        $trsld->password=Hash::make($request->password);
        $trsld->save();

        return back();
    }
    


}
