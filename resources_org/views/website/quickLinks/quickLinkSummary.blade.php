@extends('website.layouts.apps')
@section('content')
  <!-- <link rel="stylesheet" href="../../css/style.css"> -->
  <section class="bg-gray ">
        <div class="container-fluid">
            <div class="package-list-wrapx">
          
             <!-- <img src="{{URL::asset('/storage/uploads/'.$quickLinks->attachment) }}" class="" alt="det-img" style="min-height: 35vh !important;max-height:100% !important;background-size: 100% 100%;width: 100%;"> -->

               <img src="{{URL::asset('/storage/uploads/'.$quickLinks->attachment?? '') }}" class="img-fluid" alt="det-img" style="min-height: 20vh !important;max-height: 50vh;background-size: cover;width: 100%; opacity:1">
             
                <div class="package-list-content">
                  <span>Home/Quick-Link </span>
                                     <h3 class="package-list-title">
                        <a href="#"><b style="color: white;">{{ $quickLinks->quick_title }}</b></a>
                    </h3>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
        <p style="color:#1da625; background-color:#fff; font-style:italic;">
          {{$quickLinks->quick_description ?? ''}}.
       
        </p>         
    </div>
                      </div>

           </div>

        </div>
    </div>
    </section>

<hr>
<!--  <section class="ws-section-spacing booking-btn">
    <div class="container-fluid">   
    <div class=""> 
      <div class="col-lg-12 col-md-12 col-sm-12">
        <p style="color: white;">
          {{$quickLinks->quick_description ?? ''}}.
        </p>         
    </div>
    </div>
    </div>
</section> -->


<section id="popular_experience" class="blog_section">
    <div class="container-fluid">


    <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section text-center">
          <div class="col-md-12 text-center">

<h2 class="" style="color:#c56c1d"><strong>
Tour Packages</strong>
</h2>
                    </div>

            </div>
            </div>
        </div>
        <hr>

          <!-- BEGIN CONTENT -->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="">
             <div data-aos="fade-up">
                
      <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
            <!-- BEGIN CAROUSEL --> <h4 style="font-size: 20px;color: green;"><strong>Wildlife Safaris</strong></h4>     

  <div id="myCarousel1p" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
<!--     <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
         <div class="package-list-wrap ">

                                        <img src="{{URL::asset('/storage/uploads/'.$popular_safari->attachment)}}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                          <p class="booking-btn-gray"><span class="off-box">{{ $popular_safari->days  }} Days: ${{number_format($popular_safari->price),2 }}</p></span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p>{{ $popular_safari->tour_name }}</p>
                          </h3>
   <a class="package-list-button" href="{{ route('safaris-slider-packages',$popular_safari->id) }}">Explore More</a>
                                          </div>
                                        </div>

      </div>



            @foreach ($popular_safarif as $safaris)
                        <div class="item">
                                     <div class="package-list-wrap ">
                                        <img src="{{URL::asset('/storage/uploads/'.$safaris->attachment) }}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                        <span class="off-box">{{ $safaris->days  }} Days: ${{number_format($safaris->price),2 }}</span>
        <div class="package-list-content">
            <h3 class="package-list-title">
      <p>{{ $safaris->tour_name }}</p>
                          </h3>
   <a class="package-list-button" href="{{ route('safaris-slider-packages',$safaris->id) }}">Explore More</a>
                                          </div>
                                        </div>
                      </div>
                       @endforeach
    </div>

    <!-- Left and right controls -->
  <a data-slide="prev" href="#myCarousel1p" class="carousel-control left">
                      <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#myCarousel1p" class="carousel-control right">
                      <i class="fa fa-angle-right"></i>
                    </a>
  </div>
   </div>


  <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
                <h4 style="font-size: 20px;color: green;"><strong>Hiking And Trekking</strong></h4>

  <div id="myCarousel2p" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
     <!--  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li> -->
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
         <div class="package-list-wrap ">

                                        <img src="{{URL::asset('/storage/uploads/'.$popular_trekking->attachment)}}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                        <span class="off-box">{{ $popular_trekking->days  }} Days: ${{number_format($popular_trekking->price),2 }}</span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p>{{ $popular_trekking->tour_name }}</p>
                          </h3>
   <a class="package-list-button" href="{{ route('safaris-slider-packages',$popular_trekking->id) }}">Explore More</a>
                                          </div>
                                        </div>
      </div>



            @foreach ($popular_trekkingf as $trekking)
                        <div class="item">
                         <div class="package-list-wrap ">


                                        <img src="{{URL::asset('/storage/uploads/'.$trekking->attachment) }}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                             <span class="off-box">{{ $trekking->days  }} Days: ${{number_format($trekking->price),2 }}</span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p>{{ $trekking->tour_name }}</p>
                          </h3>
   <a class="package-list-button" href="{{ route('safaris-slider-packages',$trekking->id) }}">Explore More</a>
                                          </div>
                                        </div>
                      </div>
                       @endforeach
    </div>



    <a data-slide="prev" href="#myCarousel2p" class="carousel-control left">
                      <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#myCarousel2p" class="carousel-control right">
                      <i class="fa fa-angle-right"></i>
                    </a>
  </div>
   </div>
    <!-- Beach Holidays -->
  <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
                      <h4 style="font-size: 20px;color: green;"><strong>Beach Holiday</strong></h4>

  <div id="myCarousel3p" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   <!--  <ol class="carousel-indicators">
      <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel3" data-slide-to="1"></li>
      <li data-target="#myCarousel3" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
         <div class="package-list-wrap ">
                                        <img src="{{URL::asset('/storage/uploads/'.$popular_holiday->attachment)}}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                         <span class="off-box">{{ $popular_holiday->days  }} Days: ${{number_format($popular_holiday->price),2 }}</span>
        <div class="package-list-content">
            <h3 class="package-list-title">
      <p>{{ $popular_holiday->tour_name }}</p>
                          </h3>
   <a class="package-list-button" href="{{ route('safaris-slider-packages',$popular_holiday->id) }}">Explore More</a>
                                          </div>
                                        </div>
      </div>



             @foreach ($popular_holidayf as $holidays)
                        <div class="item">
                          <div class="package-list-wrap ">
                                        <img src="{{URL::asset('/storage/uploads/'.$holidays->attachment) }}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                         <span class="off-box">{{ $holidays->days  }} Days: ${{number_format($holidays->price),2 }}</span>
        <div class="package-list-content">
          <h3 class="package-list-title">
      <p>{{ $holidays->tour_name }}</p>
                          </h3>
   <a class="package-list-button" href="{{ route('safaris-slider-packages',$holidays->id) }}">Explore More</a>
                                          </div>
                                        </div>
                      </div>
                       @endforeach
    </div>

    <!-- Left and right controls -->
  <a data-slide="prev" href="#myCarousel3p" class="carousel-control left">
                      <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#myCarousel3p" class="carousel-control right">
                      <i class="fa fa-angle-right"></i>
                    </a>
  </div>
   </div>

 <!-- Beach Holidays -->
  <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
                  <h4 style="font-size: 20px;color: green;"><strong>Historical Sites</strong></h4>

  <div id="myCarousel4p" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   <!--  <ol class="carousel-indicators">
      <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel3" data-slide-to="1"></li>
      <li data-target="#myCarousel3" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
         <div class="package-list-wrap ">
                                        <img src="{{URL::asset('/storage/uploads/'.$popular_historical->attachment)}}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                         <span class="off-box">{{ $popular_historical->days  }} Days: ${{number_format($popular_historical->price),2 }}</span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p>{{ $popular_historical->tour_name }}</p>
                          </h3>
   <a class="package-list-button" href="{{ route('safaris-slider-packages',$popular_historical->id) }}">Explore More</a>
                                          </div>
                                        </div>
      </div>



             @foreach ($popular_historicalf as $historicalf)
                        <div class="item">
                          <div class="package-list-wrap ">
                                        <img src="{{URL::asset('/storage/uploads/'.$historicalf->attachment) }}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                            <span class="off-box">{{ $historicalf->days  }} Days: ${{number_format($historicalf->price),2 }}</span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p>{{ $historicalf->tour_name }}</p>
                          </h3>
   <a class="package-list-button" href="{{ route('safaris-slider-packages',$historicalf->id) }}">Explore More</a>
                                          </div>
                                        </div>
                      </div>
                       @endforeach
    </div>

    <!-- Left and right controls -->
  <a data-slide="prev" href="#myCarousel4p" class="carousel-control left">
                      <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#myCarousel4p" class="carousel-control right">
                      <i class="fa fa-angle-right"></i>
                    </a>
  </div>
   </div>
</div>
</div>
</div>
    </div>

</section>

@endsection

