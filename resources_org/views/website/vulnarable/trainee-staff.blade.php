@extends('website.layouts.app_hm')
@section('content')

    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Trained Staffs</span></h2>
        <div class="row px-xl-5 pb-3">
 @foreach ($trained_lodges as $staff)   
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="#">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="{{ URL::asset('/storage/trainee/'.$staff->photo) }}" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>{{$staff->first_name}} {{$staff->last_name}}</h6>
                            <p class="text-body">[Lodge:{{$staff->lodge}}]</p>
                             <p class="text-body">[Designation:{{$staff->designation}}]</p>
                        </div>
                    </div>
                </a>
            </div>
 @endforeach 
  </div>
  <div class="row">
     <div class="col-lg-9 col-md-9 col-sm-9 pb-1">
  
</div> 
  <div class="col-lg-2 col-md-2 col-sm-2 pb-1">
  <a href="/login" target="_blank" class="btn btn-primary float-right">Explore More</a>
</div>
</div>       
                       
    </div>

@endsection