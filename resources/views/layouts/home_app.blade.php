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

              <!--- Toastr -->
              @toastr_css
              <style>
                  #toast-container > .toast-success {

                        background-color: rgb(7, 185, 7);;
                        color: black;
                    }
                    #toast-container > .toast-error {

                        background-color: rgb(245, 6, 6);;
                        color: black;
                    }
              </style>

                @yield('style');


    </head>

    <body class="@if(route('support_ticket') == Request::url()) app-messages @endif layout-fluid">

      <div class="preloader">
          <div class="sk-chase">
              <div class="sk-chase-dot"></div>
              <div class="sk-chase-dot"></div>
              <div class="sk-chase-dot"></div>
              <div class="sk-chase-dot"></div>
              <div class="sk-chase-dot"></div>
              <div class="sk-chase-dot"></div>
          </div>

      </div>

      <div class="mdk-header-layout js-mdk-header-layout">

      <!-- Header -->

      <div id="header"
           data-fixed
           class="mdk-header js-mdk-header mb-0">
          <div class="mdk-header__content">

              <!-- Navbar -->
              <nav id="default-navbar"
                   class="navbar navbar-expand navbar-dark bg-primary m-0">
                  <div class="container-fluid">
                      <!-- Toggle sidebar -->
                      <button class="navbar-toggler d-block"
                              data-toggle="sidebar"
                              type="button">
                          <span class="material-icons">menu</span>
                      </button>

                      <!-- Brand -->
                      <a href="{{ route('home') }}" class="navbar-brand">

                          <span class="d-none d-xs-md-block">WorldCastHDTV</span>
                      </a>

                      <div class="flex"></div>


                      <!-- Menu -->
                      <ul class="nav navbar-nav flex-nowrap">

                          <!-- Notifications dropdown -->
                          <li class="nav-item dropdown dropdown-notifications dropdown-menu-sm-full">
                              <button class="nav-link btn-flush dropdown-toggle"
                                      type="button"
                                      data-toggle="dropdown"
                                      data-dropdown-disable-document-scroll
                                      data-caret="false">
                                  <i class="material-icons">notifications</i>
                                  <span class="badge badge-notifications badge-danger">{{ \App\Models\Message::countNewMessage(auth()->user()->id)}}</span>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <div data-perfect-scrollbar
                                       class="position-relative">
                                      <div class="dropdown-header"><strong>Messages</strong></div>
                                      @foreach ((\App\Models\Message::notificationMessage(auth()->user()->id)) as $item)
                                      <div class="list-group list-group-flush mb-0">
                                          <a href="instructor-messages.html"
                                             class="list-group-item list-group-item-action unread">
                                              <span class="d-flex align-items-center mb-1">
                                                  <small class="text-muted">5 minutes ago</small>

                                                  <span class="ml-auto unread-indicator bg-primary"></span>

                                              </span>
                                              <span class="d-flex">
                                                  <span class="avatar avatar-xs mr-2">
                                                      <img src="{{ asset('storage/images/avatar/U8NVvgare4pE59n8.jpeg') }}"
                                                           alt="people"
                                                           class="avatar-img rounded-circle">
                                                  </span>
                                                  <span class="flex d-flex flex-column">
                                                      <strong>Support Ticket</strong>
                                                      <span class="text-black-70">You have a response from admin</span>
                                                  </span>
                                              </span>
                                          </a>



                                      </div>
                                      @endforeach


                                  </div>
                              </div>
                          </li>
                          <!-- // END Notifications dropdown -->
                          <!-- User dropdown -->
                          <li class="nav-item dropdown ml-1 ml-md-3">
                              <a class="nav-link dropdown-toggle"
                                 data-toggle="dropdown"
                                 href="user-dashboard.html#"
                                 role="button"><img src="{{ asset('storage/images/avatar/'.Auth::user()->user_privacies['photo'])}}"
                                       alt="Avatar"
                                       class="rounded-circle"
                                       width="40" height="40"></a>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item"
                                     href="{!! route('account_edit','basic') !!}">
                                      <i class="material-icons">edit</i> Edit Account
                                  </a>


                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                   <i class="material-icons">lock</i>{{ __('Logout') }}
                                    </a>

                               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                   @csrf
                               </form>

                              </div>
                          </li>
                          <!-- // END User dropdown -->
                      </ul>
                  </div>
              </nav>
              <!-- // END Navbar -->

          </div>
      </div>

      <!-- // END Header -->

      <!-- Header Layout Content -->
      <div class="mdk-header-layout__content">

          <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">

            <!-- Yield Content -->
            @yield('content')

              <div class="mdk-drawer js-mdk-drawer"
                   id="default-drawer">
                  <div class="mdk-drawer__content ">
                      <div class="sidebar sidebar-left sidebar-dark bg-dark o-hidden"
                           data-perfect-scrollbar>
                          <div class="sidebar-p-y">
                              <div class="sidebar-heading">APPLICATION V1.0</div>
                              <ul class="sidebar-menu sm-active-button-bg">

                                  <li class="sidebar-menu-item {!! Request::is('home')? 'active':'' !!}">
                                      <a class="sidebar-menu-button"
                                         href="{!! route('home') !!}">
                                          <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i> Dashboard
                                      </a>
                                  </li>
                              </ul>
                              <!-- Account menu -->
                              <div class="sidebar-heading">Account</div>
                              <ul class="sidebar-menu">




                                          <li class="sidebar-menu-item @if(route('account_edit','user') == Request::url()) active @endif">
                                              <a class="sidebar-menu-button"
                                                 href="{!! route('account_edit','user') !!}">
                                                  <span class="sidebar-menu-text"><i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">folder_shared</i>Basic Information</span>
                                              </a>
                                          </li>
                                          <!-- <li class="sidebar-menu-item @if(route('account_edit','basic') == Request::url()) active @endif">
                                              <a class="sidebar-menu-button"
                                                 href="{!! route('account_edit','basic') !!}">
                                                  <span class="sidebar-menu-text"><i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">folder_shared</i>Basic Information</span>
                                              </a>
                                          </li> -->
                                          <li class="sidebar-menu-item @if(route('account_edit','profile') == Request::url()) active @endif">
                                              <a class="sidebar-menu-button"
                                                 href="{!! route('account_edit','profile') !!}">
                                                  <span class="sidebar-menu-text"><i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person_outline</i>Profile &amp; Privacy</span>
                                              </a>
                                          </li>


                                          <li class="sidebar-menu-item @if(route('account_subscription','detail') == Request::url()) active @endif">
                                              <a class="sidebar-menu-button"
                                                 href="{{ route('account_subscription','detail') }}">
                                                  <span class="sidebar-menu-text"><i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">subscriptions</i>Subscription <span class="badge badge-warning">{{ \App\Models\Invoice::countActiveInvoice()}}</span></span>
                                              </a>
                                          </li>
                                          <li class="sidebar-menu-item @if(route('account_subscription','plan') == Request::url()) active @endif">
                                              <a class="sidebar-menu-button"
                                                 href="{{ route('account_subscription','plan') }}">
                                                  <span class="sidebar-menu-text"><i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">trending_up</i>Account Packages</span>
                                              </a>
                                          </li>

                                          <div class="sidebar-heading">Payments</div>

                                          <li class="sidebar-menu-item @if(route('account_subscription','history') == Request::url()) active @endif">
                                              <a class="sidebar-menu-button"
                                                 href="{{ route('account_subscription','history') }}">
                                                  <span class="sidebar-menu-text"><i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">history</i>Payment History</span>
                                              </a>
                                          </li>
                                          <li class="sidebar-menu-item @if(route('account_subscription','invoice') == Request::url()) active @endif">
                                              <a class="sidebar-menu-button"
                                                 href="{{ route('account_subscription','invoice') }}">
                                                  <span class="sidebar-menu-text"><i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">receipt</i>Invoice <span class="badge badge-danger">{{ \App\Models\Invoice::countInvoice()}}</span></span>
                                              </a>
                                          </li>



                                  <li class="sidebar-menu-item @if(route('support_ticket') == Request::url()) active @endif">
                                      <a class="sidebar-menu-button"
                                         href="{{ route('support_ticket') }}">
                                         <span class="sidebar-menu-text"><i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">messenger</i>Support Ticket <span class="badge badge-success">{{ \App\Models\Message::countNewMessage(auth()->user()->id)}}</span></span>

                                      </a>

                                  </li>
                              </ul>
                              <div class="sidebar-heading">System</div>
                              <ul class="sidebar-menu sm-active-button-bg">

                                  <li class="sidebar-menu-item">

                                      <a class="sidebar-menu-button" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                       <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">lock</i>{{ __('Logout') }}
                                        </a>

                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                       @csrf
                                   </form>

                                  </li>
                              </ul>



                          </div>
                      </div>
                  </div>
              </div>

          </div>



      </div>
  </div>

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

        <!-- Global Settings -->
        <script src="{{  asset('user_portal/js/settings.js')}}"></script>

        <!-- Moment.js -->
        <script src="{{  asset('user_portal/vendor/moment.min.js')}}"></script>
        <script src="{{  asset('user_portal/vendor/moment-range.js')}}"></script>

        <!-- Chart.js -->
        <script src="{{  asset('user_portal/vendor/Chart.min.js')}}"></script>
        <script src="{{  asset('user_portal/js/chartjs-rounded-bar.js')}}"></script>
        <script src="{{  asset('user_portal/js/chartjs.js')}}"></script>

        <!-- Instructor Dashboard Page JS -->
        <script src="{{  asset('user_portal/js/page.instructor-dashboard.js')}}"></script>

        <!-- List.js -->
        <script src="{{  asset('user_portal/vendor/list.min.js')}}"></script>
        <script src="{{  asset('user_portal/js/list.js')}}"></script>


        <!-- Messages App -->
        <script src="{{  asset('user_portal/js/messages.js')}}"></script>

        <!-- Content Js -->
        @yield('js')

        <!-- Toastr Js -->
        @jquery
        @toastr_js
        @toastr_render

    </body>

</html>
