<?php

namespace App\Http\Controllers;

use App\Models\Roof;
use App\Http\Requests\StoreRoofRequest;
use App\Http\Requests\UpdateRoofRequest;

class RoofController extends Controller
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
     * @param  \App\Http\Requests\StoreRoofRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoofRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roof  $roof
     * @return \Illuminate\Http\Response
     */
    public function show(Roof $roof)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roof  $roof
     * @return \Illuminate\Http\Response
     */
    public function edit(Roof $roof)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoofRequest  $request
     * @param  \App\Models\Roof  $roof
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoofRequest $request, Roof $roof)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roof  $roof
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roof $roof)
    {
        //
    }
}
