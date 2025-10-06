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
use App\Models\sponsor;
use App\Models\contestant;
use App\Models\contestant_award;

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

        //     $awardscc=contestant_award::where('status','Active')
        // ->get();

         $awards=award::where('status','Active')
        ->get();


        $contestant_datas = contestant_award::join('contestants','contestants.id','contestant_awards.contestant_id')
             ->join('awards','awards.id','contestant_awards.award_id')
             ->groupby('contestant_awards.contestant_id')
             ->select('contestants.*','awards.award_name')
             ->get();


        //dd($contestant_datas);

          $sponsors=sponsor::where('status','Active')
        ->get();

        //  $contestant_datas=contestant::where('status','Active')
        // ->get();


       //dd($contestant_datas);

        return view('website.home.home',compact('donors','slides','awards','sponsors','contestant_datas'));
    }


  public function indexx()
    { 
         return view('website.home.multiform');
    }



    public function form()
    {
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


 public function votingDetails_org()
    {       
         $contestant_datas = contestant_award::join('contestants','contestants.id','contestant_awards.contestant_id')
             ->join('awards','awards.id','contestant_awards.award_id')
             ->select('contestants.*','awards.award_name')
             ->get();
            
            //dd($contestant_datas);
     return view('website.voting.voting_details',compact('contestant_datas'));
    }


 public function votingDetails($id){
        //dd($id);
        $vehicle = contestant::active()->where('id',$id)->firstOrFail();
           
            $contestant_datas = contestant_award::join('contestants','contestants.id','contestant_awards.contestant_id')
             ->join('awards','awards.id','contestant_awards.award_id')
             //->where('contestant_id',$id)
             ->select('contestants.*','awards.award_name')
             ->get();

//dd($contestant_datas);

$fullUrl = url()->full();     

       // $rental_terms = getContent('rental_terms.content', true);
        $pageTitle = 'Vehicle Details';

          

// $string = "apple,banana,orange";
 $array = explode(',', $vehicle->images);

//         $indexedArray = ['apple', 'banana', 'cherry'];
// $stringFromIndexed = implode(', ', $indexedArray); 

//dd($array);
        $u=$array;
          return view('website.voting.voting_details',compact('vehicle','pageTitle','fullUrl','u','contestant_datas'));
    }






// function getImage($image,$size = null)
// {
//     $clean = '';
//     if (file_exists($image) && is_file($image)) {
//         return asset($image) . $clean;
//     }
//     if ($size) {
//         return route('placeholder.image',$size);
//     }
//     return asset('assets/images/default.png');
// }


public function add()
    {       
         $awards=award::where('status','Active')
      ->where('award_name','!=',"")
      ->get();

     return view('website.voting.add',compact('awards'));
    }


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
