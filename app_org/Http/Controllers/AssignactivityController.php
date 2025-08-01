<?php

namespace App\Http\Controllers;

use App\Models\subproject;
use App\Models\project;
use Illuminate\Http\Request;
use App\Models\assignactivity;
use App\Models\activity;
use App\Http\Requests\StoreassignactivityRequest;
use App\Http\Requests\UpdateassignactivityRequest;
use DB;

class AssignactivityController extends Controller
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
        return view('admin.assignActivity.assignActivity',compact('subprojects'));    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $subprojects=subproject::get();
        // return view('subproject.addsubproject',compact('subproject'));
        
         $projects['data'] = project::orderby("project_name","asc")
              ->select('id','project_name')
              ->get();
       //dd($projects);
       return view('admin.assignActivity.addAssignActivity',compact('projects'));
}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
$activities = request('activities');
//dd(request('activities'));
     
    if(request('activities')>0)
    {
    foreach($activities as $key => $activity){      
    // $activityUpdate = assignactivity::where('id',$key)
    // ->where('project_id',$project_id)
    // ->where('subproject_id',$subproject_id)->UpdateOrCreate([
    //         'itinerary_title'=>$title[$key],

    //         'distance'=>$distance[$key],
    //         'transport'=>$transport[$key],
    //         'meal'=>$meal[$key],

    //         'itinerary_description'=>$description[$key],
    //         'destination_id'=>$destination[$key],
    //         'accommodation_id'=>$accommodation[$key]
    //     ]);
 //dd($activities[$key]);

        $activityUpdate = assignactivity::UpdateOrCreate([
        'project_id'=>request('project_id'),
        'subproject_id'=>request('subproject_id'),
        'activity_id'=>$activities[$key],

    ],[
        'percent'=>request('percent')      
        ]);

            }
   }


         return redirect('/subproject');
    }

    /**
     * Display the specified resource.
     */
 

     public function show_org(project $project)
    {
         $projects['data'] = project::orderby("project_name","asc")
              ->select('id','project_name')
              ->get();

        return view('admin.assignActivity.addAssignActivity',compact('projects'));
    }


       public function show(project $project)
    {
         $projects['data'] = project::orderby("project_name","asc")
              ->select('id','project_name')
              ->get();

 $activities = activity::where('status','Active')
        ->get();

              return view('admin.assignActivity.addAssignActivity',compact('projects','activities'));
    }


      public function getAssignActivity($subprojectid=0){

         // Fetch Employees by Departmentid
         $empData['data'] = subproject::orderby("sub_project_name","asc")
              ->select('id','sub_project_name')
              ->where('project_id',$subprojectid)
              ->get();

         return response()->json($empData);

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
        return view('admin.assignActivity.editAssignActivity',compact('subproject','projects'));
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
