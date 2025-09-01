@extends('spa.mainlayout_web')
@section('content')

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
                                 <a href="{{ route('vehicle.booking', [$vehicle->id, slug($vehicle->name)]) }}" class="cmn--btn">@lang('Book Now')</a>
                            @else
                               {{--
                                <a href="{{ route('user.login') }}" class="cmn--btn">@lang('Login to Book')</a>
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
                                <form class="review-form rating row" action="{{ route('user.rating', $vehicle->id) }}" method="post">
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


   <main class="main">

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
    </span>
              @endforeach
          </div>
      </div>
</main>

@endsection