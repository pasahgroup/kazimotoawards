<?php

namespace App\Http\Controllers;

use App\Models\sponsor;
use App\Models\contacts;
use Illuminate\Http\Request;
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
       $sponsors=sponsor::get();     
     $status=contacts::distinct()->get(['status']);
     //dd('ddd');
     return view('admin.sponsors.sponsors',compact('sponsors','status'));
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
    public function store(Request $request)
    {
        
//dd(request('mobile'));


  $sponsors = sponsor::UpdateOrCreate([
        'sponsor_name'=>request('sponsor'),
        'mobile'=>request('mobile'),
         'email'=>request('email'),
        'pledge'=>request('pledge'),
         'contact_person'=>request('contact_person'),

        'address'=>request('address'),
        'status'=>request('status')        
        ]);



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
 


        public function show(contacts $project)
    {
   $sponsors=sponsor::get();
        return view('admin.sponsors.addsponsor',compact('sponsors'));
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
