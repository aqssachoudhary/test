<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aqsa;
use App\Http\Requests\Blog\form;

class UserFormController extends Controller
{
   

 public function create()
    {
        $blogs=aqsa::get();
       return view('registration.data');
    }
    
}
