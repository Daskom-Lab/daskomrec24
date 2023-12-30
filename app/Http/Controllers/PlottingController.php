<?php

namespace App\Http\Controllers;

use App\Models\Plotting;
use App\Http\Requests\StorePlottingRequest;
use App\Http\Requests\UpdatePlottingRequest;

class PlottingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePlottingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlottingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plotting  $plotting
     * @return \Illuminate\Http\Response
     */
    public function show(Plotting $plotting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plotting  $plotting
     * @return \Illuminate\Http\Response
     */
    public function edit(Plotting $plotting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlottingRequest  $request
     * @param  \App\Models\Plotting  $plotting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlottingRequest $request, Plotting $plotting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plotting  $plotting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plotting $plotting)
    {
        //
    }
}
