<?php

namespace App\Http\Controllers;

use App\Models\Singin;
use Illuminate\Http\Request;

class singinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewSingin()
    {
         return view('singin');
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
     * @param  \App\Models\Singin  $singin
     * @return \Illuminate\Http\Response
     */
    public function show(Singin $singin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Singin  $singin
     * @return \Illuminate\Http\Response
     */
    public function edit(Singin $singin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Singin  $singin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Singin $singin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Singin  $singin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Singin $singin)
    {
        //
    }
}
