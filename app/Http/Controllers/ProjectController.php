<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\First;
use App\Http\Requests\Blog\website;



class ProjectController extends Controller
{
    public function index()
    {
         $blogs=First::get();
       return view('project.code');
    }
}
