@extends('layouts.app')

@section('content')


<div class="d-flex align-items-center" style="min-height: 100vh">
<div class="col-sm-8 col-md-6 col-lg-4 mx-auto" style="min-width: 300px;">
   <div class="text-center mt-5 mb-1">
       <div class="avatar avatar-lg">
        <img src="{{ asset('wp-content/uploads/2021/01/wc_logo.png') }}" class="avatar-img rounded-circle" alt="WorldCast" />
       </div>
   </div>
   <div class="d-flex justify-content-center mb-5 navbar-light">
       <!-- Brand -->
       <a href="student-dashboard.html" class="navbar-brand m-0">
           WorldCast
       </a>
   </div>
   <div class="card navbar-shadow">
       <div class="card-header text-center">
           <h4 class="card-title">Forgot Password?</h4>
           <p class="card-subtitle">Recover your account password</p>
       </div>
       <div class="card-body">

         @if (session('status'))         
            <div class="alert alert-light border-1 border-left-3 border-left-primary d-flex" role="alert">
                <i class="material-icons text-success mr-3">check_circle</i>
                <div class="text-body">An email with password reset instructions has been sent to your email address, if it exists on our system.</div>
            </div>
        @endif
          

           <form method="POST" action="{{ route('password.email') }}" novalidate>
            @csrf
               <div class="form-group">
                   <label class="form-label"
                          for="email">Email address:</label>
                   <div class="input-group input-group-merge">
                       <input id="email" type="email" required=""
                              class="form-control form-control-prepended @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                              placeholder="Your email address">
                              
                       <div class="input-group-prepend">
                           <div class="input-group-text">
                               <span class="fa fa-envelope"></span>
                           </div>
                       </div>

                       @error('email')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                        @enderror
                   </div>

               </div>

               <button type="submit"
                       class="btn btn-primary btn-block">Reset Now</button>
           </form>
       </div>
       <div class="card-footer text-center text-black-50">Remember your password? <a href="{{ route('login') }}">Login</a></div>
   </div>
</div>
</div>


@endsection
