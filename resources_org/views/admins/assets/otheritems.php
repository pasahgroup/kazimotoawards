@extends('spa.app')
@section('contents')

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery311.min.js"></script>

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
    color: white;
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
</style>

<!-- Image Modal -->
<div id="imgModal" class="img-modal" style="display:none; position:fixed; z-index:9999; padding-top:60px; left:0; top:0; width:100%; height:100%; overflow:auto; background-color:rgba(0,0,0,0.8);">
  <span class="close" style="position:absolute; top:30px; right:50px; color:#fff; font-size:40px; font-weight:bold; cursor:pointer; z-index:10000;">&times;</span>
  <img class="img-modal-content" id="imgPreview" style="margin:auto; display:block; max-width:90%; max-height:90%; border-radius:10px; animation: zoomIn 0.3s ease; transition: transform 0.25s ease; cursor: grab;">
</div>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2 align-items-center">
        <div class="col-sm-6">
          <h4 class="asset">OTHER ITEMS</h4>
        </div>
        <div class="col-sm-6 d-flex justify-content-end gap-3">
          @if(Auth::user()->role == 'Admin')
          <a href="{{ route('addAsset.index') }}" class="btn btn-gradient">
            <i class="fas fa-plus"></i> Item
          </a> 
          <br>
          <a href="{{ route('reassign-asset.index') }}" class="editbtn">
            Reassign Item
          </a>
          @endif
        </div>
      </div>
    </div>
  </section>

  <section class="content">

 
<!--
    <div class="card">
      <div class="card-body">
        <div class="table-container">
<form method="post" id="post_form" role="form" class="registration-form" action="{{ route('research') }}" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="user_id" value="POST">
          <div class="row align-items-end">
            <div class="form-group col-md-2">
              <label>Category</label>
              <select class="form-control" name="classg" id="classg" required>
                <option></option>
                <option selected style="background-color:lightgreen;">{{$selected_class ?? ''}}</option>
                @foreach ($categories as $category)
                  <option value="{{$category->id}}">{{$category->category}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-md-2">
              <label>Sub category</label>
              <select class="form-control" name="session" id="session" required>
                <option></option>
                <option selected style="background-color:lightgreen;">{{$selected_class ?? ''}}</option>
                @foreach ($sessions as $session)
                  <option value="{{$category->id}}">{{$session->session}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-2">
              <button type="submit" class="editbtn">Find</button>
            </div>
          </div>
        </form>
      </div>
-->
          <!-- Confirmation Box -->
          <div id="confirmBox" role="alert" aria-live="assertive" aria-atomic="true">
            <span id="confirmMessage" class="fw-bold"></span>
            <div class="mt-3">
              <button id="confirmYes" class="btn btn-light btn-sm me-2">Yes</button>
              <button id="confirmNo" class="btn btn-secondary btn-sm">No</button>
            </div>
            <button type="button" id="confirmClose" class="btn-close" aria-label="Close"></button>
          </div>

          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No.</th>
                <th>Item</th>
                <th>Serial No</th>
                <th>Location</th>
                <th>Assigned To</th>
                <th>Assigned Date</th>
                <th>Owner</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($assets as $data)
              <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->asset_name }}</td>
                <td>{{ $data->serial_no }}</td>
                <td>{{ $data->location }}</td>
                <td><img src="{{ URL::asset('/storage/photos/'.$data->photo) }}" alt="Asset Photo"></td>
                <td>{{ $data->assigned_to }}</td>
                <td>{{ $data->assigned_date }}</td>
                <td>{{ $data->owned_by }}</td>
                <td>{{ $data->status }}</td>
                <td>
                  <a href="#" class="btn-gradient btn-sm mb-1 btn-history" data-url="/destroyf/{{$data->id}}" data-message="Go to Asset history?">
                    History
                  </a>

                  @if(Auth::user()->role =='Admin')
                  <form method="GET" action="{{ route('test') }}" class="d-inline">
                    @csrf
                    <input type="hidden" name="user_id" value="PUT">
                    <input type="hidden" name="asset_id" value="{{ $data->id }}">
                    <input type="hidden" name="sessionf" value="{{ $data->session }}">
                    <input type="hidden" name="searchf" value="{{ $search }}">
                    <button type="submit" class="editbtn">
                      <i class="fa fa-edit"></i> Edit
                    </button>
                  </form>

                  <a href="#" class="deletebtn btn-sm btn-danger btn-delete text-white" data-url="/asset-destroy/{{$data->id}}" data-message="Are you sure you want to delete this asset?">
                    <i class="fa fa-trash"></i> Delete
                  </a>
                  @endif
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>
      <div class="card-footer"></div>
    </div>
  </section>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const confirmBox = document.getElementById('confirmBox');
    const confirmMessage = document.getElementById('confirmMessage');
    const confirmYes = document.getElementById('confirmYes');
    const confirmNo = document.getElementById('confirmNo');
    const confirmClose = document.getElementById('confirmClose');

    let actionUrl = '';
    let actionType = '';

    function showConfirm(message, url, type) {
      confirmMessage.textContent = message;
      actionUrl = url;
      actionType = type;

      confirmBox.classList.remove('history', 'delete');
      confirmBox.classList.add(type);
      confirmBox.style.display = 'block';
      confirmBox.scrollIntoView({
        behavior: 'smooth'
      });
    }

    function hideConfirm() {
      confirmBox.style.display = 'none';
      actionUrl = '';
      actionType = '';
    }

    document.querySelectorAll('.btn-history').forEach(btn => {
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        showConfirm(this.dataset.message, this.dataset.url, 'history');
      });
    });

    document.querySelectorAll('.btn-delete').forEach(btn => {
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        showConfirm(this.dataset.message, this.dataset.url, 'delete');
      });
    });

    confirmYes.addEventListener('click', function() {
      if (!actionUrl) return;
      window.location.href = actionUrl;
      hideConfirm();
    });

    confirmNo.addEventListener('click', hideConfirm);
    confirmClose.addEventListener('click', hideConfirm);

    // Image modal functionality
    const modal = document.getElementById("imgModal");
    const modalImg = document.getElementById("imgPreview");
    const closeBtn = modal.querySelector(".close");

    document.querySelectorAll("table img").forEach(img => {
      img.style.cursor = 'zoom-in';
      img.addEventListener("click", function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        resetZoom();
      });
    });

    closeBtn.onclick = () => modal.style.display = "none";
    window.onclick = (event) => {
      if (event.target === modal) modal.style.display = "none";
    };

    let scale = 1;
    let isDragging = false;
    let startX, startY, currentX = 0, currentY = 0;

    modalImg.addEventListener('wheel', function(e) {
      e.preventDefault();
      const delta = e.deltaY > 0 ? -0.1 : 0.1;
      scale = Math.min(Math.max(1, scale + delta), 3);
      applyTransform();
    });

    modalImg.addEventListener('mousedown', function(e) {
      isDragging = true;
      startX = e.clientX - currentX;
      startY = e.clientY - currentY;
    });

    document.addEventListener('mousemove', function(e) {
      if (!isDragging) return;
      currentX = e.clientX - startX;
      currentY = e.clientY - startY;
      applyTransform();
    });

    document.addEventListener('mouseup', () => isDragging = false);

    function resetZoom() {
      scale = 1;
      currentX = 0;
      currentY = 0;
      applyTransform();
    }

    function applyTransform() {
      modalImg.style.transform = `scale(${scale}) translate(${currentX / scale}px, ${currentY / scale}px)`;
    }
  });
</script>

@endsection
