<?php

namespace App\Http\Controllers;

use App\Models\donor;
use Illuminate\Http\Request;
use App\Http\Requests\StoreprojectRequest;
use App\Http\Requests\UpdateprojectRequest;
use DB;
use Illuminate\Support\Facades\Storage;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $donors=donor::get();
    return view('admin.donor.donor',compact('donors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $donors=donor::get();
        return view('admin.donor.adddonor',compact('donors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
            if(request('logo')){
                $attach = request('logo');
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
                    $path = $attached->storeAs('public/donor_photos/', $imageToStore);

         }
      }

        $donors = donor::UpdateOrCreate([
        'donor_name'=>request('donor_name'),
    ],[
        'contact_number'=>request('contact_number'),
        'email'=>request('email'),
        'address'=>request('address'),
        'country'=>request('country'),       
        'logo'=>$imageToStore,      
       'status'=>request('status')
        ]);

      return redirect('/donor');
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
        $donors=donor::where('id',$id)->first();
        return view('admin.donor.editdonor',compact('donors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
$donors = donor::where('id',$id)->first();   
      
  $donor_nameUpdate = donor::where('id',$id)
             ->update([
       'contact_number'=>request('contact_number'),
        'email'=>request('email'),
        'address'=>request('address'),
        'country'=>request('country'),       
        'status'=>request('status')
        ]);


  if(request('logo')){
                $attach = request('logo');
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
                    $path = $attached->storeAs('public/donor_photos/', $imageToStore);

         }
  $donorUpdate = donor::where('id',$id)
             ->update([
            'logo'=>$imageToStore
        ]);
        Storage::delete('/public/donor_photos/'.$donors->logo);
      }

         return redirect('/donor');
    }

    /**
     * Remove the specified resource from storage.
     */
     public function destroy($id)
    {
        $delete = donor::where('id',$id)->first();
        if($delete->delete()){
             DB::statement("delete from donors where id=$id");
             
            return redirect()->route('donor.index')->with('info','Donor deleted successfully');
        }
        else{
            return redirect()->route('donor.index')->with('error','Donor not exists');
     }
    }
}
