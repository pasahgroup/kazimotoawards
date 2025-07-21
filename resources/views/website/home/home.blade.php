@extends('spa.mainlayout')
@section('contents')

     <main class="main">
        <!-- hero slider -->
        <div class="hero-section3 hs3-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-xl-12 offset-xl-1">
                        <div class="hero-slider owl-carousel owl-theme">
                          

                            @foreach($slides as $slide)
                            <div class="hero-single">                               
                                <div class="hero-single-bg" style="background-image: url({{ URL::asset('/storage/slides/'.$slide->photo) }})"></div>
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-md-12 col-lg-7">
                                            <div class="hero-content">                                               
                                                <h5 class="hero-title" data-animation="fadeInRight" data-delay=".50s">                                                <span> {{$slide->photo_title}}</span> Shopping
                                                </h5>
                                                <p data-animation="fadeInLeft" data-delay=".75s">
                                                    {{$slide->photo_description}}
                                                </p>
                                                <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                                    <a href="#" class="theme-btn">Shop Now<i class="fas fa-arrow-right"></i></a>
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
            </div>
        </div>
        <!-- hero slider end -->






        <!-- feature area -->
        <div class="feature-area2 mt-80">
            <div class="container">
                <div class="feature-wrap">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fal fa-truck"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Free Delivery</h4>
                                    <p>Orders Over $120</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fal fa-sync"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Get Refund</h4>
                                    <p>Within 30 Days Returns</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fal fa-wallet"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Safe Payment</h4>
                                    <p>100% Secure Payment</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fal fa-headset"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>24/7 Support</h4>
                                    <p>Feel Free To Call Us</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature area end -->


        <!-- product area -->
        <div class="product-area pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Recent Items</h2>
                            <a href="#">View More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-slider item-2 owl-carousel owl-theme">
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
                                <button type="button" class="product-cart-btn">Add To Cart2</button>
                            </div>
                        </div>
                    </div>
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
                    <div class="product-item">
                        <div class="product-img">
                            <span class="type discount">10% Off</span>
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
                                    <del>120.00</del><span>$100.00</span>
                                </div>
                                <button type="button" class="product-cart-btn">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-img">
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
            </div>
        </div>
        <!-- product area end -->


        <!-- category area -->
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
        <!-- category area end-->


        <!-- big banner -->
        <div class="big-banner">
            <div class="container">
                <div class="banner-wrap" style="background-image: url(assets/img/banner/big-banner-3.jpg);">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="banner-content">
                                <div class="banner-info">
                                    <h6>Mega Collections</h6>
                                    <h2>Huge Sale Up To <span>40%</span> Off</h2>
                                    <p>at our outlet stores</p>
                                </div>
                                <a href="#" class="theme-btn">Shop Now<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- big banner end -->


        <!-- popular item -->
        <div class="product-area pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="site-heading-inline item-tab">
                            <h2 class="site-title">Popular Items</h2>
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


        <!-- product area -->
        <div class="product-area pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Vegetable Items</h2>
                            <a href="#">View More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row item-banner">
                    <div class="col-lg-4 col-xl-3">
                        <div class="small-banner item-side-banner">
                            <div class="banner-item">
                                <img src="assets/img/banner/isb-2.jpg" alt="">
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
                                    <a href="shop-single.html"><img src="assets/img/product/g5.png" alt=""></a>
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
                                    <a href="shop-single.html"><img src="assets/img/product/g6.png" alt=""></a>
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
                                    <a href="shop-single.html"><img src="assets/img/product/g7.png" alt=""></a>
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
                                    <a href="shop-single.html"><img src="assets/img/product/g8.png" alt=""></a>
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
                                    <a href="shop-single.html"><img src="assets/img/product/g9.png" alt=""></a>
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
                                    <a href="shop-single.html"><img src="assets/img/product/g10.png" alt=""></a>
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


        <!-- product area -->
        <div class="product-area pt-50 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="site-heading-inline">
                            <h2 class="site-title">Breakfast Items</h2>
                            <a href="#">View More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row item-banner">
                    <div class="col-lg-4 col-xl-3">
                        <div class="small-banner item-side-banner">
                            <div class="banner-item">
                                <img src="assets/img/banner/isb-3.jpg" alt="">
                                <div class="banner-content">
                                    <p>From $599.00</p>
                                    <h3>Make Your Breakfast <br> Healthy and Easy</h3>
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
                                    <a href="shop-single.html"><img src="assets/img/product/g12.png" alt=""></a>
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
                                    <a href="shop-single.html"><img src="assets/img/product/g13.png" alt=""></a>
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
                                    <a href="shop-single.html"><img src="assets/img/product/g15.png" alt=""></a>
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
                                    <a href="shop-single.html"><img src="assets/img/product/g16.png" alt=""></a>
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


        <!-- deal area -->
        <div class="deal-area">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <div class="deal-img">
                            <img src="assets/img/deal/02.jpg" alt="#">
                        </div>  
                    </div>  
                    <div class="col-12 col-lg-6 align-self-center">
                        <div class="deal-content">
                            <span class="deal-sub-title">Todays Deal 20% Off</span>
                            <h3 class="deal-title">All Type Of Fresh Organic Vegetable <br> And Fruit Products For You.</h3>
                            <p class="deal-text">There are many variations of passages available but the majority have suffered alteration in some form words look even slightly believable.</p>
                            <h3 class="deal-price"><span>$1020</span><del>$1200</del></h3>
                            <div class="col-lg-9">
                                <div class="deal-countdown">
                                    <div class="countdown" data-countdown="2030/12/30"></div>
                                </div>
                            </div>
                            <div class="deal-btn">
                                <a href="#" class="theme-btn">Buy Now<i class="fas fa-arrow-right"></i></a> 
                            </div>
                        </div>  
                    </div>  
                </div>
            </div>
        </div>
        <!-- deal area end  -->


        <!-- product list -->
        <div class="product-list pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="product-list-box">
                            <h2 class="product-list-title">On sale</h2>
                            <div class="product-list-item">
                                <div class="product-list-img">
                                    <a href="shop-single.html"><img src="assets/img/product/g1.png" alt="#"></a>
                                </div>
                                <div class="product-list-content">
                                    <h4><a href="shop-single.html">Fresh Organic Product</a></h4>
                                    <div class="product-list-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-list-price">
                                        <del>60.00</del><span>$40.00</span>
                                    </div>
                                </div>
                                <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip" title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                            </div>
                            <div class="product-list-item">
                                <div class="product-list-img">
                                    <a href="shop-single.html"><img src="assets/img/product/g2.png" alt="#"></a>
                                </div>
                                <div class="product-list-content">
                                    <h4><a href="shop-single.html">Fresh Organic Product</a></h4>
                                    <div class="product-list-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-list-price">
                                        <del>60.00</del><span>$40.00</span>
                                    </div>
                                </div>
                                <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip" title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                            </div>
                            <div class="product-list-item">
                                <div class="product-list-img">
                                    <a href="shop-single.html"><img src="assets/img/product/g3.png" alt="#"></a>
                                </div>
                                <div class="product-list-content">
                                    <h4><a href="shop-single.html">Fresh Organic Product</a></h4>
                                    <div class="product-list-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-list-price">
                                        <del>60.00</del><span>$40.00</span>
                                    </div>
                                </div>
                                <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip" title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="product-list-box">
                            <h2 class="product-list-title">Best Seller</h2>
                            <div class="product-list-item">
                                <div class="product-list-img">
                                    <a href="shop-single.html"><img src="assets/img/product/g11.png" alt="#"></a>
                                </div>
                                <div class="product-list-content">
                                    <h4><a href="shop-single.html">Fresh Organic Product</a></h4>
                                    <div class="product-list-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-list-price">
                                        <del>60.00</del><span>$40.00</span>
                                    </div>
                                </div>
                                <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip" title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                            </div>
                            <div class="product-list-item">
                                <div class="product-list-img">
                                    <a href="shop-single.html"><img src="assets/img/product/g12.png" alt="#"></a>
                                </div>
                                <div class="product-list-content">
                                    <h4><a href="shop-single.html">Fresh Organic Product</a></h4>
                                    <div class="product-list-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-list-price">
                                        <del>60.00</del><span>$40.00</span>
                                    </div>
                                </div>
                                <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip" title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                            </div>
                            <div class="product-list-item">
                                <div class="product-list-img">
                                    <a href="shop-single.html"><img src="assets/img/product/g13.png" alt="#"></a>
                                </div>
                                <div class="product-list-content">
                                    <h4><a href="shop-single.html">Fresh Organic Product</a></h4>
                                    <div class="product-list-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-list-price">
                                        <del>60.00</del><span>$40.00</span>
                                    </div>
                                </div>
                                <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip" title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="product-list-box">
                            <h2 class="product-list-title">Top Rated</h2>
                            <div class="product-list-item">
                                <div class="product-list-img">
                                    <a href="shop-single.html"><img src="assets/img/product/g21.png" alt="#"></a>
                                </div>
                                <div class="product-list-content">
                                    <h4><a href="shop-single.html">Fresh Organic Product</a></h4>
                                    <div class="product-list-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-list-price">
                                        <del>60.00</del><span>$40.00</span>
                                    </div>
                                </div>
                                <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip" title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                            </div>
                            <div class="product-list-item">
                                <div class="product-list-img">
                                    <a href="shop-single.html"><img src="assets/img/product/g22.png" alt="#"></a>
                                </div>
                                <div class="product-list-content">
                                    <h4><a href="shop-single.html">Fresh Organic Product</a></h4>
                                    <div class="product-list-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-list-price">
                                        <del>60.00</del><span>$40.00</span>
                                    </div>
                                </div>
                                <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip" title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                            </div>
                            <div class="product-list-item">
                                <div class="product-list-img">
                                    <a href="shop-single.html"><img src="assets/img/product/g23.png" alt="#"></a>
                                </div>
                                <div class="product-list-content">
                                    <h4><a href="shop-single.html">Fresh Organic Product</a></h4>
                                    <div class="product-list-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="product-list-price">
                                        <del>60.00</del><span>$40.00</span>
                                    </div>
                                </div>
                                <a href="#" class="product-list-btn" data-bs-placement="left" data-tooltip="tooltip" title="Add To Cart"><i class="far fa-shopping-bag"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product list end -->


        <!-- brand area -->
        <div class="brand-area pt-60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="site-heading-inline">
                            <h2 class="site-title"><img src="assets/img/icon/brand.svg" alt="">Popular Brands</h2>
                            <a href="#">All Brands <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="brand-slider owl-carousel owl-theme">
                    <div class="brand-item">
                        <img src="assets/img/brand/01.png" alt="">
                    </div>
                    <div class="brand-item">
                        <img src="assets/img/brand/02.png" alt="">
                    </div>
                    <div class="brand-item">
                        <img src="assets/img/brand/03.png" alt="">
                    </div>
                    <div class="brand-item">
                        <img src="assets/img/brand/04.png" alt="">
                    </div>
                    <div class="brand-item">
                        <img src="assets/img/brand/05.png" alt="">
                    </div>
                    <div class="brand-item">
                        <img src="assets/img/brand/06.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- brand area end -->


        <!-- blog area -->
        <div class="blog-area py-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Our Blog</span>
                            <h2 class="site-title">Latest News & <span>Blog</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <img src="assets/img/blog/01.jpg" alt="Thumb">
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                        <li><a href="#"><i class="far fa-calendar-alt"></i> January 29, 2025</a></li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="#">There are many variations of passage available majority suffered.</a>
                                </h4>
                                <p>There are many variations available the majority have suffered alteration randomised words.</p>
                                <a class="theme-btn" href="#">Read More<i class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <img src="assets/img/blog/02.jpg" alt="Thumb">
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                        <li><a href="#"><i class="far fa-calendar-alt"></i> January 29, 2025</a></li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="#">There are many variations of passage available majority suffered.</a>
                                </h4>
                                <p>There are many variations available the majority have suffered alteration randomised words.</p>
                                <a class="theme-btn" href="#">Read More<i class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <img src="assets/img/blog/03.jpg" alt="Thumb">
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a></li>
                                        <li><a href="#"><i class="far fa-calendar-alt"></i> January 29, 2025</a></li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="#">There are many variations of passage available majority suffered.</a>
                                </h4>
                                <p>There are many variations available the majority have suffered alteration randomised words.</p>
                                <a class="theme-btn" href="#">Read More<i class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog area end -->


        <!-- newsletter area -->
        <div class="newsletter-area2 mb-100">
            <div class="container">
                <div class="newsletter-wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="newsletter-content">
                                <h3>Get 20% Off Discount Coupon</h3>
                                <p>By Subscribe Our Newsletter</p>
                                <div class="subscribe-form">
                                    <form action="#">
                                        <input type="email" class="form-control" placeholder="Your Valid Email Address">
                                        <button class="theme-btn" type="submit">
                                            Subscribe <i class="far fa-paper-plane"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter area end -->

    </main>

 
@endsection