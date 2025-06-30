<?php

namespace App\Http\Controllers;

use App\Models\award;
use Illuminate\Http\Request;
use App\Http\Requests\StoreprojectRequest;
use App\Http\Requests\UpdateprojectRequest;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
    return view('admin.awards.awards',compact('awards','auth'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $awards=award::get();
        return view('admin.awards.addaward',compact('awards'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

dd(request('compete'));


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

        $donors = award::UpdateOrCreate([
        'award_name'=>request('award_name'),
    ],[
        'price'=>request('price'),     
        'photo'=>$imageToStore,      
       'status'=>request('status')
        ]);

      return redirect('/awards');
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
        return view('admin.awards.editaward',compact('donors'));
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
