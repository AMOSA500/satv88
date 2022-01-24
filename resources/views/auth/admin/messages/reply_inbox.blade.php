@extends('layouts.admin.header')

@section('content')
   <!--app-content open-->
 <div class="app-content main-content">
    <div class="side-app">

        

        <!--Page header-->
        <div class="page-header">
            <div class="page-leftheader">
                <h4 class="page-title mb-0 text-primary">Chat Reply :: #{{ $ticketNo }}</h4>
            </div>
            
        </div>
        <!--End Page header-->
        <!-- Row -->
        <div class="row">
            <div class="col-md-12 col-lg-4 col-xl-3">
                <div class="card">
                    <div class="list-group list-group-transparent mb-0 mail-inbox mail-inbox-elements pb-3">
                        <div class="mt-4 mb-4 ms-4 me-4 text-center">
                            <a href="{{ route('admin.messages.inbox')}}"><div  class="btn btn-primary d-grid">Messages</div></a>
                        </div>
                        <a href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center font-weight-bold text-muted mb-2">
                            <i class="fe fe-inbox fs-18 me-5 ms-2 text-muted"></i>Unread Message<span class="ms-auto badge bg-secondary me-2">{{ \App\Models\Message::countMessage() }}</span>
                        </a>
                        <a href="{{ route('admin.messages.read_reply',[345678,2]) }}" class="list-group-item list-group-item-action d-flex align-items-center font-weight-bold text-muted mb-2">
                            <i class="fe fe-mail fs-18 me-5 ms-2 text-muted"></i> Compose Messages
                        </a>
                        
                    </div>
                   
                </div>
            </div>
            <div class="col-lg-8 col-xl-9 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Compose reply message</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sendMessage') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <label class="col-sm-2 form-label">To</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="sender" value="{{ $name }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row align-items-center">
                                    <label class="col-sm-2 form-label">Subject</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{ $subject }}" name="subject" readonly>
                                        <input type="hidden" value="#{{ $ticketNo }}" name="ticketNo">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row ">
                                    <label class="col-sm-2 form-label">Message</label>
                                    <div class="col-sm-10">  
                                        @foreach ($messages as $item)
                                        <div class="form-control" >
                                          
                                               <b class="text-primary">{{ $item->sender }}</b> *** {!! rtrim($item->message,' ') !!} ***
                                           
                                        </div> 
                                        @endforeach
                                        <hr>
                                        <textarea rows="5" class="form-control" name="message" required></textarea>
                                        @if($errors->any())
                                        <div class="text-danger"> {{ implode('', $errors->all()) }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div> 
                            <div class="card-footer d-sm-flex">
                        <div class="mt-2 mb-2">
                            <a href="javascript:void(0)" class="btn btn-icon btn-light btn-svg bg-primary-transparent" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete"><i class="fe fe-trash-2 text-primary"></i></a>
                        </div>
                        <div class="btn-list ms-auto">
                            <button type="button" class="btn text-primary btn-outline-light btn-space br-7">Cancel</button>
                            <button type="submit" class="btn text-primary btn-outline-light br-7">Send message <i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                        </form>
                    </div>
                   
                </div>
            </div>
        
        </div>


    </div>
</div>

@endsection