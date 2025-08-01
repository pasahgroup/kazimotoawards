@extends('website.layouts.app_hm')
@section('content')

    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Trained Lodges</span></h2>
        <div class="row px-xl-5 pb-3">
  
           <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Lodge Name</th>                           
                  </tr>
                  </thead>
                  <tbody>
                 
                         @foreach ($trained_lodges as $lodge) 
                            <tr>
                    <td>{{ $lodge->id }}</td>
                     <td><a href="#">{{ $lodge->lodge}}</a></td>  
                                                            
                     @endforeach
                       </tr>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                     <th>Lodge Name</th>             
                    
                  </tr>
                  </tfoot>
                </table>
              </div>

        </div>


  </div> 
                       
    </div>
@endsection