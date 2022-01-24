@extends('layouts.home_app')

@section('title')
    ::User Dashboard Portal::
@endsection
@section('content')

<div class="mdk-drawer-layout__content page ">

    <div class="container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="instructor-dashboard.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <h1 class="h2">Dashboard</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <div class="flex">
                            <h4 class="card-title">Packages</h4>
                            <p class="card-subtitle">Last 7 Days</p>
                        </div>
                        <a href="instructor-earnings.html"
                           class="btn btn-sm btn-primary"><i class="material-icons">trending_up</i></a>
                    </div>
                    <div class="card-body">
                        <div id="legend"
                             class="chart-legend mt-0 mb-24pt justify-content-start"></div>
                        <div class="chart"
                             style="height: 200px;">
                            <canvas id="earningsChart"
                                    class="chart-canvas js-update-chart-bar"
                                    data-chart-legend="#legend"
                                    data-chart-line-background-color="primary"
                                    data-chart-prefix="$"
                                    data-chart-suffix="k"></canvas>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <div class="flex">
                            <h4 class="card-title">Transactions</h4>
                            <p class="card-subtitle">Latest Transactions</p>
                        </div>
                        <a href="instructor-statement.html"
                           class="btn btn-sm btn-primary"><i class="material-icons">receipt</i></a>
                    </div>
                    <div data-toggle="lists"
                         data-lists-values='["js-lists-values-course", "js-lists-values-document","js-lists-values-amount","js-lists-values-date"]'
                         data-lists-sort-by="js-lists-values-date"
                         data-lists-sort-desc="true"
                         class="table-responsive">
                        <table class="table table-nowrap m-0">
                            <thead class="thead-light">
                                <tr>
                                    <th colspan="2">
                                        <a href="javascript:void(0)"
                                           class="sort"
                                           data-sort="js-lists-values-course">Tx Reference</a>
                                        <a href="javascript:void(0)"
                                           class="sort"
                                           data-sort="js-lists-values-document">Amount</a>
                                        <a href="javascript:void(0)"
                                           class="sort"
                                           data-sort="js-lists-values-amount">Status</a>
                                        <a href="javascript:void(0)"
                                           class="sort"
                                           data-sort="js-lists-values-date">Date</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($payment as $item)
                                    
                               
                                <tr>
                                    <td>
                                        <div class="media align-items-center">
                                          
                                            <div class="media-body">
                                                <a class="text-body js-lists-values-course"
                                                   href="{{ route('invoice_items',$item->tx_ref) }}"><strong>{{ $item->tx_ref }}</strong></a><br>
                                                <small class="text-muted mr-1">
                                                    Customer: {{ $item->name }} - Status
                                                    <a href="instructor-invoice.html"
                                                       style="color: inherit;"
                                                       class="js-lists-values-document">#{{ $item->status }}</a> -
                                                    &dollar;<span class="js-lists-values-amount">{{ $item->charged_amount }}</span> USD
                                                </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <small class="text-muted text-uppercase js-lists-values-date">{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</small>
                                    </td>
                                </tr> 
                                @endforeach

                            </tbody>
                            {{ $payment->links() }}
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <div class="flex">
                            <h4 class="card-title">Viewed Channels</h4>
                            <p class="card-subtitle">by course</p>
                        </div>
                        <a class="btn btn-sm btn-primary"
                           href="instructor-earnings.html">Earnings</a>
                    </div>
                    <ul class="list-group list-group-fit mb-0">
                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <a href="instructor-course-edit.html"
                                       class="text-body"><strong>CNN</strong></a>
                                </div>
                                <div class="media-right">
                                    <div class="text-center">
                                        <span class="badge badge-pill badge-primary">15</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <a href="instructor-course-edit.html"
                                       class="text-body"><strong>DSTV SuperSport</strong></a>
                                </div>
                                <div class="media-right">
                                    <div class="text-center">
                                        <span class="badge badge-pill badge-success">50</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <a href="instructor-course-edit.html"
                                       class="text-body"><strong>Africa Magic</strong></a>
                                </div>
                                <div class="media-right">
                                    <div class="text-center">
                                        <span class="badge badge-pill badge-warning">14</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <a href="instructor-course-edit.html"
                                       class="text-body"><strong>Adult</strong></a>
                                </div>
                                <div class="media-right">
                                    <div class="text-center">
                                        <span class="badge badge-pill  badge-danger ">14</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>

</div>
@endsection
