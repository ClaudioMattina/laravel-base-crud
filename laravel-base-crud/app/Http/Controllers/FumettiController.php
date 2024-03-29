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
        $fumettis = fumetti::paginate(12);
        return view('fumetto.index', ['fumettis'=> $fumettis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('fumetto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $fumetto = new fumetti();
        $fumetto->title = $data['title'];
        $fumetto->description = $data['description'];
        $fumetto->thumb = $data['thumb'];
        $fumetto->price = $data['price'];
        $fumetto->type = $data['type'];
        $fumetto->sale_date = $data['sale_date'];
        $fumetto->series = $data['series'];
        $fumetto-> save();

        return redirect()->route('fumetti.show', $fumetto);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fumetti  $fumetti
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* findOrFile($id); */
        $fumettis= fumetti::findOrFail($id);
        return view("fumetto.show", ['fumettis'=> $fumettis]);
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
