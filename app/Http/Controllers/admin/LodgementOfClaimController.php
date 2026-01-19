<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Claim;

class LodgementOfClaimController extends Controller
{
       public function Index(){
        return view('admin.home.LodgementOfClaim');
        
    }
}  