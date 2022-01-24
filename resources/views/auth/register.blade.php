@extends('layouts.welcome.header')

@section('content')
<header class="page-header">
	<div class="container">
	<h1>Account</h1>
	</div>
	</header>
<!-- end page-header -->
<main>
  <section class="content-section" data-background="{{ asset('storage/images/landing/section-pattern01.png') }}">
    <div class="container">
      <div class="row align-items-center">
		<div class="col-lg-7 offset-3">
		  <div class="membership">
			<h6>Start Your Membership</h6>
			  <p>digiflex per month just $9.99<br>You are able to cancel anytime no fee !!!</p>
              
              <form action="{{ route('register') }}" novalidate method="post" >
                {{ csrf_field() }}
                <div class="form-group">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="text-danger">{{$error}}</div>
                        @endforeach
                    @endif
			  
                    <div class="form-group">
                        <input id="name"
                        type="text"
                        required=""
                        class="@error('name') is-invalid @enderror"
                        placeholder="Your first and last name"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
				  </div>
				  <!-- end form-group -->
			  
                <div class="form-group">
                    <input id="email"
                        type="email"
                        required=""
                        class="@error('email') is-invalid @enderror"
                        placeholder="Your email address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				  </div>
                <div class="form-group">
                    <input id="phone"
                        type="text"
                        required=""
                        class="@error('phone') is-invalid @enderror"
                        placeholder="Your Phone Number" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
				  <!-- end form-group -->
			  <div class="form-group">
                <input id="password"
                        type="password"
                        required=""
                        class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                        placeholder="Choose a password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <i class="lni lni-eye"></i>
				  </div>
			<div class="form-group">
                <input id="password-confirm"
                type="password"
                required=""
                class="" name="password_confirmation" required autocomplete="new-password"
                placeholder="Confirm password">
				  </div>
				  <!-- end form-group -->
			  <div class="form-group">
				  	<p><input type="checkbox" checked> I agree to accept registration terms about {{ env('APP_NAME') }} and start my membership</p>
				  </div>
				  <!-- end form-group -->
			  <div class="form-group">
				  	<input type="submit" value="START MEMBERSHIP">
				  </div>
				  <!-- end form-group -->
				  
				  <div class="or">
						   <span>or</span>
					   <p>You can pick one of it to sign-in</p>
					   <a href="#"><i class="lni lni-facebook-filled"></i>
					  <small>with Facebook</small>
					  </a> <a href="#"><i class="lni lni-google"></i> 
					  <small>with Google+</small>
					  </a>
						   </div>
					   <!-- end or -->
			  </form>
			</div>
			<!-- end membership -->
		  </div>
		  <!-- end col-7 -->
          
		  <!-- end col-5 -->
		</div>
      <!-- end row --> 
    </div>
    <!-- end section -->
  </section>
@endsection