<?php

namespace App\Http\Controllers;

use App\Models\vote;
use App\Models\award;
use App\Models\contestant_award;
use App\Models\contestant_update;
use App\Models\contestant;

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


 //dd($contestant_data->images);
// $indexedArray = array("apple", "banana", "orange");
//$images = implode(",",$images);
//$images=("[".$images."]");
//$mac = system('arp -an');
//dd($awards);




if($awardsCount->count()<=3)
{
//dd('print kaka');

        $vote_data = new vote();
           $vote_data->user_id = $users->id;
             $vote_data->contestant_id=request('contestant_id');
        $vote_data->mobile = $users->phone;
        $vote_data->email = $users->email;
//            $contestant_data->birth_date = $request->birth_date;
        
//          $contestant_data->phone = $request->phone;
//            $contestant_data->email = $request->email;

//  $contestant_data->country = $request->country;
//            $contestant_data->district = $request->district;

// $contestant_data->education = $request->education;
//            $contestant_data->education_of = $request->education_of;

//        $contestant_data->experience_one = $request->experience_one;
//            $contestant_data->experience_two = $request->experience_two;
// $contestant_data->experience_three = $request->experience_three;

    
        $vote_data->mac = $macaddress;
        $vote_data->year = $curYear;
    $vote_data->award_id=$awards;
    $vote_data->status ="Active";

      
        // $vehicle->seater_id = $request->seater;
        // $vehicle->price = $request->price;
        // $vehicle->details = $request->details;
        // $vehicle->model = $request->model;
        // $vehicle->car_model_no = $request->car_model_no;

        // $vehicle->doors = $request->doors;
        // $vehicle->transmission = $request->transmission;
        // $vehicle->fuel_type = $request->fuel_type;
        //  $vehicle->car_body_type_id = $request->car_body_type;
        //   $vehicle->tag_id = $request->tag;
        //    $vehicle->color_id = $request->color;
        //     $vehicle->location_id = $request->location;


        // foreach ($request->label as $key => $item) {
        //     $specifications[$item] = [
        //         $request->icon[$key],
        //         $request->label[$key],
        //         $request->value[$key]
        //     ];
        // }

        // $vehicle->specifications = $specifications;

//dd('print consent1');
//const $images =[];

// $data = $this->getSomeData();
        // Upload image
   //      foreach ($request->images as $image) {
   //          $path = $this->imagePath()['photos']['path'];
   //          $size = $this->imagePath()['photos']['size'];
   //          $images[] =$this->uploadImage($image, $path, $size);

   // // $photoMeta = explode("_", $keyPhoto);
   //      }

//dd('End');


 //const myArray = ["apple", "banana", "cherry"];
  //  $myString = $images[].join(", ");

  //dd($photos);

        //$contestant_data->photo = $photos;
        // $contestant_data->images = $images;

     //dd($contestant_data->images);

$vote_data->save();

//dd('print consent1xx');
//dd('print consent2');
//End of new installation




//photo
//   if(request('photo')){
//             $attach = request('photo');
//             foreach($attach as $attached){

//                  // Get filename with extension
//                  $fileNameWithExt = $attached->getClientOriginalName();
//                  // Just Filename
//                  $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
//                  // Get just Extension
//                  $extension = $attached->getClientOriginalExtension();
//                  //Filename to store
//                  $imageToStore = $filename.'_'.time().'.'.$extension;
//                  //upload the image
//                  $path = $attached->storeAs('public/photos/', $imageToStore);

//   $contestant_fileupdate = contestant::where('id',$contestants->id)
//              ->update([
//                'photo'=>$imageToStore
//         ]);
       
//     }
// }



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
