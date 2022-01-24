<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>

        <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
        <meta name="robots"
              content="noindex">

        <!-- Custom Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&display=swap"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="{{ asset('user_portal/vendor/perfect-scrollbar.css') }}"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="{{ asset('user_portal/css/material-icons.css') }}"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="{{ asset('user_portal/css/font-awesome.css') }}"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="{{ asset('user_portal/vendor/spinkit.css') }}"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="{{ asset('user_portal/css/app.css') }}"
              rel="stylesheet">

    </head>

    <body class="login">

        @yield('content')

        <!-- jQuery -->
        <script src="{{ asset('user_portal/vendor/jquery.min.js') }}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset('user_portal/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('user_portal/vendor/bootstrap.min.js') }}"></script>

        <!-- Perfect Scrollbar -->
        <script src="{{ asset('user_portal/vendor/perfect-scrollbar.min.js') }}"></script>

        <!-- MDK -->
        <script src="{{ asset('user_portal/vendor/dom-factory.js') }}"></script>
        <script src="{{ asset('user_portal/vendor/material-design-kit.js') }}"></script>

        <!-- App JS -->
        <script src="{{ asset('user_portal/js/app.js') }}"></script>

        <!-- Highlight.js -->
        <script src="{{ asset('user_portal/js/hljs.js') }}"></script>

        <!-- App Settings (safe to remove) -->
        <script src="{{ asset('user_portal/js/app-settings.js') }}"></script>

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