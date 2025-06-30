@extends('spa.app')
@section('contents')

<style>
/* Header */
.legend-header {
  background: linear-gradient(90deg, #4f46e5 0%, #06b6d4 100%);
  color: #fff;
  padding: 2rem 1rem;
  border-radius: 1rem 1rem 0 0;
  margin-bottom: 2rem;
  box-shadow: 0 4px 24px rgba(0,0,0,0.12);
  display: flex;
  align-items: center;
  justify-content: space-between;
}

/* Rectangular Cards */
.legend-card {
  border: none;
  border-radius: 1rem;
  box-shadow: 0 6px 20px rgba(0,0,0,0.15);
  transition: transform 0.25s ease, box-shadow 0.25s ease;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: #fff;
  min-height: 120px;
  max-width: 320px;
  padding: 1rem 1.5rem;
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 1.2rem;
  cursor: default;
}
.legend-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 32px rgba(0,0,0,0.25);
}

/* Card Icon Container */
.card-icon {
  font-size: 3.2rem;
  flex-shrink: 0;
  opacity: 0.85;
}

/* Card Content */
.card-content {
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

/* Card Title */
.card-title {
  color: white;
  font-size: 1.15rem;
  font-weight: 700;
  margin-bottom: 0.25rem;
  letter-spacing: 0.5px;
  text-shadow: 0 1px 4px rgba(0,0,0,0.3);
}

/* Card Number */
.card-number {
  font-size: 2.3rem;
  font-weight: 800;
  line-height: 1;
  text-shadow: 0 2px 6px rgba(0,0,0,0.4);
}

/* Buttons Container */
.card-buttons {
  margin-top: 0.8rem;
  display: flex;
  gap: 0.7rem;
}

/* Buttons */
.legend-btn {
  border-radius: 2rem;
  font-weight: 600;
  font-size: 0.9rem;
  padding: 0.38rem 1.1rem;
  box-shadow: 0 3px 8px rgba(255,255,255,0.25);
  border: 1.5px solid rgba(255,255,255,0.6);
  background: transparent;
  color: #fff;
  transition: background-color 0.3s ease, color 0.3s ease;
  cursor: pointer;
  display: flex;
  align-items: center;
  gap: 0.4rem;
  text-decoration: none;
}
.legend-btn:hover,
.legend-btn:focus {
  background-color: rgba(255,255,255,0.2);
  color: #fff;
  text-decoration: none;
}

/* Individual Card Gradient Backgrounds */
.card-students {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}
.card-trainees {
  background: linear-gradient(135deg, #43cea2 0%, #185a9d 100%);
}
.card-lodges {
  background: linear-gradient(135deg, #f7971e 0%, #ffd200 100%);
  color: #333;
}
.card-assets {
  background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
}
.card-properties {
  background: linear-gradient(135deg, #00c6ff 0%, #0072ff 100%);
}

/* Card Icon Colors - slightly lighter for contrast */
.card-students .card-icon { color: #c3caff; }
.card-trainees .card-icon { color: #a6e3d0; }
.card-lodges .card-icon { color: #fff5b1; }
.card-assets .card-icon { color: #ffb3a7; }
.card-properties .card-icon { color: #a4d8ff; }

/* Responsive: 5 cards in a row */
.row.g-3 {
  display: flex;
  flex-wrap: wrap;
  gap: 1.5rem;
  justify-content: center;
}
.row.g-3 > .col {
  flex: 1 1 18%;
  max-width: 320px;
  min-width: 280px;
}

/* Stats Bar */
.stats-bar {
  display: flex;
  gap: 1.2rem;
  margin-bottom: 1.4rem;
  justify-content: flex-end;
  flex-wrap: wrap;
}
.stats-item {
  background: #fff;
  color: #334155;
  border-radius: 0.8rem;
  padding: 0.6rem 1.2rem;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
  font-size: 0.98rem;
  display: flex;
  align-items: center;
  gap: 0.5rem;
}


 /* Quick Links list style */
  .recent-activity ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  .recent-activity ul li {
    padding: 0.5rem 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.4);
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }
  .recent-activity ul li:last-child {
    border-bottom: none;
  }
  /* Links style */
  .recent-activity ul li a {
    color: #7f1d1d; /* Dark red accent */
    font-weight: 600;
    text-decoration: none;
    position: relative;
    transition: color 0.3s ease;
    flex-grow: 1;
  }
  .recent-activity ul li a::before {
    content: "\f0da"; /* FontAwesome angle-right icon unicode */
    font-family: "Font Awesome 5 Free"; /* Make sure FA is loaded */
    font-weight: 900;
    margin-right: 0.5rem;
    color: #f87171; /* Lighter red accent */
    font-size: 0.8rem;
    vertical-align: middle;
  }
  .recent-activity ul li a:hover,
  .recent-activity ul li a:focus {
    color: #b91c1c;
    text-decoration: underline;
  }





/* Recent Activity */
.recent-activity {
  background: #fff;
  border-radius: 1rem;
  box-shadow: 0 2px 8px rgba(0,0,0,0.07);
  padding: 1rem;
  margin-top: 1.5rem;
}
.recent-activity h6 {
  font-weight: 700;
  margin-bottom: 0.6rem;
  color: #4f46e5;
}
.recent-activity ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.recent-activity li {
  font-size: 0.97rem;
  padding: 0.2rem 0;
  border-bottom: 1px solid #e5e7eb;
}
.recent-activity li:last-child { border-bottom: none; }

.footer {
  background: #1e293b;
  color: #fff;
  text-align: center;
  padding: 1rem 0;
  margin-top: 2rem;
  border-radius: 0 0 1rem 1rem;
}
.look1 {
  font-family: sans-serif;
  font-size: 2.1rem;
  color: white;
}
.look {
  font-family: sans-serif;
  font-size: 1rem;
  color: white;
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<div class="content-wrapper" style="background: #f8fafc;">
  <section class="content">
    <div class="container-fluid">

      <!-- Header -->
      <div class="legend-header mb-4">
        <div>
          <h2 class="look1"><span class="fw-bold">{{ auth()->user()->name }}</span></h2>
          <p class="look">Welcome back to your account!</p>
        </div>
        <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=06b6d4&color=fff&rounded=true&size=64" alt="Avatar" class="rounded-circle shadow">
      </div>

      <!-- Quick Stats Bar -->
      <div class="stats-bar">
        <div class="stats-item"><i class="bi bi-clock-history text-primary"></i> Today’s Logins: <b>5</b></div>
        <div class="stats-item"><i class="bi bi-bell-fill text-danger"></i> Notifications: <b>3</b></div>
        <div class="stats-item"><i class="bi bi-gear text-secondary"></i> <a href="/settings" style="color:#334155;text-decoration:none;">Settings</a></div>
      </div>

      <!-- Rectangular Dashboard Cards -->
      <div class="row g-3 mb-2">
         <div class="col">
          <div class="card legend-card card-properties">
            <i class="bi bi-building card-icon"></i>
            <div class="card-content text-center">
              <h5 class="card-title">Properties</h5>
              <div class="card-number">{{ $lodges }}</div>
              <div class="card-buttons justify-content-center">
                <a href="/properties" class="legend-btn"><i class="bi bi-plus-circle"></i> Add</a>
                <a href="/properties/list" class="legend-btn" style="border-color:#fff; color:#fff;">View</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card legend-card card-students">
            <i class="bi bi-people-fill card-icon"></i>
            <div class="card-content text-center">
              <h5 class="card-title">Students</h5>
              <div class="card-number">{{ $students->count() }}</div>
              <div class="card-buttons justify-content-center">
                <a href="/students" class="legend-btn" style="background-color: ;"><i class="bi bi-plus-circle"></i> Add</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card legend-card card-trainees">
            <i class="bi bi-person-badge-fill card-icon"></i>
            <div class="card-content text-center">
              <h5 class="card-title">Trainees</h5>
              <div class="card-number">{{ $trainees }}</div>
              <div class="card-buttons justify-content-center">
                <a href="/trainee" class="legend-btn"><i class="bi bi-plus-circle"></i> Add</a>
              </div>
            </div>
          </div>
        </div>


        
        <div class="col">
          <div class="card legend-card card-lodges">
            <i class="bi bi-house-door-fill card-icon"></i>
            <div class="card-content text-center" style="color: white;">
              <h5 class="card-title">Lodges</h5>
              <div class="card-number">{{ $lodges }}</div>
              <div class="card-buttons justify-content-center">
                <a href="/lodge" class="legend-btn" style="border-color: white; color: white;"><i class="bi bi-plus-circle"></i> Add</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card legend-card card-assets">
            <i class="bi bi-box-seam card-icon"></i>
            <div class="card-content text-center">
              <h5 class="card-title">Assets</h5>
              <div class="card-number">{{ $lodges }}</div>
              <div class="card-buttons justify-content-center">
                <a href="/addAsset" class="legend-btn"><i class="bi bi-plus-circle"></i> Add</a>
                <a href="/asset" class="legend-btn" style="border-color:#fff; color:#fff;">View</a>
              </div>
            </div>
          </div>
        </div>

       
      </div>

      <!-- Recent Activity Panel -->
      <div class="row">
        <div class="col-md-6">
          <div class="recent-activity">
            <h6><i class="bi bi-clock-history"></i> Recent Activities</h6>
            <ul>
              <li>Added new student: <b>Jane Doe</b></li>
              <li>Updated lodge info</li>
              <li>Asset registered: <b>Laptop #A123</b></li>
              <li>New trainee enrolled: <b>John Smith</b></li>
              <li>Property listed: <b>Block B</b></li>
            </ul>
          </div>
        </div>
       
<!-- Make sure FontAwesome CSS is loaded for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

<div class="col-md-6">
  <div class="recent-activity" style="background:linear-gradient(135deg,#f3f4f6 60%,#fca5a5 100%);">
    <h6><i class="bi bi-lightning-charge"></i> Quick Links</h6>
    <ul>
      <li><a href="/reports">Home</a></li>
      <li><a href="/reports">My profile</a></li>
      <li><a href="/reports">View Reports</a></li>
      <li><a href="/help">Help Center</a></li>
      <li><a href="/settings">Account Settings</a></li>
    </ul>
  </div>
</div>
    </div>
  </section>
</div>
@endsection


