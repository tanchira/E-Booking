<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class bookingController extends Controller
{
    public function viewBooking()
    {
       
        return view('user.booking');
    }


}