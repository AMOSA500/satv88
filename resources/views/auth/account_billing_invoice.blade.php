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
                   <li class="breadcrumb-item"><a href="{{ route('account_subscription','plan') }}">Account Packages</a></li>
                   <li class="breadcrumb-item active">Invoice</li>
               </ol>

               <div id="invoice">
                   <div class="card">
                       <div class="card-header media align-items-center">
                           <div class="media-body">
                               <h1 class="card-title h2">Invoice</h1>
                               <div class="card-subtitle">{{ \App\Models\Invoice::countInvoice() }} New Invoice </div>
                           </div>
                           @if (!sizeof($invoice))
                               
                           @else
                           <div class="media-right d-flex align-items-center">
                               <a href="javascript:window.print()"
                                  class="btn btn-flush text-muted d-print-none mr-3"><i class="material-icons font-size-24pt">print</i></a>

                               <a href="{{ route('pay') }}" onclick="event.preventDefault();document.getElementById('flw_pay').submit()"
                                  class="btn btn-success d-print-none">{{ __('Pay') }}
                                </a>
                                  <form action="{{ route('pay') }}" id="flw_pay" method="POST">
                                    @csrf
                                    <input name="name" type="hidden" value="{{ Auth()->user()->name }}" />
                                    <input name="email" type="hidden" value="{{ Auth()->user()->email }}" />
                                    <input name="phone" type="hidden" value="{{ Auth()->user()->phone }}" />
                                    </form>

                           </div>
                           @endif
                       </div>
                       @if (!sizeof($invoice))
                           
                       @else
                       <div class="card-body">
                           <div class="row">
                               <div class="col-6">
                                   <p class="text-black-70 m-0"><strong>Prepared for</strong></p>
                                   <h2>{{ Auth()->user()->name }}</h2>
                                   <div class="text-black-50">
                                       {{ Auth()->user()->email }} <br>
                                       {{ Auth()->user()->phone }}
                                   </div>
                               </div>
                               <div class="col-6">
                                   <p class="text-black-70 m-0"><strong>Prepared by</strong></p>
                                   <h2>WorldCast HD TV</h2>
                                   <div class="text-black-50">
                                    10511 Kipp Way, Suite 430, <br>
                                       Houston, Texas, 77099 US
                                   </div>
                               </div>
                           </div>
                       </div>
                       @endif
                   </div>
               </div>

               <div class="card table-responsive">
                   <table class="table mb-0 table--elevated">
                       <thead class="thead-light">
                           <tr>
                               <th class="border-top-0">Description</th>
                               <th class="border-top-0 text-right"
                                   style="width: 120px;">Amount</th>
                           </tr>
                       </thead>
                       @if (!sizeof($invoice))
                       <tbody><tr><td>
                        No Invoice has been added       
                    </td></tr></tbody>
                           
                       @else
                       @foreach ($invoice as $value )
                           
                      
                       <tbody>
                           <tr>
                               <td>
                                   <div class="d-flex align-items-center">
                                       <a href="student-view-course.html"
                                          class="avatar avatar-4by3 avatar-sm mr-3">
                                           <img src="{{ asset(App\Models\App::getImage($value->package_name))}}"
                                                alt="Learn Angular Fundamentals"
                                                class="avatar-img rounded">
                                       </a>
                                       <div class="flex">
                                           <a href="#"
                                              class="text-body">
                                               <strong>{{ $value->invoice_no }} - {{ $value->package_name }}</strong> 
                                           </a>
                                           <p class="text-black-50 mb-0 small">For the period of {{ $value->package_description }} Days, starting from {{ \Carbon\Carbon::parse($value->created_at)->format('d M Y') }}
                                            
                                                <a href="{{ route('del_invoice',$value->invoice_no) }}"><span class="badge badge-light">X</span></a>
                                              </p>
                                       </div>
                                   </div>
                               </td>
                               <td class="text-right"><strong>&dollar;{{ number_format($value->package_price,2) }} USD</strong></td>
                           </tr>
                          
                         
                       </tbody> 
                       
                       @endforeach
                       @endif
                   </table>
                   @if (!sizeof($invoice))
                       
                   @else
                   <table class="table mb-0">
                       <tfoot>
                           <tr>
                               <td class="text-right text-black-70"><strong>Subtotal</strong></td>
                               <td style="width: 120px;"
                                   class="text-right"><strong>&dollar;{{ number_format(\App\Models\Invoice::subTotal(Auth()->user()->id),2) }} USD</strong></td>
                           </tr>
                           <tr>
                               <td class="text-right text-black-70"><strong>Total</strong></td>
                               <td style="width: 120px;"
                                   class="text-right"><strong>&dollar;{{ number_format(\App\Models\Invoice::subTotal(Auth()->user()->id),2) }} USD</strong></td>
                           </tr>
                       </tfoot>
                   </table>
                   @endif
                   
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
                               class="nav-link @if(route('account_subscription','plan') == Request::url()) active @endif">Add More Packages</a>
                        </li>
                          
                        <li class="nav-item">
                            <a href="{{ route('account_subscription','pay') }}"
                               class="nav-link @if(route('account_subscription','pay') == Request::url()) active @endif">Payment Information</a>
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
