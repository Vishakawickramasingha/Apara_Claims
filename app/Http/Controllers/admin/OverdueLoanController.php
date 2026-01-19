<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class OverdueLoanController extends Controller
{    public function Index(){
        return view('admin.home.OverdueLoan');
        
    }
    
}
