<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class homeController extends Controller
{
    public function viewHome()
    {
        return view('user.home');
    }


  /*   public function post(Request $request)
    {
        $res = Http::post('http://127.0.0.1:9000/api/posttest',[
            'name' => $request['name'],
            'email' => $request['email']
        ]);
        return view('user.home' ,['res' => $res->object()]);->with(compact('res'))
    }
    $res = Http::get('http://127.0.0.1:9000/api/test'); */
}
