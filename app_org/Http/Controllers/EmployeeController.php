<?php

namespace App\Http\Controllers;

use App\Models\employee;

use App\Models\lodge;
use App\Models\designation;

use App\Http\Requests\StoreemployeeRequest;
use App\Http\Requests\UpdateemployeeRequest;
use Illuminate\Http\Request;
use DB;

class EmployeeController extends Controller
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
         $employees = employee::get();
          // $categories = category::get();
      
  //$classes = classg::where('class',request('classg'))
          //->get();
         // $sessions = session::where('class_name',request('classg'))
         //       ->get();
         // dd($employees);
             return view('admins.employee.employee',compact('employees','search'));
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
          return view('admins.employee.add-employee',compact('lodges','designations'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreemployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(request('assign_date'));
              
          $asset =  employee::Create(
            [  
                  'full_name'=>request('full_name'),
                  'phone'=>request('phone'),
                   'email'=>request('email'),
                  'department'=>request('department'),
                   'designation'=>request('designation'),
                 'location'=>request('location'),
               
                 'reg_date'=>request('reg_date'),
                     'status'=>request('status'),
                'user_id'=>auth()->id()
            ]);



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
                     $path = $attached->storeAs('public/employees/', $imageToStore);


          if(request('attachment') !=null)
            {
      //dd('printintcxx');   

             $toupdate = employee::where('id',$asset->id)
            // ->where('type', $type)
             ->update([
            'photo'=>$imageToStore
           ]);


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
       
   return redirect()->route('employee.create')->with('success','Employee recorded successfuly');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //dd(request('searchf'));
    $search=request('searchf');
           $employee=employee::where('id',$id)
           ->first();

//dd($trainee);
                      //dd($students);
         return view('admins.employee.employee-details',compact('employee','search'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee,$id)
    {
        dd('print');
    }




   public function editemployee($id)
    {
        
        $lodges = lodge::where('status','Active')
         ->orderBy('lodge_name', 'asc')->get();       
         $designations = designation::orderBy('designation', 'asc')->get();

         $employee = employee::where('id',$id)->first();
//dd($employee);
             return view('admins.employee.edit-employee',compact('lodges','designations','employee'));
     }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateemployeeRequest  $request
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        
      //  dd($id);
         $employeeUpdate = employee::UpdateOrCreate(
           ['id'=>$id],
           
            [
                    'full_name'=>request('full_name'),
                  'phone'=>request('phone'),
                   'email'=>request('email'),
                  'department'=>request('department'),
                   'designation'=>request('designation'),
                 'location'=>request('location'),
               
                 'reg_date'=>request('reg_date'),
                     'status'=>request('status'),
                'user_id'=>auth()->id()
            ]);
  



  if(request('attachment') !=null){
   // dd('not null');

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
                     $path = $attached->storeAs('public/employees/', $imageToStore);


          if(request('attachment') !=null)
            {
      //dd('printintcxx');   

             $toupdate = employee::where('id',$employeeUpdate->id)
            // ->where('type', $type)
             ->update([
            'photo'=>$imageToStore
           ]);


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
       
   return redirect()->route('employee.index')->with('success','Employee recorded successfuly');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //dd($id);
        $delete = employee::where('id',$id)->first();
      //dd($delete);
        if($delete->delete()){
             DB::statement("delete from employees where id=$id");
            return redirect()->route('employee.index')->with('info','Employee deleted successfully');
        }    
        else{
            return redirect()->route('employee.index')->with('error','Employee not exists');
        }
    }
}
