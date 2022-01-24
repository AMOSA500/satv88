@extends('layouts.home_app')

@section('title')
    ::Account Profile Privacy | User Portal::
@endsection
@section('content')

<div class="mdk-drawer-layout__content page ">

                        <div class="container-fluid page__container p-0">
                            <div class="row m-0">
                                <div class="col-lg container-fluid page__container">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item active">Edit Account</li>
                                    </ol>
                                    <h1 class="h2">Profile &amp; Privacy</h1>
                                    <div class="card">
                                        <div class="list-group list-group-fit">
                                            <form action="{{ route('account_privacy') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                            <div class="list-group-item">
                                                <div role="group"
                                                     aria-labelledby="label-avatar"
                                                     class="m-0 form-group">
                                                    <div class="form-row">
                                                        <label id="label-avatar"
                                                               for="avatar"
                                                               class="col-md-3 col-form-label form-label">Your photo </label>
                                                        <div class="col-md-9">
                                                            <div class="media align-items-center">
                                                                <div class="d-flex mr-3 align-self-center">
                                                                    <span class="avatar avatar-lg">
                                                                        @if ($user->user_privacies['photo'])
                                                                        <img src="{!! asset('storage/images/avatar/'.$user->user_privacies['photo'])!!}" class="avatar" alt=""  > 
                                                                        @else
                                                                            <span class="avatar-title rounded" id="avatar-default">
                                                                                <i class="material-icons">photo</i>
                                                                            </span>
                                                                            <img src="" class="avatar" alt=""  style="display: none"> 
                                                                        @endif
                                                                        
                                                                    </span>
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="custom-file b-form-file">
                                                                        <input type="file"
                                                                                onchange="previewFile()"
                                                                               id="avatar"
                                                                               name="avatar"
                                                                               
                                                                               aria-describedby="label-avatar-control"
                                                                               class="custom-file-input">
                                                                        <label id="label-avatar-control"
                                                                               class="custom-file-label">{!! $user->user_privacies['photo']?: "Your avatar photo"!!}</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div role="group"
                                                     aria-labelledby="label-location"
                                                     class="m-0 form-group">
                                                    <div class="form-row">
                                                        <label id="label-location"
                                                               for="location"
                                                               class="col-md-3 col-form-label form-label">Location</label>
                                                        <div class="col-md-9">
                                                            <div role="group"
                                                                 class="input-group input-group-merge">
                                                                <input id="location"
                                                                       type="text"
                                                                       placeholder="Your location"
                                                                       name="location"
                                                                       value="{!! $user->user_privacies['location']?: ''!!}"
                                                                       class="form-control form-control-prepended"
                                                                       aria-describedby="description-location">
                                                                
                                                            </div>
                                                            <small id="description-location"
                                                                   class="form-text text-muted">Your location will not be used as part of your public profile URL address.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div role="group"
                                                     aria-labelledby="label-about"
                                                     class="m-0 form-group">
                                                    <div class="form-row">
                                                        <label id="label-about"
                                                               for="about"
                                                               class="col-md-3 col-form-label form-label">About you</label>
                                                        <div class="col-md-9">
                                                            <textarea id="about"
                                                                      placeholder="About you ..."
                                                                      name="about"
                                                                      rows="3"
                                                                      class="form-control">{!! $user->user_privacies['about']!!}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                <div id="page-nav"
                                     class="col-lg-auto page-nav">
                                    <div data-perfect-scrollbar>
                                        <div class="page-section pt-lg-32pt">
                                            <ul class="nav page-nav__menu">
                                                <li class="nav-item">
                                                    <a href="{{ route('account_subscription','user') }}"
                                                       class="nav-link @if(route('account_subscription','user') == Request::url()) active @endif">Basic Information</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="student-account-edit-profile.html"
                                                       class="nav-link @if(route('account_subscription','profile') == Request::url()) active @endif">Profile &amp; Privacy</a>
                                                </li>
                                            </ul>
                                            <div class="page-nav__content">
                                                <button class="btn btn-success">Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>

                    </div>
@endsection
@section('js')
    <script>

        
        function previewFile() 
        {
            var file    = document.querySelector('input[type=file]').files[0];
            document.getElementById('label-avatar-control').textContent = file.name;
            $("#avatar-default").fadeOut('fast');
            $("img").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
            
                        
        }
        document.ready(function(){
            alert('Load am');
        });
        
            
           
            
        

    </script>
@endsection
