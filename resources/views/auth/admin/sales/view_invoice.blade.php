@extends('layouts.admin.header')

@section('content')
<div class="app-content main-content">
    <div class="side-app">

        
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Invoice: #{{ $tx_ref }} </h4>
        </div>
        <div class="page-rightheader">
           
        </div>
    </div>
    <!--End Page header-->

        <!-- Row-->
        <div class="row">
            <div class="col-md-12">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <h2 class="font-weight-bold text-primary">INVOICE</h2>
                        <div class="">
                            <h5 class="mb-1"><strong>{{ $pay->name }}</strong>,</h5>
                            This is the receipt for a payment of <strong>${{ $pay->charged_amount }}</strong> (USD)
                        </div>

                        <div class="card-body ps-0 pe-0">
                            <div class="row">
                                <div class="col-sm-6">
                                    <span>Payment No.</span><br>
                                    <strong>{{ $pay->tx_ref }}</strong>
                                </div>
                                <div class="col-sm-6 text-end">
                                    <span>Payment Date</span><br>
                                    <strong>{{ \Carbon\Carbon::parse($pay->created_at)->format('M d, Y - h:i A') }}</strong>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row pt-4">
                            <div class="col-lg-6 ">
                                <p class="h5 font-weight-bold">Bill To</p>
                                <address>
                                    {{ $pay->name }}<br>
                                    {{ $pay->phone }}<br>
                                    Pay IP: {{ $pay->ip }} & Pay Mode: {{ $pay->payment_type }}<br>
                                    {{ $pay->email }}
                                </address>
                            </div>
                           
                        </div>
                        <div class="table-responsive push">
                            <table class="table table-bordered table-hover text-nowrap">
                                <tr class=" ">
                                    <th class="text-center " style="width: 1%"></th>
                                    <th>Product</th>
                                    <th class="text-center" style="width: 1%">Qnty</th>
                                    <th class="text-end" style="width: 1%">Unit Price</th>
                                    <th class="text-end" style="width: 1%">Amount</th>
                                </tr>
                                <?php $x = 1; ?>
                                @foreach ($invoice as $item)
                                <tr>
                                    <td class="text-center">{{ $x++ }}</td>
                                    <td>
                                        <p class="font-weight-semibold mb-1">{{ $item->package_name }}</p>
                                        <div class="text-muted">Invoice No: #{{ $item->invoice_no }} - Valid for {{ $item->package_description }} days</div>
                                    </td>
                                    <td class="text-center">1</td>
                                    <td class="text-end">${{ number_format($item->package_price,2) }}</td>
                                    <td class="text-end">${{ number_format($item->package_price,2) }}</td>
                                </tr>
                                @endforeach
                                
                                <tr>
                                    <td colspan="4" class="font-weight-semibold text-end">Subtotal</td>
                                    <td class="text-end">${{ number_format($pay->charged_amount,2) }}</td>
                                </tr>
                              
                                <tr class="text-danger">
                                    <td colspan="4" class="font-weight-bold text-uppercase text-end h4 mb-0">Amount Settled</td>
                                    <td class="font-weight-bold text-end h4 mb-0">${{ number_format($pay->amount_settled,2) }}</td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="text-end">
                                        <button type="button" class="btn btn-success" onClick="javascript:window.print();"><i class="si si-paper-plane"></i> Send Invoice</button>
                                        <button type="button" class="btn btn-secondary" onClick="javascript:window.print();"><i class="si si-printer"></i> Print Invoice</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End row-->


    </div>
</div>

@endsection