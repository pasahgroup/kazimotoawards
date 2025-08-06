<?php

namespace App\Http\Controllers;

use App\Models\award;
use Illuminate\Http\Request;
use App\Http\Requests\StoreprojectRequest;
use App\Http\Requests\UpdateprojectRequest;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


use App\Models\contestant;


use Illuminate\Support\Str;
use Illuminate\Support\Benchmark;
// use Illuminate\Http\UploadedFile;
//use App\Http\Livewire\Input;
use Intervention\Image\Facades\Image;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $auth=auth::user();
       // dd($auth);
    $awards=award::get();
    //dd($awards);
    return view('admin.awards.awards',compact('awards','auth'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $awards=award::where('status','Active')
        ->get();
        return view('admin.awards.addaward',compact('awards'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
   //$rr=[];  
//$cars[0] = "Volvo";  
$competes=request('compete');
$awards = implode(", ", $competes);
//echo $cars_together;

 // dd($explode_id);
//dd($status);
//dd($newLength);



            if(request('photo')){
                $attach = request('photo');
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
                    $path = $attached->storeAs('public/awards_photos/', $imageToStore);

         }
      }

        $awards = award::UpdateOrCreate([
        'award_name'=>request('award_name'),
    ],[
        'prize'=>$awards,     
        'photo'=>$imageToStore,  
         'year'=>request('year'),    
       'status'=>request('status')
        ]);

      return redirect('/awards');
    }

    /**
     * Display the specified resource.
     */



 public function awardsw()
    {
       $awards = award::get();       
       //dd($awards);
       return view('website.awardsw.awardsw',compact('awards'));   
    }






    public function show(project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id)
    {
        $awards=award::where('id',$id)->first();
    return view('admin.awards.editaward',compact('awards'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
      
$award_data = award::where('id',$id)->first();
$donor_nameUpdate = award::where('id',$id)
             ->update([
'award_name'=>request('award_name'),
   'prize'=>request('prize'),        
         'year'=>request('year'),    
       'status'=>request('status')
        ]);


  if(request('photo')){
                $attach = request('photo');
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
                    $path = $attached->storeAs('public/awards_photos/', $imageToStore);

         }
  $awardUpdate = award::where('id',$id)
             ->update([
            'photo'=>$imageToStore
        ]);
        Storage::delete('/public/awards_photos/'.$award_data->photo);
      }

         return redirect('/awards');
    }

    /**
     * Remove the specified resource from storage.
     */
     public function destroy($id)
    {
        $delete = award::where('id',$id)->first();
        if($delete->delete()){
             DB::statement("delete from awards where id=$id");
             
            return redirect()->route('awards.index')->with('info','Awards deleted successfully');
        }
        else{
            return redirect()->route('awards.index')->with('error','Awards not exists');
     }
    }
}
