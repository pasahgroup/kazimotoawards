@extends('layouts.master')
@section('contents')

<script type="text/javascript" src="../../admins/js/jquery.js"></script>
<script type="text/javascript" src="../../admins/js/jquery311.min.js"></script>


<style>
  .wrap-cell {
    word-wrap: break-word; /* or overflow-wrap: break-word; */
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
        <div class="col-sm-10">
          <h4 class="asset">Slide List</h4>
        </div>

        <div class="col-sm-2 d-flex justify-content-end gap-3">    
       
          <a href="{{ route('register_slide') }}" class="btn btn-gradient">
            <i class="fas fa-plus"></i>Slide
          </a>    
      
        </div>
      </div>
    </div>
  </section>

 
<section class="content">
          <!-- Confirmation Box -->
          <div id="confirmBox" role="alert" aria-live="assertive" aria-atomic="true">
            <span id="confirmMessage" class="fw-bold"></span>
            <div class="mt-3">
              <button id="confirmYes" class="btn btn-light btn-sm me-2">Yes</button>
              <button id="confirmNo" class="btn btn-secondary btn-sm">No</button>
            </div>
            <button type="button" id="confirmClose" class="btn-close" aria-label="Close"></button>
          </div>





          <table id="example1" class="table table-bordered table-striped"
       style="border-spacing: 0px; 
              table-layout: fixed; 
              margin-left:auto; 
              margin-right:auto;">
            <thead>
              <tr>
                <th>ID.</th>
                <th>Photo title</th>
                <th>Slide Photo</th>
               <th>Photo Description</th>              
                <th>Award name</th>
                   <th>Display</th>
                 <th>status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($slides as $data)
              <tr>
                <td>{{ $data->id }}</td>

                               <td>{{ $data->photo_title }}</td>
                                
            <td><img src="{{ URL::asset('/storage/slides/'.$data->photo) }}" alt="The Logo"></td>
             <td>{{ $data->photo_description }}</td>
                <td>{{ $data->award_name?? "nill" }}</td> 
                 <td>{{ $data->display?? "nill" }}</td>
                 <td>{{ $data->status }}</td>
                <td>                
                  <form method="GET" action="{{ route('slides.edit',$data->id) }}" class="d-inline">
                    @csrf
                    <input type="hidden" name="user_id" value="PUT">
                    <input type="hidden" name="asset_id" value="#">
                    <input type="hidden" name="sessionf" value="#">
                    <!-- <input type="hidden" name="searchf" value="Donata"> -->
                    <button type="submit" class="editbtn">
                      <i class="fa fa-edit"></i> Edit
                    </button>
                  </form>

                  <a href="#" class="deletebtn btn-sm btn-danger btn-delete text-white" data-url="/bank-destroy/{{$data->id}}" data-message="Are you sure you want to delete this bank?">
                    <i class="fa fa-trash"></i> Delete
                  </a> 

                   <a href="/slide-destroy/{{$data->id}}" class="deletebtn btn-sm btn-danger btn-delete text-white" data-url="/bank-destroy/{{$data->id}}" data-message="Are you sure you want to delete this bank?">
                    <i class="fa fa-trash"></i> Delete
                  </a> 

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
