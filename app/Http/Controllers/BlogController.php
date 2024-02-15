<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Http\Requests\Blog\BlogStore;

class BlogController extends Controller
{

 public function index()
    {
        $blogs=Blogs::get();
       return view('blog.index',compact('blogs'));
    }
    public function create(){

        return view('blog.create');

    }

    public function store(BlogStore $request){

        $blog= new Blogs;

        $blog->headline=$request->headline;
        $blog->description=$request->description;
        $blog->save();

      return redirect('blogs')->with('success','Record Added');
    }
}
