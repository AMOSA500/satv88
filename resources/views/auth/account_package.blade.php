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
                    <li class="breadcrumb-item"><a href="{{ route('account_subscription','plan') }}">Account Package</a></li>
                    <li class="breadcrumb-item active">Edit Account</li>
                </ol>

                <h1 class="h2">Upgrade Account</h1>

                <div class="row card-group-row mb-40pt">
                    @foreach ($package as $item)
                    <div class="col-lg-6 col-sm-6 card-group-row__col">
                        <div class="card card-group-row__card text-center o-hidden">

                            <div class="card-body d-flex flex-column">
                                <div class="flex-grow-1 mb-16pt">
                                    <span class="w-64 h-64 icon-holder icon-holder--outline-success rounded-circle d-inline-flex mb-16pt">
                                        <i class="material-icons">connected_tv</i>
                                    </span>
                                    <h4 class="mb-8pt">{{ $item->app->name }}</h4>
                                    <p class="text-black-70">Starts with 3 accounts with more seats available.</p>
                                </div>
                                <p class="d-flex justify-content-center align-items-center m-0">
                                    <span class="h4 m-0 font-weight-normal">&dollar;</span>
                                    <span class="h1 m-0 font-weight-normal">{{ $item->price }}</span>
                                    <span class="h4 m-0 font-weight-normal">/ {{ $item->validity == 0? 0:(($item->validity)) }}Days</span>
                                </p>
                                <p class="lh-1 text-muted mb-0"><small>{{ $item->connectivity }} user per connection</small></p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route("set_invoice") }}" onclick="event.preventDefault();document.getElementById('set-invoice-{{ $item->id }}').submit();"
                                   class="btn btn-success">Get started</a>

                                   <form action="{{ route('set_invoice') }}" id="set-invoice-{{ $item->id }}" method="POST">
                                       @csrf
                                       <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                       <input type="hidden" name="invoice_no" value="{{ rand(1,1000000) }}">
                                       <input type="hidden" name="package_name" value="{{ $item->app->name }}">
                                       <input type="hidden" name="package_description" value="{{ $item->validity == 0? 0:(($item->validity)) }}">
                                       <input type="hidden" name="package_price" value="{{ $item->price }}">
                                       <input type="hidden" name="package_status" value="0">
                                   </form>
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
                                   class="nav-link active">Subscription</a>
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
                                   class="nav-link ">Checkout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
