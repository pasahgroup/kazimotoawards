<?php

namespace App\Http\Controllers;

use App\Models\contestant;
use App\Http\Requests\StorecontestantRequest;
use App\Http\Requests\UpdatecontestantRequest;



use App\Models\Agent;
use App\Models\tailorMade;
use App\Models\TourEquiryForm;
use App\Models\partner;
use App\Models\tourGuide;
use App\Models\contacts;
use App\Models\enquiry;
use App\Models\lodge;
use App\Models\student;
use App\Models\contestant_award;
use Illuminate\Validation\Validator;
use App\Rules\FileTypeValidate;

use App\Http\Helpers\helpers;

use App\Models\award;
use App\Models\lodgetrainee;

use DB;
// use Image;
//use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;
//use Intervention\Image\Facades\Image;
 use Intervention\Image\Facades\Image as Image;
// use Intervention\Image\Facades\Image;

class ContestantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


function imagePath()
{
    $data['gateway'] = [
        'path' => 'assets/images/gateway',
        'size' => '800x800',
    ];
    $data['verify'] = [
        'deposit'=>[
            'path'=>'assets/images/verify/deposit'
        ]
    ];
    $data['image'] = [
        'default' => 'assets/images/default.png',
    ];
    $data['ticket'] = [
        'path' => 'assets/support',
    ];
    $data['language'] = [
        'path' => 'assets/images/lang',
        'size' => '64x64'
    ];
    $data['logoIcon'] = [
        'path' => 'assets/images/logoIcon',
    ];
    $data['favicon'] = [
        'size' => '128x128',
    ];
    $data['extensions'] = [
        'path' => 'assets/images/extensions',
        'size' => '36x36',
    ];
    $data['seo'] = [
        'path' => 'assets/images/seo',
        'size' => '600x315'
    ];
    $data['profile'] = [
        'user'=> [
            'path'=>'assets/images/user/profile',
            'size'=>'350x350'
        ],
        'admin'=> [
            'path'=>'assets/admin/images/profile',
            'size'=>'400x400'
        ]
    ];
    // $data['vehicles'] = [
    //     'path' => 'assets/images/vehicles',
    //     'size' => '770x480'
    // ];

      $data['photos'] = [
        'path' => 'photos',
        'size' => '770x480'
    ];

      $data['cv_photos'] = [
        'path' => 'cv_photos',
        'size' => '770x480'
    ];

    return $data;
}




function uploadImage($file, $location, $size = null, $old = null, $thumb = null)
{
    $path =$this->makeDirectory($location);
    if (!$path) throw new Exception('File could not been created.');

    if ($old) {
        removeFile($location . '/' . $old);
        removeFile($location . '/thumb_' . $old);
    }

    $filename = uniqid() . time() . '.' . $file->getClientOriginalExtension();
    $image = Image::make($file);
    if ($size) {
        $size = explode('x', strtolower($size));
        $image->resize($size[0], $size[1]);
    }


    $image->save($location . '/' . $filename);

    if ($thumb) {
        $thumb = explode('x', $thumb);
        Image::make($file)->resize($thumb[0], $thumb[1])->save($location . '/thumb_' . $filename);
    }

    return $filename;
}


function uploadFile($file, $location, $size = null, $old = null){
    $path =$this->makeDirectory($location);
    if (!$path) throw new Exception('File could not been created.');

    if ($old) {
        removeFile($location . '/' . $old);
    }

    $filename = uniqid() . time() . '.' . $file->getClientOriginalExtension();
    $file->move($location,$filename);
    return $filename;
}


function makeDirectory($path)
{
    if (file_exists($path)) return true;
    return mkdir($path, 0755, true);
}



    public function index()
    {
      $awards=award::where('status','Active')
      ->where('award_name','!=',"")
      ->get();

      //dd($awards);

      return view('website.contestantregistration.contestantregistration',compact('awards'));
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



  public function contestant()
    {
       $contestants = contestant::paginate(8);
       
       //dd($contestants);
       $tailorMades = tailorMade::get();
       return view('admin.contestants.contestant',compact('contestants'));
   
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecontestantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//New installation
//dd('print consent2');

   $curYear = date('Y');
     $start_date=request('birth_date');
     $birth_date=date('Y-m-d', strtotime($start_date));

  $request->validate([
            'full_name' => 'required|string',            
             'phone' => 'required|string',
             'birth_date' => 'nullable|date',

            'experience_one' => 'required|string',
           'images.*' => ['required', 'max:10000', new FileTypeValidate(['jpeg','jpg','png','gif'])],
            'photo.*' => ['required', 'max:10000', new FileTypeValidate(['jpeg','jpg','png','gif'])],
            // 'icon' => 'required|array',
            // 'icon.*' => 'required|string',
            // 'label' => 'required|array',
            // 'label.*' => 'required|string',
            // 'value' => 'required|array',
            // 'value.*' => 'required|string',
        ]);


$awards = request("awards");
$awards=collect($awards);

if($awards->count()<=3)
{
//dd($car_body_type);
        $contestant_data = new contestant();
        $contestant_data->full_name = $request->full_name;
           $contestant_data->birth_date = $request->birth_date;
        
         $contestant_data->phone = $request->phone;
           $contestant_data->email = $request->email;

 $contestant_data->country = $request->country;
           $contestant_data->district = $request->district;

$contestant_data->education = $request->education;
           $contestant_data->education_of = $request->education_of;

       $contestant_data->experience_one = $request->experience_one;
           $contestant_data->experience_two = $request->experience_two;
$contestant_data->experience_three = $request->experience_three;

       $contestant_data->status ="Active";

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
        foreach ($request->images as $image) {
            $path = $this->imagePath()['photos']['path'];
            $size = $this->imagePath()['photos']['size'];
            $images[] =$this->uploadImage($image, $path, $size);

   // $photoMeta = explode("_", $keyPhoto);
        }


          foreach ($request->photos as $photo) {
            $path = $this->imagePath()['cv_photos']['path'];
            $size = $this->imagePath()['cv_photos']['size'];
            $photos[] =$this->uploadImage($photo, $path, $size);
        }
 // dd('dddd2');

$photos = implode(",",$photos);

//$photos=("[".$photos."]");


 //dd($contestant_data->images);
// $indexedArray = array("apple", "banana", "orange");
$images = implode(",",$images);
$images=("[".$images."]");

 //const myArray = ["apple", "banana", "cherry"];
  //  $myString = $images[].join(", ");

  //dd($photos);

        $contestant_data->photo = $photos;
         $contestant_data->images = $images;

     //dd($contestant_data->images);

        $contestant_data->save();
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



foreach ($awards as $key => $id){ 
 $contestant_awards = contestant_award::UpdateOrCreate([
        'contestant_id'=>$contestant_data->id,
       'award_id'=>$id,
      ],
      [       
       'status'=>'Active',  
        ]);
  }
}
else{
 //return redirect()->back()->with('error','The Selection must not exceed the  three(3) Awards');
 //return redirect('/contestant')->with('error','The Selection must not exceed the  three(3) Awards');
//dd('Data Exceed');
  return redirect()->back()->with('error', 'Operation completed successfully!');
}




  $notify[] = ['success', 'You have successfully registered!'];
        return back()->withNotify($notify);

      // return redirect('/contestant');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contestant  $contestant
     * @return \Illuminate\Http\Response
     */
    public function show(contestant $contestant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contestant  $contestant
     * @return \Illuminate\Http\Response
     */
    public function edit(contestant $contestant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecontestantRequest  $request
     * @param  \App\Models\contestant  $contestant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecontestantRequest $request, contestant $contestant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contestant  $contestant
     * @return \Illuminate\Http\Response
     */
    public function destroy(contestant $contestant)
    {
        //
    }
}
