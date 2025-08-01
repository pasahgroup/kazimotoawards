<?php

namespace App\Http\Controllers;

use App\Models\supply;
use App\Models\lodge;
use App\Models\designation;

use App\Http\Requests\StoresupplyRequest;
use App\Http\Requests\UpdatesupplyRequest;

use Illuminate\Http\Request;
use DB;


class SupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd('print3');

         $search="iflag";
         $supplies =supply::get();
          // $categories = category::get();
      
  //$classes = classg::where('class',request('classg'))
          //->get();
         // $sessions = session::where('class_name',request('classg'))
         //       ->get();
         //dd($supplies);
             return view('admins.supply.supply',compact('supplies','search'));
    

//  // Fetch departments
//          $departments['data'] = category::orderby("category","asc")
//               ->select('id','category')
//               ->get();

// //dd( $departments['data']);
//          // Load index view
//         //  return view('index')->with("departments",$departments);

//              return view('admins.index',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
         $lodges = lodge::where('status','Active')->get();
        $designations = designation::get();
              // $departments = department::get();

//dd($lodges);
             // return view('admins.employee.add-employee',compact('departments'));
          return view('admins.supply.add-supply',compact('lodges','designations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoresupplyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
          $asset =  supply::Create(
            [  
                  'supply_name'=>request('supply_name'),
                  'phone'=>request('phone'),
                   'email'=>request('email'),
                 'location'=>request('location'),
               
                 'tin'=>request('tin'),
                 'vrn'=>request('vrn'),
                     'status'=>request('status'),
                'user_id'=>auth()->id()
            ]);

             return redirect()->route('supply.create')->with('success','Employee recorded successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
            //dd(request('searchf'));
    $search=request('searchf');
           $supplies=supply::where('id',$id)
           ->first();

//dd($trainee);
                      //dd($students);
         return view('admins.supply.supply-details',compact('supplies','search'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function edit(supply $supply)
    {
        //
    }


      public function editsupply($id)
    {
        
       // dd($id);
        // $lodges = lodge::where('status','Active')
        //  ->orderBy('lodge_name', 'asc')->get();       
        //  $designations = designation::orderBy('designation', 'asc')->get();

         $supplies = supply::where('id',$id)->first();
//dd($supplies);

             return view('admins.supply.edit-supply',compact('supplies'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesupplyRequest  $request
     * @param  \App\Models\supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        
           $supplyUpdate = supply::UpdateOrCreate(
           ['id'=>$id],
           
            [
                 'supply_name'=>request('supply_name'),
                  'phone'=>request('phone'),
                   'email'=>request('email'),
                 'location'=>request('location'),
               
                 'tin'=>request('tin'),
                 'vrn'=>request('vrn'),
                     'status'=>request('status'),
                'user_id'=>auth()->id()
            ]);
     return redirect()->route('supply.index')->with('success','Supply recorded successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\supply  $supply
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
         //dd($id);
        $delete = supply::where('id',$id)->first();
      //dd($delete);
        if($delete->delete()){
             DB::statement("delete from supplies where id=$id");
            return redirect()->route('supply.index')->with('info','Supply deleted successfully');
        }    
        else{
            return redirect()->route('supply.index')->with('error','Supply not exists');
        }
    }
}
