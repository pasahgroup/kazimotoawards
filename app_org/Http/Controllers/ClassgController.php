<?php

namespace App\Http\Controllers;

use App\Models\classg;
use App\Http\Requests\StoreclassgRequest;
use App\Http\Requests\UpdateclassgRequest;

use Illuminate\Http\Request;

class ClassgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $classes = classg::orderBy('class', 'asc')->get();
        return view('admins.classes.class-list',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addclass(){
         return view('admins.classes.addclass');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreclassgRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if (request('class')) {
        $class = classg::UpdateOrCreate([
        'class'=>request('class_name')        
           ]);
                  
           return redirect()->back()->with('success','Class recorded successfully');
        }

    }




     public function editClass($id){
       
       $classes = classg::where('id',$id)
       ->first();
      //dd($tribes);
         return view('admins.classes.edit-class',compact('classes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\classg  $classg
     * @return \Illuminate\Http\Response
     */
    public function show(classg $classg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\classg  $classg
     * @return \Illuminate\Http\Response
     */
    public function edit(classg $classg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateclassgRequest  $request
     * @param  \App\Models\classg  $classg
     * @return \Illuminate\Http\Response
     */

  public function update(Request $request,$id)
    {
  
      $toupdate = classg::where('id',$id)
               ->update([
            'class'=>request('class_name')
        ]);
    return redirect()->route('class.index')->with('success','Class created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\classg  $classg
     * @return \Illuminate\Http\Response
     */
      public function destroy($id)
    {
     $delete = classg::where('id',$id)->first();
        if($delete->delete()){
            return redirect()->route('class.index')->with('success','Class removed successfully');
        }    
        else{
            return redirect()->route('class.index')->with('error','Class not exists');
        }
    }
}
