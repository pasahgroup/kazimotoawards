@extends('spa.mainlayout')
@section('contents')



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
                  
{{$slides}}

 @foreach($slides as $slide) 
                                <div class="hero-single">
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-md-12 col-lg-7">
                                                <div class="hero-content">
                                                    <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Up To 50% Off</h6>
                                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                                        For Your First <br><span>Goemart</span> Shopping
                                                    </h1>
                                                    <p data-animation="fadeInLeft" data-delay=".75s">
                                                        There are many variations of passages orem psum available but the majority have suffered alteration in some form by injected humour.
                                                    </p>
                                                    <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                                        <a href="#" class="theme-btn">Shop Now<i class="fas fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-5">
                                                <div class="hero-right">
                                                    <div class="hero-img">
                                                        <img src="assets/img/slider/hero-1.png" alt="" data-animation="fadeInRight"
                                                            data-delay=".25s">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
 @endforeach

                                <div class="hero-single">
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-md-12 col-lg-7">
                                                <div class="hero-content">
                                                    <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Up To 50% Off</h6>
                                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                                        For Your First <br><span>Goemart</span> Shopping
                                                    </h1>
                                                    <p data-animation="fadeInLeft" data-delay=".75s">
                                                        There are many variations of passages orem psum available but the majority have suffered alteration in some form by injected humour.
                                                    </p>
                                                    <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                                        <a href="#" class="theme-btn">Shop Now<i class="fas fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-5">
                                                <div class="hero-right">
                                                    <div class="hero-img">
                                                        <img src="assets/img/slider/hero-2.png" alt="" data-animation="fadeInRight"
                                                            data-delay=".25s">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hero-single">
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-md-12 col-lg-7">
                                                <div class="hero-content">
                                                    <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Up To 50% Off</h6>
                                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                                        For Your First <br><span>Goemart</span> Shopping
                                                    </h1>
                                                    <p data-animation="fadeInLeft" data-delay=".75s">
                                                        There are many variations of passages orem psum available but the majority have suffered alteration in some form by injected humour.
                                                    </p>
                                                    <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                                        <a href="#" class="theme-btn">Shop Now<i class="fas fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-5">
                                                <div class="hero-right">
                                                    <div class="hero-img">
                                                        <img src="assets/img/slider/hero-3.png" alt="" data-animation="fadeInRight"
                                                            data-delay=".25s">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="hero-single">
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-md-12 col-lg-7">
                                                <div class="hero-content">
                                                    <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Up To 50% Off</h6>
                                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                                        For Your First <br><span>Goemart</span> Shopping
                                                    </h1>
                                                    <p data-animation="fadeInLeft" data-delay=".75s">
                                                        There are many variations of passages orem psum available but the majority have suffered alteration in some form by injected humour.
                                                    </p>
                                                    <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                                        <a href="#" class="theme-btn">Shop Now<i class="fas fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-5">
                                                <div class="hero-right">
                                                    <div class="hero-img">
                                                        <img src="assets/img/slider/hero-4.png" alt="" data-animation="fadeInRight"
                                                            data-delay=".25s">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


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
                                                <p>Hot Collections</p>
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
                                                    <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">{{$slide->photo_title}}</h6>
                                                 
                                                    <p data-animation="fadeInLeft" data-delay=".75s" class="demo-1">
                                                         {{$slide->photo_description}}
                                                    </p>
00000000000000



<div class="tooltip">Hover over me
  <span class="tooltiptext">Tooltip text</span>
</div>





                                                   
                                                         <div class="footer-top-link-info" data-animation="fadeInUp" data-delay="1s">
                                                    <a href="#" class="theme-btnx">Shop Now<i class="fas fa-arrow-right"></i></a>
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


<!-- 
 <div class="text-center" style="background-color:#f2fde6;border-radius:100px">
                                  <div class="text-center" style="font-size:18px;">
                      <a class="Main-Text">
                        <strong class="demo-3">
                  ppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp
                    </strong>
                  </a>
                      <div class="Extra-Text">
                            <a class="text-center" style="font-size:18px;"><strong>     kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</strong></a>
                      </div>
                      </div>
                </div>
 -->












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
                                                <p>Hot Collections</p>
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
     


  <!-- brand area -->

       <!-- brand area -->
    
                
                     



           
         
        <!-- brand area end -->




  <div class="brand-area pt-60">
            <div class="container">
                   <div class="site-heading-inline">
                            <h2 class="site-title"><img src="assets/img/icon/brand.svg" alt="">Contestants</h2>
                                                    </div>
                  
<div class="marquee">
<div class="marquee-content">
@foreach($contestant_datas as $contestant_data)
    <span class="item-collection-2">
        <span class="item2">
             <img src="{{URL::asset('/storage/logos/'.$contestant_data->file1) }}" alt="">     

        </span>
        <strong>{{$contestant_data->full_name}}</strong>
         <strong>{{$contestant_data->full_name}}</strong>
           <strong>View More</strong>
           <strong>Vote</strong>
            </span>
@endforeach
</div>
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


        <!-- brand area -->
        <div class="brand-area pt-60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="site-heading-inline">
                            <h2 class="site-title"><img src="assets/img/icon/brand.svg" alt="">Sponsors</h2>
                                                    </div>
                    </div>
                </div>
                <div class="brand-slider owl-carousel owl-theme">
                   
@foreach($sponsors as $sponsor)
  <div class="category-item">
                        
                            <div class="category-info">
                                <div class="item2">
                                    <img src="{{URL::asset('/storage/logos/'.$sponsor->logo) }}" alt="">
                                </div>                               
                            </div>
                        </br>
                            <a href="#">
                            <strong>{{$sponsor->sponsor_name}}</strong>
                        </a>
                    </div>
@endforeach

                </div>
            </div>
        </div>
        <!-- brand area end -->




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

</main> 
@endsection