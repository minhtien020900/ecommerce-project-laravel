<!-- PAGE-HEADER -->
@extends('layouts.admin-layout')
@section('dashboard-content')
    <div class="page-header">
							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#">Tables</a></li>
								<li class="breadcrumb-item active" aria-current="page">Data Tables</li>
							</ol><!-- End breadcrumb -->
							<div class="ml-auto">
								<div class="input-group">
									<a href="#" class="btn btn-white button-icon mr-3 mt-1 mb-1">
										<span><i class="fe fe-shopping-cart"></i>Buy Now</span>
									</a>
									<a href="#" class="btn btn-white button-icon mr-3 mt-1 mb-1">
										<span><i class="fe fe-printer"></i>Print</span>
									</a>
									<a href="#" class="btn btn-primary button-icon mr-3 mt-1 mb-1">
										<span><i class="fe fe-download"></i>Download</span>
									</a>
								</div>
							</div>
						</div>
						<!-- PAGE-HEADER END -->

						<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Data Tables</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered text-nowrap w-100">
												<thead>
													<tr>
														<th class="wd-15p">Id</th>
														<th class="wd-15p">Name</th>
														<th class="wd-20p">Category Name</th>
														<th class="wd-15p">Brand Name</th>
														<th class="wd-10p">Desc</th>
														<th class="wd-25p">Price</th>
                                                        <th class="wd-25p">Image</th>
                                                        <th class="wd-25p">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Bella</td>
														<td>Chloe</td>
														<td>System Developer</td>
														<td>2018/03/12</td>
														<td>$654,765</td>
														<td>b.Chloe@datatables.net</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<!-- TABLE WRAPPER -->
								</div>
								<!-- SECTION WRAPPER -->
							</div>
						</div>
						<!-- ROW-1 CLOSED -->
@endsection
						
