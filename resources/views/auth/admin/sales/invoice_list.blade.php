@extends('layouts.admin.header')

@section('content')
<div class="app-content main-content">
    <div class="side-app">

        
        <!--Page header-->
        <div class="page-header">
            <div class="page-leftheader">
                <h4 class="page-title mb-0 text-primary">Invoice List</h4>
            </div>
          
        </div>
        <!--End Page header-->

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <a href="javascript:void(0);" class="btn btn-primary"><i class="fe fe-plus"></i> Add New Invoice</a>
                            </div>
                            <div class="col-md-6 col-auto">
                            </div>
                        </div>
                        <div class="e-table">
                            <div class="table-responsive table-lg">
                                <table class="table card-table table-vcenter text-nowrap border mb-0 table-hover" id="invoicedatatable">
                                    <thead>
                                        <tr>
                                            
                                            <th>InvoiceID</th>
                                            <th>Tx Reference</th>
                                            <th>Bill Date</th>
                                            <th>Customer Name</th>
                                            <th>Phone Number</th>
                                            <th>Amount</th>
                                            <th>Bill Status</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($payment as $item)
                                            
                                        @endforeach
                                        <tr>
                                            
                                            <td class="align-middle">
                                                <div class="d-flex">
                                                    <div class="mt-1">
                                                        {{ $item->id}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-nowrap align-middle">
                                                <a class="btn-link fs-16" href="{{ route('admin.sales.view_invoice',$item->tx_ref) }}">#{{ $item->tx_ref}}</a>
                                            </td>
                                            <td class="text-nowrap align-middle"><span>{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</span></td>
                                            <td class="text-nowrap align-middle">
                                                {{ $item->name }}
                                            </td>
                                             <td class="text-nowrap align-middle">
                                                {{ $item->phone }}
                                            </td>
                                            <td class="text-nowrap align-middle"><span class="font-weight-bold">${{ $item->charged_amount }}</span></td>
                                            <td><span class="bg-{{ $item->status=='successful'?'success':'danger' }} px-2 py-1 text-white br-7">{{ $item->status }}</span></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="javascript:void(0);" class="btn btn-light btn-sm" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options <i class="fa fa-angle-down"></i></a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{ route('admin.sales.view_invoice',$item->tx_ref) }}"><i class="fe fe-eye me-2"></i> View</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-share me-2"></i> Send</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->


    </div>
</div>

@endsection