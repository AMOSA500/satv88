<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="WorldCastHDTV – Admin & Dashboard" name="description">
		<meta content="SPRUKO™" name="author">
		<meta name="keywords" content="Watch over 2,000 live stream TV on the go. With our most accessible and affordable plans">

		<!-- Title -->
		<title>WorldCastHDTV –  Admin & Dashboard </title>

        <!--Favicon -->
		<link rel="icon" href="{{ asset('assets/images/brand/favicon.ico') }}" type="image/x-icon"/>

		<!--Bootstrap css -->
		<link href="{{ asset("assets/plugins/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">

		<!-- Style css -->
		<link href="{{ asset("assets/css/style.css") }}" rel="stylesheet" />
		<link href="{{ asset("assets/css/dark.css") }}" rel="stylesheet" />
		<link href="{{ asset("assets/css/skin-modes.css") }}" rel="stylesheet" />

		<!-- Animate css -->
		<link href="{{ asset("assets/css/animated.css") }}" rel="stylesheet" />

		<!--Sidemenu css -->
       <link href="{{ asset("assets/css/sidemenu.css") }}" rel="stylesheet">

		<!-- P-scroll bar css-->
		<link href="{{ asset("assets/plugins/p-scrollbar/p-scrollbar.css") }}" rel="stylesheet" />

		<!---Icons css-->
		<link href="{{ asset("assets/plugins/icons/icons.css") }}" rel="stylesheet" />


		<!-- Simplebar css -->
		<link rel="stylesheet" href="{{ asset("assets/plugins/simplebar/css/simplebar.css") }}">

		<!-- INTERNAL Morris Charts css -->
		<link href="{{ asset("assets/plugins/morris/morris.css") }}" rel="stylesheet" />

		<!-- INTERNAL Select2 css -->
		<link href="{{ asset("assets/plugins/select2/select2.min.css") }}" rel="stylesheet" />

		<!-- Data table css -->
		<link href="{{ asset("assets/plugins/datatables/DataTables/css/dataTables.bootstrap5.css") }}" rel="stylesheet" />
		<link href="{{ asset("assets/plugins/datatables/Buttons/css/buttons.bootstrap5.min.css") }}"  rel="stylesheet">
		<link href="{{ asset("assets/plugins/datatables/Responsive/css/responsive.bootstrap5.min.css") }}" rel="stylesheet" />


	    <!-- Color Skin css -->
		<link id="theme" href="{{ asset("assets/colors/color1.css") }}" rel="stylesheet" type="text/css"/>

	    <!-- INTERNAL Switcher css -->
		<link href="{{ asset("assets/switcher/css/switcher.css") }}" rel="stylesheet"/>
		<link href="{{ asset("assets/switcher/demo.css") }}" rel="stylesheet"/>

		
		<!-- Yield Script -->
		@yield('script')
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
	</head>

	<body class="app sidebar-mini">


        <!---Global-loader-->
        <div id="global-loader" >
            <img src="{{ asset("assets/images/svgs/loader.svg") }}" alt="loader">
        </div>
        <!--- End Global-loader-->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

            <!--aside open-->
				<aside class="app-sidebar">
					<div class="app-sidebar__logo">
						<a class="header-brand" href="#">
							<img src="{{ asset("assets/images/brand/worldcast2.png") }}" class="header-brand-img desktop-lgo" alt="WorldCastHDTV logo">
							<img src="{{ asset("assets/images/brand/logo1.png") }}" class="header-brand-img dark-logo" alt="WorldCastHDTV logo">
							<img src="{{ asset("assets/images/brand/favicon.png") }}" class="header-brand-img mobile-logo" alt="WorldCastHDTV logo">
							<img src="{{ asset("assets/images/brand/favicon1.png") }}" class="header-brand-img darkmobile-logo" alt="WorldCastHDTV logo">
						</a>
					</div>
					<ul class="side-menu app-sidebar3">
						<li class="side-item side-item-category">Main</li>
						<li class="slide">
							<a class="side-menu__item"  href="{{ route('admin.dashboard') }}">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"/></svg>
							<span class="side-menu__label">Dashboard</span></a>
						</li>
						<li class="side-item side-item-category">Components</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11-6h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 6h-4V5h4v4zm-9 4H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6H5v-4h4v4zm8-6c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z"/></svg>
							<span class="side-menu__label">Messages</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{ route('admin.messages.inbox') }}" class="slide-item"> Inbox</a></li>
								<li><a href="{{ route('admin.messages.read_reply',[345678,2]) }}" class="slide-item"> Compose</a></li>
								<li><a href="#" class="slide-item"> SMS</a></li>
								
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20 7h-4V4c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H4c-1.103 0-2 .897-2 2v9a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V9c0-1.103-.897-2-2-2zM4 11h4v8H4v-8zm6-1V4h4v15h-4v-9zm10 9h-4V9h4v10z"/></svg>
							<span class="side-menu__label">Sales</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{ route('admin.sales.invoice_list') }}" class="slide-item"> Invoice List</a></li>
								<li><a href="{{ route('admin.sales.analysis') }}" class="slide-item"> Analysis</a></li>
								
							</ul>
						</li>
						
						<li class="side-item side-item-category">Customer & Chat </li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M19 3H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm0 2 .001 4H5V5h14zM5 11h8v8H5v-8zm10 8v-8h4.001l.001 8H15z"/></svg>
							<span class="side-menu__label">Contact</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{ route('admin.contact.profile') }}" class="slide-item">Profiles</a></li>
								
							</ul>
						</li>
						<li class="slide">
						    <a class="side-menu__item" data-bs-toggle="slide" href="#">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20 7h-1.209A4.92 4.92 0 0 0 19 5.5C19 3.57 17.43 2 15.5 2c-1.622 0-2.705 1.482-3.404 3.085C11.407 3.57 10.269 2 8.5 2 6.57 2 5 3.57 5 5.5c0 .596.079 1.089.209 1.5H4c-1.103 0-2 .897-2 2v2c0 1.103.897 2 2 2v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7c1.103 0 2-.897 2-2V9c0-1.103-.897-2-2-2zm-4.5-3c.827 0 1.5.673 1.5 1.5C17 7 16.374 7 16 7h-2.478c.511-1.576 1.253-3 1.978-3zM7 5.5C7 4.673 7.673 4 8.5 4c.888 0 1.714 1.525 2.198 3H8c-.374 0-1 0-1-1.5zM4 9h7v2H4V9zm2 11v-7h5v7H6zm12 0h-5v-7h5v7zm-5-9V9.085L13.017 9H20l.001 2H13z"/></svg>
							<span class="side-menu__label">Chats</span><span class="badge bg-danger  side-badge">11</span>
							</a>
							
						</li>
						<li class="side-item side-item-category">Product & Packages</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11 4h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6h-4v-4h4v4zM17 3c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zM7 13c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z"/></svg>
							<span class="side-menu__label">Products</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="slide-menu ">
								<li><a href="#" class="slide-item">View Products</a></li>
								<li><a href="#" class="slide-item">Add New Product</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="m21.447 6.105-6-3a1 1 0 0 0-.895 0L9 5.882 3.447 3.105A1 1 0 0 0 2 4v13c0 .379.214.725.553.895l6 3a1 1 0 0 0 .895 0L15 18.118l5.553 2.776a.992.992 0 0 0 .972-.043c.295-.183.475-.504.475-.851V7c0-.379-.214-.725-.553-.895zM10 7.618l4-2v10.764l-4 2V7.618zm-6-2 4 2v10.764l-4-2V5.618zm16 12.764-4-2V5.618l4 2v10.764z"/></svg>
							<span class="side-menu__label">Packages</span>
						</a>
							
						</li>
						
						<li class="side-item side-item-category">Settings</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/></svg>
							<span class="side-menu__label">Logout</span>
						</a>
						
						</li>
						
					</ul>
				</aside>
				<!--aside closed-->
            <!--app header-->
						<div class="app-header header main-header1">
							<div class="container-fluid">
								<div class="d-flex">
									<a class="header-brand" href="#">
										<img src="{{ asset("assets/images/brand/worldcast2.png") }}" class="header-brand-img desktop-lgo" alt="WorldCastHDTV logo">
										<img src="{{ asset("assets/images/brand/logo1.png") }}" class="header-brand-img dark-logo" alt="WorldCastHDTV logo">
										<img src="{{ asset("assets/images/brand/favicon.png") }}" class="header-brand-img mobile-logo" alt="WorldCastHDTV logo">
										<img src="{{ asset("assets/images/brand/favicon1.png") }}" class="header-brand-img darkmobile-logo" alt="WorldCastHDTV logo">
									</a>
									<div class="app-sidebar__toggle d-flex" data-bs-toggle="sidebar">
										<a class="open-toggle" href="javascript:void(0);">
											<svg xmlns="http://www.w3.org/2000/svg" class="feather feather-align-left header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/></svg>
										</a>
									</div>
									<div class="mt-1 d-md-block d-none">
										<form class="form-inline">
											<div class="search-element">
												<input type="search" class="form-control header-search mobile-view-search" placeholder="Search…" aria-label="Search" tabindex="1">
												<button class="btn btn-primary-color" type="submit">
													<svg xmlns="http://www.w3.org/2000/svg" class="header-icon search-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"/></svg>
												</button>
											</div>
										</form>
									</div><!-- SEARCH -->
									<div class="d-flex order-lg-2 ms-auto main-header-end">
										<button  class="navbar-toggler navresponsive-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="true" aria-label="Toggle navigation">
											<i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
										</button>
										<div class="navbar navbar-expand-lg navbar-collapse responsive-navbar p-0">
											<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
												<div class="d-flex order-lg-2">
													<div class="dropdown d-lg-none d-flex responsive-search">
														<a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="dropdown">
															<svg xmlns="http://www.w3.org/2000/svg" class="header-icon search-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"/></svg>
														</a>
														<div class="dropdown-menu header-search dropdown-menu-start">
															<div class="input-group w-100 p-2">
																<input type="text" class="form-control" placeholder="Search....">
																<button class="btn btn-primary-color" type="submit">
																	<svg xmlns="http://www.w3.org/2000/svg" class="header-icon search-icon p-1 mt-1" width="24" height="24" viewBox="0 0 24 24"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"/></svg>
																</button>
															</div>
														</div>
													</div>
													<!-- SEARCH -->
													<div class="dropdown d-flex">
														<a class="nav-link icon theme-layout nav-link-bg layout-setting">
															<span class="light-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20.742 13.045a8.088 8.088 0 0 1-2.077.271c-2.135 0-4.14-.83-5.646-2.336a8.025 8.025 0 0 1-2.064-7.723A1 1 0 0 0 9.73 2.034a10.014 10.014 0 0 0-4.489 2.582c-3.898 3.898-3.898 10.243 0 14.143a9.937 9.937 0 0 0 7.072 2.93 9.93 9.93 0 0 0 7.07-2.929 10.007 10.007 0 0 0 2.583-4.491 1.001 1.001 0 0 0-1.224-1.224zm-2.772 4.301a7.947 7.947 0 0 1-5.656 2.343 7.953 7.953 0 0 1-5.658-2.344c-3.118-3.119-3.118-8.195 0-11.314a7.923 7.923 0 0 1 2.06-1.483 10.027 10.027 0 0 0 2.89 7.848 9.972 9.972 0 0 0 7.848 2.891 8.036 8.036 0 0 1-1.484 2.059z"/></svg></span>
															<span class="dark-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M6.993 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007S14.761 6.993 12 6.993 6.993 9.239 6.993 12zM12 8.993c1.658 0 3.007 1.349 3.007 3.007S13.658 15.007 12 15.007 8.993 13.658 8.993 12 10.342 8.993 12 8.993zM10.998 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2h-3zm17 0h3v2h-3zM4.219 18.363l2.12-2.122 1.415 1.414-2.12 2.122zM16.24 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.342 7.759 4.22 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z"/></svg></span>
														</a>
													</div>
													<!-- Theme-Layout -->

													<div class="dropdown header-message d-flex">
														<a class="nav-link icon" data-bs-toggle="dropdown">
															<svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"/></svg>
															<span class="badge bg-success side-badge">5</span>
														</a>
														<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow  animated">
															<div class="dropdown-header">
																<h6 class="mb-0">Messages</h6>
																<span class="badge fs-10 bg-secondary br-7 ms-auto">New</span>
															</div>
															<div class="header-dropdown-list message-menu">
																<a class="dropdown-item border-bottom" href="#">
																	<div class="d-flex align-items-center">
																		<div class="">
																			<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="https://laravel.spruko.com/azea/azea/assets/images/users/1.jpg"></span>
																		</div>
																		<div class="d-flex mt-1 mb-1">
																			<div class="ps-3">
																				<span class="mb-1 fs-13">Joan Powell</span>
																				<p class="fs-12 mb-1">All the best your template awesome</p>
																				<div class="fs-11 text-muted">
																					3 hours ago
																				</div>
																			</div>
																		</div>
																	</div>
																</a>

															</div>
															<div class=" text-center p-2 pt-3 border-top">
																<a href="#" class="fs-13 btn btn-primary btn-md btn-block">See More</a>
															</div>
														</div>
													</div>
													<div class="dropdown header-notify d-flex">
														<a class="nav-link icon" data-bs-toggle="dropdown">
															<svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z"/></svg><span class="pulse "></span>
														</a>
														<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow  animated">
															<div class="dropdown-header">
																<h6 class="mb-0">Notifications</h6>
																<span class="badge fs-10 bg-secondary br-7 ms-auto">New</span>
															</div>
															<div class="notify-menu">
																<a href="#" class="dropdown-item border-bottom d-flex ps-4">
																	<div class="notifyimg  text-primary bg-primary-transparent border-primary"> <i class="fa fa-envelope"></i> </div>
																	<div>
																		<span class="fs-13">Message Sent.</span>
																		<div class="small text-muted">3 hours ago</div>
																	</div>
																</a>
																<a href="email-inbox.html" class="dropdown-item border-bottom d-flex ps-4">
																	<div class="notifyimg  text-secondary bg-secondary-transparent border-secondary"> <i class="fa fa-shopping-cart"></i></div>
																	<div>
																		<span class="fs-13">Order Placed</span>
																		<div class="small text-muted">5  hour ago</div>
																	</div>
																</a>
																<a href="email-inbox.html" class="dropdown-item border-bottom d-flex ps-4">
																	<div class="notifyimg  text-danger bg-danger-transparent border-danger"> <i class="fa fa-gift"></i> </div>
																	<div>
																		<span class="fs-13">Event Started</span>
																		<div class="small text-muted">45 mintues ago</div>
																	</div>
																</a>
																<a href="email-inbox.html" class="dropdown-item border-bottom d-flex ps-4 mb-2">
																	<div class="notifyimg  text-success  bg-success-transparent border-success"> <i class="fa fa-windows"></i> </div>
																	<div>
																		<span class="fs-13">Your Admin lanuched</span>
																		<div class="small text-muted">1 daya ago</div>
																	</div>
																</a>
															</div>
															<div class=" text-center p-2">
																<a href="email-inbox.html" class="btn btn-primary btn-md fs-13 btn-block">View All</a>
															</div>
														</div>
													</div>

													<!-- USER PROFILE-->
													<div class="dropdown profile-dropdown d-flex">
														<a href="javascript:void(0);" class="nav-link pe-0 leading-none" data-bs-toggle="dropdown">
															<span class="header-avatar1">
																<img src="{{ asset("assets/images/users/2.jpg") }}" alt="img" class="avatar avatar-md brround">
															</span>
														</a>
														<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated">
															<div class="text-center">
																<div class="text-center user pb-0 font-weight-bold">Patrenna</div>
																<span class="text-center user-semi-title">Web Designer</span>
																<div class="dropdown-divider"></div>
															</div>
															<a class="dropdown-item d-flex" href="profile1.html">
																<svg class="header-icon me-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"/></svg>
																<div class="fs-13">Profile</div>
															</a>
															<a class="dropdown-item d-flex" href="search.html">
																<svg class="header-icon me-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/></svg>
																<div class="fs-13">Settings</div>
															</a>
															<a class="dropdown-item d-flex" href="chat.html">
																<svg class="header-icon me-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 4h16v12H5.17L4 17.17V4m0-2c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2H4zm2 10h12v2H6v-2zm0-3h12v2H6V9zm0-3h12v2H6V6z"/></svg>
																<div class="fs-13">Messages</div>
															</a>
															<a class="dropdown-item d-flex" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                                                document.getElementById('logout-form').submit()">
																<svg class="header-icon me-2" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z"/></g></svg>
																<div class="fs-13">Sign Out</div>
                                                                
															</a>
                                                            <form action="{{ route('logout') }}" method="POST" id="logout-form">@csrf</form>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
						<!--/app header-->

                        @yield('content')
						
                        @include('layouts.admin.footer')