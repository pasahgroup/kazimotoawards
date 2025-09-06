<?php

namespace App\Http\Controllers;

use App\Models\vote;
use App\Models\award;
use App\Models\contestant_award;
use App\Models\contestant;

use App\Http\Requests\StorevoteRequest;
use App\Http\Requests\UpdatevoteRequest;
use Illuminate\Http\Request;

class VoteController extends Controller
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


    public function vote(Request $request,$id)
    {
       
       $awards=contestant_award::join('awards','awards.id','contestant_awards.award_id')
       ->where('awards.status','Active')
      ->where('awards.award_name','!=',"")
        ->where('contestant_awards.contestant_id',"$id")
      ->get();


$contestant_first=contestant::where('id',$id)->first();

     // dd($awards);

      return view('website.voting.vote',compact('awards','contestant_first'));

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
     * @param  \App\Http\Requests\StorevoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorevoteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function show(vote $vote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function edit(vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevoteRequest  $request
     * @param  \App\Models\vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevoteRequest $request, vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function destroy(vote $vote)
    {
        //
    }
}
