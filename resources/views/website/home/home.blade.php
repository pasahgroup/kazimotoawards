@extends('spa.mainlayout')
@section('contents')

    <link rel="stylesheet" href="../../marquee/css/liMarquee.css">
          <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
        <link rel="stylesheet" href="css/style.css">
                                        
 


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
  background-color: #4070F4;
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
  padding: 3px;
}
.card-image .card-img{
  height: 100%;
  width: 100%;
  object-fit: cover;
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






     <main class="main">
        <!-- hero slider -->

          <div class="hero-section2">
            <div class="container">
                <div class="row g-3">
                    <div class="col-lg-8">
                        <div class="hero-slider-wrap">
                            <div class="hero-slider owl-carousel owl-theme">
                  


 @foreach($slides as $slide) 
                                <div class="hero-single">
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-md-12 col-lg-7">
                                                <div class="hero-content">
                                           
                                                    <div class="text-center">
                                  <div class="text-center">
                      <a class="Main-Text">
                       <strong class="hero-sub-title demo-1" data-animation="fadeInUp" data-delay=".25s">{{$slide->photo_title}}</strong>
                  </a>
                      <div class="Extra-Text">
                            <a class="text-center" style="font-size:18px;"><strong>{{ $slide->photo_titlephoto_title }}</strong></a>
                      </div>
                      </div>
                </div>
                                                    
                                                    <p data-animation="fadeInLeft" data-delay=".75s">
                                                        There are many variations of passages orem psum available but the majority have suffered alteration in some form by injected humour.
                                                    </p>

                                                    <div class="footer-top-link-info" data-animation="fadeInUp" data-delay="1s">
                                                    <a href="#" class="theme-btn">View More<i class="fas fa-arrow-right"></i></a>
                                                </div>

                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-5">
                                                <div class="hero-right">
                                                    <div class="hero-img">
                                                    <img src="{{ URL::asset('/storage/slides/'.$slide->photo) }}" alt="" data-animation="fadeInRight"
                                                     data-delay=".25s" style="height:300px;">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
 @endforeach

     
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="small-banner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-lg-12 px-lg-0">
                                        <div class="banner-item">
                                            <img src="assets/img/banner/mini-banner-1.jpg" alt="">
                                            <div class="banner-content">
                                                <p>Hot wawa</p>
                                                <h3>Best Travel Sale <br> Collections</h3>
                                                <a href="#">Discover Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 px-lg-0">
                                        <div class="banner-item">
                                            <img src="assets/img/banner/mini-banner-2.jpg" alt="">
                                            <div class="banner-content">
                                                <p>Apple Collections</p>
                                                <h3>Apple Smart Watch <br> Collectons</h3>
                                                <a href="#">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>







   <div class="hero-section2">
            <div class="container">
                <div class="row">            
        
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
                               <img src="{{URL::asset('/storage/photos/'.$contestant_data->photo) }}" alt="" class="card-img">
                            </div>
                        </div>


                        <div class="card-content">
                            <h2 class="name">{{$contestant_data->full_name}}
</h2>
                            <div class="description">Awards: {{$contestant_data->awa}}</div>





<div class="row">
    <div class="col-md-6">
                       <div class="footer-top-link-info" data-animation="fadeInUp" data-delay="1s">
                                                    <a href="#" class="theme-btn2" data-toggle="modal" data-target="#exampleModalCenter_{{$contestant_data->id}}">

View more<i class="fas fa-arrow-right"></i>
</a>
                                                </div>

                            </div>
 <div class="col-md-6">
                                                
                      
 <div class="footer-top-link-info" data-animation="fadeInUp" data-delay="1s">
                                                    <a href="#" class="theme-btn" data-toggle="modal" data-target="#exampleModalCenter_{{$contestant_data->id}}">

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
                 


<div class="modal fade" id="exampleModalCenter_{{$contestant_data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
             <strong class="modal-title" id="loginModal">{{$contestant_data->full_name}}</strong>
            <div class="modal-header">                    
                                    <span aria-hidden="true">×2</span>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

   </span>



  @endforeach
        </div>        

</hr>
        <h3>Vertical scroller</h3>
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
        </div>
    
    </div>
</div>
</div>










        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                               <img src="https://tinypic.host/images/2022/12/19/img_avatar.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Mohamed Yousef
</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More2</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                   <img src="https://tinypic.host/images/2022/12/19/img_avatar.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Mohamed Yousef
</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                 <img src="https://tinypic.host/images/2022/12/19/img_avatar.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Mohamed Yousef
</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                    <img src="https://tinypic.host/images/2022/12/19/img_avatar.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Mohamed Yousef
</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                    <img src="https://tinypic.host/images/2022/12/19/img_avatar.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Mohamed Yousef
</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                    <img src="https://tinypic.host/images/2022/12/19/img_avatar.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Mohamed Yousef
</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                    <img src="https://tinypic.host/images/2022/12/19/img_avatar.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Mohamed Yousef
</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                    <img src="https://tinypic.host/images/2022/12/19/img_avatar.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Mohamed Yousef
</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
 <img src="../../img/pics/p1.jpg" alt="" class="card-img">                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Mohamed Yousef
</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
        








   <div class="hero-section2">
            <div class="container">
                <div class="row">    
<h3>Contestants_pop</h3>
        <style>
            .str3 { font-size:0 !important}
            .str3-2 { background:none !important;}
            .str3-2 span { border:1px solid #ccc;color:#999; margin:0 1px; display:inline-block; vertical-align:top;}
        </style>

      
        <div class="str3-2 str_wrap">
              @foreach($contestant_datas as $contestant_data)  

     <span style="background-image: url({{URL::asset('/storage/photos/'.$contestant_data->file1) }});">
  <div class="row item-2">
   <div class="product-item">
                                    <div class="product-img">
                                     
                                        <div class="product-action-wrap">
                                            <div class="product-action">
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <spanx class="product-title"><a href="#">Fresh Organic Product</a></spanx>
                                      
                                        <div class="product-bottom">
                                            <div class="product-price">
                                                <span>$100.00</span>
                                                <span>$300.00</span>
                                           
                                            <button type="button" class="product-cart-btn">Vote</button>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     </span>








             
             <span class="category-item">
                        <a href="#">
                            <div class="category-info" style="background-image:url({{URL::asset('/storage/photos/'.$contestant_data->file1) }}); text-align:left;height:200px;width:100;">
                                                             
                            </div>
                        </a>
   <div>
    <div>Name: {{$contestant_data->full_name}}</div>
                                      <div>Awards: {{$contestant_data->full_name}}</div>
                                       <!--  <div>
                                           <button type="button" class="btn">Vote</button></div> -->
                                              <div class="footer-top-link-info" data-animation="fadeInUp" data-delay="1s">
                                                    <!-- <a href="#" class="theme-btn">Vote<i class="fas fa-arrow-right"></i></a> -->
                                                    <a href="#" class="theme-btn" data-toggle="modal" data-target="#exampleModalCenter_{{$contestant_data->id}}">

Vote<i class="fas fa-arrow-right"></i>
</a>
                                                </div>
                                           </div>
                 


<div class="modal fade" id="exampleModalCenter_{{$contestant_data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
             <strong class="modal-title" id="loginModal">{{$contestant_data->full_name}}</strong>
            <div class="modal-header">                    
                                    <span aria-hidden="true">×2</span>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

   </span>
  @endforeach
        </div>  
    
    </div>
</div>
</div>






 <div class="category-area2 pt-80 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Top Category</h2>
                            <a href="#">View More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
           
                <div class="category-slider owl-carousel owl-theme">

                    
                    <div class="category-item">
                        <a href="#">
                            <div class="category-info">
                                <div class="icon">
                                    <img src="assets/img/category/gc1.png" alt="">
                                </div>
                                <div class="content">
                                    <h4>Vegetables</h4>
                                    <p>30 Items</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="category-item">
                        <a href="#">
                            <div class="category-info">
                                <div class="icon">
                                    <img src="assets/img/category/gc2.png" alt="">
                                </div>
                                <div class="content">
                                    <h4>Milks & Creams</h4>
                                    <p>30 Items</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="category-item">
                        <a href="#">
                            <div class="category-info">
                                <div class="icon">
                                    <img src="assets/img/category/gc3.png" alt="">
                                </div>
                                <div class="content">
                                    <h4>Bakery</h4>
                                    <p>30 Items</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="category-item">
                        <a href="#">
                            <div class="category-info">
                                <div class="icon">
                                    <img src="assets/img/category/gc4.png" alt="">
                                </div>
                                <div class="content">
                                    <h4>Breakfast</h4>
                                    <p>30 Items</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="category-item">
                        <a href="#">
                            <div class="category-info">
                                <div class="icon">
                                    <img src="assets/img/category/gc5.png" alt="">
                                </div>
                                <div class="content">
                                    <h4>Fruits</h4>
                                    <p>30 Items</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="category-item">
                        <a href="#">
                            <div class="category-info">
                                <div class="icon">
                                    <img src="assets/img/category/gc6.png" alt="">
                                </div>
                                <div class="content">
                                    <h4>Meats</h4>
                                    <p>30 Items</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="category-item">
                        <a href="#">
                            <div class="category-info">
                                <div class="icon">
                                    <img src="assets/img/category/gc7.png" alt="">
                                </div>
                                <div class="content">
                                    <h4>Chocolate</h4>
                                    <p>30 Items</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="category-item">
                        <a href="#">
                            <div class="category-info">
                                <div class="icon">
                                    <img src="assets/img/category/gc8.png" alt="">
                                </div>
                                <div class="content">
                                    <h4>Drinks</h4>
                                    <p>30 Items</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="category-item">
                        <a href="#">
                            <div class="category-info">
                                <div class="icon">
                                    <img src="assets/img/category/gc9.png" alt="">
                                </div>
                                <div class="content">
                                    <h4>Dry Food</h4>
                                    <p>30 Items</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>





  <div class="brand-area pt-60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="site-heading-inline">
                            <h2 class="site-title"><img src="assets/img/icon/brand.svg" alt="">Awards</h2>
                            <a href="#">All Awards <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="brand-slider owl-carousel owl-theme">

                      



@foreach($sponsors as $sponsor)

   <div class="row item-2">
   <div class="product-item">
                                    <div class="product-img">
                                        <a href="shop-single.html"><img src="{{URL::asset('/storage/logos/'.$sponsor->logo) }}" alt="" style="height:100px"></a>
                                        <div class="product-action-wrap">
                                            <div class="product-action">
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <span class="product-title"><a href="#">Fresh Organic Product</a></span>
                                      
                                        <div class="product-bottom">
                                            <div class="product-price">
                                                <span>$100.00</span>
                                           
                                            <button type="button" class="product-cart-btn">Vote</button>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                    @endforeach
                </div>
            </div>
        </div>







   
        <!-- popular item -->
        <div class="product-area pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="site-heading-inline item-tab">
                            <h2 class="site-title">Popular Items 2</h2>
                            <ul class="nav nav-pills" id="item-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="item-tab1" data-bs-toggle="pill" data-bs-target="#pill-item-tab1" type="button" role="tab" aria-controls="pill-item-tab1" aria-selected="true">Fruits</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="item-tab2" data-bs-toggle="pill" data-bs-target="#pill-item-tab2" type="button" role="tab" aria-controls="pill-item-tab2" aria-selected="false">Meats</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="item-tab3" data-bs-toggle="pill" data-bs-target="#pill-item-tab3" type="button" role="tab" aria-controls="pill-item-tab3" aria-selected="false">Vagetables</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="item-tab4" data-bs-toggle="pill" data-bs-target="#pill-item-tab4" type="button" role="tab" aria-controls="pill-item-tab4" aria-selected="false">All</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="item-tabContent">
                    <div class="tab-pane fade show active" id="pill-item-tab1" role="tabpanel" aria-labelledby="item-tab1" tabindex="0">
                        <div class="row item-2">
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item">
                                    <div class="product-img">
                                        <span class="type">Trending</span>
                                        <a href="shop-single.html"><img src="assets/img/product/g21.png" alt=""></a>
                                        <div class="product-action-wrap">
                                            <div class="product-action">
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="shop-single.html">Fresh Organic Product</a></h3>
                                        <div class="product-rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="product-bottom">
                                            <div class="product-price">
                                                <span>$100.00</span>
                                            </div>
                                            <button type="button" class="product-cart-btn">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item">
                                    <div class="product-img">
                                        <span class="type hot">Hot</span>
                                        <a href="shop-single.html"><img src="assets/img/product/g22.png" alt=""></a>
                                        <div class="product-action-wrap">
                                            <div class="product-action">
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="shop-single.html">Fresh Organic Product</a></h3>
                                        <div class="product-rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="product-bottom">
                                            <div class="product-price">
                                                <span>$100.00</span>
                                            </div>
                                            <button type="button" class="product-cart-btn">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item">
                                    <div class="product-img">
                                        <span class="type oos">Out Of Stock</span>
                                        <a href="shop-single.html"><img src="assets/img/product/g23.png" alt=""></a>
                                        <div class="product-action-wrap">
                                            <div class="product-action">
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="shop-single.html">Fresh Organic Product</a></h3>
                                        <div class="product-rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="product-bottom">
                                            <div class="product-price">
                                                <span>$100.00</span>
                                            </div>
                                            <button type="button" class="product-cart-btn">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="shop-single.html"><img src="assets/img/product/g29.png" alt=""></a>
                                        <div class="product-action-wrap">
                                            <div class="product-action">
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="shop-single.html">Fresh Organic Product</a></h3>
                                        <div class="product-rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="product-bottom">
                                            <div class="product-price">
                                                <span>$100.00</span>
                                            </div>
                                            <button type="button" class="product-cart-btn">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pill-item-tab2" role="tabpanel" aria-labelledby="item-tab2" tabindex="0">
                        <div class="row item-2">
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item">
                                    <div class="product-img">
                                        <span class="type">Trending</span>
                                        <a href="shop-single.html"><img src="assets/img/product/g37.png" alt=""></a>
                                        <div class="product-action-wrap">
                                            <div class="product-action">
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="shop-single.html">Fresh Organic Product</a></h3>
                                        <div class="product-rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="product-bottom">
                                            <div class="product-price">
                                                <span>$100.00</span>
                                            </div>
                                            <button type="button" class="product-cart-btn">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item">
                                    <div class="product-img">
                                        <span class="type hot">Hot</span>
                                        <a href="shop-single.html"><img src="assets/img/product/g38.png" alt=""></a>
                                        <div class="product-action-wrap">
                                            <div class="product-action">
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="shop-single.html">Fresh Organic Product</a></h3>
                                        <div class="product-rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="product-bottom">
                                            <div class="product-price">
                                                <span>$100.00</span>
                                            </div>
                                            <button type="button" class="product-cart-btn">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item">
                                    <div class="product-img">
                                        <span class="type oos">Out Of Stock</span>
                                        <a href="shop-single.html"><img src="assets/img/product/g39.png" alt=""></a>
                                        <div class="product-action-wrap">
                                            <div class="product-action">
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="shop-single.html">Fresh Organic Product</a></h3>
                                        <div class="product-rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="product-bottom">
                                            <div class="product-price">
                                                <span>$100.00</span>
                                            </div>
                                            <button type="button" class="product-cart-btn">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="shop-single.html"><img src="assets/img/product/g40.png" alt=""></a>
                                        <div class="product-action-wrap">
                                            <div class="product-action">
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="shop-single.html">Fresh Organic Product</a></h3>
                                        <div class="product-rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="product-bottom">
                                            <div class="product-price">
                                                <span>$100.00</span>
                                            </div>
                                            <button type="button" class="product-cart-btn">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pill-item-tab3" role="tabpanel" aria-labelledby="item-tab3" tabindex="0">
                        <div class="row item-2">
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item">
                                    <div class="product-img">
                                        <span class="type">Trending</span>
                                        <a href="shop-single.html"><img src="assets/img/product/g1.png" alt=""></a>
                                        <div class="product-action-wrap">
                                            <div class="product-action">
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="shop-single.html">Fresh Organic Product</a></h3>
                                        <div class="product-rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="product-bottom">
                                            <div class="product-price">
                                                <span>$100.00</span>
                                            </div>
                                            <button type="button" class="product-cart-btn">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item">
                                    <div class="product-img">
                                        <span class="type hot">Hot</span>
                                        <a href="shop-single.html"><img src="assets/img/product/g2.png" alt=""></a>
                                        <div class="product-action-wrap">
                                            <div class="product-action">
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="shop-single.html">Fresh Organic Product</a></h3>
                                        <div class="product-rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="product-bottom">
                                            <div class="product-price">
                                                <span>$100.00</span>
                                            </div>
                                            <button type="button" class="product-cart-btn">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item">
                                    <div class="product-img">
                                        <span class="type oos">Out Of Stock</span>
                                        <a href="shop-single.html"><img src="assets/img/product/g3.png" alt=""></a>
                                        <div class="product-action-wrap">
                                            <div class="product-action">
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="shop-single.html">Fresh Organic Product</a></h3>
                                        <div class="product-rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="product-bottom">
                                            <div class="product-price">
                                                <span>$100.00</span>
                                            </div>
                                            <button type="button" class="product-cart-btn">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="shop-single.html"><img src="assets/img/product/g4.png" alt=""></a>
                                        <div class="product-action-wrap">
                                            <div class="product-action">
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="shop-single.html">Fresh Organic Product</a></h3>
                                        <div class="product-rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="product-bottom">
                                            <div class="product-price">
                                                <span>$100.00</span>
                                            </div>
                                            <button type="button" class="product-cart-btn">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pill-item-tab4" role="tabpanel" aria-labelledby="item-tab4" tabindex="0">
                        <div class="row item-2">
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item">
                                    <div class="product-img">
                                        <span class="type">Trending</span>
                                        <a href="shop-single.html"><img src="assets/img/product/g1.png" alt=""></a>
                                        <div class="product-action-wrap">
                                            <div class="product-action">
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="shop-single.html">Fresh Organic Product</a></h3>
                                        <div class="product-rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="product-bottom">
                                            <div class="product-price">
                                                <span>$100.00</span>
                                            </div>
                                            <button type="button" class="product-cart-btn">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item">
                                    <div class="product-img">
                                        <span class="type hot">Hot</span>
                                        <a href="shop-single.html"><img src="assets/img/product/g11.png" alt=""></a>
                                        <div class="product-action-wrap">
                                            <div class="product-action">
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="shop-single.html">Fresh Organic Product</a></h3>
                                        <div class="product-rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="product-bottom">
                                            <div class="product-price">
                                                <span>$100.00</span>
                                            </div>
                                            <button type="button" class="product-cart-btn">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item">
                                    <div class="product-img">
                                        <span class="type oos">Out Of Stock</span>
                                        <a href="shop-single.html"><img src="assets/img/product/g14.png" alt=""></a>
                                        <div class="product-action-wrap">
                                            <div class="product-action">
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="shop-single.html">Fresh Organic Product</a></h3>
                                        <div class="product-rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="product-bottom">
                                            <div class="product-price">
                                                <span>$100.00</span>
                                            </div>
                                            <button type="button" class="product-cart-btn">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="shop-single.html"><img src="assets/img/product/g21.png" alt=""></a>
                                        <div class="product-action-wrap">
                                            <div class="product-action">
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                                <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="shop-single.html">Fresh Organic Product</a></h3>
                                        <div class="product-rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="product-bottom">
                                            <div class="product-price">
                                                <span>$100.00</span>
                                            </div>
                                            <button type="button" class="product-cart-btn">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- popular item end -->



        <!-- product area -->
        <div class="product-area pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Fruit Items</h2>
                            <a href="#">View More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row item-banner">
                    <div class="col-lg-4 col-xl-3">
                        <div class="small-banner item-side-banner">
                            <div class="banner-item">
                                <img src="assets/img/banner/isb-1.jpg" alt="">
                                <div class="banner-content">
                                    <p>From $599.00</p>
                                    <h3>Best Organic <br> Products For You</h3>
                                    <a href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-9">
                        <div class="product-slider item-2 owl-carousel owl-theme">
                            <div class="product-item">
                                <div class="product-img">
                                    <span class="type">Trending</span>
                                    <a href="shop-single.html"><img src="assets/img/product/g25.png" alt=""></a>
                                    <div class="product-action-wrap">
                                        <div class="product-action">
                                            <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                            <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                            <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title"><a href="shop-single.html">Fresh Organic Fruit</a></h3>
                                    <div class="product-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-bottom">
                                        <div class="product-price">
                                            <span>$100.00</span>
                                        </div>
                                        <button type="button" class="product-cart-btn" data-bs-placement="left" data-tooltip="tooltip" title="Add To Cart"><i class="far fa-shopping-bag"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="product-img">
                                    <span class="type hot">Hot</span>
                                    <a href="shop-single.html"><img src="assets/img/product/g26.png" alt=""></a>
                                    <div class="product-action-wrap">
                                        <div class="product-action">
                                            <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                            <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                            <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title"><a href="shop-single.html">Fresh Organic Fruit</a></h3>
                                    <div class="product-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-bottom">
                                        <div class="product-price">
                                            <span>$100.00</span>
                                        </div>
                                        <button type="button" class="product-cart-btn" data-bs-placement="left" data-tooltip="tooltip" title="Add To Cart"><i class="far fa-shopping-bag"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="product-img">
                                    <span class="type oos">Out Of Stock</span>
                                    <a href="shop-single.html"><img src="assets/img/product/g27.png" alt=""></a>
                                    <div class="product-action-wrap">
                                        <div class="product-action">
                                            <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                            <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                            <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title"><a href="shop-single.html">Fresh Organic Fruit</a></h3>
                                    <div class="product-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-bottom">
                                        <div class="product-price">
                                            <span>$100.00</span>
                                        </div>
                                        <button type="button" class="product-cart-btn" data-bs-placement="left" data-tooltip="tooltip" title="Add To Cart"><i class="far fa-shopping-bag"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="shop-single.html"><img src="assets/img/product/g28.png" alt=""></a>
                                    <div class="product-action-wrap">
                                        <div class="product-action">
                                            <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                            <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                            <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title"><a href="shop-single.html">Fresh Organic Fruit</a></h3>
                                    <div class="product-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-bottom">
                                        <div class="product-price">
                                            <span>$100.00</span>
                                        </div>
                                        <button type="button" class="product-cart-btn" data-bs-placement="left" data-tooltip="tooltip" title="Add To Cart"><i class="far fa-shopping-bag"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="product-img">
                                    <span class="type discount">10% Off</span>
                                    <a href="shop-single.html"><img src="assets/img/product/g29.png" alt=""></a>
                                    <div class="product-action-wrap">
                                        <div class="product-action">
                                            <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                            <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                            <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title"><a href="shop-single.html">Fresh Organic Fruit</a></h3>
                                    <div class="product-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-bottom">
                                        <div class="product-price">
                                            <del>120.00</del><span>$100.00</span>
                                        </div>
                                        <button type="button" class="product-cart-btn" data-bs-placement="left" data-tooltip="tooltip" title="Add To Cart"><i class="far fa-shopping-bag"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="shop-single.html"><img src="assets/img/product/g30.png" alt=""></a>
                                    <div class="product-action-wrap">
                                        <div class="product-action">
                                            <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="View Details"><i class="far fa-eye"></i></a>
                                            <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Wishlist"><i class="far fa-heart"></i></a>
                                            <a href="#" data-bs-placement="right" data-tooltip="tooltip" title="Add To Compare"><i class="far fa-arrows-repeat"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title"><a href="shop-single.html">Fresh Organic Fruit</a></h3>
                                    <div class="product-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-bottom">
                                        <div class="product-price">
                                            <span>$100.00</span>
                                        </div>
                                        <button type="button" class="product-cart-btn" data-bs-placement="left" data-tooltip="tooltip" title="Add To Cart"><i class="far fa-shopping-bag"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product area end -->



  <div class="brand-area pt-60">
            <div class="container">
<div class="marquee">
<div class="marquee-content">
@foreach($sponsors as $sponsor)
 <!--    <span class="item-collection-1">
        <span class="item1">
            
             <img src="{{URL::asset('/storage/logos/'.$sponsor->logo) }}" alt="">
        </span>
    </span> -->
    <span class="item-collection-2">
        <span class="item2">
             <img src="{{URL::asset('/storage/logos/'.$sponsor->logo) }}" alt="">
        </span>
    </span>

@endforeach
</div>
</div>
</div>
</div>



<!-- Modal -->

<div class="modal fade" id="exampleModalCenterx" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitlex" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
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

@endsection