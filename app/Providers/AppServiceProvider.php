<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\student;
use App\Models\contacts;
use App\Models\award;

use App\Models\PostBody;
use Illuminate\Pagination\Paginator;
 use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //$copyYear = 2008; 


             Schema::defaultStringLength(191);
            Paginator::useBootstrap();

         view()->composer('*',function($view) {

      //$copyYear = 2008; 
//$curYear = date('Y'); 
 // $view->with('curYear')=9000;
$currYear = date('Y'); 
  $view->with('currYear',$currYear);
  $view->with('userCount', Auth::user());
  //dd($view->currYear);

             if($view->userCount !=NULL)
             {
               $property_id=Auth::user()->property_id;
             }
             else {
               $property_id=0;
             }

            $view->with('user', Auth::user());
            // $view->with('qnsCountx', User::join('properties','users.property_id','properties.id')
            // ->select('properties.property_name')->first());

            // $view->with('qnsCount', answer::where('answer','!=','Yes')
            // ->where('manager_checklist','!=','Cleared')
            // ->where('property_id',$property_id)
            //  ->where('status','Active')
            // ->get());
            //->select('properties.property_name')->first());
             //$view->with('qnsCount', collect($qnsCount));

       $view->with('awards_view_data', award::where('year',$view->currYear)     
        ->select('award_name')
            // ->where('manager_checklist','!=','Cleared')
            // ->where('property_id',$property_id)
            //  ->where('status','Active')
            // select('properties.property_name')
            ->get());

          //dd($view->awards_view_data);
          //View::share('currentYear', date('Y'));
          //dd($view->currYear);
  
             $view->with('contact', PostBody::where('category','Contact')->first());
               $view->with('app_contacts', contacts::where('status',"Active")->first());
              // $view->with('students', student::where('category','Contact')->first());
        });
    }
}
