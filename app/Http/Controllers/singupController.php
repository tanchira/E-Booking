<?php

namespace App\Http\Controllers;

use App\Models\singup;
use Illuminate\Http\Request;

class singupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewsingup()
    {
        return view('singup');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\singup  $singup
     * @return \Illuminate\Http\Response
     */
    public function show(singup $singup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\singup  $singup
     * @return \Illuminate\Http\Response
     */
    public function edit(singup $singup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\singup  $singup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, singup $singup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\singup  $singup
     * @return \Illuminate\Http\Response
     */
    public function destroy(singup $singup)
    {
        //
    }
}
