<?php

namespace App\Http\Controllers;

use App\Models\contestant;
use App\Http\Requests\StorecontestantRequest;
use App\Http\Requests\UpdatecontestantRequest;

class ContestantController extends Controller
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
     * @param  \App\Http\Requests\StorecontestantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecontestantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contestant  $contestant
     * @return \Illuminate\Http\Response
     */
    public function show(contestant $contestant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contestant  $contestant
     * @return \Illuminate\Http\Response
     */
    public function edit(contestant $contestant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecontestantRequest  $request
     * @param  \App\Models\contestant  $contestant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecontestantRequest $request, contestant $contestant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contestant  $contestant
     * @return \Illuminate\Http\Response
     */
    public function destroy(contestant $contestant)
    {
        //
    }
}
