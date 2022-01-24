@extends('layouts.welcome.header')

@section('content')
    
<header class="page-header">
	<div class="container">
	<h1>Devices</h1>
	</div>
	</header>
<!-- end page-header -->
<main>
  <section class="content-section">
    <div class="container">
      <div class="row">
			 <div class="col-12">
          <div class="section-title text-center">
			  <h6>PLATFORM SUPPORT</h6>
            <h2>Compatible Devices</h2>
          </div>
          <!-- end section-title -->
        </div>
        <!-- end col-12 -->
		  <div class="col-md-6">
		  	<div class="devices-box">
			  <figure>
				<img src="{{ asset('storage/images/landing/devices01.png') }}" alt="Image">
				</figure>
				<h5>SMART TV</h5>
				<p>
                    We provide series of streaming platforms that support smart tv, with amazing channels and user interface design. Enjoy up to 8K ultra video while you stream.
                </p>
				<ul>
				<li>LG Smart</li>
				<li>Samsung</li>
				<li>Sony X</li>
				</ul>
			  </div>
			  <!-- end devices-box -->
		  </div>
		  <!-- end col-6 -->
		  <div class="col-md-6">
		  	<div class="devices-box">
			  <figure>
				<img src="{{ asset('storage/images/landing/devices02.png') }}" alt="Image">
				</figure>
				<h5>MULTI-MEDIA</h5>
				<p>
                    Our applications are widely supported on mobile tv devices with little or no error while streaming. The user interface remain the same just as your device
                </p>
				<ul>
				<li>Apple TV</li>
				<li>IconBIT</li>
				<li>Android TV</li>
				<li>Cinemood</li>
				</ul>
			  </div>
			  <!-- end devices-box -->
		  </div>
		  <!-- end col-6 -->
		  <div class="col-md-6">
		  	<div class="devices-box">
			  <figure>
				<img src="{{ asset('storage/images/landing/devices03.png') }}" alt="Image">
				</figure>
				<h5>MOBILE & TABLETS</h5>
				<p>
                    Install any of our stream application and enjoy the same view experience. You can stream via the stated devices below. Privacy control is also available.
                </p>
				<ul>
				<li>IOS</li>
				<li>Androd</li>
				<li>Windows</li>
				<li>Huawei</li>
				</ul>
			  </div>
			  <!-- end devices-box -->
		  </div>
		  <!-- end col-6 -->
		  <div class="col-md-6">
		  	<div class="devices-box">
			  <figure>
				<img src="{{ asset('storage/images/landing/devices04.png') }}" alt="Image">
				</figure>
				<h5>FIRESTICK</h5>
				<p>Enjoy 4k Ultra HD video streaming from any of the devices available on the firestick and also have access to privacy controls.</p>
				<ul>
				<li>Amazon</li>
				<li>Google</li>
				<li>Xiaomi</li>
				<li>Roku</li>
				</ul>
			  </div>
			  <!-- end devices-box -->
		  </div>
		  <!-- end col-6 -->
		</div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end content-section -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h5 class="call-us">Questions? <strong>Call 0850-380-6444</strong></h5>
          <p> Format for custom post types that are not book
            or you can use else if to <u>specify a second</u> post type the
            same way as above. </p>
          <div class="language"> <i class="lni lni-world"></i>
            <select>
              <option>English</option>
              <option>Spanish</option>
            </select>
          </div>
          <!-- end language -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-2 offset-lg-1 col-md-4">
          <h6 class="widget-title">DIGIFLEX</h6>
          <ul class="footer-menu">
            <li><a href="digiflex.html">Digiflex</a></li>
            <li><a href="devices.html">Devices</a></li>
            <li><a href="tips.html">Tips</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
        <!-- end col-4 -->
        <div class="col-lg-2 col-md-4">
          <h6 class="widget-title">SUPPORT</h6>
          <ul class="footer-menu">
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="help-center.html">Help Center</a></li>
            <li><a href="account.html">Account</a></li>
            <li><a href="support.html">Support <i class="lni lni-question-circle"></i></a></li>
            <li><a href="media-center.html">Media Center</a></li>
          </ul>
        </div>
        <!-- end col-4 -->
        <div class="col-lg-2 col-md-4">
          <h6 class="widget-title">POLICIES</h6>
          <ul class="footer-menu">
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="terms-agreement.html">Terms & Agreement</a></li>
            <li><a href="legal-notices.html">Legal Notices</a></li>
          </ul>
        </div>
        <!-- end col-4 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
    <div class="bottom-bar">
      <div class="container"> <span>© 2020 Digiflex | Online Movie Streaming</span> <span>Site create by <a href="#">Themezinho</a></span> </div>
      <!-- end container -->
    </div>
    <!-- end bottom-bar -->
  </footer>
  <!-- end footer -->
</main>

@endsection