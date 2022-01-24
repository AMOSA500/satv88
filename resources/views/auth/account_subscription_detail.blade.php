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
                    <li class="breadcrumb-item"><a href="{{ route('account_subscription','plan') }}">PACKAGES</a></li>
                    <li class="breadcrumb-item active">Subscription</li>
                </ol>

                <h1 class="h2">Subscription</h1>
                @if(!sizeof($invoice))
                    {{ __("No subscription registered at the moment") }}
                    <hr>
                @endif
                @foreach ($invoice as $item)
                    <div class="card">
                    <div class="list-group list-group-fit">
                        <div class="list-group-item">
                            <div class="form-group row mb-0">
                                <label class="col-form-label form-label col-sm-3">Your current plan</label>
                                <div class="col-sm-9 d-flex align-items-center">
                                    <div class="flex">{{ $item->package_name }}, &dollar;{{ $item->package_price }} for {{ $item->package_description }} Days</div>
                                    <a href="{{ route('account_package',\encrypt(\App\Models\App::getAppId($item->package_name))) }}"
                                       class="text-secondary">Buy More</a>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="form-group row mb-0">
                                <label class="col-form-label form-label col-sm-3">Billing cycle</label>
                                <div class="col-sm-9">
                                    <p class="mb-1">Your invoice was created on {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="form-group row mb-0">
                                <label class="col-form-label form-label col-sm-3">Payment information</label>
                                <div class="col-sm-9 d-flex align-items-center">
                                    
                                    <div class="flex">{{ $item->payment_ref }} via Flutterwave</div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="form-group row mb-0">
                                <label class="col-form-label form-label col-sm-3">Cancel</label>
                                <div class="col-sm-9">
                                    <a href="#"
                                       class="btn btn-outline-secondary">Cancel subscription</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $invoice->links() }}
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
