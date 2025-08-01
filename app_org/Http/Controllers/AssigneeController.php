<?php

namespace App\Http\Controllers;

use App\Models\assignee;
use App\Models\student;
use App\Models\classg;
use App\Models\session;
use App\Models\lodge;
use App\Models\designation;

use App\Http\Requests\StoreassigneeRequest;
use App\Http\Requests\UpdateassigneeRequest;
use Illuminate\Http\Request;
use DB;

class AssigneeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $search="iflag";
         $datas = student::join('assignees','assignees.student_id','students.id')
         ->get();

          $classes = classg::get();

  //$classes = classg::where('class',request('classg'))
          //->get();
           $sessions = session::where('class_name',request('classg'))
                 ->get();
         // dd($datas);
             return view('admins.assignee.index',compact('datas','sessions','search','classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // dd('dddd');
     // $tribes = tribe::orderBy('tribe', 'asc')->get();
       $lodges = lodge::orderBy('lodge_name', 'asc')->get();
//         $relations = relation::orderBy('relation', 'asc')->get();
         $designations = designation::orderBy('designation', 'asc')->get();
         $studentss = student::select('students.id','students.first_name','students.middle_name','students.last_name')
         ->orderBy('first_name', 'asc')->get();


          return view('admins.assignee.add',compact('lodges','designations','studentss'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreassigneeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd(request('student_id'));
      
          $student =  assignee::Create(
          
            [
                 'student_id'=>request('student_id'),                
                             
                 'designation'=>request('designation'),
                 'lodge'=>request('lodge'),
                 'date'=>request('date'),
                 'status'=>'Active',
                'user_id'=>auth()->id()
            ]);
          return redirect()->route('assignee.index')->with('success','Assignee created successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\assignee  $assignee
     * @return \Illuminate\Http\Response
     */
   public function show(Request $request,$id)
    {

    $search='assignee';

           $student=student::where('status','Active')
           ->where('id',$id)
           ->first();

         
  $datas = student::join('assignees','assignees.student_id','students.id')
         ->where('students.id',$id)
         ->get();

                      //dd($student);
         return view('admins.students.user-details',compact('student','search','datas'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\assignee  $assignee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    

   // dd($id);

              $lodges = lodge::orderBy('lodge_name', 'asc')->get();
         $designations = designation::orderBy('designation', 'asc')->get();
         $studentss = student::select('students.id','students.first_name','students.middle_name','students.last_name')
         ->orderBy('first_name', 'asc')->get();


 // $datas=student::where('status','Active')
 //           ->where('id',$id)
 //           ->first();

       $datas = student::join('assignees','assignees.student_id','students.id')
         ->where('assignees.id',$id)
         ->first();

//dd($datas);

             return view('admins.assignee.edit-assignee',compact('studentss','datas','lodges','designations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateassigneeRequest  $request
     * @param  \App\Models\assignee  $assignee
     * @return \Illuminate\Http\Response
     */
   
     public function update($id)
    {
        
         
          $studentUpdate =  assignee::UpdateOrCreate(
            [   'id'=>$id],
            [
                'student_id'=>request('student_id'),               
                             
                 'designation'=>request('designation'),
                 'lodge'=>request('lodge'),
                 'date'=>request('date'),
                 'status'=>request('status'),
                'user_id'=>auth()->id()
            ]);

   return redirect()->route('assignee.index')->with('success','Assignee updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\assignee  $assignee
     * @return \Illuminate\Http\Response
     */
    public function destroy(assignee $assignee)
    {
        //
    }
}
