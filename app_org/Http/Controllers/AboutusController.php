<?php

namespace App\Http\Controllers;

use App\Models\aboutus;
use Illuminate\Http\Request;
use App\Http\Requests\StoreaboutusRequest;
use App\Http\Requests\UpdateaboutusRequest;
use Illuminate\Support\Facades\Storage;
use DB;

class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $aboutus=aboutus::get();
        return view('admin.aboutus.aboutus',compact('aboutus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $aboutus=aboutus::get();
        return view('admin.aboutus.add-aboutus',compact('aboutus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        if(request('mission_photo')){
                $attach = request('mission_photo');
                foreach($attach as $attached){

                     // Get filename with extension
                     $fileNameWithExt = $attached->getClientOriginalName();
                     // Just Filename
                     $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                     // Get just Extension
                     $extension = $attached->getClientOriginalExtension();
                     //Filename to store
                     $missionphoto = $filename.'_'.time().'.'.$extension;
                     //upload the image
                      //$path = $attached->storeAs('wawa/hh/jkl/donor_photos/', $missionphoto);
                    $path = $attached->storeAs('public/aboutus/', $missionphoto);
                }
            }

     if(request('vision_photo')){
                $attachv = request('vision_photo');
                foreach($attachv as $attachedv){

                     // Get filename with extension
                     $fileNameWithExt = $attachedv->getClientOriginalName();
                     // Just Filename
                     $filenamev = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                     // Get just Extension
                     $extensionv = $attachedv->getClientOriginalExtension();
                     //Filename to store
                     $visionphoto = $filenamev.'_'.time().'.'.$extension;
                     //upload the image
                      //$path = $attachedvattachedv->storeAs('wawa/hh/jkl/donor_photos/', $visionphoto);
                    $pathv = $attachedv->storeAs('public/aboutus/', $visionphoto);
                }
            }

//dd('Reached here');




        $aboutus = aboutus::UpdateOrCreate([
      'status'=>'Active', 
        ],[
            'who_weare'=>request('who_weare'),
        'mission_photo'=>$missionphoto,
        'mission'=>request('mission'),
        'vision_photo'=>$visionphoto,      
        'vision'=>request('vision'),
        ]);
         return redirect('/aboutus');
    }

    /**
     * Display the specified resource.
     */
    public function show(aboutus $aboutus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id)
    {
       // dd($id);
         $aboutus=aboutus::where('id',$id)->first();
        return view('admin.aboutus.edit-aboutus',compact('aboutus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        
    $aboutus = aboutus::where('id',$id)->first();        
      
  $visionUpdate = aboutus::where('id',$id)
             ->where('status','Active')
             ->update([
            'who_weare'=>request('who_weare'),
            'mission'=>request('mission'),    
        'vision'=>request('vision'),
        'status'=>request('status')
        ]);

//Update photo if exists
  if(request('mission_photo')){
                $attach = request('mission_photo');
                foreach($attach as $attached){

                     // Get filename with extension
                     $fileNameWithExt = $attached->getClientOriginalName();
                     // Just Filename
                     $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                     // Get just Extension
                     $extension = $attached->getClientOriginalExtension();
                     //Filename to store
                     $missionphoto = $filename.'_'.time().'.'.$extension;
                     //upload the image
                      //$path = $attached->storeAs('wawa/hh/jkl/donor_photos/', $missionphoto);
                    $path = $attached->storeAs('public/aboutus/', $missionphoto);
                }

             $missionUpdate = aboutus::where('id',$id)
             ->where('status','Active')
             ->update([
            'mission_photo'=>$missionphoto
        ]);

        Storage::delete('/public/aboutus/'.$aboutus->mission_photo);   
            }

     if(request('vision_photo')){
                $attachv = request('vision_photo');
                foreach($attachv as $attachedv){

                     // Get filename with extension
                     $fileNameWithExt = $attachedv->getClientOriginalName();
                     // Just Filename
                     $filenamev = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                     // Get just Extension
                     $extensionv = $attachedv->getClientOriginalExtension();
                     //Filename to store
                     $visionphoto = $filenamev.'_'.time().'.'.$extensionv;
                     //upload the image
                      //$path = $attachedvattachedv->storeAs('wawa/hh/jkl/donor_photos/', $visionphoto);
                    $pathv = $attachedv->storeAs('public/aboutus/', $visionphoto);
                }

               

  $visionUpdate = aboutus::where('id',$id)
             ->where('status','Active')
             ->update([
            'vision_photo'=>$visionphoto
        ]);
        Storage::delete('/public/aboutus/'.$aboutus->vision_photo);

}
        return redirect('/aboutus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = aboutus::where('id',$id)->first();
      //dd($delete);
        if($delete->delete()){
             DB::statement("delete from aboutuses where id=$id");
             Storage::delete('/public/aboutus/'.$delete->mission_photo);
             Storage::delete('/public/aboutus/'.$delete->vision_photo);

            return redirect()->route('aboutus.index')->with('info','Aboutus deleted successfully');
        }
        else{
            return redirect()->route('aboutus.index')->with('error','Aboutus not exists');
        }
    }
}
