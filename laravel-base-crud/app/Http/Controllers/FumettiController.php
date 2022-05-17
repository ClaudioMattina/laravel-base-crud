<?php

namespace App\Http\Controllers;

use App\fumetti;
use Illuminate\Http\Request;

class FumettiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fumetto.index');
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
     * @param  \App\fumetti  $fumetti
     * @return \Illuminate\Http\Response
     */
    public function show(fumetti $fumetti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fumetti  $fumetti
     * @return \Illuminate\Http\Response
     */
    public function edit(fumetti $fumetti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fumetti  $fumetti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fumetti $fumetti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fumetti  $fumetti
     * @return \Illuminate\Http\Response
     */
    public function destroy(fumetti $fumetti)
    {
        //
    }
}
