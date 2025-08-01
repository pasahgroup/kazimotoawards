<?php

namespace App\Http\Controllers;

use App\Models\lodgetrainee;
use App\Models\classg;
use App\Models\session;
use App\Models\tribe;
use App\Models\lodge;
use App\Models\relation;
use App\Models\designation;
///use App\Models\lodgetrainee;

use App\Http\Requests\StorelodgetraineeRequest;
use App\Http\Requests\UpdatelodgetraineeRequest;
use Illuminate\Http\Request;

class LodgetraineeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search="iflag";
         $datas = lodgetrainee::get();
          $classes = classg::get();

  //$classes = classg::where('class',request('classg'))
          //->get();
           $sessions = session::where('class_name',request('classg'))
                 ->get();
         // dd($classes);
             return view('admins.trainee.trainee',compact('datas','sessions','search','classes'));
    }



  public function researcht(request $request)
    {
     //dd('search');
     
     $search="sflag";

         $datas = lodgetrainee::where('class',request('classg'))
         ->where('session',request('session'))
         ->get();

          $sessions = session::where('class_name',request('classg'))
                   ->where('session','!=',request('session'))
                 ->get();

         //dd($sessions);
 
 $selected_session=request('session');
 $selected_class=request('classg');

          $classes = classg::get();
             return view('admins.trainee.trainee',compact('datas','search','sessions','classes','selected_session','selected_class'));
    }



    public function searcht(request $request,$x,$y)
    {
     //dd($x);
     
     $search="sflag";

         $datas = lodgetrainee::where('class',$x)
         ->where('session',$y)
         ->get();

          $sessions = session::where('class_name',request('classg'))
                   ->where('session','!=',request('session'))
                 ->get();

         //dd($sessions);
 
 $selected_session=request('session');
 $selected_class=request('classg');

          $classes = classg::get();
             return view('admins.trainee.trainee',compact('datas','search','sessions','classes','selected_session','selected_class'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
       // dd('dddd');
      $tribes = tribe::orderBy('tribe', 'asc')->get();
       $lodges = lodge::orderBy('lodge_name', 'asc')->get();
        $relations = relation::orderBy('relation', 'asc')->get();
         $designations = designation::orderBy('designation', 'asc')->get();

 $classes = classg::get();
  $sessions = session::get();
  // $lodges = lodge::get();

        //dd($designations);
          return view('admins.trainee.add',compact('tribes','lodges','classes','sessions','relations','designations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorelodgetraineeRequest  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
      

           $pin=rand(10000,99999);    
         
          $student =  lodgetrainee::UpdateOrCreate(
            [   'pin'=>$pin],
            [
                  'class'=>request('class'),
                 'session'=>request('session'),
                 'first_name'=>request('fname'),
                 'middle_name'=>request('mname'),
                 'last_name'=>request('lname'),
              

                 'gender'=>request('gender'),
                  'mobile_no'=>request('mobile_no'),

                  'no_topic'=>request('no_of_topic'),
                  'trained_topic'=>request('trained_topic'),
 
                 'lodge'=>request('lodge_name'),
                 'email'=>request('email'),

                'designation'=>request('designation'),

                 'status'=>'Active',
                'user_id'=>auth()->id()
            ]);


//dd($student->id);


   if(request('attachment')){
                $attach = request('attachment');
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
                     $path = $attached->storeAs('public/trainee/', $imageToStore);

       
           // $id = attachment::where('destination_id', '=', $program->id)
           //  ->where('type', $type)
           //  ->get()->first();
     
     //dd($imageToStore);      
//dd(request('attachment'));

          if(request('attachment') !=null)
            {
      //dd('printintcxx');   

             $toupdate = lodgetrainee::where('id',$student->id)
            // ->where('type', $type)
             ->update([
            'photo'=>$imageToStore
           ]);

//dd('printin bnmn');   

           }else
           {
              // attachment::Create(
              //   [
              //   'destination_id'=>$program->id,
              //   'attachment'=>$imageToStore,
              //   'type'=> $type
              //   ]
              //   );   

              dd('no photo');      
         }
        }
      }
       
   return redirect()->route('trainee.index')->with('success','Created successfuly');
    }


      public function editTrainee($id)
    {
        //dd($id);

       $datas = lodgetrainee::where('id', $id)->first();  
        $tribes = tribe::orderBy('tribe', 'asc')->get(); 
       $lodges = lodge::orderBy('lodge_name', 'asc')->get();

              $classes = classg::orderBy('class', 'asc')->get();
               $sessions = session::orderBy('session', 'asc')->get();

        $relations = relation::orderBy('relation', 'asc')->get();
         $designations = designation::orderBy('designation', 'asc')->get();
//dd($datas);
             return view('admins.trainee.edit-trainee',compact('datas','classes','sessions','tribes','lodges','relations','designations'));
     }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lodgetrainee  $lodgetrainee
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {

//dd(request('searchf'));
    $search=request('searchf');
           $trainee=lodgetrainee::where('id',$id)
           ->first();

//dd($trainee);
                      //dd($students);
         return view('admins.trainee.trainee-details',compact('trainee','search'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lodgetrainee  $lodgetrainee
     * @return \Illuminate\Http\Response
     */
    public function edit(lodgetrainee $lodgetrainee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelodgetraineeRequest  $request
     * @param  \App\Models\lodgetrainee  $lodgetrainee
     * @return \Illuminate\Http\Response
     */
 
    public function update($id)
    {
        
//dd($id);

       $studentUpdate = lodgetrainee::UpdateOrCreate(
           ['id'=>$id],
           
            [
                  'class'=>request('class'),
                 'session'=>request('session'),
                 'first_name'=>request('fname'),
                 'middle_name'=>request('mname'),
                 'last_name'=>request('lname'),
              
                 'gender'=>request('gender'),
                  'mobile_no'=>request('mobile_no'),

                  'no_topic'=>request('no_of_topic'),
                  'trained_topic'=>request('trained_topic'),
                   
                'lodge'=>request('lodge_name'),

                 'email'=>request('email'),
                'designation'=>request('designation'),


                 'status'=>request('status'),
                'user_id'=>auth()->id()
            ]);

//dd($studentUpdate->id);


   if(request('attachment')){
                $attach = request('attachment');
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
                     $path = $attached->storeAs('public/trainee/', $imageToStore);


          if(request('attachment') !=null)
            {
      //dd('printintcxx');   

             $toupdate = lodgetrainee::where('id',$studentUpdate->id)
            // ->where('type', $type)
             ->update([
            'photo'=>$imageToStore
           ]);
           }
        }
      }
       
   return redirect()->route('trainee.index')->with('success','Created successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lodgetrainee  $lodgetrainee
     * @return \Illuminate\Http\Response
     */
    public function destroy(lodgetrainee $lodgetrainee)
    {
        //
    }
}
