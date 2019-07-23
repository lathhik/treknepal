<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Place;
use App\Trek;
use Illuminate\Http\Request;

class TrekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Place::all();
        return view('Frontend/index')->with('places', $places);

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trek $trek
     * @return \Illuminate\Http\Response
     */
    public function show(Trek $trek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trek $trek
     * @return \Illuminate\Http\Response
     */
    public function edit(Trek $trek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Trek $trek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trek $trek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trek $trek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trek $trek)
    {
        //
    }
}
