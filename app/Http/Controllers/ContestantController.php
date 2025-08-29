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
    $data['vehicles'] = [
        'path' => 'assets/images/vehicles',
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

//dd($location);
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

  $request->validate([
            'full_name' => 'required|string',            
             'phone' => 'required|string',

            'experience_one' => 'required|string',
           'images.*' => ['required', 'max:10000', new FileTypeValidate(['jpeg','jpg','png','gif'])],
            // 'icon' => 'required|array',
            // 'icon.*' => 'required|string',
            // 'label' => 'required|array',
            // 'label.*' => 'required|string',
            // 'value' => 'required|array',
            // 'value.*' => 'required|string',
        ]);

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
            $path = $this->imagePath()['vehicles']['path'];
            $size = $this->imagePath()['vehicles']['size'];
            $images[] =$this->uploadImage($image, $path, $size);

   // $photoMeta = explode("_", $keyPhoto);

          //dd($images);  
        }

 //dd($contestant_data->images);
// $indexedArray = array("apple", "banana", "orange");
$images = implode(",",$images);

$images=("[".$images."]");

 //const myArray = ["apple", "banana", "cherry"];
  //  $myString = $images[].join(", ");

  //dd($myString);

        $contestant_data->images = $images;
     //dd($contestant_data->images);

        $contestant_data->save();
//dd('print consent1xx');
        $notify[] = ['success', 'You have successfully registered!'];
        return back()->withNotify($notify);


dd('print consent2');
//End of new installation












      $curYear = date('Y');
     $start_date=request('birth_date');
     $birth_date=date('Y-m-d', strtotime($start_date));

$validatedData = $request->validate([
// $request->validate([
    'full_name' => 'required|max:255',
    'phone' => 'required',
    'birth_date' => 'nullable|date',
]);

$awards = request("awards");
$awards=collect($awards);


if($awards->count()<=3)
{


  $contestants = contestant::Create([
        'full_name'=>request('full_name'),
          'birth_date'=>$birth_date,

         'phone'=>request('phone'),
        'email'=>request('email'),   
         'country'=>request('country'),
         'district'=>request('district'),

        'education'=>request('education'),
        'education_of'=>request('education_of'), 

         'experience_one'=>request('experience_one'),
        'experience_two'=>request('experience_two'), 
         'experience_three'=>request('experience_three'),
               
       'status'=>'Active',  
        ]);



//photo
  if(request('photo')){
            $attach = request('photo');
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
                 $path = $attached->storeAs('public/photos/', $imageToStore);

  $contestant_fileupdate = contestant::where('id',$contestants->id)
             ->update([
               'photo'=>$imageToStore
        ]);
       
    }
}


//File1
  if(request('file_one')){
            $attach = request('file_one');
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
                 $path = $attached->storeAs('public/photos/', $imageToStore);

  $contestant_fileupdate = contestant::where('id',$contestants->id)
             ->update([
               'file1'=>$imageToStore
        ]);
       
    }
}




//File2
  if(request('file_two')){
            $attach = request('file_two');
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
                 $path = $attached->storeAs('public/photos/', $imageToStore);

  $contestant_fileupdate = contestant::where('id',$contestants->id)
             ->update([
               'file2'=>$imageToStore
        ]);
       
    }
}



//File3
  if(request('file_three')){
            $attach = request('file_three');
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
                 $path = $attached->storeAs('public/photos/', $imageToStore);

  $contestant_fileupdate = contestant::where('id',$contestants->id)
             ->update([
               'file3'=>$imageToStore
        ]);
       
    }
}




//File4
  if(request('file_four')){
            $attach = request('file_four');
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
                 $path = $attached->storeAs('public/photos/', $imageToStore);

  $contestant_fileupdate = contestant::where('id',$contestants->id)
             ->update([
               'file4'=>$imageToStore
        ]);
       
    }
}


//File5
  if(request('file_five')){
            $attach = request('file_five');
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
                 $path = $attached->storeAs('public/photos/', $imageToStore);

  $contestant_fileupdate = contestant::where('id',$contestants->id)
             ->update([
               'file5'=>$imageToStore
        ]);
       
    }
}



  foreach ($awards as $key => $id){ 
 $contestant_awards = contestant_award::UpdateOrCreate([
        'contestant_id'=>$contestants->id,
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

       return redirect('/contestant');
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
