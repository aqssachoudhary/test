<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\deposit;
use App\Http\Requests\transfer;

class ExpenseController extends Controller
{
    public function create()
    {
        return view('customer.rent');
    }
}
