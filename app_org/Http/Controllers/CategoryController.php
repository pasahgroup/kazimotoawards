<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Http\Requests\StoretribeRequest;
use App\Http\Requests\UpdatetribeRequest;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = category::orderBy('category', 'asc')->get();
        //dd($tribes);
        return view('admins.category.category-list',compact('categories'));
    }


 public function addCategory(){
         return view('admins.category.addcategory');
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
        if (request('category')) {
        $category = category::UpdateOrCreate([
        'category'=>request('category_name')        
           ]);
                  
           return redirect()->back()->with('success','Category recorded successfully');
        }

    }



     public function editCategory($id){
       
       $categories = category::where('id',$id)
       ->first();
      //dd($tribes);
         return view('admins.category.edit-category',compact('categories'));
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
  
      $toupdate = category::where('id',$id)
               ->update([
            'category'=>request('category_name')
        ]);
    return redirect()->route('category.index')->with('success','Category created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tribe  $tribe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $delete = category::where('id',$id)->first();
        if($delete->delete()){
            return redirect()->route('category.index')->with('success','Category removed successfully');
        }    
        else{
            return redirect()->route('category.index')->with('error','Category not exists');
        }
    }

}
