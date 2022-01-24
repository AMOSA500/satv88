@extends('layouts.home_app')

@section('title')
    ::Account Edit Basic | User Portal::
@endsection
@section('content')

<div class="mdk-drawer-layout__content page ">

    <div data-push
         data-responsive-width="768px"
         class="mdk-drawer-layout js-mdk-drawer-layout">
        <div class="mdk-drawer-layout__content">

            <div class="app-messages__container d-flex flex-column h-100 pb-4">
                <div class="navbar navbar-light bg-white navbar-expand-sm navbar-shadow z-1">
                    <div class="container-fluid flex-wrap px-sm-0">
                        <div class="nav py-2">
                            <div class="nav-item align-items-center mr-3">
                                <div class="mr-3">
                                  
                                </div>
                                <div class="d-flex flex-column"
                                     style="max-width: 200px; font-size: 15px">
                                    <strong class="text-body">{{ Auth()->user()->name }}</strong>
                                    <span class="text-muted text-ellipsis">{{ auth()->user()->user_privacies->about }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="py-2 flex d-flex align-items-center">
                            <div class="flex search-form form-control-rounded search-form--light"
                                 style="min-width: 200px;">
                                <input type="text"
                                       class="form-control"
                                       placeholder="Search messages"
                                       id="searchSample02">
                                <button class="btn pr-3"
                                        type="button"
                                        role="button"><i class="material-icons">search</i></button>
                            </div>
                            <button data-target="#messages-drawer"
                                    class="navbar-toggler d-block d-md-none ml-3 p-0"
                                    data-toggle="sidebar"
                                    type="button">
                                <i class="material-icons">people_outline</i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex pt-4"
                     style="position: relative;"
                     data-perfect-scrollbar>
                    <div class="container-fluid page__container">
                        <div class="jumbotron">
                            <div class="d-flex align-items-center">
                                
                                <div class="flex">
                                    <h4 class="mb-0">Start a new Conversation</h4>
                                    <form action="{{ route('sendMessage') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control" readonly name="ticketNo"   value="{{ \App\Models\Message::genTicketId() }}" placeholder="{{ \App\Models\Message::genTicketId() }}">
                                          <input type="text" class="form-control" name="subject"  placeholder="Enter your subject">
                                          <textarea class="form-control" name="message" id=""  rows="3" placeholder="Enter your message"></textarea>
                                          
                                          <small id="emailHelp" class="form-text text-muted">We'll never share your information.</small>
                                        </div>
                                      
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="container-fluid page__container">
                    <form action="#" id="message-reply">
                        <div class="input-group input-group-merge">
                            <input type="text"
                                   class="form-control form-control-appended"
                                   autofocus=""
                                   required=""
                                   placeholder="Type message">
                            <div class="input-group-append">
                                
                                <div class="input-group-text pl-0">
                                    <div class="custom-file custom-file-naked d-flex"
                                         style="width: 24px; overflow: hidden;">
                                        <input type="file"
                                               class="custom-file-input"
                                               id="customFile">
                                        <label class="custom-file-label"
                                               style="color: inherit;"
                                               for="customFile">
                                            <i class="material-icons">attach_file</i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="mdk-drawer js-mdk-drawer"
             data-align="end"
             id="messages-drawer">
            <div class="mdk-drawer__content top-0">
                <div class="sidebar sidebar-right sidebar-light bg-white o-hidden">
                    <div class="d-flex flex-column h-100">
                        <div class="d-flex flex-column justify-content-center navbar-height">
                            <div class="px-3 form-group mb-0">
                                <div class="input-group input-group-merge input-group-rounded flex-nowrap">
                                    <input type="text"
                                           class="form-control form-control-prepended"
                                           placeholder="Filter Chat">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="material-icons">filter_list</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex"
                             data-perfect-scrollbar>
                            <div class="sidebar-heading">Chat History</div>
                            <ul class="list-group list-group-fit mb-3">
                                @foreach ($message as $chat)
                                    
                                
                                <li class="list-group-item px-4 py-3">
                                    <a href="{{ route('msgChat',$chat->ticketNo) }}"
                                       class="d-flex align-items-center position-relative">
                                        <span class="avatar avatar-sm avatar-{{ \App\Models\Message::countNewMessage(auth()->user()->id) > 0?'online':'default'}} mr-3 flex-shrink-0">

                                            <span class="avatar-title rounded-circle"> <img src="{{ asset('storage/images/avatar/'.Auth::user()->user_privacies['photo'])}}"
                                                alt="Avatar"
                                                class="rounded-circle"
                                                width="40" height="40"> </span>

                                        </span>
                                        <span class="flex d-flex flex-column"
                                              style="max-width: 175px;">
                                            <strong class="text-body">#{{ $chat->ticketNo }} </strong>

                                            <span class="text-muted text-ellipsis">{{ $chat->subject }}</span>
                                        </span>
                                    </a>
                                </li>
                                @endforeach

                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
@section('js')

<script id="template-message"
                type="text/x-jsrender">
            <li class="message d-inline-flex">
    <div class="message__aside">
      <a href="#" class="avatar">
        <img src="avatar:avataravatar" alt="people" class="avatar-img rounded-circle">
      </a>
    </div>
    <div class="message__body card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="flex mr-3">
            <a href="#" class="text-body"><strong>User Name</strong></a>
          </div>
          <div>
            <small class="text-muted">Date</small>
          </div>
        </div>
        <span class="text-black-70">avatar:messageavatar</span>
       
       
      </div>
    </div>
  </li>
</script>

@endsection