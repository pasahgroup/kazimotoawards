<?php

namespace App\Http\Controllers;

use App\Models\designation;
use App\Http\Requests\StoredesignationRequest;
use App\Http\Requests\UpdatedesignationRequest;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $designations = designation::orderBy('designation', 'asc')->get();
        //dd($lodges);
        return view('admins.designations.designation-list',compact('designations'));
    }

    public function adddesignation(){
         return view('admins.designations.adddesignation');
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
     * @param  \App\Http\Requests\StoredesignationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(request('relation_name'));
        if (request('designation')) {
        $designation = designation::UpdateOrCreate([
        'designation'=>request('designation_name')        
           ]);                  
           return redirect()->back()->with('success','Designation recorded successfully');
        }
    }



 public function editDesignation($id){
       
       $designations = designation::where('id',$id)
       ->first();
      //dd($lodges);
         return view('admins.designations.edit-designation',compact('designations'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function show(designation $designation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function edit(designation $designation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedesignationRequest  $request
     * @param  \App\Models\designation  $designation
     * @return \Illuminate\Http\Response
     */
      public function update(Request $request,$id)
    {
  
      $toupdate = designation::where('id',$id)
               ->update([
            'designation'=>request('designation_name')
        ]);
    return redirect()->route('designation.index')->with('success','Designation created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\designation  $designation
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
     $delete = designation::where('id',$id)->first();
        if($delete->delete()){
            return redirect()->route('designation.index')->with('success','Designation removed successfully');
        }    
        else{
            return redirect()->route('designation.index')->with('error','Designation not exists');
        }
    }
}
