<?php

namespace App\Http\Controllers;

use App\Models\people_percent;
use Illuminate\Http\Request;
use DB;
use Auth;

class PeoplePercentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $percents = people_percent::get();
        //dd($inclusives);
        return view('admins.percent.percent',compact('percents'));    //
    }


     public function addPercent(){

         return view('admins.percent.addPercent');
    }



  public function editPercent($id){
       
       $percent = people_percent::where('id',$id)
       ->first();
     //  dd($widgets);
         return view('admins.percent.editPercent',compact('percent'));
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
        
  if (request('percent')) {

        $inclusive = people_percent::UpdateOrCreate([
        'percent_name'=>request('percent_name'),
           'percent'=>request('percent'),
               'user_id'=>auth::id()   
           ]);
                  
           return redirect()->back()->with('success','Percent saved successfully');
        }

    //       // Assign Inclusive to the Tour Name
    //     if(request('assign')){           
    //     $assign = accommodationInclusive::UpdateOrCreate([
    //     'inclusive_id'=>request('assign'),
    //     'tour_id'=>request('tour_id')
    //      ],
    //     [
    //     'user_id'=>auth::id()            
    //        ]);
    //  return redirect()->back()->with('success','Widget created successfully');
    // }

            }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\people_percent  $people_percent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programs=program::where('id',$id)->get();       
     $inclusives=DB::select("select id,inclusive from inclusives  where id not in(select (inclusive_id)id from accommodation_inclusives where tour_id =$id)");
        //dd($inclusives);

        $pages = page::whereid($id)->get();
        $assignLists = accommodationInclusive::join('inclusives','accommodation_inclusives.inclusive_id','inclusives.id')
        ->where('accommodation_inclusives.tour_id',$id)->get();
        //dd($assignLists);


          return view('admins.inclusives.assignInclusiveList',compact('inclusives','id','assignLists','programs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\people_percent  $people_percent
     * @return \Illuminate\Http\Response
     */
    public function edit(people_percent $people_percent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\people_percent  $people_percent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
    
 $toupdate = people_percent::where('id',$id)
               ->update([
            'percent_name'=>request('percent_name'),
            'percent'=>request('percent')
        ]);
    return redirect()->route('percent.index')->with('success','percent updated successfully');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\people_percent  $people_percent
     * @return \Illuminate\Http\Response
     */

 public function destroyf($id)
    {
  
        $delete = people_percent::where('id',$id)->first();
        if($delete->delete()){
            return redirect()->route('percent.index')->with('success','percent removed successfully');
        }    
        else{
            return redirect()->route('percent.index')->with('error','percent not exists');
        }
    }

        public function destroy($id)
    {
        //
        //dd($id);
        $delete = accommodationInclusive::where('tour_id',$id)->first();
        if($delete->delete()){
            return redirect()->back()->with('success','Widget removed successfully');
        }    
        else{
            return redirect()->back()->with('error','Widget not exists');
        }
    }
}
