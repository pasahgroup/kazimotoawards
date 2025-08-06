<?php

namespace App\Http\Controllers;

use App\Models\contestant_award;
use App\Http\Requests\Storecontestant_awardRequest;
use App\Http\Requests\Updatecontestant_awardRequest;

class ContestantAwardController extends Controller
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
     * @param  \App\Http\Requests\Storecontestant_awardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecontestant_awardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contestant_award  $contestant_award
     * @return \Illuminate\Http\Response
     */
    public function show(contestant_award $contestant_award)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contestant_award  $contestant_award
     * @return \Illuminate\Http\Response
     */
    public function edit(contestant_award $contestant_award)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecontestant_awardRequest  $request
     * @param  \App\Models\contestant_award  $contestant_award
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecontestant_awardRequest $request, contestant_award $contestant_award)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contestant_award  $contestant_award
     * @return \Illuminate\Http\Response
     */
    public function destroy(contestant_award $contestant_award)
    {
        //
    }
}
