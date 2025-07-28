<?php

namespace App\Http\Controllers;

use App\Models\sponsor;
use App\Http\Requests\StoresponsorRequest;
use App\Http\Requests\UpdatesponsorRequest;

class SponsorController extends Controller
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
     * @param  \App\Http\Requests\StoresponsorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresponsorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function show(sponsor $sponsor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function edit(sponsor $sponsor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesponsorRequest  $request
     * @param  \App\Models\sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesponsorRequest $request, sponsor $sponsor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function destroy(sponsor $sponsor)
    {
        //
    }
}
