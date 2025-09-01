<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- title -->
    <title>TMYA</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo/logo2.jpg">

    <!-- css -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="../../assets/css/animate.min.css">
    <link rel="stylesheet" href="../../assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="../../assets/css/nice-select.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">


    <link rel="stylesheet" href="../../assets/templates/basic/css/owl.min.css">
<link rel="stylesheet" href="../../assets/templates/basic/css/main.css">

 <link rel="stylesheet" href="../mold/assets/css/min/bootstrap.min.css" media="all">
  <link rel="stylesheet" href="../mold/assets/css/jqueryui.css" media="all">
  <link rel="stylesheet" href="../mold/vendor/animate-css/animate.css" media="all">
  <link rel="stylesheet" href="../mold/assets/font/iconfont/iconstyle.css" media="all">
  <link rel="stylesheet" href="../mold/assets/font/font-awesome/css/font-awesome.css" media="all">
  <link rel="stylesheet" href="../mold/assets/css/main.css" media="all" id="maincss">
  <link rel="stylesheet" href="../../css/style-shortline.css">


  <link href="../../assets/corporate/css/style.css" rel="stylesheet">

    <!-- Custom button -->
        <link rel="stylesheet" href="../../buttons/css/ionicons.min.css">
        <link rel="stylesheet" href="../../buttons/css/style.css">

        <link rel="stylesheet" href="../../styleMain.css">
        <link rel="stylesheet" href="../../../../sonamaster/style.css">

 <link rel="stylesheet" href="../../../../sonamaster/css/owl.carousel.css">

           <!-- <link rel="stylesheet" href="../../forms/css/style.css"> -->

             <link href="../../css/style-shortline.css" rel="stylesheet">
  <link href="../../css/mform.css" rel="stylesheet">
   <script src="../js/jquery361.min.js"></script>
</head>

<body class="home-5">
    <!-- preloader -->
 <!--    <div class="preloader">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div> -->
     @include('spa.topmenu')
<section style="padding-top:2px;"></section>

 @include('layout.app_customer')
@yield('contents')

<section style="padding-top:2px;"></section>
    <!-- footer area -->
    <footer class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row footer-widget-wrapper pt-100 pb-50">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box about-us">
                            <a href="#" class="footer-logo">
                                @isset($app_contacts)
                                   <a href="#"><img src="{{ URL::asset('/storage/logos/'.$app_contacts->logo) }}" alt="logo2" style="width:160px;"></a>
                                @endisset
                                <img src="" alt="">
                            </a>
                                                      <ul class="footer-contact mt-3">
                                <li><a href="tel:+21236547898"><i class="far fa-phone"></i>{{$app_contacts->phone1 ?? ''}}</a></li>
                                <li><i class="far fa-map-marker-alt"></i>{{$app_contacts->address ?? ''}}</li>
                                <li><a href="mailto:{{$app_contacts->email1 ?? ''}}"><i
                                            class="far fa-envelope"></i>{{$app_contacts->email1 ?? ''}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Quick Links</h4>
                            <ul class="footer-list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Become A Seller</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Update News</a></li>
                                <li><a href="#">Terms Of Service</a></li>
                                <li><a href="#">Privacy policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Browse Category</h4>
                            <ul class="footer-list">
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Home & Garden</a></li>
                                <li><a href="#">Electronics</a></li>
                                <li><a href="#">Health & Beauty</a></li>
                                <li><a href="#">Groceries</a></li>
                                <li><a href="#">Baby Toys</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Support Center</h4>
                            <ul class="footer-list">
                                <li><a href="#">FAQ's</a></li>
                                <li><a href="#">How To Buy</a></li>
                                <li><a href="#">Support Center</a></li>
                                <li><a href="#">Track Your Order</a></li>
                                <li><a href="#">Returns Policy</a></li>
                                <li><a href="#">Our Affiliates</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Get Our App</h4>
                            <div class="footer-download">
                                <div class="footer-download-btn">
                                    <a href="#">
                                        <i class="fab fa-google-play"></i>
                                        <div class="download-btn-info">
                                            <span>Get It On</span>
                                            <h6>Google Play</h6>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-app-store"></i>
                                        <div class="download-btn-info">
                                            <span>Get It On</span>
                                            <h6>App Store</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="footer-top-linkx">
                            <h4 class="footer-widget-title">{{$currYear}} Awards</h4>
                            <div class="footer-top-link-info">
                                {{--
                               @foreach($awards as $award)
                                <a href="#">{{$award->award_name}}</a>
                                 @endforeach
                                 --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
                <div class="copyright-wrap">
                    <div class="row">
                        <div class="col-12 col-lg-3 align-self-center">                          

 <p class="mb-md-0 text-center text-md-left text-secondary float-right">
                  Developed by: <a href="https://www.pasah.net" target="_blank">www.pasah.net</a>
                </p>

                        </div>
                        <div class="col-12 col-lg-5 align-self-center">
                            <p class="copyright-text">
                        
                    {{$currYear}} &copy; <a class="text-primary" href="#">pasah Group</a>. All Rights Reserved.<a href="javascript:;">| Privacy Policy</a>  |  <a href="javascript:;">Terms of Service</a>  |  <a href="https://tmya.net:2096" target="_blank">Email</a>
                </p>

                        </div>
                        <div class="col-12 col-lg-3 align-self-center">
                            <div class="footer-social">
                                <span>Follow Us:</span>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-x-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
    </footer>
    <!-- footer area end -->

    <!-- js -->
   <!-- <script src="../../assets/js/jquery-3.7.1.min.js"></script> -->
    <script src="../../assets/js/modernizr.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="../../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../../assets/js/isotope.pkgd.min.js"></script>
    <script src="../../assets/js/jquery.appear.min.js"></script>
    <script src="../../assets/js/jquery.easing.min.js"></script>
    <script src="../../assets/js/owl.carousel.min.js"></script>
    <script src="../../assets/js/counter-up.js"></script>
    <script src="../../assets/js/jquery-ui.min.js"></script>

   <script src="../../assets/js/jquery.nice-select.min.js"></script>
    <script src="../../assets/js/countdown.min.js"></script>
    <script src="../../assets/js/wow.min.js"></script>
    <script src="../../assets/js/main.js"></script>
     <script src="../../forms/js/main.js"></script> 

     <!-- <script src="'js/owl.min.js')}}"></script> -->

       <script src="../../assets/templates/basic/js/owl.min.js"></script> 


  <!-- <script src="../../sonamaster/js/jquery/jquery-2.2.4.min.js"></script>  -->
    <!-- Popper js -->
   <script src="../../sonamaster/js/popper.min.js"></script> 
    <!-- Bootstrap js -->
  <script src="../../sonamaster/js/bootstrap.min.js"></script> 
    <!-- Plugins js -->
  <script src="../../sonamaster/js/plugins.js"></script>
    <script src="../../sonamaster/js/classy-nav.min.js"></script>
    <script src="../../sonamaster/js/jquery-ui.min.js"></script> 
    <!-- Active js -->
    <script src="../../sonamaster/js/active.js"></script>

    <!-- Orinal libraries -->

     <!-- <script src="../../sonamaster/js/jquery364.min.js"></script> -->
    <script src="../../sonamaster/js/bootstrap.bundle.min.js"></script>




    <script src="../../../assetstaxio/js/modernizr.min.js"></script>
    <script src="../../../assetstaxio/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assetstaxio/js/imagesloaded.pkgd.min.js"></script>
    <script src="../../../assetstaxio/js/jquery.magnific-popup.min.js"></script> 

    <script src="../../../assetstaxio/js/isotope.pkgd.min.js"></script>
    <script src="../../../assetstaxio/js/jquery.appear.min.js"></script>
    <script src="../../../assetstaxio/js/jquery.easing.min.js"></script>
    <script src="../../../assetstaxio/js/owl.carousel.min.js"></script> 

  <script src="../../../assetstaxio/js/counter-up.js"></script>
    <script src="../../../assetstaxio/js/jquery-ui.min.js"></script>
    <script src="../../../assetstaxio/js/jquery.timepicker.min.js"></script>
    <script src="../../../assetstaxio/js/jquery.nice-select.min.js"></script>
    <script src="../../../assetstaxio/js/wow.min.js"></script>
    <script src="../../../assetstaxio/js/main.js"></script> 


  <!-- <script src="../mold/vendor/jquery/dist/jquery.min.js"></script> -->
  <script src="../mold/vendor/jqueryui/jquery-ui-1.10.3.custom.min.js"></script>
  <script src="../mold/vendor/jquery.ui.touch-punch.min.js"></script>
  <script src="../mold/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

  <script src="../mold/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
  <script src="../mold/vendor/owlcarousel/owl.carousel.min.js"></script>
  <script src="../mold/vendor/retina.min.js"></script>
  <script src="../mold/vendor/jquery.imageScroll.min.js"></script>
  <script src="../mold/assets/js/min/responsivetable.min.js"></script>
  <script src="../mold/assets/js/bootstrap-tabcollapse.js"></script>

  <script src="../mold/assets/js/min/countnumbers.min.js"></script>
  <script src="../mold/assets/js/main.js"></script>

  <!-- Current Page JS -->
  <script src="../mold/assets/js/min/home.min.js"></script>


</body>
</html>