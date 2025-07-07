<?php

namespace App\Http\Controllers;
use App\Models\aboutus;
use App\Models\activity;
use App\Models\subproject;
use App\Models\donor;
use App\Models\website;
use App\Models\bank;
use App\Models\slide;
use App\Models\contact;
use App\Models\award;

use App\Http\Requests\StorewebsiteRequest;
use App\Http\Requests\UpdatewebsiteRequest;
use Illuminate\Support\Facades\Storage; 
use Intervention\Image\Laravel\Facades\Image;

use Carbon\Carbon;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
          $donors=donor::where('status','Active')
        ->get();

          $slides=slide::where('status','Active')
        ->get();
            $awards=award::where('status','Active')
        ->get();
        //dd($awards);

        return view('website.home.home',compact('donors','slides','awards'));
    }

    public function form()
    {
        //dd('fall');
        return view('form');
    }

    public function aboutusw()
    {
$newDateTime = (Carbon::now()->subYears(1992));
$yearExperience=($newDateTime)->year;
//dd($yearExperience);

  $aboutusw=aboutus::where('status','Active')
  ->first();
  //dd($aboutusw);

        return view('website.aboutusw.aboutusw',compact('yearExperience','aboutusw'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

 // public function donor()
 //    {
 //        return view('public.donor_photos');
 //    }


public function safari()
    {
       return view('donate.safari');    
    }
    
    public function drisela()
    {
       return view('website.donate.drisela');    
    }

public function project()
    {
       return view('website.project.project');    
    }

public function subproject()
    {
       return view('subproject.subproject');    
    }

    public function activity()
    {
       return view('activity.activity');    
    }
public function aboutus()
    {
       return view('website.aboutus.aboutus');    
    }

    public function donate()
    {

        $banks=bank::where('status','Active')
        ->get();

        $banksin=bank::where('status','Inactive')
        ->get();

//dd($banks);
       return view('website.donate.donate',compact('banks','banksin'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StorewebsiteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(website $website)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(website $website)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatewebsiteRequest $request, website $website)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(website $website)
    {
        //
    }
}
