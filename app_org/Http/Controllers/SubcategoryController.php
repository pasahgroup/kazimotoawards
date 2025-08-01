<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\subcategory;

use App\Http\Requests\StoretribeRequest;
use App\Http\Requests\UpdatetribeRequest;

use Illuminate\Http\Request;
use DB;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = subcategory::join('categories','categories.id','subcategories.category_id')
         ->select('subcategories.id','subcategories.subcategory','categories.category')
        ->orderBy('subcategory', 'asc')->get();
       
        //dd($subcategories);
        return view('admins.subcategory.subcategory-list',compact('subcategories'));
    }


 public function addSubcategory(){

        $categories = category::orderBy('category', 'asc')
        ->groupby('category')
         ->get();
      //dd($categories);
         return view('admins.subcategory.addsubcategory',compact('categories'));
    }


    public function getS($p){
       // Fetch Employees by Departmentid
        //dd($p);
       $aData['dataS'] = subcategory::getSubcategory($p);
       echo json_encode($aData);
       exit;
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
     * @param  \App\Http\Requests\StoretribeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd('print');

        if (request('subcategory')) {
               // dd('print2');
        $subcategory = subcategory::UpdateOrCreate(
            [
        'category_id'=>request('category_name'),  
         'subcategory'=>request('subcategory_name'),
     ],[
          'user_id'=>auth()->id()        
           ]);
                  
           return redirect()->back()->with('success','Subcategory recorded successfully');
        }

    }



     public function editSubcategory($id){
     //  dd($id);
       $subcategories = subcategory::join('categories','categories.id','subcategories.category_id')
         ->select('subcategories.id','subcategories.subcategory','categories.category')
         ->where('subcategories.id',$id)
       ->first();
      
     //dd($subcategories);

        $categories =category::orderBy('category', 'asc')
        ->groupby('category')
         ->get();

//dd($categories);

         return view('admins.subcategory.edit-subcategory',compact('categories','subcategories'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tribe  $tribe
     * @return \Illuminate\Http\Response
     */
    public function show(tribe $tribe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tribe  $tribe
     * @return \Illuminate\Http\Response
     */
    public function edit(tribe $tribe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetribeRequest  $request
     * @param  \App\Models\tribe  $tribe
     * @return \Illuminate\Http\Response
     */
  public function update(Request $request,$id)
    {
  
      $toupdate = subcategory::where('id',$id)
               ->update([
          'category_id'=>request('category_name'),  
         'subcategory'=>request('subcategory_name'),
          'user_id'=>auth()->id()  
        ]);
    return redirect()->route('subcategory.index')->with('success','Subcategory created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tribe  $tribe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $delete = subcategory::where('id',$id)->first();
        if($delete->delete()){
            return redirect()->route('subcategory.index')->with('success','Subcategory removed successfully');
        }    
        else{
            return redirect()->route('subcategory.index')->with('error','Subcategory not exists');
        }
    }

}
