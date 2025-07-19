<?php

namespace App\Http\Controllers;

use App\Models\contestant;
use App\Http\Requests\StorecontestantRequest;
use App\Http\Requests\UpdatecontestantRequest;


use App\Models\Agent;
use App\Models\tailorMade;
use App\Models\TourEquiryForm;
use App\Models\partner;
use App\Models\tourGuide;
use App\Models\contacts;
use App\Models\enquiry;
use App\Models\lodge;
use App\Models\student;

use App\Models\award;
use App\Models\lodgetrainee;

use DB;
use Illuminate\Http\Request;

class ContestantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $awards=award::where('status','Active')
      ->where('award_name','!=',"")
      ->get();

      //dd($awards);

      return view('website.contestantregistration.contestantregistration',compact('awards'));
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



  public function contestant()
    {
       $contestants = contestant::get();
       
       //dd($contestants);
       $tailorMades = tailorMade::get();
       return view('admin.contestants.contestant',compact('contestants'));
   
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecontestantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      
     $start_date=request('birth_date');
     $birth_date=date('Y-m-d', strtotime($start_date));


            $contestants = contestant::Create([
        'full_name'=>request('full_name'),
          'birth_date'=>$birth_date,

         'phone'=>request('phone'),
        'email'=>request('email'),   
         'country'=>request('country'),
         'district'=>request('district'),

        'education'=>request('education'),
        'education_of'=>request('education_of'), 

         'experience_one'=>request('experience_one'),
        'experience_two'=>request('experience_two'), 
         'experience_three'=>request('experience_three'),
               
       'status'=>'Active',  
        ]);

//dd($contestants->id);

//File1
  if(request('file_one')){
            $attach = request('file_one');
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
                 $path = $attached->storeAs('public/photos/', $imageToStore);

  $contestant_fileupdate = contestant::where('id',$contestants->id)
             ->update([
               'file1'=>$imageToStore
        ]);
       
    }
}


//File1
  if(request('file_two')){
            $attach = request('file_two');
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
                 $path = $attached->storeAs('public/photos/', $imageToStore);

  $contestant_fileupdate = contestant::where('id',$contestants->id)
             ->update([
               'file2'=>$imageToStore
        ]);
       
    }
}


//File1
  if(request('file_three')){
            $attach = request('file_three');
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
                 $path = $attached->storeAs('public/photos/', $imageToStore);

  $contestant_fileupdate = contestant::where('id',$contestants->id)
             ->update([
               'file3'=>$imageToStore
        ]);
       
    }
}


//File1
  if(request('file_four')){
            $attach = request('file_four');
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
                 $path = $attached->storeAs('public/photos/', $imageToStore);

  $contestant_fileupdate = contestant::where('id',$contestants->id)
             ->update([
               'file4'=>$imageToStore
        ]);
       
    }
}


//File1
  if(request('file_five')){
            $attach = request('file_five');
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
                 $path = $attached->storeAs('public/photos/', $imageToStore);

  $contestant_fileupdate = contestant::where('id',$contestants->id)
             ->update([
               'file5'=>$imageToStore
        ]);
       
    }
}




         return redirect('/contestant');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contestant  $contestant
     * @return \Illuminate\Http\Response
     */
    public function show(contestant $contestant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contestant  $contestant
     * @return \Illuminate\Http\Response
     */
    public function edit(contestant $contestant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecontestantRequest  $request
     * @param  \App\Models\contestant  $contestant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecontestantRequest $request, contestant $contestant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contestant  $contestant
     * @return \Illuminate\Http\Response
     */
    public function destroy(contestant $contestant)
    {
        //
    }
}
