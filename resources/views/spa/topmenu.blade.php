
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="header-top-wrapper">                  
                       
                           
                                <ul class="header-top-list">
 <div class="row">
     <div class="header-top-right">
   <div class="col-md-12"> 
                                    <li><a href="mailto:info@rhonds.co.tz"><i class="far fa-envelopes"></i>
                                            info@rhonds.co.tz</a></li>
                                    <li><a href="https://wa.me/+255655633302"><i class="far fa-headset"></i> +255 764 706 227</a></li>


                                    <li><a href="#"><i class="far fa-alarm-clock"></i> Daily Deal</a></li>
                                    <li class="login"><a href="/login"><i class="far fa-user-circle"></i> Sign In</a></li>
                                    <li>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="far fa-usd"></i> USD
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">USD</a>
                                                <a class="dropdown-item" href="#">EUR</a>
                                                <a class="dropdown-item" href="#">AUD</a>
                                                <a class="dropdown-item" href="#">CUD</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="far fa-globe-americas"></i>EN
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">EN</a>
                                                <a class="dropdown-item" href="#">FR</a>
                                                <a class="dropdown-item" href="#">DE</a>
                                                <a class="dropdown-item" href="#">RU</a>
                                            </div>
                                        </div>
                                    </li>
                                    {{--
                                    <li class="social">
                                        <div class="header-top-social">
                                                 @forelse($social_icons as $item)
                                <a href="{{ $item->data_values->url }}" class="btn btn-secondary btn-md-square rounded-circle me-3">
                                    @php echo @$item->data_values->social_icon @endphp
                                </a>
                       @empty
                        @endforelse
                                        </div>
                                    </li>
                                    --}}
                                </div>
                                 </div>
                                   </div>
                                </ul>
                          
                       
                    </div>
                </div>
            </div>
   
    </div>




        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">
                      
{{--
                      <a href="{{ route('home') }}"><img src="{{getImage(imagePath()['logoIcon']['path'].'/logo.png')}}" alt="logo" style="width:120px;"></a>

--}}


                    
                          <div class="category-all">
                        <button class="category-btn" type="button" style="text-align:left;">
                            <i class="far fa-grid-2-plus"></i><span>Awards 2</span>
                    </button>
                        <ul class="main-category">
                            <li>
                                <a href="#">
                                    <img src="assets/img/icon/shopping-bag.svg" alt="">
                                    <span>New Arrivals 1</span><i class="far fa-angle-right"></i>
                                </a>
                                <ul class="sub-category">
                                    <li><a href="#"><img src="assets/img/icon/dress.svg" alt=""><span>Accessories</span></a></li>
                                    <li><a href="#"><img src="assets/img/icon/laptop.svg" alt=""><span>Electronics</span></a></li>
                                    <li><a href="#"><img src="assets/img/icon/grocery.svg" alt=""><span>Grocery & Market</span></a></li>
                                    <li><a href="#"><img src="assets/img/icon/music.svg" alt=""><span>Music & Audio</span></a></li>
                                    <li><a href="#"><img src="assets/img/icon/furniture.svg" alt=""><span>Home & Furniture</span></a></li>
                                    <li><a href="#"><img src="assets/img/icon/toy.svg" alt=""><span>Toy & Video Games</span></a></li>
                                    <li><a href="#"><img src="assets/img/icon/gifts.svg" alt=""><span>Gifts</span></a></li>
                                    <li><a href="#"><img src="assets/img/icon/mother.svg" alt=""><span>Babies & Moms</span></a></li>
                                    <li><a href="#"><img src="assets/img/icon/beauty.svg" alt=""><span>Health & Beauty</span></a></li>
                                    <li><a href="#"><img src="assets/img/icon/sports.svg" alt=""><span>Sports & Outdoor</span></a></li>
                                    <li><a href="#"><img src="assets/img/icon/garden.svg" alt=""><span>Home & Garden</span></a></li>
                                    <li><a href="#"><img src="assets/img/icon/automotive.svg" alt=""><span>Automotive</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/icon/dress.svg" alt="">
                                    <span>Fashion & Accessories</span><i class="far fa-angle-right"></i>
                                </a>
                                <div class="sub-category-mega">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="category-single">
                                                <a href="#" class="category-title">Shop Kid's</a>
                                                <div class="category-img mb-3">
                                                    <img src="assets/img/category/01.jpg" alt="#">
                                                </div>
                                                <div class="category-link">
                                                    <a href="#">Kids Toys</a>
                                                    <a href="#">Kids Color Shape</a>
                                                    <a href="#">Kids Travel Car</a>
                                                    <a href="#">Kids Tent</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="category-single">
                                                <a href="#" class="category-title">Shop Men's</a>
                                                <div class="category-img mb-3">
                                                    <img src="assets/img/category/02.jpg" alt="#">
                                                </div>
                                                <div class="category-link">
                                                    <a href="#">Watch</a>
                                                    <a href="#">Hoodies</a>
                                                    <a href="#">T-shirt</a>
                                                    <a href="#">Formal Pant</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="category-single">
                                                <a href="#" class="category-title">Shop Women's</a>
                                                <div class="category-img mb-3">
                                                    <img src="assets/img/category/03.jpg" alt="#">
                                                </div>
                                                <div class="category-link">
                                                    <a href="#">Ladies Shirt</a>
                                                    <a href="#">Ladies Sun Glass</a>
                                                    <a href="#">Ladies Frog</a>
                                                    <a href="#">Ladies Watch</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/icon/laptop.svg" alt="">
                                    <span>Electronics</span><i class="far fa-angle-right"></i>
                                </a>
                                <div class="sub-category-mega">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="category-single">
                                                <h6 class="category-title-text">Man Cloths</h6>
                                                <div class="category-link">
                                                    <a href="#">Kids Toys</a>
                                                    <a href="#">Kids Color Shape</a>
                                                    <a href="#">Kids Travel Car</a>
                                                    <a href="#">Kids Tent</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="category-single">
                                                <h6 class="category-title-text">Accessories</h6>
                                                <div class="category-link">
                                                    <a href="#">Watch</a>
                                                    <a href="#">Hoodies</a>
                                                    <a href="#">T-shirt</a>
                                                    <a href="#">Formal Pant</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="category-single">
                                                <h6 class="category-title-text">Bags</h6>
                                                <div class="category-link">
                                                    <a href="#">Ladies Shirt</a>
                                                    <a href="#">Ladies Sun Glass</a>
                                                    <a href="#">Ladies Frog</a>
                                                    <a href="#">Ladies Watch</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="category-img">
                                                <a href="#"><img src="assets/img/category/04.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="category-single">
                                                <h6 class="category-title-text">Women Cloths</h6>
                                                <div class="category-link">
                                                    <a href="#">Ladies Shirt</a>
                                                    <a href="#">Ladies Sun Glass</a>
                                                    <a href="#">Ladies Frog</a>
                                                    <a href="#">Ladies Watch</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="category-single">
                                                <h6 class="category-title-text">Shoes</h6>
                                                <div class="category-link">
                                                    <a href="#">Ladies Shirt</a>
                                                    <a href="#">Ladies Sun Glass</a>
                                                    <a href="#">Ladies Frog</a>
                                                    <a href="#">Ladies Watch</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="category-single">
                                                <h6 class="category-title-text">Bags</h6>
                                                <div class="category-link">
                                                    <a href="#">Ladies Shirt</a>
                                                    <a href="#">Ladies Sun Glass</a>
                                                    <a href="#">Ladies Frog</a>
                                                    <a href="#">Ladies Watch</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="category-img">
                                                <a href="#"><img src="assets/img/category/05.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/icon/grocery.svg" alt="">
                                    <span>Grocery & Market</span><i class="far fa-angle-right"></i>
                                </a>
                                <div class="sub-category-mega">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="category-single">
                                                <h6 class="category-title-text">Man Cloths</h6>
                                                <div class="category-link">
                                                    <a href="#">Kids Toys</a>
                                                    <a href="#">Kids Color Shape</a>
                                                    <a href="#">Kids Travel Car</a>
                                                    <a href="#">Kids Tent</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="category-single">
                                                <h6 class="category-title-text">Accessories</h6>
                                                <div class="category-link">
                                                    <a href="#">Watch</a>
                                                    <a href="#">Hoodies</a>
                                                    <a href="#">T-shirt</a>
                                                    <a href="#">Formal Pant</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="category-single">
                                                <h6 class="category-title-text">Bags</h6>
                                                <div class="category-link">
                                                    <a href="#">Ladies Shirt</a>
                                                    <a href="#">Ladies Sun Glass</a>
                                                    <a href="#">Ladies Frog</a>
                                                    <a href="#">Ladies Watch</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="category-single">
                                                <h6 class="category-title-text">Women Cloths</h6>
                                                <div class="category-link">
                                                    <a href="#">Ladies Shirt</a>
                                                    <a href="#">Ladies Sun Glass</a>
                                                    <a href="#">Ladies Frog</a>
                                                    <a href="#">Ladies Watch</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="category-single">
                                                <h6 class="category-title-text">Man Cloths</h6>
                                                <div class="category-link">
                                                    <a href="#">Kids Toys</a>
                                                    <a href="#">Kids Color Shape</a>
                                                    <a href="#">Kids Travel Car</a>
                                                    <a href="#">Kids Tent</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="category-single">
                                                <h6 class="category-title-text">Accessories</h6>
                                                <div class="category-link">
                                                    <a href="#">Watch</a>
                                                    <a href="#">Hoodies</a>
                                                    <a href="#">T-shirt</a>
                                                    <a href="#">Formal Pant</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="category-single">
                                                <h6 class="category-title-text">Bags</h6>
                                                <div class="category-link">
                                                    <a href="#">Ladies Shirt</a>
                                                    <a href="#">Ladies Sun Glass</a>
                                                    <a href="#">Ladies Frog</a>
                                                    <a href="#">Ladies Watch</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="category-single">
                                                <h6 class="category-title-text">Women Cloths</h6>
                                                <div class="category-link">
                                                    <a href="#">Ladies Shirt</a>
                                                    <a href="#">Ladies Sun Glass</a>
                                                    <a href="#">Ladies Frog</a>
                                                    <a href="#">Ladies Watch</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><img src="assets/img/icon/music.svg" alt=""><span>Music & Audio</span></a></li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/icon/furniture.svg" alt="">
                                    <span>Home & Furniture</span><i class="far fa-angle-right"></i>
                                </a>
                                <div class="sub-category-mega">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="category-single">
                                                <h6 class="category-title-text">Man Cloths</h6>
                                                <div class="category-link">
                                                    <a href="#">Kids Toys</a>
                                                    <a href="#">Kids Color Shape</a>
                                                    <a href="#">Kids Travel Car</a>
                                                    <a href="#">Kids Tent</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="category-single">
                                                <h6 class="category-title-text">Accessories</h6>
                                                <div class="category-link">
                                                    <a href="#">Watch</a>
                                                    <a href="#">Hoodies</a>
                                                    <a href="#">T-shirt</a>
                                                    <a href="#">Formal Pant</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="category-single">
                                                <h6 class="category-title-text">Bags</h6>
                                                <div class="category-link">
                                                    <a href="#">Ladies Shirt</a>
                                                    <a href="#">Ladies Sun Glass</a>
                                                    <a href="#">Ladies Frog</a>
                                                    <a href="#">Ladies Watch</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="category-img">
                                                <a href="#"><img src="assets/img/category/04.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><img src="assets/img/icon/toy.svg" alt=""><span>Toy & Video Games</span></a></li>
                            <li><a href="#"><img src="assets/img/icon/gifts.svg" alt=""><span>Gifts</span></a></li>
                            <li><a href="#"><img src="assets/img/icon/beauty.svg" alt=""><span>Health & Beauty</span></a></li>
                            <li><a href="#"><img src="assets/img/icon/sports.svg" alt=""><span>Sports & Outdoor</span></a></li>
                            <li><a href="#"><img src="assets/img/icon/garden.svg" alt=""><span>Home & Garden</span></a></li>
                            <li><a href="#"><img src="assets/img/icon/automotive.svg" alt=""><span>Automotive</span></a></li>
                        </ul>
                    </div>
                 


                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>


                                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>

                                 <li><a href="/">
       @auth
                     <a class="nav-link" href="{{ route('user.home') }}">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <div class="badge badge-primary"><span class="menu-title">Dashboard</span></div>
            </a>
                             @endauth

                                 </a></li>
                                <li><a href="/">Home2</a></li>

                                <li><a href="#">Vehicles</a>
                                    <ul class="dropdown">
                                      

                                          @foreach($awards as $brand)
                                        <li><a href="#">{{$brand->award_name}}</a>                                           
                                         
                                            <ul class="dropdown">
                                                {{--
                                                   @foreach($view_vehicles as $vehicle)
                                               
                                                <li style="padding-left:10px;">

                                                     @if($vehicle->brand_id==$brand->id)
      <form action="{{ route('vehicle.search') }}" method="get" class="priceForm">
<input type="hidden" name="model" id="model" value="{{$vehicle->model}}" class="form-control form--control" required>
  <button  class="dropdown-item">{{$vehicle->model}}</button>
                                          </form>
  @endif

                                                </li>
                                                 @endforeach
                                                 --}}
 <li><a href="#">{{$brand->award_name}}</a> </li>

                                            </ul>                                            

                                        </li>
                                           @endforeach
                                      

                                    </ul>
                                </li>



  <li><a href="#">Services</a>
                                            <ul class="dropdown">
                                                {{--
                                             @foreach($view_services as $view_service)
                                                }
              <form action="{{ route('web-service',$view_service->service_name) }}" method="get" class="priceForm">
            <button  class="dropdown-item">{{$view_service->title}}</button>
                                                  </form>
           

  @endforeach
  --}}
  </ul>
  </li>
                                            
                                     

                            <li><a href="#">Plans</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="/about">About Us</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>

                        
                                <li>                                                                             

<form method="get" id="post_form" role="form" class="registration-form" action="#" enctype="multipart/form-data">
        @csrf
                                <button type="submit" class="btn mb-2 mb-md-0 btn-tertiary btn-block"><span style="padding-right: 12px;">Contestant</span> 
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <i class="ion-ios-paper-plane"></i>
                                    </div>
                                </button>
                          </form>

                                </li>
                                <li class="dropdown-cart">
                                    <a href="#" class="shop-cart list-item">
                                        <div class="list-item-icon">
                                            <i class="far fa-shopping-bag"></i><span>5</span>
                                        </div>
                                        <div class="list-item-info">
                                            <h6>$350.00</h6>
                                            <h5>My Cart</h5>
                                        </div>
                                    </a>
                                    <div class="dropdown-cart-menu">
                                        <div class="dropdown-cart-header">
                                            <span>03 Items</span>
                                            <a href="#">View Cart</a>
                                        </div>
                                        <ul class="dropdown-cart-list">
                                            <li>
                                                <div class="dropdown-cart-item">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="assets/img/product/p47.png" alt="#"></a>
                                                    </div>
                                                    <div class="cart-info">
                                                        <h4><a href="#">Xamaha R15 Red</a></h4>
                                                        <p class="cart-qty">1x - <span
                                                                class="cart-amount">$200.00</span></p>
                                                    </div>
                                                    <a href="#" class="cart-remove" title="Remove this item"><i
                                                            class="far fa-times-circle"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-cart-item">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="assets/img/product/p12.png" alt="#"></a>
                                                    </div>
                                                    <div class="cart-info">
                                                        <h4><a href="#">Apple Blue Watch</a></h4>
                                                        <p class="cart-qty">1x - <span
                                                                class="cart-amount">$120.00</span></p>
                                                    </div>
                                                    <a href="#" class="cart-remove" title="Remove this item"><i
                                                            class="far fa-times-circle"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-cart-item">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="assets/img/product/p32.png" alt="#"></a>
                                                    </div>
                                                    <div class="cart-info">
                                                        <h4><a href="#">Orange Sweater</a></h4>
                                                        <p class="cart-qty">1x - <span
                                                                class="cart-amount">$330.00</span></p>
                                                    </div>
                                                    <a href="#" class="cart-remove" title="Remove this item"><i
                                                            class="far fa-times-circle"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="dropdown-cart-bottom">
                                            <div class="dropdown-cart-total">
                                                <span>Total</span>
                                                <span class="total-amount">$650.00</span>
                                            </div>
                                            <a href="#" class="theme-btn">Checkout</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                     
                   
                    </div>
                </nav>
            </div>
        </div>
    </header>