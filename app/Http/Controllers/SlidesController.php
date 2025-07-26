<?php

namespace App\Http\Controllers;

use App\Models\slide;
use App\Models\award;
use App\Models\project;
use App\Models\bank;


use App\Http\Requests\StoreslidesRequest;
use App\Http\Requests\UpdateslidesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class SlidesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    $slides = DB::select("select s.*,a.award_name from slides s,awards a where a.id=s.award_id");
 $banks=bank::get();
        return view('admin.slides.slide',compact('slides','banks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()    {        
          $slides=slide::get();
          //$awards=award::where('status','Active')->get();
          //$subprojects=subproject::get();

          $awards['data'] = award::orderby("project_name","asc")
              // ->select('id','name')
              ->get();
        return view('admin.slides.addslide',compact('slides','awards','pprojects'));
    }


// Fetch records
    public function getSlidesv($departmentid=0){

         // Fetch Employees by Departmentid
         $slideData['data'] = employee::orderby("name","asc")
              ->select('id','name')
              ->where('department',$departmentid)
              ->get();

         return response()->json($slideData);

    }

public function slides()
    {
        return view('slides');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        if(request('slide_photo')){
                $attach = request('slide_photo');
                foreach($attach as $attached){

                     // Get filename with extension
                     $fileNameWithExt = $attached->getClientOriginalName();
                     // Just Filename
                     $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                     // Get just Extension
                     $extension = $attached->getClientOriginalExtension();
                     //Filename to store
                     $imageToStore = $filename.'_'.time().'.'.$extension;
                     //upload the image
                      //$path = $attached->storeAs('wawa/hh/jkl/donor_photos/', $imageToStore);
                    $path = $attached->storeAs('public/slides/', $imageToStore);
                }
            }
 

         $slides = Slide::UpdateOrCreate([
        'photo_title'=>request('photo_title'),
        'photo_description'=>request('photo_description'),      
        'award_id'=>request('award_id'),
           'photo'=>$imageToStore,
            'display'=>request('display'),
        'status'=>request('status'), 
        ]);

         //dd('Inserted correctly');

         //return view('slides'); 
       return redirect('/slides');  
        }

    

    /**
     * Display the specified resource.
     */

 

        public function show(project $project)
    {
         $awards['data'] = award::orderby("award_name","asc")
              ->select('id','award_name')
              ->get();

 //dd($projects);
        return view('admin.slides.addslide',compact('awards'));
    }


  public function getSlides($subprojectid=0){

         // Fetch Employees by Departmentid
         $empData['data'] = subproject::orderby("sub_project_name","asc")
              ->select('id','sub_project_name')
              ->where('project_id',$subprojectid)
              ->get();


 //dd( $empData['data']);
         return response()->json($empData);

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
       // Fetch departments
         $slides=slide::where('id',request('edit_slide'))
         ->first();

         $subprojects=subproject::where('project_id',$slides->project_id)->get();

      $subproject_first=subproject::where('id',$slides->subproject_id)
         ->first();

        $project_first=project::where('id',$slides->project_id)
         ->first();

       // dd($subprojects);

         $projects['data'] = project::orderby("project_name","asc")
              ->select('id','project_name')
              ->get();




        return view('admin.slides.editslide',compact('projects','slides','project_first','subproject_first','subprojects'));
    }

    /**
     * Update the specified resource in storage.
     */
      public function update(Request $request,$id)
    {
    $slides = slide::where('id',$id)->first();      
      $visionUpdate = slide::where('id',$id)
             ->where('status','Active')
             ->update([
           
         'photo_title'=>request('photo_title'),
        'photo_description'=>request('photo_description'),      
        'project_id'=>request('project_id'),
        'subproject_id'=>request('subproject_id'),
            'display'=>request('display'),
        'status'=>request('status'),
        ]);

//Update photo if exists
  if(request('slide_photo')){
                $attach = request('slide_photo');
                foreach($attach as $attached){

                     // Get filename with extension
                     $fileNameWithExt = $attached->getClientOriginalName();
                     // Just Filename
                     $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                     // Get just Extension
                     $extension = $attached->getClientOriginalExtension();
                     //Filename to store
                     $slidephoto = $filename.'_'.time().'.'.$extension;
                     //upload the image
                      //$path = $attached->storeAs('wawa/hh/jkl/donor_photos/', $missionphoto);
                    $path = $attached->storeAs('public/slides/', $slidephoto);
                }

             $slideUpdate = slide::where('id',$id)
             ->where('status','Active')
             ->update([
            'photo'=>$slidephoto
        ]);

//dd($slides->photo);
        Storage::delete('/public/slides/'.$slides->photo);   
            }
   
        return redirect('/slides');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
          $delete = slide::where('id',$id)->first();
      //dd($delete);
        if($delete->delete()){
             DB::statement("delete from slides where id=$id");
             Storage::delete('/public/slides/'.$delete->photo);
            
            return redirect()->route('slides.index')->with('info','The Slide deleted successfully');
        }
        else{
            return redirect()->route('slides.index')->with('error','The Slide not exists');
        }
    }
}
