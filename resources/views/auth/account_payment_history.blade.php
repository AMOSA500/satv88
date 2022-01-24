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
                    <li class="breadcrumb-item"><a href="student-dashboard.html">Home</a></li>
                    <li class="breadcrumb-item active">Edit Account</li>
                </ol>

                <h1 class="h2">Payment History</h1>

                <div class="card border-left-3 border-left-danger card-2by1">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                Please pay your amount due
                                <strong class="text-danger">${{number_format( \App\Models\Invoice::subTotal(auth()->user()->id),2) }}</strong> for #{{ \App\Models\Invoice::countInvoice() }} invoice
                            </div>
                            <div class="media-right">
                                <a href="{{ route('account_subscription','invoice') }}"
                                   class="btn btn-success float-right">Pay Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card table-responsive"
                     data-toggle="lists"
                     data-lists-values='[
                            "js-lists-values-document", 
                            "js-lists-values-amount",
                            "js-lists-values-status",
                            "js-lists-values-date"
                            ]'
                     data-lists-sort-by="js-lists-values-document"
                     data-lists-sort-desc="true">
                    <table class="table mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th colspan="4">
                                    <a href="javascript:void(0)"
                                       class="sort"
                                       data-sort="js-lists-values-document">Tx Ref</a>
                                    <a href="javascript:void(0)"
                                       class="sort"
                                       data-sort="js-lists-values-amount">Amount</a>
                                    <a href="javascript:void(0)"
                                       class="sort"
                                       data-sort="js-lists-values-status">Status</a>
                                    <a href="javascript:void(0)"
                                       class="sort"
                                       data-sort="js-lists-values-date">Date</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @if (!sizeof($payment))
                               <tr> <td>No payment history available at the moment</td></tr>
                            @endif
                            @foreach ($payment as $item)
                                 <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <small class="text-uppercase text-muted mr-2">Invoice</small>
                                        <a href="{{ route('invoice_items',$item->tx_ref) }}"
                                           class="text-body small"><span class="js-lists-values-document">{{ $item->tx_ref }}-{{ $item->package_name }}</span></a>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex align-items-center">
                                        <small class="text-uppercase text-muted mr-2">Amount</small>
                                        <small class="text-uppercase">$<span class="js-lists-values-amount">{{ number_format($item->charged_amount,2) }}</span> USD</small>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex align-items-center">
                                        <small class="text-uppercase text-muted mr-2">Status</small>
                                        <i class="material-icons text-{{ $item->status=='successful'?'success':'danger' }} md-18 mr-2">lens</i>
                                        <small class="text-uppercase js-lists-values-status">{{ $item->status=='successful'?'Paid':'?' }}</small>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="d-flex align-items-center text-right">
                                        <small class="text-uppercase text-muted mr-2">Date</small>
                                        <small class="text-uppercase js-lists-values-date">{{ \Carbon\Carbon::parse($item->created_at)->format('d M y') }}</small>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                           
                           

                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                {{ $payment->links() }}

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
