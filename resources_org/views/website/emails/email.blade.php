@extends('website.layouts.apps')
@section('content')

  <section class="bg-gray" style="margin-top: 0px;">
        <div class="container">
        <form method="GET" action="{{ route('safaris.show','print') }}">                
                 <div class="col-md-10 col-sm-10">
                                     </div>
                                       <div class="col-md-2 col-sm-2">
                    <button type="submit" class="btn btn-success float-right" name="print" value="print">Print Itinerary</button>
                     <a href="{{ route('email-send',11) }}" class="ml-4 text-sm text-gray-700 underline">Mailing</a>
                                     </div>

                                 </form>


<br>
<div class="col-md-8 col-sm-8">
     <p class="card-text">
     {{ $programs->tour_name }} </p>
</div>
<hr>

                <div class="col-md-12 col-sm-12">
                       <p class="card-text">
     {{ $programs->tour_name }} </p>
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
                                            <div class="hotel-pics-one">                                               <img src="{{URL('http://localhost:8000/storage/destination/'.$data->photo) }}" alt="" style="height: 32vh !important;width:100%">                                                                              </div> 

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
        </section>

@endsection