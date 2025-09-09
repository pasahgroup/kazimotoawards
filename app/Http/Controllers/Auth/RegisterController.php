<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    

  public function index()
    {
    return view('auth.register');
    }


      public function perform()
    {
        Session::flush();        
        Auth::logout();
        return redirect('login');
    }

   public function store(Request $request)
    {

 $url = $request->path();
 //dd($url);

        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|confirmed|min:8',
        //     'role' => 'required|string',            
        // ]);


$this->validate($request, [

       'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|confirmed|min:8',
        'password_confirmation' => 'required'

    ]);

 //dd($url);

 // if(request('password') != request('confirm_password'))
 //          {
 //            return redirect()->back()->with('info','Password does not match');
 //          }


//dd('print2');
        $user = User::UpdateOrCreate([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
              'role' => $request->role,
                'status' =>'1',
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
                     $path = $attached->storeAs('public/user/', $imageToStore);

         
  $userUpdate = User::where('id',$user->id)
             ->update([
            'photo'=>$imageToStore,
        ]);

        }
      }



 if($url=="register")
 {
       event(new Registered($user));
        Auth::login($user);   
}

        // return redirect(RouteServiceProvider::HOME);
         return redirect()->back()->with('success','New user Registered successful');
    }




    public function register()
    {
      return view('auth.register');
    }


     public function showRegistrationForm ()
    {
      return view('auth.register');
    }


    public function login()
    {
      return view('auth.login');
    }
}
