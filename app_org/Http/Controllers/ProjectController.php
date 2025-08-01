<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;
use App\Http\Requests\StoreprojectRequest;
use App\Http\Requests\UpdateprojectRequest;
use DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           
   $projects=project::get();
        //dd($project);
       return view('admin.project.project',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $project=project::get();
       // dd('wqwqw');
        return view('admin.project.addproject',compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $project = project::UpdateOrCreate([
        //'project_id'=>request('project_id'),
        'project_name'=>request('project_name'),
        'project_code'=>request('project_code'),      
        'region'=>request('region'),
        'district'=>request('district'),       
        'start_date'=>request('start_date'), 
        'status'=>request('status'), 

        ]);
         return redirect('/project');
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
        //
        $project=project::where('id',$id)->first();
        return view('admin.project.editproject',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $project = project::where('id',$id)->first();        
      
  $project_nameUpdate = project::where('id',$id)
             ->update([
                'project_name'=>request('project_name'),
            'project_code'=>request('project_code'),    
        'region'=>request('region'),
        'district'=>request('district'),
        'start_date'=>request('start_date'),
        'status'=>request('status'),
        ]);

// dd('print');
        return redirect('/project');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = project::where('id',$id)->first();
      //dd($delete);
        if($delete->delete()){
             DB::statement("delete from projects where id=$id");
             
            return redirect()->route('project.index')->with('info','Project deleted successfully');
        }
        else{
            return redirect()->route('project.index')->with('error','Project not exists');
    }
}
}
