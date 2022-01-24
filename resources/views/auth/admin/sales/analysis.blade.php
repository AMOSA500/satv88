@extends('layouts.admin.header')

@section('content')
<div class="app-content main-content">
    <div class="side-app">

        
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Sales Analysis</h4>
        </div>
        <div class="page-rightheader">
           
        </div>
    </div>
    <!--End Page header-->

    <!--Row-->
    <div class="row">
        @foreach ($apps as $item)
         <div class="col-xl-3 col-md-12 col-lg-6">
            <div class="card overflow-hidden">
                <div class="card-body pb-0">
                    <div>
                        <p class=" mb-0">{{ $item->name }}</p>
                        <h3 class="mb-1 font-weight-bold">${{ number_format(\App\Models\App::getAppSalesValue($item->name),2) }}</h3>
                    </div>
                </div>
               
            </div>
        </div>
         @endforeach
    </div>
    <!--End Row-->

    <!--Row-->
    <div class="row">
        <?php
            $color = ["bg-primary","bg-danger","bg-success","bg-warning"];
            $i = 0;
        ?>
            @foreach ($apps as $item)
        <div class="col-xl-3 col-md-12 col-lg-6">
            <div class="card overflow-hidden 
           {{ $color[$i] }}
           {{ $i++ }}
            text-white">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-2 fs-18">
                                {{ $item->name }}
                            </div>
                            <h1 class="font-weight-bold mb-1">${{ number_format(\App\Models\App::getAppSalesValue($item->name),2) }}</h1>
                            <span class=""><i class="fa fa-arrow-up me-1"></i> +{{ \App\Models\App::countSales($item->name) }}</span>
                        </div>
                        <div class="col col-auto">
                            <div class="mx-auto chart-circle chart-circle-md  mt-sm-0 mb-0" data-value="0.85" data-thickness="6" data-color="#4422c9">
                                <div class="mx-auto chart-circle-value text-center fs-20">{{ \App\Models\App::salesPercentage($item->name) }}%</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div> 
        @endforeach
       
    </div>

   



    <!-- Row 
    <div class="row">
        <div class="col-xl-3 col-md-12 col-lg-6">
            <div class="card mg-b-md-20">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <div class="morris-donut-wrapper-demo" id="morrisDonut1"></div>
                        </div>
                        <div class="col-4 my-auto">
                            <ul class="morris-legends">
                                <li>
                                    <span class="d-flex tx-14"><span class="legend bg-primary brround"></span>Sales</span>
                                </li>
                                <li>
                                    <span class="d-flex tx-14"><span class="legend bg-primary-light-1 brround"></span>Clients</span>
                                </li>
                                <li>
                                    <span class="d-flex tx-14"><span class="legend bg-primary-light-2 brround"></span>Profits</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-12 col-lg-6 p-l-0 p-r-0">
            <div class="card mg-b-md-20">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <div class="morris-donut-wrapper-demo" id="morrisDonut2"></div>
                        </div>
                        <div class="col-4 my-auto">
                            <ul class="morris-legends">
                                <li>
                                    <span class="d-flex tx-14"><span class="legend bg-success brround"></span>Sales</span>
                                </li>
                                <li>
                                    <span class="d-flex tx-14"><span class="legend bg-success-light-1 brround"></span>Clients</span>
                                </li>
                                <li>
                                    <span class="d-flex tx-14"><span class="legend bg-success-light-2 brround"></span>Profits</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-12 col-lg-6 p-l-0">
            <div class="card mg-b-md-20">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <div class="morris-donut-wrapper-demo" id="morrisDonut3"></div>
                        </div>
                        <div class="col-4 my-auto">
                            <ul class="morris-legends">
                                <li>
                                    <span class="d-flex tx-14"><span class="legend bg-warning brround"></span>Sales</span>
                                </li>
                                <li>
                                    <span class="d-flex tx-14"><span class="legend bg-warning-light-1 brround"></span>Clients</span>
                                </li>
                                <li>
                                    <span class="d-flex tx-14"><span class="legend bg-warning-light-2 brround"></span>Profits</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-12 col-lg-6 p-l-0">
            <div class="card mg-b-md-20">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <div class="morris-donut-wrapper-demo" id="morrisDonut4"></div>
                        </div>
                        <div class="col-4 my-auto">
                            <ul class="morris-legends">
                                <li>
                                    <span class="d-flex tx-14"><span class="legend bg-danger brround"></span>Sales</span>
                                </li>
                                <li>
                                    <span class="d-flex tx-14"><span class="legend bg-danger-light-1 brround"></span>Clients</span>
                                </li>
                                <li>
                                    <span class="d-flex tx-14"><span class="legend bg-danger-light-2 brround"></span>Profits</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    End Row -->


    </div>
</div>

@endsection