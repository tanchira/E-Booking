<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class dashboardController extends Controller
{
    public function viewdashdoard()
    {
        return view('owner.dashboard');
    }


  
}
