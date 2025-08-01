<?php

namespace App\Http\Controllers;

use App\Models\bank;
use Illuminate\Http\Request;
use App\Http\Requests\StoreprojectRequest;
use App\Http\Requests\UpdateprojectRequest;
use DB;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $banks=bank::get();
       return view('admin.bank.bank',compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $banks=bank::get();
        //dd($activities);
        return view('admin.bank.addbank',compact('banks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $banks = bank::UpdateOrCreate([
        'bank_account_no'=>request('bank_account_no')
            ],[
         'bank_name'=>request('bank_name'),
        'swift_code'=>request('swift_code'),      
        'bank_holder_name'=>request('bank_holder_name'),
        'currency'=>request('currency'),       
        'country'=>request('country'),       
       'status'=>request('status'),  
        ]);

         return redirect('/bank');
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
        $banks=bank::where('id',$id)->first();
        //dd($banks);
        return view('admin.bank.editbank',compact('banks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $project = bank::where('id',$id)->first();      
      
  $project_nameUpdate = bank::where('id',$id)
             ->update([
        'bank_account_no'=>request('bank_account_no'),
       'bank_name'=>request('bank_name'),
        'swift_code'=>request('swift_code'),      
        'bank_holder_name'=>request('bank_holder_name'),
        'currency'=>request('currency'),       
        'country'=>request('country'),       
       'status'=>request('status'),     
        ]);

        return redirect('/bank');
    }

    /**
     * Remove the specified resource from storage.
     */
     public function destroy($id)
    {
         //
        $delete = bank::where('id',$id)->first();
      //dd($delete);
        if($delete->delete()){
             DB::statement("delete from banks where id=$id");
             
            return redirect()->route('bank.index')->with('info','Bank deleted successfully');
        }
        else{
            return redirect()->route('bank.index')->with('error','ActiBankvity not exists');
    }
    }
}
