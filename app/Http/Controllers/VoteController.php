<?php

namespace App\Http\Controllers;

use App\Models\vote;
use App\Models\award;
use App\Models\contestant_award;
use App\Models\contestant_update;
use App\Models\contestant;
use App\Models\vote_award;


use App\Http\Requests\StorevoteRequest;
use App\Http\Requests\UpdatevoteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Rules\FileTypeValidate;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function vote(Request $request,$id)
    {
       
       $awards=contestant_award::join('awards','awards.id','contestant_awards.award_id')
       ->where('awards.status','Active')
      ->where('awards.award_name','!=',"")
        ->where('contestant_awards.contestant_id',"$id")
      ->get();

//dd($awards);

$contestant_first=contestant::where('id',$id)->first();
//dd($contestant_first);

      return view('website.voting.vote',compact('awards','contestant_first'));
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
     * @param  \App\Http\Requests\StorevoteRequest  $request
     * @return \Illuminate\Http\Response
     */
  
   public function store(Request $request)
    {
      
        if(request('login'))       
        {

    $contestant_second=contestant_update::where('id',1)->first();
   
    if( $contestant_second!=null)
    {
 $contestant_fileupdate = contestant_update::where('id',$contestant_second->id)
             ->update([
               'contestant_id'=>request('contestant_id'),
        ]);

    }
    else
    {
                $contestant_update =  contestant_update::UpdateOrCreate([
                 'contestant_id'=>request('contestant_id'),
            ]);

    }
    return redirect()->route('login');
}


   $curYear = date('Y');
     $start_date=request('birth_date');
     $birth_date=date('Y-m-d', strtotime($start_date));
 $checkedAwards = $request->input('awards');
$users=Auth::user();
//dd($users);

  $request->validate([
             'awards' => ['required', 'max:10000'],
           //  'full_name' => 'required|string',            
           //   'phone' => 'required|string',
           //   'birth_date' => 'nullable|date',

           //  'experience_one' => 'required|string',
           // 'images.*' => ['required', 'max:10000', new FileTypeValidate(['jpeg','jpg','png','gif'])],
           //  'photo.*' => ['required', 'max:10000', new FileTypeValidate(['jpeg','jpg','png','gif'])],
           
            // 'icon' => 'required|array',
            // 'icon.*' => 'required|string',
            // 'label' => 'required|array',
            // 'label.*' => 'required|string',
            // 'value' => 'required|array',
            // 'value.*' => 'required|string',
        ]);

//dd('print dT');


// $d = explode('Physical Address. . . . . . . . .',shell_exec ("ipconfig/all"));  
// $d1 = explode(':',$d[1]);  
// $d2 = explode(' ',$d1[1]);
// //dd($d2[1]);


// Turn on output buffering  
ob_start();   
system('ipconfig /all'); 
$mycomsys=ob_get_contents();  
ob_clean();  
$find_mac = "Physical"; 
$pmac = strpos($mycomsys, $find_mac);  

$macaddress=substr($mycomsys,($pmac+36),17);  
//dd($macaddress);  



$awards = request("awards");
$awardss = request("awards");

$awardsCount=collect($awards);

$macAddr = exec('getmac');
//$macAddr = explode("-",$macAddr);
 //$macAddr=("[".$macAddr."]");

//$string =$macAddr;
$delimiter =" ";
$macAddress = strtok($macAddr, $delimiter); // Hello
$after = strtok($delimiter); // World
//dd($macAddress);

$localIP = getHostByName(getHostName());
$awards = implode(",",$awards);

//$photos=("[".$photos."]");




if($awardsCount->count()<=3)
{

        $vote_data = new vote();
           $vote_data->user_id = $users->id;
             $vote_data->contestant_id=request('contestant_id');
        $vote_data->mobile = $users->phone;
        $vote_data->email = $users->email;
    
    $vote_data->mac = $macaddress;
    $vote_data->year = $curYear;
    $vote_data->award_id=$awards;
    $vote_data->status ="Active";
   $vote_data->save();
   

foreach ($awardss as $key => $item) {
    $voteaward_data = vote_award::UpdateOrCreate([
                  'contestant_id'=>request('contestant_id'),
        'award_id'=>$item,
        'year'=>$curYear,
            ],[
               'vote_id'=>$vote_data->id,
        'status'=>"Active"
            ]);
        }

       // dd($vote_data);


//dd($vote_data);



// foreach ($awards as $key => $id){ 
//  $contestant_awards = contestant_award::UpdateOrCreate([
//         'contestant_id'=>$contestant_data->id,
//        'award_id'=>$id,
//       ],
//       [       
//        'status'=>'Active',  
//         ]);
//   }
}
else{
 //return redirect()->back()->with('error','The Selection must not exceed the  three(3) Awards');
 //return redirect('/contestant')->with('error','The Selection must not exceed the  three(3) Awards');
//dd('Data Exceed');
  return redirect()->back()->with('error', 'Operation completed successfully!');
}


  $notify[] = ['success', 'You have successfully voted!'];
        return back()->withNotify($notify);
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function show(vote $vote)
    {
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function edit(vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevoteRequest  $request
     * @param  \App\Models\vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevoteRequest $request, vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function destroy(vote $vote)
    {
        //
    }
}
