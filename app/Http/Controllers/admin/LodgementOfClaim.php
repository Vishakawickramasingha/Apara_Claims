<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LodgementOfClaimController extends Controller
{
    public function create()
    {
        return view('admin.home.LodgementOfClaim');
    }
}
