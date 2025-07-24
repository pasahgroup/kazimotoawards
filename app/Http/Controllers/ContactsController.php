<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $contacts=contacts::get();     
     $status=contacts::distinct()->get(['status']);
     //dd('ddd');
     return view('admin.contacts.contacts',compact('contacts','status'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {      
        $contacts = contacts::UpdateOrCreate([
        'phone1'=>request('phone1'),
        'phone2'=>request('phone2'),
         'email1'=>request('email1'),
        'email2'=>request('email2'),

        'address'=>request('address'),
        'status'=>request('status')        
        ]);


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
                 $path = $attached->storeAs('public/logos/', $imageToStore);


  $contestant_fileupdate = contacts::where('id',$contacts->id)
             ->update([
               'logo'=>$imageToStore
        ]);       
    }
}






          return redirect()->route('contacts.index')->with('success','Tour Summary Cost created successful');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function showx(contacts $contacts,$id)
    {
      
 $status=contacts::where('id',$id)
 ->first();
//dd($status->status);
if($status->status=="Active")
{
$status="Inactive";
}
else
{
$status="Active";
}

        $contacts = contacts::where('id',$id)
               ->update([
                'status'=>$status
              ]);
return redirect()->route('contacts.index')->with('success','Successful updated!');
    }





        public function show(contacts $project)
    {
$contacts=contacts::get();
 //dd($contacts);
        return view('admin.contacts.addcontact',compact('contacts'));
    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contacts  $contacts
     * @return \Illuminate\Http\Response
     */
     public function edit(Request $request,$id)
    {
        $contact_first=contacts::where('id',$id)
         ->first();
     return view('admin.contacts.editcontacts',compact('contact_first'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contacts  $contacts
     * @return \Illuminate\Http\Response
     */
        public function update(Request $request,$id)
    {
     
   
      $visionUpdate = contacts::where('id',$id)
             ->update([           
            'phone1'=>request('phone1'),
        'phone2'=>request('phone2'),
         'email1'=>request('email1'),
        'email2'=>request('email2'),

        'address'=>request('address'),
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

            //  $slideUpdate = slide::where('id',$id)
            //  ->where('status','Active')
            //  ->update([
            // 'photo'=>$slidephoto

   $slides = contacts::where('id',$id)->first(); 
  $contestant_fileupdate = contacts::where('id',$id)
             ->update([
               'logo'=>$imageToStore

        ]);

//dd($slides->photo);
        Storage::delete('/public/logos/'.$slides->logo);   
            }
   
        return redirect('/contacts');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $delete = contacts::where('id',$id)->first();
      //dd($delete);
        if($delete->delete()){
             DB::statement("delete from contacts where id=$id");
             Storage::delete('/public/logos/'.$delete->logo);
            
            return redirect()->route('contacts.index')->with('info','The Contact deleted successfully');
        }
        else{
            return redirect()->route('contacts.index')->with('error','The Contact not exists');
        }
    }
}
