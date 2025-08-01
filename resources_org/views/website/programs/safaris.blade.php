@extends('website.layouts.apps')
@section('content')

 <!-- Start-Package-Section -->

<style>

.bg-bannerw{  
  @isset($PostcategoryImage->attachment)
  background-image:url({{URL::asset('/storage/uploads/'.$PostcategoryImage->attachment)}});
   @endisset

  /* height: 65vh;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;*/

    background-size:100% 100%;
     background-repeat: no-repeat;
                         background-size: cover;
                       background-position: center; 
                         position: relative;
}
</style>


<style>
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -60px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
</style>

<style>
.vl {
  border-left: 1px solid white;
  height: 20px;
}
</style>

 <hr>



 <section class="">
    <div class="container">   

      <div class="col-lg-12 col-md-12 col-sm-12 text-center">
        <h3 style="color:#b76b0b;">
         <b> {{$title ?? ''}}</b>
      </h3>        
    </div>
    </div>
</section>
</br>




    <div class="masonry-item">
            <!-- item -->
             <div class="container-fluid" data-aos="fade-up">
            @foreach ($safaris as $safari)
                    <div class="col-lg-3 col-md-4">
                        <div class="search_area search_area_two">                         
                               
                                <div class="listing-shot-img">
                                    <div class="blog_image">
                                    <img src="{{URL::asset('/storage/uploads/'.$safari->attachment) }}" class="img-responsive" alt="{{  $safari->tour_name }}" style="height:250px;width:100%;">
                                    </div>
                                </div>
                                 <hr>     
                            <div class="blog-text">       
                            <div class="">
                              <div class="col-md-12 col-sm-12 col-xs-12" style="border-right:1px solid rgba(71,85,95,.11)">
                                     
                                 <h4 class="text-center demo-3"> <b style="color:#b76b0b" title="{{$safari->tour_name}}" style="color:red">{{$safari->tour_name}}</b>
                                                                             </h4>
                               </div>

                                  
                                     <div class="col-md-6 col-sm-6 col-xs-6 booking-btn" style="border-right:1px solid rgba(71,85,95,.11);font-size:16px;">
                                             <strong>{{ $safari->days }} Days, {{ $safari->days -1 }} Nights</strong>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 booking-btn" style="font-size:16px;">
                                           <strong>From $<b>{{number_format($safari->price),2 }}</b>  </strong>
                                          
                                         </div> 
                                    </div> 
                                                                                                                               
                                     <div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">                                    
                                                                                   <div class="row">
                                               <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5);font-size:17px;">
                                               <span> Physical Rating: </span>  
                                             </div>
                                           
                                                          
                                               <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:14px;">
                                                   <strong>{{ $safari->physical_rating }}</strong>
                                                </div>
                                               </div>
                                                <div class="row">
                                                  <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5);font-size:17px;">
                                               <span> Tour Category: </span>  
                                           </div>
                            
                                           
                                               <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                   <strong>{{ $safari->category }}</strong>
                                                </div>  
                                            </div>  
                                                  <div class="row">
                                                  <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5);font-size:17px;">
                                               <span> Tour Code: </span>  
                                           </div>
                          
                                               <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                   <strong>{{ $safari->tour_code }}</strong>
                                                </div>  
                                            </div>                                           
                                             </div>
                               
                             <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      </div> 
                                   </div>   
                                        
                                         <ul class="booking-btn booking-tourPadding">
                            <a href="{{ route('safaris.show',$safari->id) }}" class="booking-btn text-center"><b>View More</b></a>
                                                       
                        </ul>                            
                                </div>
                          
                        </div>
                    </div>                       
            @endforeach
        </div>
    </div>

      
 @endsection

