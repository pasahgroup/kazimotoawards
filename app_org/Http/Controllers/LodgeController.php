<?php

namespace App\Http\Controllers;

use App\Models\lodge;
use App\Models\location;

use App\Http\Requests\StorelodgeRequest;
use App\Http\Requests\UpdatelodgeRequest;
use Illuminate\Http\Request;

class LodgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lodges = lodge::orderBy('lodge_name', 'asc')->get();
        //dd($lodges);
        return view('admins.lodges.lodge-list',compact('lodges'));
    }


public function addlodge(){
         return view('admins.lodges.addlodge');
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
     * @param  \App\Http\Requests\StorelodgeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (request('lodge')) {
        $lodge = lodge::UpdateOrCreate([
        'lodge_name'=>request('lodge_name'),
        'owner_name'=>request('owner_name'), 
        'contact'=>request('contact'), 
        'email'=>request('email'), 
        'location'=>request('location'),
         'gm_contact'=>request('gm_contact'), 
        'gm_email'=>request('gm_email'),
         'status'=>request('status')            
           ]);

         $location = location::UpdateOrCreate([
        'location_name'=>request('lodge_name'),
        'location_type'=>"Lodge",
        'lodge_id'=>$lodge->id,
        'user_id'=>auth()->id()

           ]);
                  
           return redirect()->back()->with('success','Lodge recorded successfully');
        }
    }


 public function editLodge($id){
       
       $lodges = lodge::where('id',$id)
       ->first();
      //dd($lodges);
         return view('admins.lodges.edit-lodge',compact('lodges'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lodge  $lodge
     * @return \Illuminate\Http\Response
     */
    public function show(lodge $lodge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lodge  $lodge
     * @return \Illuminate\Http\Response
     */
    public function edit(lodge $lodge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelodgeRequest  $request
     * @param  \App\Models\lodge  $lodge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
  
      $toupdate = lodge::where('id',$id)
               ->update([
             'lodge_name'=>request('lodge_name'),
        'owner_name'=>request('owner_name'), 
        'contact'=>request('contact'), 
        'email'=>request('email'), 
        'location'=>request('location'),
          'gm_contact'=>request('gm_contact'), 
        'gm_email'=>request('gm_email'),
           'status'=>request('status')    
        ]);
 
   $location = location::where('lodge_id',$id)
               ->update([
               'location_name'=>request('lodge_name'),
        'location_type'=>"Lodge",
        // 'lodge_id'=>$lodge->id,
        'user_id'=>auth()->id()    
        ]);

    return redirect()->route('lodge.index')->with('success','Lodge created successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lodge  $lodge
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
     

 $delete = location::where('lodge_id',$id)->first();
        if($delete->delete()){
           // return redirect()->route('lodge.index')->with('success','Lodge removed successfully');
        } 
        
     $delete = lodge::where('id',$id)->first();
        if($delete->delete()){
            return redirect()->route('lodge.index')->with('success','Lodge removed successfully');
        }    
        else{
            return redirect()->route('lodge.index')->with('error','Lodge not exists');
        }


       
    }
}
