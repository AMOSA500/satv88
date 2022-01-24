@extends('layouts.admin.header')
    
@section('content')

                <!--app-content open-->
				<div class="app-content main-content">
					<div class="side-app">


						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Dashboard WC HDTV</h4>
							</div>
							
						</div>
						<!--End Page header-->

						<!-- Row-1 -->
						<div class="row">
							<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0 dash1">
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6 col-md-12 col-sm-6 col-6">
												<div class="">
													<span class="fs-14 font-weight-normal">Total Sales</span>
													<h2 class="mb-2 number-font carn1 font-weight-bold">3,257</h2>
													<span class=""><i class="fe fe-arrow-up-circle"></i> 76% <span class="ms-1 fs-11">Growth This Month</span>
												</div>
											</div>
											<div class="col-lg-6 col-md-12 col-sm-6 col-6 my-auto mx-auto">
												<div class="mx-auto text-right">
													<div id="spark1"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0 dash2">
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6 col-md-12 col-sm-6 col-6">
												<div class="">
													<span class="fs-14">Total Stats</span>
													<h2 class="mb-2 mt-1 number-font carn2 font-weight-bold">1,678</h2>
													<span class=""><i class="fe fe-arrow-down-circle"></i> 15% <span class="ms-1 fs-11">Loss This Month</span>
												</div>
											</div>
											<div class="col-lg-6 col-md-12 col-sm-6 col-6 my-auto mx-auto">
												<div class="mx-auto text-right">
													<div id="spark2"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0 dash3">
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6 col-md-12 col-sm-6 col-6">
												<div class="">
													<span class="fs-14">Total Income</span>
													<h2 class="mb-2 mt-1 number-font carn2 font-weight-bold">$2,590</h2>
													<span class=""><i class="fe fe-arrow-up-circle"></i> 62% <span class="ms-1 fs-11">From Last Month</span>
												</div>
											</div>
											<div class="col-lg-6 col-md-12 col-sm-6 col-6 my-auto mx-auto">
												<div class="mx-auto text-right">
													<div id="spark3"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0 dash4">
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6 col-md-12 col-sm-6 col-6">
												<div class="text-justify">
													<span>Total Tax</span>
													<h2 class="mb-2 mt-1 number-font carn2 font-weight-bold">$1,954</h2>
													<span class=""><i class="fe fe-arrow-up-circle"></i> 53% <span class="ms-1 fs-11">From Last Month</span>
												</div>
											</div>
											<div class="col-lg-6 col-md-12 col-sm-6 col-6 my-auto mx-auto">
												<div class="mx-auto text-right">
													<div id="spark4"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-1 -->

						<!-- Row-2 -->
						<div class="row">
							<div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Sales Activity</h3>
									</div>
									<div class="card-body pt-0">
										<div class="chart-wrapper">
											<div id="statistics"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">
											Recent Activity
										</h3>
										<div class="card-options">
											<a href="javascript:void(0);" class="btn btn-sm btn-primary">View All</a>
										</div>
									</div>
									<div class="card-body p-0">
										<ul class="recent-activity">
											<li class="mb-5 mt-5">
												<div>
													<span class="activity-timeline bg-primary text-white">1</span>
													<div class="activity-timeline-content">
														<span class="font-weight-normal1 fs-13">New Products,</span><span class="text-muted fs-12 float-end">6:45pm</span>
														<span class="activity-sub-content text-info fs-11">52% New products</span>
														<p class="text-muted fs-12 mt-1">More than 200 new products are added</p>
													</div>
												</div>
											</li>
											<li class="mb-5">
												<div>
													<span class="activity-timeline bg-success text-white">2</span>
													<div class="activity-timeline-content">
														<span class="font-weight-normal1 fs-13">New Sale,</span><span class="text-muted fs-12 float-end">1day ago</span>
														<span class="activity-sub-content text-danger fs-11">76% Profit earned.</span>
														<p class="text-muted fs-12 mt-1">$2,546 income earned in today sale</p>
													</div>
												</div>
											</li>
											<li class="mb-5">
												<div>
													<span class="activity-timeline bg-warning text-white">3</span>
													<div class="activity-timeline-content">
														<span class="font-weight-normal1 fs-13">New Customers,</span><span class="text-muted fs-12 float-end">7.45pm</span>
														<span class="activity-sub-content text-success fs-11">24% New customers</span>
														<p class="text-muted fs-12 mt-1">1.3k new customers reached us this year</p>
													</div>
												</div>
											</li>
											<li class="mb-5">
												<div>
													<span class="activity-timeline bg-info text-white">4</span>
													<div class="activity-timeline-content">
														<span class="font-weight-normal1 fs-13">New Reviews,</span><span class="text-muted fs-12 float-end">1min ago</span>
														<span class="activity-sub-content text-warning fs-11">96% Positive reviews.</span>
														<p class="text-muted fs-12 mt-1">There are 500 plus new reviews</p>
													</div>
												</div>
											</li>
											<li class="mb-5">
												<div>
													<span class="activity-timeline bg-danger text-white">5</span>
													<div class="activity-timeline-content">
														<span class="font-weight-normal1 fs-13">Customer Visits,</span><span class="text-muted fs-12 float-end">today</span>
														<span class="activity-sub-content text-secondary fs-11">33% target achieved.</span>
														<p class="text-muted fs-12 mt-1">daily 20 plus new customers visits us</p>
													</div>
												</div>
											</li>
											<li class="mb-5 border-bottom-0">
												<div>
													<span class="activity-timeline bg-teal text-white">6</span>
													<div class="activity-timeline-content">
														<span class="font-weight-normal1 fs-13">Sale  Consistency,</span><span class="text-muted fs-12 float-end">3 days ago</span>
														<span class="activity-sub-content text-teal fs-11">90% growth.</span>
														<p class="text-muted fs-12 mt-1">More than 5 Sales happening every week</p>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-2 -->

						

						<!--Row-->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Invoice Summary</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered card-table table-vcenter text-nowrap" id="datatable">
												<thead>
													<tr>
														<th>Invoice ID</th>
														<th scope="row">Customer Name</th>
														<th>Customer ID</th>
														<th>Date</th>
														<th>Order Value</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<a class="font-weight-normal1" href="">002584611</a>
														</td>
														<td>Joan Powell</td>
														<td>JoanPowell@gmail.com</td>
														<td>08/3/2021</td>
														<td>$450,870</td>
														<td>
															<span class="badge bg-success-light border-success fs-11">Paid</span>
														</td>
													</tr>
													<tr>
														<td>
															<a class="font-weight-normal1" href="">004641215</a>
														</td>
														<td>Gavin Gibson</td>
														<td>JoanPowell@gmail.com</td>
														<td>08/3/2021</td>
														<td>$230,540</td>
														<td>
															<span class="badge bg-danger-light border-danger fs-11">Failed</span>
														</td>
													</tr>
													<tr>
														<td>
															<a class="font-weight-normal1" href="">004655445</a>
														</td>
														<td>Julian Kerr</td>
														<td>JoanPowell@gmail.com</td>
														<td>08/3/2021</td>
														<td>$55,300</td>
														<td>
															<span class="badge bg-success-light border-success fs-11">Paid</span>
														</td>
													</tr>
													<tr>
														<td>
															<a class="font-weight-normal1" href="">004343455</a>
														</td>
														<td>Cedric Kelly</td>
														<td>JoanPowell@gmail.com</td>
														<td>08/3/2021</td>
														<td>$234,100</td>
														<td>
															<span class="badge bg-success-light border-success fs-11">Paid</span>
														</td>
													</tr>
													<tr>
														<td>
															<a class="font-weight-normal1" href="">004651234</a>
														</td>
														<td>Junior Sam</td>
														<td>JoanPowell@gmail.com</td>
														<td>08/3/2021</td>
														<td>$43,198</td>
														<td>
															<span class="badge bg-success-light border-success fs-11">Paid</span>
														</td>
													</tr>
													<tr>
														<td>
															<a class="font-weight-normal1" href="">00434567</a>
														</td>
														<td>Gabriel</td>
														<td>JoanPowell@gmail.com</td>
														<td>08/3/2021</td>
														<td>$230,540</td>
														<td>
															<span class="badge bg-warning-light border-warning fs-11">Pending</span>
														</td>
													</tr>
													<tr>
														<td>
															<a class="font-weight-normal1" href="">004345623</a>
														</td>
														<td>Zach efron</td>
														<td>JoanPowell@gmail.com</td>
														<td>08/3/2021</td>
														<td>$55,300</td>
														<td>
															<span class="badge bg-success-light border-success fs-11">Paid</span>
														</td>
													</tr>
													<tr>
														<td>
															<a class="font-weight-normal1" href="">004345234</a>
														</td>
														<td>Mona matty</td>
														<td>JoanPowell@gmail.com</td>
														<td>08/3/2021</td>
														<td>$234,100</td>
														<td>
															<span class="badge bg-success-light border-success fs-11">Paid</span>
														</td>
													</tr>
													<tr>
														<td>
															<a class="font-weight-normal1" href="">004567455</a>
														</td>
														<td>Samantha May</td>
														<td>JoanPowell@gmail.com</td>
														<td>08/3/2021</td>
														<td>$43,198</td>
														<td>
															<span class="badge bg-warning-light border-warning fs-11">Pending</span>
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
				</div>
				<!-- CONTAINER END -->
            </div>
@endsection