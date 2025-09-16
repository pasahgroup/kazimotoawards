
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
   
      <div class="header-top">
            <div class="container-fluid">
                <div class="header-top-wrapper">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-5">
                            <div class="header-top-left">
                                <ul class="header-top-list">
                                    <li><a target="_blank" href="mailto:{{$app_contacts->email1 ?? ''}}"><i class="far fa-envelopes"></i>
                               
@isset($app_contacts)
     {{$app_contacts->email1}}

@endisset





</a></li>
                                    <li><a href="https://wa.me/{{$app_contacts->phone1 ?? ''}}"><i class="far fa-headset"></i>{{$app_contacts->phone1 ?? ''}}</a></li>
                                    <li class="help"><a href="#"><i class="far fa-comment-question"></i> Need Help?</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-7">
                            <div class="header-top-right">
                                <ul class="header-top-list">
                                    <li>
    <div class="dropdown">



    <div class="dropdown-cart">
                                    <a href="#" class="shop-cart list-item">
                                        <div class="list-item-icon">

                                            <i class="far fa-user"></i><span>Account</span>
                                        </div>
                                                                           </a>
                                    <div class="dropdown-cart-menu">
                                        <ul class="dropdown-cart-list">
                                            <li>



                                                                                                  <div class="dropdown-cart-item">
                                                    <div class="cart-img">
                                                       <a href="#"><img src="../../img/kazimoto/email.png" alt="#"></a>
                                                    </div>
                                                     <a href="https://tmya.net:2096" target="_blank">Login email</a>                                                   
                                                                                                 </div>
                                            </li>

                                            <li>
                                               
                                                <div class="dropdown-cart-item">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="../../img/kazimoto/lock.png" alt="#"></a>
                                                    </div>

                                                          @auth                            
                               
                                    <a href="/logout">Logout</a>
                                 @else
                                <a href="/login">Login system</a>
                                   @endauth


                                                   
                                                                                                 </div>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                </div>
                                        </div>

                                    </li>
                                                                 

                                <li>
                                        <div class="dropdown">
                                          
    <div class="dropdown-cart">
                                    <a href="#" class="shop-cart list-item">
                                        <div class="list-item-icon">
                                            <i class="far fa-arrow-right-to-arc"></i><span>Register</span>
                                        </div>
                                                                           </a>
                                    <div class="dropdown-cart-menu">
                                      <!--   <div class="dropdown-cart-header">
                                            <span>03 Items</span>
                                            <a href="#">View Cart</a>
                                        </div> -->
                                        <ul class="dropdown-cart-list">
                                            <li>
                                                <div class="dropdown-cart-item">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="../../img/kazimoto/p4.png" alt="#"></a>
                                                    </div>
                                                      <a href="/contestant">Be a Contestant</a>
                                                   
                                                                                                 </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-cart-item">
                                                    <div class="cart-img">
                                                       <a href="#"><img src="../../img/kazimoto/s2.png" alt="#"></a>
                                                    </div>
                                                     <a href="/register_sponsorw">Be a Sponsor</a>                                                   
                                                                                                 </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-cart-item">
                                                    <div class="cart-img">
                                                         <a href="#"><img src="../../img/kazimoto/v1.png" alt="#"></a>
                                                    </div>
                                                        <a href="#">Vote</a>
                                                 
                                                                                                 </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="far fa-globe-americas"></i> EN
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">EN</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="social">
                                        <div class="header-top-social">
                                            <span>Follow Us: </span>
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-x-twitter"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-linkedin"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<div class="header-top">
            <div class="container-fluid">
                <div class="header-top-wrapper">
                    <div class="row">
                      <span> <marquee>Tanzania Mapishi Yetu  Awards(TMYA)-{{$currYear}}       

<a  href="/contestant" class="btn-secondary">Be a Contestant<i class="fa-solid fa-angles-down"></i></a>
                        

                        <a  href="/register_sponsorw" class="btn-info">Be a Sponsor<i class="fa-solid fa-angles-down"></i></a>
                        <a  href="#" class="btn-outline-primary">Vote<i class="fa-solid fa-angles-down"></i></a>
                      </marquee></span>
                   
                    </div>
                </div>
            </div>
        </div>


        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">               
            <div class="classy-nav-container breakpoint-off">               
                <nav class="classy-navbar justify-content-between" id="southNav">
  

   <div class="dropdown-cart">

    @isset($app_contacts)
   <a href="#"><img src="{{ URL::asset('/storage/logos/'.$app_contacts->logo) }}" alt="logo2" style="width:88px;"></a>
@else
    <a href="#"><img src="" alt="logo2" style="width:88px;"></a>
@endisset


                                    <a href="#" class="shop-cart list-item">
                                        <div class="list-item-icon">
                                            <button class="btn mb-2 mb-md-0 btn-outline-secondary">Menu <i class="fa-solid fa-angles-down"></i></button>
                                        </div>
                                                                           </a>
                                    <div class="dropdown-cart-menu">                                      
 <div class="category-all" style="align:right;background-color:#fff;">
                            <i class="far fa-grid-2-plus"></i><span><marquee>Tanzania Mapishi Yetu  Awards-{{$currYear}}</marquee></span>
                  
                  <MARQUEE direction="right" WIDTH=200 HEIGHT=50>
    Welcome to the Website. Welcome to the demo.Welcome to the Website. Welcome to the demo.
</MARQUEE>

                        <ul class="main-category dropdown-cart-list">
                            <li>
                                <ul class="sub-category">
                                    <li><a href="#"><img src="assets/img/icon/laptop.svg" alt=""><span>Electronics</span></a></li>
                                    <li><a href="#"><img src="assets/img/icon/grocery.svg" alt=""><span>Grocery & Market</span></a></li>
                                    <li><a href="#"><img src="assets/img/icon/music.svg" alt=""><span>Music & Audio</span></a></li>
                                    <li><a href="#"><img src="assets/img/icon/furniture.svg" alt=""><span>Home & Furniture</span></a></li>
                                </ul>
                            </li>

                             <li><a href="#"><img src="assets/img/icon/music.svg" alt=""><span>Sponsors</span></a></li>
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
                        </ul>
                    </div>
                                    </div>
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
                     <a class="nav-link" href="#">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <div class="badge badge-primary"><span class="menu-title">Dashboard</span></div>
            </a>
                             @endauth

                                 </a></li>

                                <li><a href="/">Home</a></li>

                               

  <li><a href="#">Services</a>
                                            <ul class="dropdown">
                                                {{--
                                             @foreach($view_services as $view_service)
                                                
              <form action="{{ route('web-service',$view_service->service_name) }}" method="get" class="priceForm">
            <button  class="dropdown-item">{{$view_service->title}}</button>
                                                  </form>
           

  @endforeach
  --}}
  </ul>
  </li>


  <li><a href="#">Awards</a>
                                            <ul class="dropdown">
              
                                  <li><a href="/get_awardsw">Awards</a></li>
                                      <li><a href="/contestant">Contestants</a></li>
           

  </ul>
  </li>
                                            
                                     

                            <li><a href="/get_aboutusw">About Us</a></li>
                                                          </ul>

                        
                                <li>                                                                             
                     
                                </li>


                                <li>
                                    
                                </li>


                                                       </ul>
                     
                   
                    </div>
                </nav>
            </div>
        </div>
    </header>