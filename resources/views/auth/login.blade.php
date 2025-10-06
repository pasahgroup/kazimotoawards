@extends('spa.mainlayout_web')
@section('contents')

  <main class="login-form">
    <div class="container login-container">
      <div class="row justify-content-center">
        <!-- Changed the column width to col-md-8 from col-md-6 -->
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <img src="../../img/logo.png" alt="Logo" class="logo mx-auto d-block" style="height:60px;">
              Login to your existing account
            </div>

            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


            <div class="card-body">
              <!-- Display messages -->
              @if($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Well!</strong> {{ $message }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
              @if($message = Session::get('info'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Ops! </strong> {{ $message }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
              @if($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Sorry!</strong> {{ $message }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif

              <!-- Login Form -->
              <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="email_address" class="form-label">Email Address</label>
                  <input type="text" id="email_address" placeholder="enter your email" class="form-control" name="email" required autofocus>
                  @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" id="password" class="form-control" placeholder="enter your password" name="password" required>
                  @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif
                </div>

                <div class="mb-3">
                  <div class="form-check">
                    <input type="checkbox" name="remember"  class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Remember Me</label>
                  </div>
                </div>


                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <br>
<div class="mb-3">
                  <div class="form-check">
                    <label class="form-check-label" for="remember">New User? <a href="/register">Sign Up</a> </label>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection






































