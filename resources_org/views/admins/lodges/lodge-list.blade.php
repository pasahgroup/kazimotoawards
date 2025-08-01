
  @extends('admins.layouts.Apps.app')
  @section('contents') 
   <style type="text/css">
  body {
    font-family: "Calibri Light", Calibri, sans-serif;
  }

  /* Table container styling */
  .table-container {
    background: #f8fafc;
    padding: 1.5rem;
    border-radius: 1rem;
    box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
    margin-top: 2rem;
    overflow-x: auto;
  }

  table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    border-radius: 1rem;
    overflow: hidden;
  }

  /* Blue Gradient Header */
  thead {
    background: linear-gradient(90deg, #4f46e5 0%, #06b6d4 100%);
    color: white;
    box-shadow: 0 2px 8px rgba(6, 182, 212, 0.15);
  }

  thead th {
    padding: 1.25rem;
    text-align: left;
    border: none;
  }

  tbody td {
    padding: 1rem;
    border-bottom: 1px solid #e0e7ff;
    vertical-align: middle;
  }

  tbody tr:nth-child(even) {
    background-color: #f1f5ff;
  }

  tbody tr:hover {
    background-color: #dbeafe;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  /* Buttons */
  .btn-gradient {
    background: linear-gradient(90deg, #4f46e5 0%, #06b6d4 100%);
    color: white;
    border: none;
    padding: 0.6rem 1.2rem;
    border-radius: 2rem;
    font-weight: 600;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    box-shadow: 0 2px 8px rgba(6, 182, 212, 0.15);
    display: inline-flex;
    align-items: center;
    gap: 0.3rem;
    text-decoration: none;
  }

  .btn-gradient:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(6, 182, 212, 0.25);
    color: white;
  }

  .btn-danger {
    background-color: #dc3545 !important;
  }

  .btn-danger:hover {
    background-color: #c82333 !important;
  }

  /* Top Header and Buttons */
  .content-header h4.asset {
    font-size: 2.5rem;
    color: #4f46e5;
    text-shadow: 0 0 8px rgba(79, 70, 229, 0.5);
  }

  /* Confirmation box styles */
  #confirmBox {
    z-index: 1050;
    font-size: 0.85rem;
    /* Smaller font size */
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    padding: 0.75rem 0.7rem;
    /* Reduced padding */
    border-radius: 0.75rem;
    margin-bottom: 1rem;
    position: relative;
    display: none;
  }

  #confirmBox.history {
    background-color: #0d6efd;
    /* Bootstrap primary blue */
    color: white;
  }

  #confirmBox.delete {
    background-color: #dc3545;
    /* Bootstrap danger red */
    color: white;
  }

  #confirmBox .btn-light,
  #confirmBox .btn-secondary {
    padding: 0.2rem 0.5rem;
    /* Smaller button size */
    font-size: 0.75rem;
    /* Smaller font size */
    border-radius: 0.5rem;
    /* Rounded corners */
  }

  #confirmBox .btn-close {
    position: absolute;
    top: 0.25rem;
    right: 0.5rem;
    color: white;
    opacity: 0.8;
    font-size: 1rem;
  }

  #confirmBox .btn-close:hover {
    opacity: 1;
  }

  /* Blue gradient button - same as action column */
  .btn-gradient {
    background: linear-gradient(90deg, #4f46e5 0%, #06b6d4 100%);
    color: white;
    border: none;
    padding: 0.6rem 1.2rem;
    border-radius: 2rem;
    font-weight: 600;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.3rem;
    text-decoration: none;
  }
  .editbtn {
    background: linear-gradient(90deg, #34d399 0%, #10b981 100%);
    color: white;
    border: none;
    padding: 0.6rem 1.2rem;
    border-radius: 2rem;
    font-weight: 600;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.3rem;
    text-decoration: none;
}

.editbtn:hover {
    background: linear-gradient(90deg, #10b981 0%, #34d399 100%);
    transform: translateY(-3px);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

  .deletebtn {
    background: linear-gradient(90deg, #f87171 0%, #dc2626 100%);
    color: white;
    border: none;
    padding: 0.6rem 1.2rem;
    border-radius: 2rem;
    font-weight: 600;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.3rem;
    text-decoration: none;
      margin-right: 10px; /* Space between buttons */
}

.deletebtn:hover {
    background: linear-gradient(90deg, #dc2626 0%, #f87171 100%);
    transform: translateY(-3px);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);

}


  .btn-gradient:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(6, 182, 212, 0.25);
    color: white;
    text-decoration: none;
  }

  /* Green gradient for Reassign Asset button */
  .btn-success-gradient {
    background: linear-gradient(90deg, #43ea7f 0%, #88e788 100%);
    color: #155724;
  }

  .btn-success-gradient:hover {
    background: linear-gradient(90deg, #34d058 0%, #90ee90 100%);
    color: white;
  }

  /* Image styling */
  img {
    border-radius: 5px;
    max-width: 80px;
    max-height: 45px;
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    /* Stack the buttons vertically */
    .content-header .d-flex {
      flex-direction: column;
      align-items: flex-start;
    }

    .content-header .btn {
      margin-bottom: 0.5rem;
      width: 100%;
      /* Make buttons full width */
    }
  }

  /* Prevent compression of first column */
  table th:first-child,
  table td:first-child {
    width: 50px;
    /* Adjust as needed */
    min-width: 50px;
    /* Ensure it doesn't shrink */
  }
  .assetf{
    font-size: 2.5rem;
    color: #4f46e5;
    text-shadow: 0 0 8px rgba(79, 70, 229, 0.5);
  }
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
         <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>-->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h4 class="assetf">LODGES LIST</h4>

          <div class="card-tools">
            <a href="/addlodge" class="btn btn-gradient" >
              <i class="fas fa-plus"></i>New Lodge
            </a>
          </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Lodge Name</th>  
                    <th>Owner Name</th>             
                    <th>Contact</th> 
                    <th>Email</th> 
                    <th>Location</th> 
                    <th>GM_contact</th> 
                    <th>GM_email</th>
                     <th>Status</th>
                    <th>Action</th> 
                                 
                  </tr>
                  </thead>
                  <tbody>
                   
                    @foreach ($lodges as $lodge)
                            <tr>
                    <td>{{ $lodge->id }}</td>
                     <td><a href="/editLodge/{{$lodge->id}}">{{ $lodge->lodge_name }}</a></td>
                            <td><a href="/editLodge/{{$lodge->id}}">{{ $lodge->owner_name }}</a></td>
                              <td><a href="/editLodge/{{$lodge->id}}">{{ $lodge->contact }}</a></td>
                                <td><a href="/editLodge/{{$lodge->id}}">{{ $lodge->email }}</a></td>
                                  <td><a href="/editLodge/{{$lodge->id}}">{{ $lodge->location }}</a></td>
                                  <td><a href="/editLodge/{{$lodge->id}}">{{ $lodge->gm_contact }}</a></td>
                                <td><a href="/editLodge/{{$lodge->id}}">{{ $lodge->gm_email }}</a></td>    
                                 <td>{{ $lodge->status }}</td>



                    <td><a href="/editLodge/{{$lodge->id}}" class="btn-gradient btn-sm mb-1 btn-history"><i class="fa fa-edit"></i>Edit</a>
                     <a href="/destroyLodge/{{$lodge->id}}" class="deletebtn btn-sm btn-danger btn-delete text-white" onclick="return confirm('Are you sure? You want to delete {{ $lodge->lodge_name}}','Lodge')"><i class="fa fa-trash red"></i>Delete</a></td>
                              
                     @endforeach
                       </tr>
                </table>
              </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
