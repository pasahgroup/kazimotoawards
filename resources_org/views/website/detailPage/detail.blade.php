
@extends('website.layouts.app_hm')
@section('content')


    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-6 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="{{URL::asset('/storage/uploads/'.$detail->attachment)}}" alt="Image" style="max-height:350px">
                        </div>                       
                    </div>
                  <!--   <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a> -->
                </div>
             </div>

            
            <div class="col-lg-6 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3>{{$detail->title}}</h3>                               
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Description</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{$detail->description}}</p>
                        </div>                      
                      
                       <a  type="button" class="btn btn-primary px-3" href="/detail-page/{{$detail->id}}"><i class="fa fa-angle-double-left"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->
@endsection