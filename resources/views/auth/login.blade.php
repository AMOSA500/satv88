
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sat48 User Account Login</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('../css/login_style.css') }}">
 

</head>
<body>
<!-- partial:index.partial.html -->
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h1>Sat48.<span style="color: red; font-size: 0.5em">com</span></h1>
		<p>Get the TV Stick 4K Ultra HD Streaming Device With Alexa Voice Remote Dolby Vision 2020 Release online</p>
		<span>
			<p>login with social media</p>
			<a href="/"><i class="fa fa-home" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		</span>
		</div>
	</div>
	
	
		<div class="right">
		<h5>Login</h5>
		<p>Don't have an account? <a href="{{ route('register') }}">Creat Your Account</a> it takes less than a minute
            @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="text-danger">{{$error}}</div>
            @endforeach
            @endif
           
        </p>
        <form  novalidate method="post" action="{{ route('login') }}">
            {{ csrf_field() }}
        
            <div class="inputs">
                <input type="hidden" name="recaptcha" id="recaptcha">
                <input id="email"
                       type="email"
                       required=""
                       class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                       placeholder="Your email address">
                       @error('email')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                         @enderror
                
			<br>
			<input id="password"
                              type="password"
                              required=""
                              class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                              placeholder="Your password">

                              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                       
		</div>
			
			<br><br>

        
			
		<div class="remember-me--forget-password">
				<!-- Angular -->
            <label>
                <input type="checkbox" name="item" checked/>
                <span class="text-checkbox">Remember me</span>
            </label>
                    <p><a href="{{ route('password.request') }}"
                        style="text-decoration: underline;">Forgot Password?</a></p>
		</div>
			
			<br>
			<button type="submit" style="pointer: cursor">Login</button>
        
        </form>

	</div>
       
	
</div>
<!-- partial -->
  <!-- Google Recaptcha -->
 <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.sitekey') }}"></script>
 <script>
     grecaptcha.ready(function() {
         grecaptcha.execute('{{ config('services.recaptcha.sitekey') }}', {action: 'contact'}).then(function(token) {
            if (token) {
              document.getElementById('recaptcha').value = token;
            }
         });
     });
</script>
</body>
</html>
