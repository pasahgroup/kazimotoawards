<?php

namespace App\Http\Controllers;

use App\Models\subscribe;
use App\Http\Requests\StoresubscribeRequest;
use App\Http\Requests\UpdatesubscribeRequest;
use Illuminate\Http\Request;
use DB;


class SubscribeController extends Controller
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
     * @param  \App\Http\Requests\StoresubscribeRequest  $request
     * @return \Illuminate\Http\Response
     */
  
      public function store(Request $request)
    {

        //dd(request('email'));
      
          $student =  subscribe::UpdateOrCreate(
          
            ['email'=>request('email')],
            [
                 'status'=>'Active'
            ]);
          return redirect()->route('home.index')->with('success','Assignee created successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function show(subscribe $subscribe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function edit(subscribe $subscribe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesubscribeRequest  $request
     * @param  \App\Models\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesubscribeRequest $request, subscribe $subscribe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function destroy(subscribe $subscribe)
    {
        //
    }
}
