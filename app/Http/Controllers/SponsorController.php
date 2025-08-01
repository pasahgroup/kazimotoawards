<?php

namespace App\Http\Controllers;

use App\Models\sponsor;
use App\Models\contacts;
use Illuminate\Http\Request;
use App\Http\Requests\StoresponsorRequest;
use App\Http\Requests\UpdatesponsorRequest;
use Illuminate\Support\Facades\Storage;
use DB;



class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $sponsors=sponsor::get();     
     $status=contacts::distinct()->get(['status']);
     //dd('ddd');
     return view('admin.sponsors.sponsors',compact('sponsors','status'));
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
     * @param  \App\Http\Requests\StoresponsorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function sponsorp(Request $request)
    {
        
//dd(request('mobile'));


  $sponsors = sponsor::UpdateOrCreate([
        'sponsor_name'=>request('sponsor'),
        'mobile'=>request('mobile'),
         'email'=>request('email'),
        'pledge'=>request('pledge'),
         'contact_person'=>request('contact_person'),

        'address'=>request('address'),
        'website'=>request('website'),
        'status'=>request('status')        
        ]);


//Update photo if exists
  if(request('logo_photo')){
                $attach = request('logo_photo');
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
                      //$path = $attached->storeAs('wawa/hh/jkl/donor_photos/', $missionphoto);
                    $path = $attached->storeAs('public/logos/', $imageToStore);
                }

  $contestant_fileupdate = sponsor::where('id',$sponsors->id)
             ->update([
               'logo'=>$imageToStore

        ]);        
    }

return redirect()->route('register_sponsorw')->with('success','Tour Summary Cost created successful');

    }





public function store(Request $request)
    {
        
//dd(request('mobile'));


  $sponsors = sponsor::UpdateOrCreate([
        'sponsor_name'=>request('sponsor'),
        'mobile'=>request('mobile'),
         'email'=>request('email'),
        'pledge'=>request('pledge'),
         'contact_person'=>request('contact_person'),

        'address'=>request('address'),
        'website'=>request('website'),
        'status'=>request('status')        
        ]);


//Update photo if exists
  if(request('logo_photo')){
                $attach = request('logo_photo');
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
                      //$path = $attached->storeAs('wawa/hh/jkl/donor_photos/', $missionphoto);
                    $path = $attached->storeAs('public/logos/', $imageToStore);
                }

  $contestant_fileupdate = sponsor::where('id',$sponsors->id)
             ->update([
               'logo'=>$imageToStore

        ]);        
    }

return redirect()->route('sponsors.index')->with('success','Tour Summary Cost created successful');

    }






    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
 


        public function show(contacts $project)
    {
   $sponsors=sponsor::get();
        return view('admin.sponsors.addsponsor',compact('sponsors'));
    }


    public function sponsorw(Request $request)
    {
       $sponsors=sponsor::get();
        return view('website.sponsorw.addsponsorw',compact('sponsors'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
   public function edit(Request $request,$id)
    {
        $sponsor_first=sponsor::where('id',$id)
         ->first();
     return view('admin.sponsors.editsponsor',compact('sponsor_first'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesponsorRequest  $request
     * @param  \App\Models\sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
         public function update(Request $request,$id)
    {

      $visionUpdate = sponsor::where('id',$id)
             ->update([           
        'sponsor_name'=>request('sponsor'),
        'mobile'=>request('mobile'),
         'email'=>request('email'),
        'pledge'=>request('pledge'),
         'contact_person'=>request('contact_person'),

        'address'=>request('address'),
        'website'=>request('website'),
        'status'=>request('status') 
       ]);

//Update photo if exists
  if(request('logo_photo')){
                $attach = request('logo_photo');
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
                      //$path = $attached->storeAs('wawa/hh/jkl/donor_photos/', $missionphoto);
                    $path = $attached->storeAs('public/logos/', $imageToStore);
                }

   $slides = sponsor::where('id',$id)->first(); 
  $contestant_fileupdate = sponsor::where('id',$id)
             ->update([
               'logo'=>$imageToStore

        ]);

//dd($slides->photo);
        Storage::delete('/public/logos/'.$slides->logo);   
            }
   
        return redirect('/sponsors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $delete = sponsor::where('id',$id)->first();
      //dd($delete);
        if($delete->delete()){
             DB::statement("delete from sponsors where id=$id");
             Storage::delete('/public/logos/'.$delete->logo);
            
            return redirect()->route('sponsors.index')->with('info','The Sponsor deleted successfully');
        }
        else{
            return redirect()->route('sponsors.index')->with('error','The Sponsor not exists');
        }
    }
}
