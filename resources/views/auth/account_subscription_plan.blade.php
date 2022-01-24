@extends('layouts.home_app')

@section('title')
    ::Account Edit Basic | User Portal::
@endsection
@section('content')

<div class="mdk-drawer-layout__content page ">

    <div class="container-fluid page__container p-0">
        <div class="row m-0">
            <div class="col-lg container-fluid page__container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Subscription</li>
                </ol>

                <h1 class="h2">Upgrade Account</h1>

                <div class="row card-group-row mb-40pt">
                    @foreach ($app as $item)
                    <div class="col-lg-6 col-sm-6 card-group-row__col">
                        <div class="card card-group-row__card text-center o-hidden card--raised navbar-shadow">

                            <div class="card-body d-flex flex-column">
                                <div class="flex-grow-1 mb-16pt">
                                    <span class="w-64 h-64 icon-holder icon-holder--outline-secondary rounded-circle d-inline-flex mb-16pt">
                                        <i class="material-icons">connected_tv</i>
                                    </span>
                                    <h4 class="mb-8pt">{!! $item->name !!}</h4>
                                    <p class="tlh-1 text-muted mb-0" style="text-align:justify">{{ substr($item->details,0,118) }}</p>
                                </div>
                                <p class="d-flex justify-content-center align-items-center m-0">
                                    
                                    <span class="lh-1 text-muted mb-0">{!! ($item->connectivity)  !!}</span>
                                    <span class="lh-1 text-muted mb-0">/ Connectivity</span>
                                </p>
                                <p class="lh-1 text-muted mb-0"><small>Trial [{{ $item->trial }}] is available</small></p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('account_package',encrypt($item->id)) }}"
                                   class="btn btn-success ">{!! $item->name !!} Plan</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div id="page-nav"
                 class="col-lg-auto page-nav">
                <div data-perfect-scrollbar>
                    <div class="page-section pt-lg-32pt">
                        <ul class="nav page-nav__menu">
                            <li class="nav-item">
                                <a href="{{ route('account_subscription','detail') }}"
                                   class="nav-link @if(route('account_subscription','detail') == Request::url()) active @endif">Subscription</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('account_subscription','plan') }}"
                                   class="nav-link @if(route('account_subscription','plan') == Request::url()) active @endif">Upgrade Account</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('account_subscription','pay') }}"
                                   class="nav-link @if(route('account_subscription','pay') == Request::url()) active @endif">Payment Information</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('account_subscription','history') }}"
                                   class="nav-link @if(route('account_subscription','history') == Request::url()) active @endif">Payment History</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('account_subscription','invoice') }}"
                                   class="nav-link @if(route('account_subscription','invoice') == Request::url()) active @endif">Invoice</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
