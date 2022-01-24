@extends('layouts.admin.header')
@section('script')
    
    <!-- Password Confirmation -->
    <script>
       function check_pass() {
        if ($('#password').val() == $('#confirm_password').val()) {
            
            $('#message').html('Matching').css('color', 'green');
        } else {
            $('#message').html('Not Matching').css('color', 'red');
        }
            
        
        
       };
    
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
@endsection
@section('content')
<div class="app-content main-content">
    <div class="side-app">

        

        <!--Page header-->
        <div class="page-header">
            <div class="page-leftheader">
                <h4 class="page-title mb-0 text-primary">Edit Profile</h4>
            </div>
            
        </div>
        <!--End Page header-->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="card box-widget widget-user">
                    <div class="widget-user-image mx-auto mt-5"><img alt="{{ $item->name }}" class="rounded-circle" src="{{asset('storage/images/avatar/'.\App\Models\User_privacies::getPhoto($item->id))}}"></div>
                    <div class="card-body text-center pt-2">
                        <div class="pro-user">
                            <h3 class="pro-user-username  mb-1 fs-22">{{ $item->name }}</h3>
                            <h6 class="pro-user-desc text-muted">{{\App\Models\Role::getRole($item->id) == 1?"Administrator":"User"}}</h6>
                            <div class="text-center mb-4">
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                                <span><i class="fa fa-star text-warning"></i></span>
                            </div>
                            
                        </div>
                    </div>
                
                </div>
               
            </div>
            <div class="col-xl-9 col-lg-8">
                <form action="{{ route('admin.contact.profile.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="card">
                    <div class="card-header ">
                        <div class="card-title">Edit Profile</div>
                    </div>
                    <div class="card-body">
                        <div class="card-title font-weight-bold">Basic info:
                            @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="text-danger">{{$error}}</div>
                            @endforeach
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" placeholder="First Name" name="name" value="{{ $item->name }}">
                                    <input type="hidden" name="user_id" value="{{ $item->id }}">
                                </div>
                            </div>
                           
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $item->email }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Phone Number</label>
                                    <input type="number" class="form-control" placeholder="Number" name="phone" value="{{ $item->phone }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" placeholder="Home Address" name="location" value="{{ $item->user_privacies->location }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">New Password</label>
                                    <input type="password" class="form-control" placeholder="Enter New Password" name="password" id="password" >
                                    
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Confirm Password </label>
                                    <input type="password" onkeyup="check_pass();" class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password" >
                                    <span id="message"></span>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label class="form-label">Photo Pictue</label>
                                    <input type="file" class="form-control" name="avatar" placeholder="Add profile image">
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="card-title font-weight-bold mt-5">About:</div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">About Me</label>
                                    <textarea rows="5" name="about" class="form-control" placeholder="Enter About your description">{{ $item->user_privacies->about }}
                                    </textarea>
                                    <input type="hidden" name="recaptcha" id="recaptcha">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn  btn-success">Updated</button>
                        <a onclick="history.back();" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <!-- End Row-->


    </div>
</div>

@endsection