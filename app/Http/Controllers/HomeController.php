<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
       return view('web.home');
    }

     public function aboutUs()
    {
       return view('web.home');
    }

    public function blogDetail($idd){

        return view('web.detail',compact('idd'));

    }
}
