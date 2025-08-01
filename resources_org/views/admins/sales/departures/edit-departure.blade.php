
  @extends('admins.layouts.Apps.app')
  @section('contents')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Departure Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Departure Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <section class=" container-fluid content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                  New Departure Offer
                </h3>
              </div>
              <div class="container-fluid x_content">
                <br />

            <form  method="post" id="post_form" action="{{ route('update-departure',$datas->id) }}" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
              @csrf
          <input type="hidden" name="user_id" value="{{ Auth::id() }}">
              <div class="card-body">
                  <div class="row">


                    <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                      <div class="form-group row">
                        <label for="tour_name">Tour name</label>
                        <div class="col-sm-8 col-md-8">
               <input type="hidden" class="form-control" name="depart_id"  value="{{ $datas->id}}">
                         <select name="tour_id" id="" class="form-control" onchange="getComboA(this)">
                          <option value="{{ $datas->tour_id }}">{{$datas->tour_name}}</option>
                          @foreach ($tours as $tour)
                              <option value="{{ $tour->id }}">{{ $tour->tour_name }}</option>
                          @endforeach
                          </select>
                        </div>
                          </div>
                      </div>

 <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                      <div class="form-group row">
                        <label for="srs">Price</label>
                        <div class="col-sm-8 col-md-8">
                          <input type="number" class="form-control" name="price"  value="{{ $datas->price}}">
                        </div>
                          </div>
                      </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                      <div class="form-group row">
                        <label for="srs">Seats</label>
                        <div class="col-sm-8 col-md-8">
                          <input type="number" class="form-control" name="seats" min="1" value="{{ $datas->seats}}">
                        </div>
                          </div>
                      </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                      <div class="form-group row">
                        <label for="srs" class="col-sm-4 col-md-4col-form-label">SRS Price</label>
                        <div class="col-sm-8 col-md-8">
                          <input type="number" class="form-control" name="srs"  value="{{ $datas->srs}}">
                        </div>
                          </div>
                      </div>

                        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                      <div class="form-group row">
                        <label for="tour_category" class="col-sm-4 col-md-4 col-form-label">Group Tour Category</label>
                        <div class="col-sm-8 col-md-8">

                          <select name="tour_category" id="" class="form-control" onchange="getComboA(this)">
                            <option value="{{ $datas->group_tour_category}}">{{ $datas->group_tour_category}}</option>
                              <option value="GS">Group Scheduled Tours</option>
                              <option value="SO">Special Occasions</option>
                              <option value="UN">Utalii Nyumbani</option>

                          </select>
                        </div>
                          </div>
                      </div>


                       <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group row">
                          <label for="start_date" class="col-sm-4 col-md-4 col-form-label">Start Date</label>
                          <div class="col-sm-8 col-md-8">
                            <input type="date" class="form-control" name="start_date" value="{{ $datas->start_date}}">
                          </div>
                            </div>
                        </div>

    <div class="col-lg-3 col-md-3s col-sm-6 col-xs-12">
                         <div class="form-group row">
                           <label for="end_date" class="col-sm-4 col-md-4 col-form-label">End Date</label>
                           <div class="col-sm-8 col-md-8">
                             <input type="date" class="form-control" name="end_date" value="{{ $datas->end_date}}" disabled>
                           </div>
                             </div>
                         </div>

                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                         <div class="form-group row">
                           <label for="end_date" class="col-sm-4 col-md-4 col-form-label">Days</label>
                           <div class="col-sm-8 col-md-8">
                             <input type="number" class="form-control" name="end_date" value="{{ $datas->days}}" disabled>
                           </div>
                             </div>
                         </div>

                         <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                           <div class="form-group row">
                             <label for="status">Status</label>
                             <div class="col-sm-8 col-md-8">
                              <select name="status" id="" class="form-control" onchange="getComboA(this)">
                               <option value="{{ $datas->status }}">{{$datas->status}}</option>

                                   <option value="Active">Active</option>
                                   <option value="Inactive">Inactive</option>

                               </select>
                             </div>
                               </div>
                           </div>


                        <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12 col-md-offset-3">
                        <div class="form-group row">

                    <div>
                      <button type="submit" class="btn btn-primary float-right">Update</button>
                    </div>
                   </div>
                      </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="form-group row">
              <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">

            <div class="form-group row">
              <div>
                <a role="button" href="/departures" class="btn btn-success float-right">Return to List</a>
              </div>
              </div>
                </div>
           </div>
          </div>
          </div>

          </form>
          <!-- /.col-->
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection