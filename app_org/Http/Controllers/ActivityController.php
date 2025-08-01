<?php

namespace App\Http\Controllers;

use App\Models\activity;
use Illuminate\Http\Request;
use App\Http\Requests\StoreprojectRequest;
use App\Http\Requests\UpdateprojectRequest;
use DB;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $activities=activity::get();
       return view('admin.activity.activity',compact('activities')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $activities=activity::get();
        //dd($activities);
        return view('admin.activity.addactivity',compact('activities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $project = activity::UpdateOrCreate([
       'activity_name'=>request('activity_name'),
        'activity_level'=>request('activity_level'),      
        'activity_percent'=>request('activity_percent'),
        'status'=>request('status'),
        ]);

         return redirect('/activity');
    }

    /**
     * Display the specified resource.
     */
    public function show(project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id)
    {
        $activity=activity::where('id',$id)->first();
        return view('admin.activity.editactivity',compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $project = activity::where('id',$id)->first();      
      
  $project_nameUpdate = activity::where('id',$id)
             ->update([
               'activity_name'=>request('activity_name'),
        'activity_level'=>request('activity_level'),      
        'activity_percent'=>request('activity_percent'),
        'status'=>request('status'),
        ]);

// dd('print');
        return redirect('/activity');
    }

    /**
     * Remove the specified resource from storage.
     */
     public function destroy($id)
    {
         //
        $delete = activity::where('id',$id)->first();
      //dd($delete);
        if($delete->delete()){
             DB::statement("delete from activities where id=$id");
             
            return redirect()->route('activity.index')->with('info','Activity deleted successfully');
        }
        else{
            return redirect()->route('activity.index')->with('error','Activity not exists');
    }
    }
}
