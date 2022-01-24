@extends("layouts.welcome.header") 

@section('content')
<!-- BEGIN BODY -->
 
<header class="slider">
  <div class="main-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-inner" data-background="{{ asset('storage/images/landing/slide01.jpg') }}">
          <div class="container" data-swiper-parallax="200">
            <h6 class="tagline">CORE IPTV </h6>
            <h2 class="name">The Low Data App<br>
              <strong>Direct IPTV</strong></h2>
            <ul class="features">
              <li>
                <div class="rate">
                  <svg class="circle-chart" viewBox="0 0 30 30" width="40" height="40" xmlns="http://www.w3.org/2000/svg">
                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="60,100" cx="15" cy="15" r="14"></circle>
                  </svg>
                  <b>6.0</b> CUSTOMER SCORE </div>
                <!-- end rate --> 
              </li>
              <li>
                <div class="year">{{ date('Y') }}</div>
              </li>
              <li>
                <div class="hd">4K <b>ULTRA HD</b></div>
              </li>
              <li>
                <div class="tags">via Amazon Firestick</div>
              </li>
            </ul>
            <p class="description">
              This app doesn't contain any built-in channels, <br>you should have your playlist with TV channels to use this app.
				</p>
            <a href="{{ route('account_subscription','plan') }}" class="play-btn">SUBSCRIBE NOW</a> <a href="account.html" class="add-btn">+</a> </div>
          <!-- end container --> 
        </div>
        <!-- end slide-inner --> 
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <div class="slide-inner bg-image" data-background="{{ asset('storage/images/landing/slide02.jpg') }}">
          <div class="container" data-swiper-parallax="200">
            <h6 class="tagline">TIVIMATE</h6>
            <h2 class="name">URL Connection via<br>
              <strong>TiviMate</strong></h2>
            <ul class="features">
              <li>
                <div class="rate">
                  <svg class="circle-chart" viewBox="0 0 30 30" width="40" height="40" xmlns="http://www.w3.org/2000/svg">
                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                  </svg>
                  <b>5.0</b> CUSTOMER SCORE </div>
                <!-- end rate --> 
              </li>
              <li>
                <div class="year">{{ date('Y') }}</div>
              </li>
              <li>
                <div class="hd">1080 <b>HD</b></div>
              </li>
              <li>
                <div class="tags">via SmartTV, Mobile, and Firestick </div>
              </li>
            </ul>
            <p class="description">With TiviMate you can watch live TV channels from your <br>
              IPTV provider on SmartTv, Mobile [Android or IOS] and Firestick.</p>
            <a href="{{ route('account_subscription','plan') }}" class="play-btn">SUBSCRIBE NOW</a> <a href="account.html" class="add-btn">+</a> </div>
          <!-- end container --> 
        </div>
        <!-- end slide-inner --> 
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <div class="slide-inner bg-image" data-background="{{ asset('storage/images/landing/slide03.jpg') }}">
          <div class="container" data-swiper-parallax="200">
            <h6 class="tagline">IPTV Smarter Pro</h6>
            <h2 class="name">Look & Feel via<br>
              <strong>Smarters Pro</strong></h2>
            <ul class="features">
              <li>
                <div class="rate">
                  <svg class="circle-chart" viewBox="0 0 30 30" width="40" height="40" xmlns="http://www.w3.org/2000/svg">
                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="70,100" cx="15" cy="15" r="14"></circle>
                  </svg>
                  <b>7.5</b> CUSTOMER SCORE </div>
                <!-- end rate --> 
              </li>
              <li>
                <div class="year">{{ date('Y') }}</div>
              </li>
              <li>
                <div class="hd">720P, 4K <b>HD, Ultra HD</b></div>
              </li>
              <li>
                <div class="tags">via Mobile, and Firestick</div>
              </li>
            </ul>
            <p class="description">The Smarters Player App is a fabulous media player that <br>allows end-users to play their content like Live TV, VOD, Series, and Local audio/Video files
				</p>
            <a href="{{ route('account_subscription','plan') }}" class="play-btn">SUBSCRIPTION NOW</a> <a href="account.html" class="add-btn">+</a> </div>
          <!-- end container --> 
        </div>
        <!-- end slide-inner --> 
      </div>
      
      <div class="swiper-slide">
        <div class="slide-inner bg-image" data-background="{{ asset('storage/images/landing/slide03.jpg') }}">
          <div class="container" data-swiper-parallax="200">
            <h6 class="tagline">Smart STB</h6>
            <h2 class="name">In-built Live TV via<br>
              <strong>Smart STB</strong></h2>
            <ul class="features">
              <li>
                <div class="rate">
                  <svg class="circle-chart" viewBox="0 0 30 30" width="40" height="40" xmlns="http://www.w3.org/2000/svg">
                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="80,100" cx="15" cy="15" r="14"></circle>
                  </svg>
                  <b>8.5</b> CUSTOMER SCORE </div>
                <!-- end rate --> 
              </li>
              <li>
                <div class="year">{{ date('Y') }}</div>
              </li>
              <li>
                <div class="hd">720P, 4K <b>HD, Ultra HD</b></div>
              </li>
              <li>
                <div class="tags">via SmartTV, Mobile, and Firestick</div>
              </li>
            </ul>
            <p class="description">The Smart STB Player Application is an amazing media player that <br>allows end-users to play their content like Live TV, VOD, Series, and Local audio/Video files
				</p>
            <a href="{{ route('account_subscription','plan') }}" class="play-btn">SUBSCRIPTION NOW</a> <a href="account.html" class="add-btn">+</a> </div>
          <!-- end container --> 
        </div>
        <!-- end slide-inner --> 
      </div>
      <!-- end swiper-slide --> 
    </div>
    <!-- end swiper-wrapper -->
    <div class="swiper-pagination"></div>
    <!-- end swiper-pagination --> 
  </div>
  <!-- end main-slider --> 
</header>
<!-- end slider -->
<main>
  <section class="content-section" id="platform">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <h6>ONLINE STREAMING</h6>
            <h2>Watch Shows Online via </h2>
          </div>
          <!-- end section-title --> 
        </div>
        <!-- end col-12 -->
        <div class="col-lg-3 col-sm-6">
          <div class="category-thumb">
            <figure class="category-image"> <img src="{{ asset('storage/images/landing/serial-category01.jpg') }}" alt="Image"> </figure>
            <div class="category-content">
              <ul class="tags">
                <li>Android</li>
                <li>Firestick</li>
              </ul>
              <h3 class="name">Core IPTV</h3>
              <div class="play-btn"><a href="movie-single.html">+</a></div>
              <small class="details">Android/Firestick <span>-</span> {{ date('Y') }}</small> </div>
            <!-- end category-content --> 
          </div>
          <!-- end category-thumb --> 
        </div>
        <!-- end col-3 -->
        
        <div class="col-lg-3 col-sm-6">
          <div class="category-thumb">
            <figure class="category-image"> <img src="{{ asset('storage/images/landing/serial-category02.jpg') }}" alt="Image"> </figure>
            <div class="category-content">
              <ul class="tags">
                <li>Android</li>
                <li>Firestick</li>
              </ul>
              <h3 class="name">TiviMate</h3>
              <div class="play-btn"><a href="movie-single.html">+</a></div>
              <small class="details">Android / Firestick <span>-</span> {{ date('Y') }}</small> </div>
            <!-- end category-content --> 
          </div>
          <!-- end category-thumb --> 
        </div>
        <!-- end col-3 -->
        <div class="col-lg-3 col-sm-6">
          <div class="category-thumb">
            <figure class="category-image"> <img src="{{ asset('storage/images/landing/serial-category03.jpg') }}" alt="Image"> </figure>
            <div class="category-content">
              <ul class="tags">
                <li>Android</li>
                <li>IOS</li>
                <li>Firestick</li>
              </ul>
              <h3 class="name">IPTV Smarters Pro</h3>
              <div class="play-btn"><a href="movie-single.html">+</a></div>
              <small class="details">Mobiles & Firestick <span>-</span> {{ date('Y') }}</small> </div>
            <!-- end category-content --> 
          </div>
          <!-- end category-thumb --> 
        </div>
        <!-- end col-3 -->
        <div class="col-lg-3 col-sm-6">
          <div class="category-thumb">
            <figure class="category-image"> <img src="{{ asset('storage/images/landing/serial-category04.jpg') }}" alt="Image"> </figure>
            <div class="category-content">
              <ul class="tags">
                <li>Romance</li>
                <li>Action</li>
              </ul>
              <h3 class="name">Smart STB</h3>
              <div class="play-btn"><a href="movie-single.html">+</a></div>
              <small class="details">SmartTV / Firestick<span>-</span> {{ date('Y') }}</small> </div>
            <!-- end category-content --> 
          </div>
          <!-- end category-thumb --> 
        </div>
        <!-- end col-3 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end content-section -->
  <section class="content-section no-top-spacing">
    <div class="container">
      <div class="row align-items-center no-gutters">
        <div class="col-lg-6">
          <figure class="side-image full-left"> <img src="{{ asset('storage/images/landing/side-image01.png') }}" alt="Image"> </figure>
          <!-- end side-image --> 
        </div>
        <!-- end col-6 -->
        <div class="col-lg-6">
          <div class="side-content right">
            <h2>Best pick for hassle-free <u>streaming</u> experience.</h2>
            <ul class="icon-list">
              <li>
                <figure> <img src="{{ asset('storage/images/landing/icon01.png') }}" alt="Image"> </figure>
                <div class="content">
                  <h4>Access while traveling</h4>
                  <p>Keep access to your entertainment content while
                    roaming the world.Pick from thousands.</p>
                </div>
              </li>
              <li>
                <figure> <img src="{{ asset('storage/images/landing/icon02.png') }}" alt="Image"> </figure>
                <div class="content">
                  <h4>Stream with no interruptions</h4>
                  <p>Pause for snacks, not buffering. Stream smoothly with
                    our <u>lightning-fast</u> protocol network.</p>
                </div>
              </li>
              <li>
                <figure> <img src="{{ asset('storage/images/landing/icon03.png') }}" alt="Image"> </figure>
                <div class="content">
                  <h4>Stay secure at all times</h4>
                  <p>Securely access and enjoy your favorite content,
                    even on public Wi-Fi. Your connection</p>
                </div>
              </li>
            </ul>
          </div>
          <!-- end side-content --> 
        </div>
        <!-- end col-6 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end content-section -->
  <section class="content-section" data-background="#111111" id="country">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center light">
            <h6>FIND ANYWHERE ELSE</h6>
            <h2>Countries Available For You</h2>
          </div>
          <!-- end section-title --> 
        </div>
        <!-- end col-12 -->
        @for ($i = 1; $i <= 12 ; $i++)
            
      
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
          <div class="video-thumb light">
            <figure class="video-image"> <a href="#"><img src="{{ asset('storage/images/landing/movies0'.$i.'.jpg') }}" alt="Image"></a>
              <div class="circle-rate">
                <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                  <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                  <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                </svg>
                <b>5.7</b> </div>
              <!-- end circle-rate -->
              <div class="hd">1080 <b>HD</b></div>
              <!-- end hd --> 
            </figure>
            <div class="video-content"> <small class="range">Sport,Movies,</small>
              <ul class="tags">
                <li>VOD</li>
              </ul>
              <div class="age">PG[+]</div>
              <!-- end age -->
              <h3 class="name"><a href="#">
                @if ($i == 1)
                    United Kingdom
                @elseif($i == 2)
                USA
                @elseif($i == 3)
                Germany
                @elseif($i == 4)
                Canada
                @elseif($i == 5)
                Spain
                @elseif($i == 6)
                India
                @elseif($i == 7)
                Nigeria
                @elseif($i == 8)
                Italy
                @elseif($i == 9)
                South Africa
                @elseif($i == 10)
                Netherlands
                @elseif($i == 11)
                France
                @elseif($i == 12)
                Greece
                    
                @endif
                
                
              </a></h3>
            </div>
            <!-- end video-content --> 
          </div>
          <!-- end video-thumb --> 
        </div>
        @endfor
        <!-- end col-2 -->
        
        <!-- end col-2 -->
        <!-- <div class="col-12 text-center"> <a href="#" class="custom-button">BROWSE ALL MOVIES</a> </div>
         end col-12 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end content-section -->
  <section class="content-section" data-background="{{ asset('storage/images/landing/section-pattern01.png') }}">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="testimonial">
            <h2>Trusted by tech experts
              and real users </h2>
            <blockquote>“As VPN services go, it's hard to beat NordVPN. It
              has a large and diverse collection of servers, an
              excellent collection of advanced features, strong
              privacy and security ”</blockquote>
            <figure> <img src="{{ asset('storage/images/landing/avatar01.jpg') }}" alt="Image"> 
              <img src="{{ asset('storage/images/landing/brand01.jpg') }}" alt="Image"> </figure>
            <h6>Max Eddy <br>
              <small>Software analyst, PCMag</small> </h6>
          </div>
          <!-- end testimonial --> 
        </div>
        <!-- end col-7 -->
        <div class="col-lg-5">
          <figure class="side-image"> <img src="{{ asset('storage/images/landing/side-image02.png') }}" alt="Image"> </figure>
          <!-- end side-image --> 
        </div>
        <!-- end col-5 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end content-section -->
  <section class="content-section" id="price">
    <div class="video-bg">
      <img src="{{ asset('storage/images/landing/video01.jpg') }}" alt="image"></img>
    </div>
    <!-- end video-bg -->
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center light">
            <h6>START UNLIMITED STREAMING</h6>
            <h2>Ready to Grab the deal?</h2>
          </div>
          <!-- end section-title --> 
        </div>
        <!-- end col-12 --> 
      </div>
      <!-- end row -->
      <div class="row">
        <div class="col-lg-3">
          <div class="price-box">
            <figure class="icon"><img src="{{ asset('storage/images/landing/icon04.png') }}" alt="Image"></figure>
            <div class="months">1-month plan</div>
            <div class="price"><span>$</span> <b>18.99</b> <small>per 30 Days</small> </div>
            <a href="{{ route('account_subscription','plan') }}">GET THE DEAL</a>
            <div class="guarantee"><i class="lni lni-protection"></i> 7-days money-back guarantee</div>
          </div>
          <!-- end price-box --> 
        </div>
       
        <div class="col-lg-3">
          <div class="price-box">
            <figure class="icon"><img src="{{ asset('storage/images/landing/icon06.png') }}" alt="Image"></figure>
            <div class="months">3-months plan</div>
            <div class="price"><span>$</span> <b>29.99</b> <small>per 90 Day</small> </div>
            <a href="{{ route('account_subscription','plan') }}">GET THE DEAL</a>
            <div class="guarantee"><i class="lni lni-protection"></i> 30-days money-back guarantee</div>
          </div>
          <!-- end price-box --> 
        </div> 
        <div class="col-lg-3">
          <div class="price-box">
            <figure class="icon"><img src="{{ asset('storage/images/landing/icon06.png') }}" alt="Image"></figure>
            <div class="months">6-months plan</div>
            <div class="price"><span>$</span> <b>69.99</b> <small>per 180 Days</small> </div>
            <a href="{{ route('account_subscription','plan') }}">GET THE DEAL</a>
            <div class="guarantee"><i class="lni lni-protection"></i> 30-days money-back guarantee</div>
          </div>
          <!-- end price-box --> 
        </div>
        <!-- end col-4 --> 

         <!-- end col-4 -->
         <div class="col-lg-3">
          <div class="price-box">
            <figure class="icon"><img src="{{ asset('storage/images/landing/icon05.png') }}" alt="Image"></figure>
            <div class="months">12-months plan</div>
            <div class="price"><span>$</span> <b>99.99</b> <small>per month</small> </div>
            <div class="save">Save 56%</div>
            <div class="note"><u>$228.00</u>  $128.00 for the first 1 years</div>
            <a href="{{ route('account_subscription','plan') }}" style="background: green;">GET THE DEAL</a>
            <div class="guarantee"><i class="lni lni-protection"></i> 30-days money-back guarantee</div>
          </div>
          <!-- end price-box --> 
        </div>
        <!-- end col-4 -->
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end content-section -->
  <section class="content-section no-spacing" data-background="#111111">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="get-started-box">
            <h2>Start for your first 30 days.</h2>
            <p>Ready to watch? Enter your email to create or restart your membership.</p>
            <form>
              <input type="email" placeholder="Type your e-mail address">
              <input type="submit" value="GET STARTED">
            </form>
          </div>
          <!-- end get-started-box --> 
        </div>
        <!-- end col-4 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
@endsection

