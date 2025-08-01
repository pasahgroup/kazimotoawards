<?php

namespace App\Http\Controllers;

use App\Models\relation;
use App\Http\Requests\StorerelationRequest;
use App\Http\Requests\UpdaterelationRequest;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relations = relation::orderBy('relation', 'asc')->get();
        //dd($lodges);
        return view('admins.relations.relation-list',compact('relations'));
    }


public function addrelation(){
         return view('admins.relations.addrelation');
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
     * @param  \App\Http\Requests\StorerelationRequest  $request
     * @return \Illuminate\Http\Response
     */
      public function store(Request $request)
    {
        //dd(request('relation_name'));
        if (request('relation')) {
        $relation = relation::UpdateOrCreate([
        'relation'=>request('relation_name')        
           ]);                  
           return redirect()->back()->with('success','Relation recorded successfully');
        }
    }


 public function editRelation($id){
       
       $relations = relation::where('id',$id)
       ->first();
      //dd($lodges);
         return view('admins.relations.edit-relation',compact('relations'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\relation  $relation
     * @return \Illuminate\Http\Response
     */
    public function show(relation $relation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\relation  $relation
     * @return \Illuminate\Http\Response
     */
    public function edit(relation $relation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdaterelationRequest  $request
     * @param  \App\Models\relation  $relation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
  
      $toupdate = relation::where('id',$id)
               ->update([
            'relation'=>request('relation_name')
        ]);
    return redirect()->route('relation.index')->with('success','Relation created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\relation  $relation
     * @return \Illuminate\Http\Response
     */
      public function destroy($id)
    {
     $delete = relation::where('id',$id)->first();
        if($delete->delete()){
            return redirect()->route('relation.index')->with('success','Relation removed successfully');
        }    
        else{
            return redirect()->route('relation.index')->with('error','Relation not exists');
        }
    }
}
