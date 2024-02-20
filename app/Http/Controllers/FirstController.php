<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trial;
use App\Http\Requests\Blog\TrialPage;

class FirstController extends Controller
{
     

 public function index()
    {
        $blogs=trial::get();
       return view('blog.trial');
    }
    public function store(TrialPage $request){

        $blog= new trial;



        $blog->name=$request->name;
        $blog->email=$request->email;
         $blog->password=$request->passwordssss;
         echo json_encode($blog); exit;
        $blog->save();

      return redirect('trail')->with('success','Record Added');
    }
}
