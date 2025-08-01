<?php

namespace App\Http\Controllers;

use App\Models\subproject;
use App\Models\project;
use Illuminate\Http\Request;
use App\Http\Requests\StoresubprojectRequest;
use App\Http\Requests\UpdatesubprojectRequest;
use DB;

class SubprojectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        
     // $subprojects=subproject::join()
     // ->get();
       

     $subprojects = subproject::join('projects','projects.id','subprojects.project_id')
        ->select('subprojects.*','projects.project_name')
        ->get();

//dd($subprojects);
        return view('admin.subproject.subproject',compact('subprojects'));    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $subprojects=subproject::get();
        // return view('subproject.addsubproject',compact('subproject'));
        
        $projects=project::where('status','Active')
        ->get();
       //dd($projects);
       return view('admin.subproject.addsubproject',compact('projects'));
}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $subproject = subproject::UpdateOrCreate([
        'sub_project_name'=>request('sub_project_name'),
        'sub_project_code'=>request('sub_project_code'),
        'project_id'=>request('project_id'),      
        'status'=>request('status'),
        'level'=>request('level'),
      
        ]);
         return redirect('/subproject');
    }

    /**
     * Display the specified resource.
     */
    public function show(subproject $subproject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id)
    {
        //
        // $subproject=subproject::where('id',$id)->first();
 $subproject = subproject::join('projects','projects.id','subprojects.project_id')
        ->select('subprojects.*','projects.project_name')
        ->first();

           $projects=project::where('status','Active')
        ->get();


        //dd($subproject);
        return view('admin.subproject.editsubproject',compact('subproject','projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
  $subproject_nameUpdate = subproject::where('id',$id)
             ->update([
                'sub_project_name'=>request('sub_project_name'),
            'sub_project_code'=>request('sub_project_code'),    
        'project_id'=>request('project_id'),
        'status'=>request('status'),
        'level'=>request('level'),
        ]);

             return redirect('/subproject');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $delete = subproject::where('id',$id)->first();
      //dd($delete);
        if($delete->delete()){
             DB::statement("delete from subprojects where id=$id");
             
            return redirect()->route('subproject.index')->with('info','Subproject deleted successfully');
        }
        else{
            return redirect()->route('subproject.index')->with('error','Subproject not exists');
    }
    }
}
