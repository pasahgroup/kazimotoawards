@extends('spa.mainlayout_web')
@section('contents')

    <link rel="stylesheet" href="../../marquee/css/liMarquee.css">
          <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
        <link rel="stylesheet" href="../../css/style.css">
            <link rel="stylesheet" href="../../css/login.css">                            
 
  <style>
            .str3 { font-size:0 !important}
            .str3-2 { background:none !important;}
            .str3-2 span {color:#999; margin:0 1px; display:inline-block; vertical-align:top;}
        </style>

<style>

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.slide-container{
  max-width: 1120px;
  width: 100%;
  /*padding: 40px 0;*/
}
.slide-content{
  margin: 0 40px;
  overflow: hidden;
  border-radius: 25px;
}
.card{
  border-radius: 25px;
  background-color: #FFF;
}
.image-content,
.card-content{
  display: flex;
  flex-direction: column;
  align-items: center;
  /*padding: 10px 2px;*/
}
.image-content{
  position: relative;
  row-gap: 5px;
  /*padding: 25px 0;*/
}
.overlay{
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-color: #A6AAA1;
  border-radius: 2px 2px 0 25px;
}
.overlay::before,
.overlay::after{
  content: '';
  position: absolute;
  right: 0;
  bottom: -40px;
  height: 40px;
  width: 40px;
  background-color: #4070F4;
}
.overlay::after{
  border-radius: 0 25px 0 0;
  background-color: #FFF;
}
.card-image{
  position: relative;
  height: 150px;
  width: 150px;
  border-radius: 50%;
  background: #FFF;
  padding: 1px;
}
.card-image .card-img{
  height: 100%;
  width: 100%;
  /*object-fit: cover;*/
  border-radius: 50%;
  border: 4px solid #4070F4;
}
.name{
  font-size: 18px;
  font-weight: 500;
  color: #333;
}
.description{
  font-size: 14px;
  color: #707070;
  text-align: center;
}
.button{
  border: none;
  /*font-size: 16px;*/
  color: #FFF;
  /*padding: 8px 16px;*/
  background-color: #4070F4;
  border-radius: 6px;
  margin: 14px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button:hover{
  background: #265DF2;
}

.swiper-navBtn{
  color: #6E93f7;
  transition: color 0.3s ease;
}
.swiper-navBtn:hover{
  color: #4070F4;
}
.swiper-navBtn::before,
.swiper-navBtn::after{
  font-size: 35px;
}
.swiper-button-next{
  right: 0;
}
.swiper-button-prev{
  left: 0;
}
.swiper-pagination-bullet{
  background-color: #6E93f7;
  opacity: 1;
}
.swiper-pagination-bullet-active{
  background-color: #4070F4;
}

@media screen and (max-width: 768px) {
  .slide-content{
    margin: 0 10px;
  }
  .swiper-navBtn{
    display: none;
  }
}

</style>

<style>    
.marquee {
  width: 100%;
  height: 100px;
  margin: 0 auto;
  overflow: hidden;
  white-space: nowrap;
  /*border: 1px solid blue;*/
}
.marquee-content {
  display: inline-block;
  margin-top: 5px;
  animation: marquee 30s linear infinite;
}
.item-collection-1 {
  position: relative;
  left: 0%;
  animation: swap 30s linear infinite;
}
@keyframes swap {
  0%, 50% {
    left: 0%;
  }
  50.01%,
  100% {
    left: 100%;
  }
}
.marquee-content:hover {
  animation-play-state: paused
}
.item1 {
  display: inline-block;
  height: 70px;
  width: 140px;
  background:#;
  vertical-align: top;
  margin-left: 15px;
}
.item2 {
  display: inline-block;
  height: 70px;
  width: 100px;
  background:#;
  vertical-align: top;
  margin-left: 15px;
  line-height: 14px;
}
/* Transition */

@keyframes marquee {
  0% {
    transform: translateX(0)
  }
  100% {
    transform: translateX(-100%)
  }
}

</style>


<style>
    
    .carousel {
  position: relative;
}
.carousel-item img {
  object-fit: cover;
}
#carousel-thumbs {
  background: rgba(255,255,255,.3);
  bottom: 0;
  left: 0;
  padding: 0 50px;
  right: 0;
}
#carousel-thumbs img {
  border: 5px solid transparent;
  cursor: pointer;
}
#carousel-thumbs img:hover {
  border-color: rgba(255,255,255,.3);
}
#carousel-thumbs .selected img {
  border-color: #fff;
}
.carousel-control-prev,
.carousel-control-next {
  width: 50px;
}
@media all and (max-width: 767px) {
  .carousel-container #carousel-thumbs img {
    border-width: 3px;
  }
}
@media all and (min-width: 576px) {
  .carousel-container #carousel-thumbs {
    position: absolute;
  }
}
@media all and (max-width: 576px) {
  .carousel-container #carousel-thumbs {
    background: #ccccce;
  }
}
</style>


<div>



                                @forelse($u as $image)
                                    <div class="col-lg-2 col-md-6">
                                        <div class="gallery__item">
                                            <a href="{{ getImage(imagePath()['photos']['path'].'/'. $image, imagePath()['photos']['size']) }}" class="img-pop">
                                                <i class="las la-plus"></i>
                                            </a>
                                            <img src="{{ getImage(imagePath()['photos']['path'].'/'.$image, imagePath()['photos']['size']) }}" alt="rent-vehicle">
                                        </div>
                                    </div>
                                @empty
                                @endforelse



</div>



<div class="container mt-5">
<div class="carousel-container position-relative row">
  
<!-- Sorry! Lightbox doesn't work - yet. -->
  
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-slide-number="0">
      <img src="https://source.unsplash.com/Pn6iimgM-wo/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/Pn6iimgM-wo/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
    </div>
    <div class="carousel-item" data-slide-number="1">
      <img src="https://source.unsplash.com/tXqVe7oO-go/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/tXqVe7oO-go/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
    </div>
    <div class="carousel-item" data-slide-number="2">
      <img src="https://source.unsplash.com/qlYQb7B9vog/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/qlYQb7B9vog/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
    </div>
    <div class="carousel-item" data-slide-number="3">
      <img src="https://source.unsplash.com/QfEfkWk1Uhk/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/QfEfkWk1Uhk/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
    </div>
    <div class="carousel-item" data-slide-number="4">
      <img src="https://source.unsplash.com/CSIcgaLiFO0/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/CSIcgaLiFO0/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
    </div>
    <div class="carousel-item" data-slide-number="5">
      <img src="https://source.unsplash.com/a_xa7RUKzdc/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/a_xa7RUKzdc/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
    </div>
    <div class="carousel-item" data-slide-number="6">
      <img src="https://source.unsplash.com/uanoYn1AmPs/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/uanoYn1AmPs/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
    </div>
    <div class="carousel-item" data-slide-number="7">
      <img src="https://source.unsplash.com/_snqARKTgoc/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/_snqARKTgoc/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
    </div>
    <div class="carousel-item" data-slide-number="8">
      <img src="https://source.unsplash.com/M9F8VR0jEPM/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/M9F8VR0jEPM/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
    </div>
    <div class="carousel-item" data-slide-number="9">
      <img src="https://source.unsplash.com/Q1p7bh3SHj8/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/Q1p7bh3SHj8/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
    </div>
  </div>
</div>

<!-- Carousel Navigation -->
<div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row mx-0">
        <div id="carousel-selector-0" class="thumb col-4 col-sm-2 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="0">
          <img src="https://source.unsplash.com/Pn6iimgM-wo/600x400/" class="img-fluid" alt="...">
        </div>
        <div id="carousel-selector-1" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="1">
          <img src="https://source.unsplash.com/tXqVe7oO-go/600x400/" class="img-fluid" alt="...">
        </div>
        <div id="carousel-selector-2" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="2">
          <img src="https://source.unsplash.com/qlYQb7B9vog/600x400/" class="img-fluid" alt="...">
        </div>
        <div id="carousel-selector-3" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="3">
          <img src="https://source.unsplash.com/QfEfkWk1Uhk/600x400/" class="img-fluid" alt="...">
        </div>
        <div id="carousel-selector-4" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="4">
          <img src="https://source.unsplash.com/CSIcgaLiFO0/600x400/" class="img-fluid" alt="...">
        </div>
        <div id="carousel-selector-5" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="5">
          <img src="https://source.unsplash.com/a_xa7RUKzdc/600x400/" class="img-fluid" alt="...">
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row mx-0">
        <div id="carousel-selector-6" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="6">
          <img src="https://source.unsplash.com/uanoYn1AmPs/600x400/" class="img-fluid" alt="...">
        </div>
        <div id="carousel-selector-7" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="7">
          <img src="https://source.unsplash.com/_snqARKTgoc/600x400/" class="img-fluid" alt="...">
        </div>
        <div id="carousel-selector-8" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="8">
          <img src="https://source.unsplash.com/M9F8VR0jEPM/600x400/" class="img-fluid" alt="...">
        </div>
        <div id="carousel-selector-9" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="9">
          <img src="https://source.unsplash.com/Q1p7bh3SHj8/600x400/" class="img-fluid" alt="...">
        </div>
        <div class="col-2 px-1 py-2"></div>
        <div class="col-2 px-1 py-2"></div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-thumbs" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div> <!-- /row -->
</div> <!-- /container -->













     <main class="main">
        <!-- hero slider -->

   
          









<div class="container mt-5">
<div class="carousel-container position-relative row">
  
<!-- Sorry! Lightbox doesn't work - yet. -->
  
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-slide-number="0">
      <img src="https://source.unsplash.com/Pn6iimgM-wo/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/Pn6iimgM-wo/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
    </div>
    <div class="carousel-item" data-slide-number="1">
      <img src="https://source.unsplash.com/tXqVe7oO-go/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/tXqVe7oO-go/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
    </div>
    <div class="carousel-item" data-slide-number="2">
      <img src="https://source.unsplash.com/qlYQb7B9vog/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/qlYQb7B9vog/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
    </div>
    <div class="carousel-item" data-slide-number="3">
      <img src="https://source.unsplash.com/QfEfkWk1Uhk/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/QfEfkWk1Uhk/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
    </div>
    <div class="carousel-item" data-slide-number="4">
      <img src="https://source.unsplash.com/CSIcgaLiFO0/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/CSIcgaLiFO0/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
    </div>
    <div class="carousel-item" data-slide-number="5">
      <img src="https://source.unsplash.com/a_xa7RUKzdc/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/a_xa7RUKzdc/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
    </div>
    <div class="carousel-item" data-slide-number="6">
      <img src="https://source.unsplash.com/uanoYn1AmPs/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/uanoYn1AmPs/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
    </div>
    <div class="carousel-item" data-slide-number="7">
      <img src="https://source.unsplash.com/_snqARKTgoc/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/_snqARKTgoc/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
    </div>
    <div class="carousel-item" data-slide-number="8">
      <img src="https://source.unsplash.com/M9F8VR0jEPM/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/M9F8VR0jEPM/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
    </div>
    <div class="carousel-item" data-slide-number="9">
      <img src="https://source.unsplash.com/Q1p7bh3SHj8/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/Q1p7bh3SHj8/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
    </div>
  </div>
</div>

<!-- Carousel Navigation -->
<div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row mx-0">
        <div id="carousel-selector-0" class="thumb col-4 col-sm-2 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="0">
          <img src="https://source.unsplash.com/Pn6iimgM-wo/600x400/" class="img-fluid" alt="...">
        </div>
        <div id="carousel-selector-1" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="1">
          <img src="https://source.unsplash.com/tXqVe7oO-go/600x400/" class="img-fluid" alt="...">
        </div>
        <div id="carousel-selector-2" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="2">
          <img src="https://source.unsplash.com/qlYQb7B9vog/600x400/" class="img-fluid" alt="...">
        </div>
        <div id="carousel-selector-3" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="3">
          <img src="https://source.unsplash.com/QfEfkWk1Uhk/600x400/" class="img-fluid" alt="...">
        </div>
        <div id="carousel-selector-4" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="4">
          <img src="https://source.unsplash.com/CSIcgaLiFO0/600x400/" class="img-fluid" alt="...">
        </div>
        <div id="carousel-selector-5" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="5">
          <img src="https://source.unsplash.com/a_xa7RUKzdc/600x400/" class="img-fluid" alt="...">
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row mx-0">
        <div id="carousel-selector-6" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="6">
          <img src="https://source.unsplash.com/uanoYn1AmPs/600x400/" class="img-fluid" alt="...">
        </div>
        <div id="carousel-selector-7" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="7">
          <img src="https://source.unsplash.com/_snqARKTgoc/600x400/" class="img-fluid" alt="...">
        </div>
        <div id="carousel-selector-8" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="8">
          <img src="https://source.unsplash.com/M9F8VR0jEPM/600x400/" class="img-fluid" alt="...">
        </div>
        <div id="carousel-selector-9" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="9">
          <img src="https://source.unsplash.com/Q1p7bh3SHj8/600x400/" class="img-fluid" alt="...">
        </div>
        <div class="col-2 px-1 py-2"></div>
        <div class="col-2 px-1 py-2"></div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-thumbs" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div> <!-- /row -->
</div> <!-- /container -->






















  <div class="single-section pt-120x pb-120 bg--section position-relative overflow-hidden">
        <div class="shape">@lang('Book Now')</div>
        <div class="container">
             <div class="widget border--dashed" style="background-color:#fff">
            <div class="row gy-3">
                <!-- 6d846c -->
                <div class="col-md-4">                  
                    <div class="slider-top owl-theme owl-carousel border--dashed">
                        @forelse($u as $image)
                            <div class="car__rental-thumb w-100 bg--body p-0" style="border-radius:2px 1px 2px;">
                                <img src="{{ getImage(imagePath()['photos']['path'].'/'. $image, imagePath()['photos']['size']) }}" alt="rent-vehicle">
                            </div>

  <div class="col-lg-2 col-md-6">
                                        <div class="gallery__item">
                                            <a href="{{ getImage(imagePath()['photos']['path'].'/'. $image, imagePath()['photos']['size']) }}" class="img-pop">
                                                <i class="las la-plus"></i>
                                            </a>
                                            <img src="{{ getImage(imagePath()['photos']['path'].'/'.$image, imagePath()['photos']['size']) }}" alt="rent-vehicle">
                                        </div>
                                    </div>
    @empty
                        @endforelse
                    </div>
               
                    <div class="slider-bottom owl-theme owl-carousel mt-4">
                        @forelse($u as $image)
                            <div class="rental__thumbnails bg--body">
                                <img src="{{ getImage(imagePath()['photos']['path'].'/'. $image, imagePath()['photos']['size']) }}" alt="rent-vehicle">
                            </div>

                               <img src="{{ getImage(imagePath()['photos']['path'].'/'.$image, imagePath()['photos']['size']) }}" alt="rent-vehicle">
                        @empty
                        @endforelse
                    </div>
                 
                </div>
              
                      <div class="col-md-8">
                    <div class="rent__single border--dashed" style="padding:35px">
                      <br>
                            <h4><span class="text--body">Vehicle details2</span></h4>
<div class="row">
                     <div class="col-lg-9">
                        <h3 class="title">{{ __(@$vehicle->name) }}
</h3>
</div>
<div class="col-lg-3">
<div class="btn__grp">
                            @auth
                                 <a href="#" class="cmn--btn">@lang('Book Now')</a>
                         


  <div class="slider-top owl-theme owl-carousel border--dashed">
                        @forelse($u as $image)
                            <div class="car__rental-thumb w-100 bg--body p-0" style="border-radius:2px 1px 2px;">
                                <img src="{{ getImage(imagePath()['photos']['path'].'/'. $image, imagePath()['photos']['size']) }}" alt="rent-vehicle">
                            </div>

  <div class="col-lg-2 col-md-6">
                                        <div class="gallery__item">
                                            <a href="{{ getImage(imagePath()['photos']['path'].'/'. $image, imagePath()['photos']['size']) }}" class="img-pop">
                                                <i class="las la-plus"></i>
                                            </a>
                                            <img src="{{ getImage(imagePath()['photos']['path'].'/'.$image, imagePath()['photos']['size']) }}" alt="rent-vehicle">
                                        </div>
                                    </div>
    @empty
                        @endforelse
                    </div>
               
                    <div class="slider-bottom owl-theme owl-carousel mt-4">
                        @forelse($u as $image)
                            <div class="rental__thumbnails bg--body">
                                <img src="{{ getImage(imagePath()['photos']['path'].'/'. $image, imagePath()['photos']['size']) }}" alt="rent-vehicle">
                            </div>

                               <img src="{{ getImage(imagePath()['photos']['path'].'/'.$image, imagePath()['photos']['size']) }}" alt="rent-vehicle">
                        @empty
                        @endforelse
                    </div>

                            @else
                               {{--
                                <a href="#" class="cmn--btn">@lang('Login to Book')</a>
                               --}}

                    <form  method="GET"  action="#" enctype="multipart/form-data">
                             @csrf
    <input type="hidden" name="_method" value="GET">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="fullurl" value="{{$fullUrl}}"/>

                <button type="submit" class="cmn--btn">@lang('Login to Book')</button>
                                </form>

                                <a href="#" class="cmn--btn">@lang('Sign Up')</a>
                            @endauth
                        </div>
                         </div>
                     </div>

                        <div class="ratings mb-4">
                            <span><i class="las la-star"></i></span>
                            <span>({{ @$vehicle->ratings_avg_rating+0 }})</span>
                            <span class="text--body">{{ @$vehicle->ratings_count }} @lang('Customer Review')</span>
                        </div>
                        {{--
                        <div class="price-area mb-4">
                            
                            <h5 class="item">{{ $general->cur_sym }}{{ showAmount($vehicle->price) }} <sub>/@lang('day')</sub></h5>
                        </div>
                        <div class="content">
                            @php echo @$vehicle->details @endphp
                        </div>
                        --}}
                    </div>
                </div>
            </div>
            <div class="single__details mt-2" style="background-color:#6d846c">
                <ul class="nav nav-tabs nav--tabs">
                    <li class="nav-item">
                        <a href="#specifications" data-bs-toggle="tab" class="nav-link active">@lang('All Specifications')</a>
                    </li>
                    <li class="nav-item">
                        <a href="#image-gallery" data-bs-toggle="tab" class="nav-link">@lang('Image Gallery')</a>
                    </li>
                    <li class="nav-item">
                        <a href="#terms" data-bs-toggle="tab" class="nav-link">@lang('Rental Terms')</a>
                    </li>
                    <li class="nav-item">
                        <a href="#review" data-bs-toggle="tab" class="nav-link">@lang('Review')({{ $vehicle->ratings_count }})</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="specifications">
                        <h5 class="single__title">@lang('All Specifications')</h5>
                        <div class="single__details-content">

{{--
                            @forelse($vehicle->specifications as $spec)
                                <div class="specification-item">
                                    @php echo @$spec[0] @endphp
                                    <div class="specification-item-cont">
                                        <h6 class="specification-item-title">{{ @$spec[1] }}: </h6>
                                        <span>{{ @$spec[2] }}</span>
                                    </div>
                                </div>
                            @empty
                            @endforelse
--}}
                       
                        </div>
                    </div>
                    <div class="tab-pane" id="image-gallery">
                        <h5 class="single__title">@lang('Our Gallery')</h5>
                        <div class="single__details-content p-4">
                            <div class="row g-4">



                                @forelse($u as $image)
                                    <div class="col-lg-2 col-md-6">
                                        <div class="gallery__item">
                                            <a href="{{ getImage(imagePath()['photos']['path'].'/'. $image, imagePath()['photos']['size']) }}" class="img-pop">
                                                <i class="las la-plus"></i>
                                            </a>
                                            <img src="{{ getImage(imagePath()['photos']['path'].'/'.$image, imagePath()['photos']['size']) }}" alt="rent-vehicle">
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                             

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="terms">
                        <h5 class="single__title">{{ __(@$rental_terms->data_values->title) }}</h5>
                        <div class="single__details-content p-4 py-5">
                            @php echo @$rental_terms->data_values->content @endphp
                        </div>
                    </div>
                    <div class="tab-pane" id="review">
                        <h5 class="single__title mt-4">@lang('Leave a Review')</h5>
                        <div class="single__details-content p-4 mb-4">
                            @if(auth()->check())
                                <form class="review-form rating row" action="#" method="post">
                                    @csrf

                                    <div class="review-form-group mb-3 mt-3 col-md-6 d-flex flex-wrap">
                                        <label class="review-label mb-0 mr-3">@lang('Your Ratings') :</label>
                                        <div class="rating-form-group">
                                            <label class="star-label">
                                                <input type="radio" name="rating" value="1"/>
                                                <span class="icon"><i class="las la-star"></i></span>
                                            </label>
                                            <label class="star-label">
                                                <input type="radio" name="rating" value="2"/>
                                                <span class="icon"><i class="las la-star"></i></span>
                                                <span class="icon"><i class="las la-star"></i></span>
                                            </label>
                                            <label class="star-label">
                                                <input type="radio" name="rating" value="3"/>
                                                <span class="icon"><i class="las la-star"></i></span>
                                                <span class="icon"><i class="las la-star"></i></span>
                                                <span class="icon"><i class="las la-star"></i></span>
                                            </label>
                                            <label class="star-label">
                                                <input type="radio" name="rating" value="4"/>
                                                <span class="icon"><i class="las la-star"></i></span>
                                                <span class="icon"><i class="las la-star"></i></span>
                                                <span class="icon"><i class="las la-star"></i></span>
                                                <span class="icon"><i class="las la-star"></i></span>
                                            </label>
                                            <label class="star-label">
                                                <input type="radio" name="rating" value="5"/>
                                                <span class="icon"><i class="las la-star"></i></span>
                                                <span class="icon"><i class="las la-star"></i></span>
                                                <span class="icon"><i class="las la-star"></i></span>
                                                <span class="icon"><i class="las la-star"></i></span>
                                                <span class="icon"><i class="las la-star"></i></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="review-form-group mb-3 col-12 d-flex flex-wrap">
                                        <label class="form--label" for="review-comments">@lang('Say Something')</label>
                                        <textarea name="comment" class="form-control form--control" id="review-comments"></textarea>
                                    </div>
                                    <div class="review-form-group col-12 d-flex flex-wrap">
                                        <button type="submit" class="cmn--btn">@lang('Submit Review')</button>
                                    </div>
                                </form>
                            @else
                                <h4>@lang('Please login to add your review!')</h4>
                            @endif
                        </div>

                        <h5 class="single__title">@lang('Review')</h5>
                        <div class="single__details-content px-sm-4">
                            <ul class="content">

{{--
                                @forelse($vehicle->ratings as $rating)
                                    <li class="review-item">
                                        <div class="review-thumb">
                                            <img src="{{ getImage(imagePath()['profile']['user']['path'].'/'. $rating->user->image, '100x100') }}" alt="client">
                                        </div>
                                        <div class="review-content">
                                            <div class="entry-meta">
                                                <div class="posted-on">
                                                    {{ $rating->user->fullname }} &nbsp;
                                                    <p>@lang('Posted on') {{ showDateTime($rating->created_at) }}</p>
                                                </div>
                                                <div class="rating">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($rating->rating >= $i)
                                                            <i class="las la-star"></i>
                                                        @else
                                                            <i class="lar la-star"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                            </div>
                                            <div class="entry-content">
                                                <p>{{ __(@$rating->comment) }}</p>
                                            </div>
                                        </div>
                                    </li>
                                @empty
                                @endforelse
--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>











            <div class="container">            
        
<h3>Contestants</h3>     

        <div class="str3-2 str_wrap">
              @foreach($contestant_datas as $contestant_data) 
         
             <span class="category-item">

      <div class="slide-container swiper">
            <div class="slide-content_org">
                <div class="card-wrapper swiper-wrapper">
  <div class="card swiper-slide">


 <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                               <img src="../../cv_photos/{{$contestant_data->photo}}" alt="" class="card-img">
                            {{--
                            <img src="{{URL::asset('/storage/photos/'.$contestant_data->photo) }}" alt="" class="card-img">
                            --}}

                            </div>
                        </div>


                        <div class="card-content">
                            <h2 class="name">{{$contestant_data->full_name}}
</h2>
                            <div class="description">Award: {{$contestant_data->award_name}}</div>
                        
<div class="row">
    <div class="col-md-6">
                       <div class="footer-top-link-info">
                                                    <a href="/voting_details/{{$contestant_data->id}}">

View more<i class="fas fa-arrow-right"></i>
</a>
                                                </div>

                            </div>
 <div class="col-md-6">
                                                
                      
 <div class="footer-top-link-info" data-animation="fadeInUp" data-delay="1s">
                                                    <a href="/voting_details/3" class="theme-btn" data-toggle="modal" data-target="#exampleModalCenter_{{$contestant_data->id}}">

Vote<i class="fas fa-arrow-right"></i>
</a>

                                                </div>


                         </div>

                         </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   <div>
   </div>



    




<div class="container mt-5 col-md-8">
<div class="modal fade" id="exampleModalCenter_{{$contestant_data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title" id="exampleModalLabel">Voting Form</strong>
                       
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                      <strong class="modal-title" id="loginModal">Voting for:</strong> <i>{{$contestant_data->full_name}}</i></strong></br>
                     <strong class="modal-title" id="loginModal">Award:</strong> <i>{{$contestant_data->award_name}}</i></strong></br>
                     <label></label>
                      <form method="POST" action="{{ route('login') }}">
                    @csrf


  <div class="wrapper">
    <div class="title"><span>Voting Form</span></div>
    <form action="#">
      <div class="row">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Email or Phone" required />
      </div>
      <div class="row">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Password" required />
      </div>
  
       <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Vote</button>
                </div>

        <div class="signup-link">Not a member? <a href="/login">Sign in</a></div>

   <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>   
    </form>
  </div>

          </form>
                </div>                
            </div>
        </div>
    </div>
</div>





<div class="container mt-5 col-md-8">
<div class="modal fade" id="exampleModalCenter_{{$contestant_data->id}}g" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title" id="exampleModalLabel">Voting Form</strong>
                       
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                      <strong class="modal-title" id="loginModal">Voting for:</strong> <i>{{$contestant_data->full_name}}</i></strong></br>
                     <strong class="modal-title" id="loginModal">Award:</strong> <i>{{$contestant_data->award_name}}</i></strong></br>
                     <label></label>
                      <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-8">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-8">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-8">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

               <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Vote</button>
                </div>

                </form>
                </div>                
            </div>
        </div>
    </div>
</div>
   </span>



  @endforeach
        </div>        

</hr>
  <!--       <h3>Vertical scroller</h3>
        <div class="str4 str_wrap" style="height:200px;">
            <p>
            1 text content and text content and text content and text content and text content and text content and text content and text content and text content
            </p>
            <p>
            2 text content and text content and text content and text content and text content and text content and text content and text content and text content
            </p>
            <p>
            3 text content and text content and text content and text content and text content and text content and text content and text content and text content
            </p>
            <p>
            4 text content and text content and text content and text content and text content and text content and text content and text content and text content
            </p>
        </div> -->
    
    </div>
</div>
</div>
</main> 




    <!-- Swiper JS -->
   <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
      <!--Uncomment this line-->
    <script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>
            
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- <script src="js/jquery.liMarquee.js"></script> -->

 <script src="../../marquee/js/jquery.liMarquee.js"></script>
<script>
$(window).load(function() { 
        
    /* basic - default settings */
        $('.str1').liMarquee();
        
        /* some custom settings */
        $('.str2').liMarquee({
            direction: 'left',  
            loop:-1,            
            scrolldelay: 500,   
            scrollamount:90,    
            circular: false,
            hoverstop:false,    
            drag: false         
        });
        
        $('.str3').liMarquee({
            direction: 'left',  
            loop:-1,            
            scrolldelay: 0,     
            scrollamount:100,   
            circular: true,     
            drag: true          
        });
        
        $('.str3-2').liMarquee({
            direction: 'left',  
            loop:-1,            
            scrolldelay: 0,     
            scrollamount:120,   
            circular: true,     
            drag: true          
        });
        
        $('.str4').liMarquee({
            direction: 'up',    
            loop:-1,            
            scrolldelay: 0,     
            scrollamount:30,    
            circular: true,     
            drag: true          
        });
        
        $('.str5').liMarquee({
            direction: 'down',  
            loop:-1,            
            scrolldelay: 0,     
            scrollamount:30,    
            circular: true  ,   
            drag: false         
        });
        
        $('.str6').liMarquee({
            direction: 'up',    
            loop:-1,            
            scrolldelay: 0,     
            scrollamount:30,    
            circular: false ,   
            drag: true,         
            runshort:false      
        });
        
        
        $('.str8').liMarquee({
            direction: 'down',  
            loop:-1,            
            scrolldelay: 0,     
            scrollamount:30,    
            circular: false ,   
            drag: true          
        });
        
        $('.str9').liMarquee({
            direction: 'right'  
        });
        
    })
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script>
     
var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });

</script>
<script>
    $('#myCarousel').carousel({
  interval: false
});
$('#carousel-thumbs').carousel({
  interval: false
});

// handles the carousel thumbnails
// https://stackoverflow.com/questions/25752187/bootstrap-carousel-with-thumbnails-multiple-carousel
$('[id^=carousel-selector-]').click(function() {
  var id_selector = $(this).attr('id');
  var id = parseInt( id_selector.substr(id_selector.lastIndexOf('-') + 1) );
  $('#myCarousel').carousel(id);
});
// Only display 3 items in nav on mobile.
if ($(window).width() < 575) {
  $('#carousel-thumbs .row div:nth-child(4)').each(function() {
    var rowBoundary = $(this);
    $('<div class="row mx-0">').insertAfter(rowBoundary.parent()).append(rowBoundary.nextAll().addBack());
  });
  $('#carousel-thumbs .carousel-item .row:nth-child(even)').each(function() {
    var boundary = $(this);
    $('<div class="carousel-item">').insertAfter(boundary.parent()).append(boundary.nextAll().addBack());
  });
}
// Hide slide arrows if too few items.
if ($('#carousel-thumbs .carousel-item').length < 2) {
  $('#carousel-thumbs [class^=carousel-control-]').remove();
  $('.machine-carousel-container #carousel-thumbs').css('padding','0 5px');
}
// when the carousel slides, auto update
$('#myCarousel').on('slide.bs.carousel', function(e) {
  var id = parseInt( $(e.relatedTarget).attr('data-slide-number') );
  $('[id^=carousel-selector-]').removeClass('selected');
  $('[id=carousel-selector-'+id+']').addClass('selected');
});
// when user swipes, go next or previous
$('#myCarousel').swipe({
  fallbackToMouseEvents: true,
  swipeLeft: function(e) {
    $('#myCarousel').carousel('next');
  },
  swipeRight: function(e) {
    $('#myCarousel').carousel('prev');
  },
  allowPageScroll: 'vertical',
  preventDefaultEvents: false,
  threshold: 75
});
/*
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});
*/

$('#myCarousel .carousel-item img').on('click', function(e) {
  var src = $(e.target).attr('data-remote');
  if (src) $(this).ekkoLightbox();
});
</script>

@endsection