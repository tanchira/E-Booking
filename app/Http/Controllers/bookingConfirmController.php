<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class bookingConfirmController extends Controller
{
    public function viewBookingConfirm()
    {
       
        return view('user.bookingConfirm');
    }


}