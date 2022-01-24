@extends('layouts.welcome.header')

@section('content')
<header class="page-header">
	<div class="container">
	<h1>Contact</h1>
	</div>
	</header>
<!-- end page-header -->
<main>
  <section class="content-section">
    <div class="container">
      <div class="row justify-content-center">
			 <div class="col-12">
          <div class="section-title text-center">
			  <h6>CONNECT WITH US</h6>
            <h2>Get in Touch</h2>
          </div>
          <!-- end section-title --> 
        </div>
        <!-- end col-12 -->
		  <div class="col-lg-4">
		  	<div class="contact-box">
			  <figure>
				<img src="{{ asset('storage/images/landing/location.png') }}" alt="Image">
				</figure>
				<h5>VISIT US</h5>
				<p>26 Lawford Rd, Rugby Ave No:204<br>
					London - UK</p>
				
			  </div>
			  <!-- end contact-box -->
		  </div>
		  <!-- end col-4 -->
		  <div class="col-lg-4">
		  	<div class="contact-box">
			  <figure>
				<img src="{{ asset('storage/images/landing/phone.png') }}" alt="Image">
				</figure>
				<h5>CALL US</h5>
				<p>+ 1 800 746 8 384<br>
					# 1001</p>
				
			  </div>
			  <!-- end contact-box -->
		  </div>
		  <!-- end col-4 -->
		  <div class="col-lg-4">
		  	<div class="contact-box">
			  <figure>
				<img src="{{ asset('storage/images/landing/mail.png') }}" alt="Image">
				</figure>
				<h5>WRITE US</h5>
				<p><a href="#">info@digiflex.co.uk</a><br>
					All requires</p>
				
			  </div>
			  <!-- end contact-box -->
		  </div>
		  <!-- end col-4 -->
		</div>   
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end content-section -->
	<section class="content-section" data-background="#f7f7f7">
	<div class="container">	
		<div class="row justify-content-center">
			<div class="col-12">
          <div class="section-title text-center">
			  <h6>CONTACT FORM</h6>
            <h2>Say Hello</h2>
          </div>
          <!-- end section-title --> 
        </div>
        <!-- end col-12 -->
		  <div class="col-lg-6">
		  	<div class="contact-form">
			  	<div class="form-group">
					<input type="text" placeholder="Your name">
				</div>
				<!-- end form-group -->
			  	<div class="form-group">
					<input type="text" placeholder="Your e-mail">
				</div>
				<!-- end form-group -->
			  	<div class="form-group">
					<select>
						<option>Select your subject</option>
					</select>
				</div>
				<!-- end form-group -->
			  	<div class="form-group">
					<textarea placeholder="Your message"></textarea>
				</div>
				<!-- end form-group -->
			  	<div class="form-group">
					<input type="submit" value="SUBMIT">
				</div>
				<!-- end form-group -->
			  </div>
			  <!-- end contact-form -->
		  </div>
		  <!-- end col-6 -->
		</div>
		<!-- end row -->
		</div>
		<!-- end container -->
	</section>
@endsection