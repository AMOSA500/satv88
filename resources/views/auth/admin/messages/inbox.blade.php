@extends('layouts.admin.header')

@section('content')
    <!--app-content open-->
    <div class="app-content main-content">
        <div class="side-app">

            

            <!--Page header-->
            <div class="page-header">
                <div class="page-leftheader">
                    <h4 class="page-title mb-0 text-primary">Support Ticket Chats</h4>
                </div>
                {{-- <div class="page-rightheader">
                    <div class="btn-list">
                        <button class="btn btn-outline-primary"><i class="fe fe-download"></i>
                            Import</button>
                        <a href="javascript:void(0);"  class="btn btn-primary btn-pill" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-calendar me-2 fs-14"></i> Search By Date</a>
                        <div class="dropdown-menu border-0">
                                <a class="dropdown-item" href="javascript:void(0);">Today</a>
                                <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                                <a class="dropdown-item active bg-primary text-white" href="javascript:void(0);">Last 7 days</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last 30 days</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last 6 months</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last year</a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!--End Page header-->
            <!-- Row -->
            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="list-group list-group-transparent mb-0 mail-inbox mail-inbox-elements pb-3">
                            <div class="mt-4 mb-4 ms-4 me-4 text-center">
                                <div  class="btn btn-primary d-grid">Messages</div>
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
                <div class="col-md-12 col-lg-8 col-xl-9">
                    <div class="card">
                        <div class="card-body p-6">
                            <div class="inbox-body">
                                <div class="mail-search mb-4">
                                    <input type="text" placeholder="Search Inbox"  class="form-control">
                                </div>
                                <div class="mail-option">
                                    <div class="chk-all">
                                        <div class="btn-group">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);" class="btn mini all" aria-expanded="false">
                                                All
                                                <i class="fa fa-angle-down "></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);"> None</a></li>
                                                <li><a href="javascript:void(0);"> Read</a></li>
                                                <li><a href="javascript:void(0);"> Unread</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <a data-original-title="Refresh" data-placement="top" data-bs-toggle="" href="javascript:void(0);" class="btn mini tooltips">
                                            <i class=" fa fa-refresh"></i>
                                        </a>
                                    </div>
                                    <div class="btn-group hidden-phone">
                                        <a data-bs-toggle="dropdown" href="javascript:void(0);" class="btn mini blue" aria-expanded="false">
                                            More
                                            <i class="fa fa-angle-down "></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0);"><i class="fa fa-pencil me-2"></i> Mark as Read</a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-ban me-2"></i> Spam</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-trash-o me-2"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                    <ul class="unstyled inbox-pagination">
                                        <li><span>1-50 of 234</span></li>
                                        <li>
                                            <a class="np-btn" href="javascript:void(0);"><i class="fa fa-angle-right pagination-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-inbox table-hover text-nowrap">
                                        <tbody>
                                            <?php $i=1?>
                                            @foreach ($msg as $item)
                                                
                                            
                                                <tr class="">
                                                <td class="inbox-small-cells">
                                                    {{$i++}}
                                                </td>
                                                <td class="inbox-small-cells"><i class="fa fa-star text-{{ $item->status==false?'danger':'primary' }}"></i></td>
                                                <td class="inbox-small-cells"><a href="{{ route('admin.messages.read_reply',[$item->ticketNo,1]) }}">#{{$item->ticketNo  }}</a></td>
                                                <td class="view-message dont-show font-weight-semibold">{{ $item->sender }}</td>
                                                <td class="view-message">{{ $item->subject }}</td>
                                                <td class="view-message text-end text-muted">{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-y') }}</td>
                                            </tr>
                                        
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="pagination float-end mb-4">
                       
                    </ul>
                </div>
            </div>


        </div>
    </div>
    
@endsection