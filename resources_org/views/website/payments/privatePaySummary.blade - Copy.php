
@extends('website.layouts.apps')
@section('content')


   <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>





  <section class="bg-gray" style="margin-top: 0px;">
        <div class="container">


 <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    

                    <div class="grid grid-cols-8 md:grid-cols-8">
                   
                        
                                <div class="mt-8 text-gray-600 dark:text-gray-400 text-sm">
                                  
                                     <div class="col-md-12 col-lg-8 masonry">
                        <div class="card">
                        <div class="card-body">
                             <div class="row">
                            <div class="col-md-6 text-center" style="font-size:20PX;">
                           
                                <h4 class="text-secondary"><strong>Tour Summary</strong></h4>
                               <hr>
                            <div>Name: <b>{{ $programs->tour_name }}</b></div>
                            <div>Type: <b>{{ $programs->type }}</b></div>
                            <div>Style: <b>{{ $programs->style }}</b></div>
                            <div>Duration: <b>{{ $programs->days }} Days</b></div>
                            <div>Countries: <b>Tanzania</b> </div>
                            <div>Destinations:
                                @foreach($datas as $destnation)
                               <span class="text-primary " style="font-size: 12px; border-right:solid 1px #ddd; padding-right:2px"> {{ $destnation->destination_name }}</span>
                                @endforeach
                        </div>
                 </div>
                      
                        
                             <div class="col-md-5 text-center" style="font-size:20PX;">

                                  
                                <h4 class="text-secondary"><strong>Invoice Summary</strong></h4>
                           <hr>
                           
                            <div>Children Cost: <b>No:{{ $cust->children }}</b> <b>Cost: {{ number_format($cust->children_cost,2)}} {{ $cust->currency}}</b></div>
                            <div>Teens Cost: <b>No:{{ $cust->teens }}</b> <b>Cost: {{ number_format($cust->teens_cost,2)}} {{ $cust->currency}}</b></div>
                            <div>Addon Cost: <b>No:{{ $cust->adults }}</b> <b>Cost: {{ number_format($cust->adults_cost,2)}} {{ $cust->currency}}</b></div>
                            <hr>
                            <div>Total Cost: <b>{{ number_format($cust->total_cost,2) }} {{ $cust->currency}}</b> </div>
                             <div>Amount paid: <b>{{ number_format($cust->total_amount_paid,2) }} {{ $cust->currency}}</b> </div>
                             <div>Amount Remain: <b style="color:yellowgreen;">{{ number_format($cust->amount_remain,2)}} {{ $cust->currency}}</b> </div>
                        </div>
                             <div class="col-md-1 text-center" style="font-size:20PX;">

                             @if($programs->payee_status !='Paid')
                              <a href="#" role="button" class="btn btn-success text-center" data-toggle="modal" data-target="#payNow">Pay Now</a>
                            @else
                            <p style="font-style: color:red"><span class="text-primary">Invoice  Alread Paid</span></p>
                             <a href="#" role="button" class="btn btn-primary text-center" data-toggle="modal" data-target="#bookNow">Print Invoice</a>
                            </div>
                              @endif
                            </div>

                          
                           <!-- 
                            <div class="col-md-4 text-center">
                            <a href="#" role="button" class="btn btn-primary text-center" data-toggle="modal" data-target="#bookNow">Print Invoice</a>
                            </div> -->
                            </div>
                    </div>
                    </div>
                </div>
                
                            </div>
                        </div>
                      
                 

<hr>
<br>
<br>

             <!-- Tabs starts here -->
            <div class="row ">
                {{-- start of tabs --}}
            <div class="col-lg-9 col-md-9 col-sm-12 masonry ">
                    <div class="package-detail"> 
                             
            <div class="">
            <ul class="nav nav-tabs">
              <li><a href="#tab-H" data-toggle="tab">Highlight</a></li>
              <li class="active"><a href="#tab-I" data-toggle="tab">Itinerary</a></li>
              <li><a href="#tab-A" data-toggle="tab">Accommodations</a></li>
              <li><a href="#tab-C" data-toggle="tab">Tour Cost</a></li>
              <li><a href="#tab-E" data-toggle="tab">Extra Information</a></li>
            </ul>
            <div class="tab-content booking-btn">
              <div class="tab-pane row fade" id="tab-H">                
                <div class="col-md-12 col-sm-12">
                <p>
                                {{ $programs->tour_highlight }}</p>
                                    <hr>
                                <p>Maps Come Here</p>
               </div>
              </div>
              <div class="tab-pane row fade in active" id="tab-I">

                   <form method="GET" action="{{ route('safaris.show','print') }}">
                    @crsf
                 <div class="col-md-10 col-sm-10">
                                     </div>
                                       <div class="col-md-2 col-sm-2">
                    <button type="submit" class="btn btn-success float-right" name="print" value="print">Print Itinerary</button>
                                     </div>

                                 </form>

                <div class="col-md-12 col-sm-12">
                <p class="card-text">
                                            {{ $programs->itinerary_summury }}
                                            </p>
                                            @foreach ($datas as $data)
                                            <div class="card card-primary booking-tourPadding">
                                                <div class="card-header  booking-tourPadding"  style="background-color:Gray;">
                                                <span><b> Day {{ $data->day }} - {{ $data->itinerary_title }}</b></span>

                                                </div>
                                                <div class="card-body">
                                                {{-- test --}}

                                                <div class="row masonry-item">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 masonry">
                                       <div class="">

                                <div class="row">
                                <div class="col-lg-7">
                                <div class="hotel-diss">
                               <p class="booking-btn-gray">{{ $data->itinerary_description }}</p>   
                                               
                                                     
                               <div class="row"> 
                                      <div class="col-md-12 col-lg-12 col-sm-12">
                                        <p><b class="text-success">Distance:</b> {{$data->distance}} KM <b class="text-success">Transport:</b> {{$data->transport}}</p>

                                          <p><b class="text-success">Accommodation:</b> {{$data->accommodation_name}} | <b class="text-success">Meal Plan:</b> {{$data->meal}}</p>
                                      </div>           
                                                                                 
                                                  </div>
                                                 </div>
                                               </div>
                                        <div class="col-lg-5">                           
                                            <div class="hotel-pics-one">                                               <img src="{{URL::asset('/storage/destination/'.$data->photo) }}" alt="" style="height: 32vh !important;width:100%">                                                                              </div> 

                                                 </div>
                                                 </div>
                                                </div>
                                                </div>
                                                </div>

                                        {{-- test --}}
                                            </div>
                                            </div>
                                            <hr>
                                            @endforeach
                </div>
              </div>
              <div class="tab-pane fade" id="tab-A">

               @foreach ($datas as $data)
     
       <div class="card booking-tourPadding">   
      <div class="card-header booking-tourPadding" style="background-color:green">
    <span><b>Day {{ $data->day }} - {{ $data->itinerary_title }}</b></span>
                     </div>          

                        <div class="card-body">
                       <div class="row ">
                                <div class="col-lg-7">
                                <div class="hotel-diss">
                
                               <div class="row">                   
                                <div class="col-md-6 col-lg-6 col-sm-12">                                   
                                  <div class="rating">                     
                                    <h4>Location Details</h4>                        
                                  </div>                                                                        

                                  <a class="map-viw" href="#"><i class="fa fa-map-marker"></i> {{ $data->destination_name }}</a> 
                                     <a class="map-viw" href="#"><i class="fa fa-home"></i> {{ $data->location_name }}/{{ $data->region }}/{{ $data->country }}</a>    
                                   </div>                                                                                                                           
                                <div class="col-md-6 col-lg-6 col-sm-12 booking-tour">                             
                                <div class="rating">                                                                       <h4>Accommodation Details</h4>                                                                       </div>  <a class="map-viw" href="#"><i class="fa fa-home"></i><b>{{ $data->accommodation_name }}</b></a>      

                                    <div>                            
                                     <a class="map-viw" href="#"><i class="fa fa-home"></i><b>Standard Category: <br>  
                                        @for($i=0;$i<$data->national_standard;$i++)                                 
                                        <span class="fa fa-star text-warning"></span>
                                        @endfor
                                         @for($i=0;$i<5-$data->national_standard;$i++)   
                                        <span class="fa fa-star-o text-warning"></span>
                                           @endfor
                                         </div></b></a>
 
                                       <a class="map-viw" href="#"><i class="fa fa-home"></i><b>Our Category</b>: {{$data->type }}:</a>
                                       <a href="https://{{$data->url}}" class="btn btn-primary" role="button">View More</a>                                          </div>
                                                  </div>
                                                 </div>
                                               </div>
                                        <div class="col-lg-5">                  
                                            <div class="hotel-pics-one">                                    
                                            <img src="{{URL::asset('/storage/uploads/'.$data->attachment) }}" alt="" style="height: 32vh !important;width:100%">        
                                            </div>                   

                                      </div>
                               </div>                           
                                </div>
                                </div>  
                                <hr>
                            @endforeach  
             
              </div>
              <div class="tab-pane fade" id="tab-C">               
                 <div class="card booking-btn">                    
        <div class="card-body">
            <div class="card-body">               
        <table class="table table-bordered data-table">
        <colspan>
           <col width="10%">
          <col width="20%">
          <col width="10%">
        </colspan>
        <tr>
          <th class="title" colspan="8" style="background-color:gray;"><b>BASIC LEVEL ACCOMODATIONS</b></th>
        </tr>
        <tr>
           <th class="title" colspan="2"></th>
          <th class="title" colspan="6"><b>PRICE PER PERSON IN USD<b></th>
        </tr>
        <tr>
        <th>#</th>
          <th>Season</th>          
          <th>2PAX</th>
           <th>3PAX</th>
            <th>4PAX</th>
             <th>5PAX</th>
              <th>6PAX</th>
              <th>SRS</th>
        </tr>

          @foreach ($basic as $datab)
          <tr>
                    <td>{{ $datab->id }}</td>
                  <td>{{ $datab->season}}</td> 
                   
                    <td>{{ $datab->twopax }}</td>
                    <td>{{ $datab->threepax }}</td>
                    <td>{{ $datab->fourpax }}</td>
                    <td>{{ $datab->fivepax }}</td>
                    <td>{{ $datab->sixpax }}</td>
                    <td>{{ $datab->srs }}</td>
                  </tr>
                   @endforeach
         </table>

<hr>
<table class="table table-bordered data-table">
        <colspan>
           <col width="10%">
          <col width="20%">
          <col width="10%">
        </colspan>
        <tr>
          <th class="title" colspan="8" style="background-color:gray"><b>COMFORT LEVEL ACCOMODATIONS</b></th>
        </tr>
        <tr>
           <th class="title" colspan="2"></th>
          <th class="title" colspan="6"><b>PRICE PER PERSON IN USD</b></th>
        </tr>
        <tr>
         <th>#</th>
          <th>Season</th>           
          <th>2PAX</th>
           <th>3PAX</th>
            <th>4PAX</th>
             <th>5PAX</th>
              <th>6PAX</th>
              <th>SRS</th>
        </tr>

 @foreach ($comfort as $datac)
          <tr>
                  <td>{{ $datac->id }}</td>
                     <td>{{ $datac->season}}</td>                   
                    <td>{{ $datac->twopax }}</td>
                    <td>{{ $datac->threepax }}</td>
                    <td>{{ $datac->fourpax }}</td>
                    <td>{{ $datac->fivepax }}</td>
                    <td>{{ $datac->sixpax }}</td>
                    <td>{{ $datac->srs }}</td>
                  </tr>
                   @endforeach
         </table>
         <hr>
         <table class="table table-bordered data-table">
        <colspan>
           <col width="10%">
          <col width="20%">
          <col width="10%">
        </colspan>
        <tr>
          <th class="title" colspan="8" style="background-color:gray"><b>DELUXE LEVEL ACCOMODATIONS</b></th>
        </tr>
        <tr>
           <th class="title" colspan="2"></th>
          <th class="title" colspan="6"><b>PRICE PER PERSON IN USD</b></th>
        </tr>
        <tr>
             <th>#</th>
          <th>Season</th>           
          <th>2PAX</th>
           <th>3PAX</th>
            <th>4PAX</th>
             <th>5PAX</th>
              <th>6PAX</th>
              <th>SRS</th>
        </tr>

          @foreach ($luxury as $datal)
          <tr>
                       <td>{{ $datal->id }}</td>
                    <td>{{ $datal->season}}</td>                   
                    <td>{{ $datal->twopax }}</td>
                    <td>{{ $datal->threepax }}</td>
                    <td>{{ $datal->fourpax }}</td>
                    <td>{{ $datal->fivepax }}</td>
                    <td>{{ $datal->sixpax }}</td>
                    <td>{{ $datal->srs }}</td>
                    <tr>
                   @endforeach
                   </table>
                        </div>
                        </div>
                     </div>

              </div>

            <div class="tab-pane fade" id="tab-E">                
       <div class="card booking-btn-gray">   
      <div class="card-header">
                                            <h5 class="m-0">Accommodation List : Inclusive and Not Inclusive</h5>           
                                              </div>                                 
                                                
           

                        <div class="card-body">
                       <div class="row ">
                                <div class="col-lg-7">
                                <div class="hotel-diss">
                
                               <div class="row">                   
                                <div class="col-md-6 col-lg-6 col-sm-12">                                   
                                  <div class="rating">                                                                      <h4>Not Inclusive</h4>                        
                                  </div>                                
   @foreach($inclusives as $inclusive)    
                                  <div class="form-check">
   <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
  <label class="form-check-label" for="flexCheckDisabled">
   {{ $inclusive->inclusive}}
  </label>
</div>
     @endforeach                              
    </div>                                                                                 
                                                  </div>
                                                 </div>
                                               </div>
                                        <div class="col-lg-5">  
                                            <div class="rating">    
                                                <h4>Inclusive</h4>                                                           

                                            </div>                                        @foreach($assignLists as $assignList)
                                    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
   {{ $assignList->inclusive}}
  </label>
</div>  
@endforeach                  
                                                    
                                </div>
                               </div>                           
                                </div>
                                </div> 
             </div> 
             
            </div>
          </div>
    

                    </div>
                    </div>
                     {{-- End of tabs --}}
                    {{-- Tour Summury sidebar --}}
                    <div class="col-md-3 col-lg-3 masonry">
                        <div class="card">
                        <div class="card-body">
                          
                            
                        <div class="row">
                          
                            </div>
                        <hr>
                            
                                <p class="text-center">
                               <h5 > List of Add-ons</h5>
                                </p>

                    </div>
{{-- End of tour summary sidebar --}}

                </div>
                <hr>
                <p class="text-center">
                <a class="btn btn-primary" href="{{ route('addons.index') }}">View More Addons</a></p>
                </div>
                </div>
            </div>
        </div>
    </div>
       </div>
                </div>
    </section>




 <div class="modal fade modal-book-now" id="bookNow" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title"><b>{{$programs->tour_name}}</b></h4>
        </div>
        <div class="modal-body">

          <div class="preview-wrap">
           <div class="preview-img" style="background-image: url({{URL::asset('/storage/uploads/'.$programs->attachment)}});"></div>

            <div class="form-wrap">
                <h4 id="heading">Booking Form</h4>
                <!-- <form  method="post" id="post_form" action="{{ route('tourForm.store') }}"> -->
                <form id="msform"  method="post"  action="{{ route('tourForm.store') }}">
                    @csrf
                    <!-- progressbar -->
                  <!--   <ul id="progressbar">
                      <li class="active" id="account"><strong>Personal Details</strong></li>
                        <li id="personal"><strong>Tour Information:</strong></li>
                        <li id="payment"><strong>Other Information</strong></li>
                        <li id="confirm"><strong>Finish</strong></li>
                    </ul> -->
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h3 class="fs-title">Personal Details:| Step 1 - 4</h3>
                                </div>                                
                            </div> 
                           

 <div class="form-group">
            @if($discounts !=null)
           <input type="hidden" class="form-control" name="unit_price" value="{{$discounts->new_price}}">
             @else
              <input type="hidden" class="form-control" name="unit_price" value="{{$programs->price}}">
             @endif       
                            
             <input type="hidden" class="form-control" name="tour_name" value="{{ $programs->tour_name }}">
            <input type="hidden" class="form-control" name="currency" value="{{ $programs->currency }}">
        </div>




                            <label class="fieldlabels">First Name: *</label> <input type="text" name="first_name" placeholder="first name" /> 
                             <label class="fieldlabels">Last Name: *</label> <input type="text" name="last_name" placeholder="last name" /> 
                              <label class="fieldlabels">Phone: *</label> <input type="text" name="phone" placeholder="+00 00 000 000"/>                                 
                              <label class="fieldlabels">Email: *</label> <input type="email" name="email" placeholder="email" /> 

                            <label class="fieldlabels">Nationality: *
                            </label>
                             <input type="text" name="country" placeholder="Nationality" /> 

                        </div> 
                        
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                            <div class="form-card">


                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Tour Information:|Step 2 - 4</h2>
                                </div>
                             </div>

                       


             <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                   <label for="">Travel Date:</label>
                                    <div class="form-group">
                                        <input type="text" name="travel_date" id="travel_date" class="form-control datepicker" placeholder="From" value="" required>
                    
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                   <label for="">Adults (>16 yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" name="adults" min="0">
                                    </div>
                                </div>
  </div>

                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                   <label for="">Teens (12-14 yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" name="teens" min="0">
                                    </div>
                                 </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                   <label for="">Children (5-12 yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" name="children" min="0">
                                    </div>
                                 </div>
  </div>


        <div class="form-group">
            <label for="">Tour type:</label>
                   <input type="hidden" class="form-control" placeholder=""  name="tour_id" value="{{$programs->program_id}}" readonly="true">
          <input type="text" class="form-control" placeholder=""  name="tour_type" value="{{$programs->category}}" readonly="true">
        </div>

  

                               

                                    <div class="form-group">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                   <label for="">Accommodation:</label>
                                    <div class="form-group">
                                       <select class="form-control" name="accomodation">
                                            <option value="0">--Select Accomodation--</option>
                                            <option>Basic</option>
                                             <option>Comfort</option>
                                              <option>Deluxe</option>
                                               <option>Mix</option>
                                                <option>Not Sure</option>
                                           
                                        </select>
                                    </div>
                                </div>
                                                               </div>


                            
                        </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Other Information:|Step 3 - 4</h2>
                                </div>

                              
    <div class="col-md-12">
                <div class="form-group">
                    <label for="">  Additional Information we should know?</label>

         <textarea class="form-control" id="" cols="2" rows="1" name="additional_information" placeholder="Type your additional information here..."></textarea>
        </div>
     </div>


     <div class="col-md-12">
        <div class="form-group">
            <label for=""> How did you hear about us?:</label>

       <div class="form-group">
           <label for="facebook">Facebook
          <input id="facebook" type="checkbox" class="zt-control"  name="hear[]" value="Facebook">
        </label>
        <label for="instagram">Instagram
          <input id="instagram" type="checkbox" class="zt-control"  name="hear[]" value="Instagram">
        </label>
          <label for="google">Google
          <input id="google" type="checkbox" class="zt-control"  name="hear[]" value="Google">
        </label>
          <label for="mouth">Word of Mouth
          <input  id="mouth" type="checkbox" class="zt-control"  name="hear[]" value="Word of Mouth">
        </label>
        </div>
        </div>
  </div>

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
        <label for=""> Other Media:</label>
           <input type="text" class="form-control" name="hear_about_us">
        </div>
        </div> 
                                </div>
                          </div> 
                             
                        
                        <!-- <input type="submit" name="next" class="next action-button" value="Submit"/> -->
                        <button type="submit" class="btn btn-success">Submit</button>
                         <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Finish:| Step 4 - 4</h2>
                                </div>
                            </div> <br>
                            <h2 class="purple-text text-center"><strong>Success!</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully submitted</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <div class="modal-footer">
  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
</div>
                </form>
            </div>
        </div>   
      </div>
    </div>
  </div>
</div>

{{-- end of booking form madal --}}



{{-- Modal for paying bill form --}}
<!-- Modal -->
<div class="modal fade" id="payNow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ $programs->tour_name }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
      <form  method="post" id="post_form" action="/privatePay/{{ $tourInvoice->id}}">
    @csrf
    <div class="row">      
     <div class="col-md-6">
        <div class="form-group">
            <label for="">Amount:{{$cust->total_cost}}</label>
          <input type="text" class="form-control" placeholder="0.00" name="amount" min="0" value="{{$cust->total_cost}}">
        </div>
     </div>

     <div class="col-md-6">
        <div class="form-group">
      <label for="">Payment Date:</label>
      <div class="form-group date input-datepicker">
          <input type="date" class="form-control" name="payee_date"
              data-date-format="yyyy-mm-dd" placeholder="payment date" value="<?php echo date("Y-m-d");?>">
                        <span class="input-group-addon"><i class="far fa-calendar-alt"></i></span>
      </div>

     </div>
     </div>

        </div>
       


<div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Pay</button>
</div>
</form>
 </div>
</div>
</div>
</div>
{{-- end of booking form madal --}}






<!-- <script type="text/javascript" src="../../../js/jquery321.min.js"></script> -->
<!--<script type="text/javascript" src="../../../js/bootstrap431.bundle.min.js"></script>-->
<!-- 
<script type="text/javascript">
    
$(document).ready(function(){
var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);
$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});
</script> -->

<script>
function openPage(pageName, elmnt, color) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }

  // Show the specific tab content
  document.getElementById(pageName).style.display = "block";

  // Add the specific color to the button used to open the tab content
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


$('#myTab a').on('click', function (event) {
  event.preventDefault()
  $(this).tab('show')
})
</script>


<script type="text/javascript" src="../../../js/jquery321.min.js"></script>
<script type="text/javascript" src="../../../js/bootstrap431.bundle.min.js"></script>

<script type="text/javascript">
    
$(document).ready(function(){
var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);
$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});
</script>

@endsection