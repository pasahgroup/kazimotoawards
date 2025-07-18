@extends('spa.mainlayout')
@section('contents')
    <main class="main">
      


        <!-- deal area -->



  <div class="deal-area">
            <div class="container-fluid p-0">
        <div class="row g-0">         

          <div class="col-4 col-lg-6">
            <div class="deal-img">
              <img src="{{ URL::asset('/storage/aboutus/'.$aboutusw->mission_photo) }}" alt="#" style="width:400px">
            </div>  
          </div> 


             <div class="col-12 col-lg-6 align-self-center">
            <div class="deal-content">
                            <span class="deal-sub-title">MISSION</span>                            
                            <p class="deal-text">{{$aboutusw->mission}}.</p>
                                                    
                          
            </div>  
          </div>
        </div>
      </div>
        </div>






        <!-- deal area end  -->
<hr>
  <!-- deal area -->
        <div class="deal-area">
            <div class="container-fluid p-0">
        <div class="row g-0">
           
          <div class="col-12 col-lg-6 align-self-center">
            <div class="deal-content">
                            <span class="deal-sub-title">VISION</span>                            
                            <p class="deal-text">{{$aboutusw->vision}}.</p>
                                                    
                          
            </div>  
          </div> 

          <div class="col-4 col-lg-6">
            <div class="deal-img">
              <img src="{{ URL::asset('/storage/aboutus/'.$aboutusw->vision_photo) }}" alt="#" style="width:500px">
            </div>  
          </div> 
        </div>
      </div>
        </div>
<hr>

        <!-- newsletter area -->
        <div class="newsletter-area pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="newsletter-content">
                            <p>Subscribe Our Newsletter</p>
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
            <div class="newsletter-img-1">
                <img src="{{ URL::asset('/storage/aboutus/'.$aboutusw->mission_photo) }}" alt="">
            </div>
            <div class="newsletter-img-2">
                <img src="{{ URL::asset('/storage/aboutus/'.$aboutusw->vision_photo) }}" alt="">
            </div>
        </div>
       </main>

@endsection