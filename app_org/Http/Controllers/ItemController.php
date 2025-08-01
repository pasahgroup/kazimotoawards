<?php

namespace App\Http\Controllers;

use App\Models\item;
use App\Http\Requests\Storeother_itemRequest;
use App\Http\Requests\Updateother_itemRequest;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
      $search="iflag";
         $assets = asset::join('categories','assets.category','categories.id')
        ->select('assets.*','categories.category')
        ->where('assets.status','!=','deleted')
        ->orderBy('assets.id','desc')->get();

         $items = item::get();
               //dd($sessions);
             return view('admins.assets.asset',compact('assets','categories','sessions','search'));
        dd($dd);
    
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
     * @param  \App\Http\Requests\Storeother_itemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeother_itemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\other_item  $other_item
     * @return \Illuminate\Http\Response
     */
    public function show(other_item $other_item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\other_item  $other_item
     * @return \Illuminate\Http\Response
     */
    public function edit(other_item $other_item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateother_itemRequest  $request
     * @param  \App\Models\other_item  $other_item
     * @return \Illuminate\Http\Response
     */
    public function update(Updateother_itemRequest $request, other_item $other_item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\other_item  $other_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(other_item $other_item)
    {
        //
    }
}
