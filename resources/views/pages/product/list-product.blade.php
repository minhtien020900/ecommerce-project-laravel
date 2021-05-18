<!-- PAGE-HEADER -->
@extends('layouts.admin-layout')
@section('content-style')
<link href="{{asset('plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
@endsection
@section('custom-style')
<style>
	table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
    outline: none !important;
    }
				table td a:hover {
    color: #2196F3;
    }table td:last-child i {
    opacity: 0.9;
    margin: 0 5px;
    }
				table td:last-child{
					display: flex;
    align-items: center;
				justify-content: center;
				}
td a.edit{
	color: #FFC107;
	}td a.delete{
		color: #F44336;
	}
	table td i {
    font-size: 20px;
    }
</style>
@endsection
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
                                                        <th class="wd-15p">Image</th>
                                                        <th class="wd-15p">Action</th>
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
														<td>
															{{-- <img src="{{ asset('images/users/1.jpg') }}" alt=""> --}}
															13123
														</td>
														<td>
														<a 
                                   href=""
                                   class="edit"

                                ><i
                                        class="fe fe-edit-2"
                                        title="Edit"></i></a>
																																								<a 
																																								href=""
																																								class="delete"
					
																																					><i
																																													class="fe fe-x"
																																													title="Delete"></i></a>
														</td>
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
@section('content-js')
				<script src="{{asset('plugins/datatable/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatable/datatable.js')}}"></script>
    <script src="{{asset('plugins/datatable/datatable-2.js')}}"></script>
    <script src="{{asset('plugins/datatable/dataTables.responsive.min.js')}}"></script>
@endsection