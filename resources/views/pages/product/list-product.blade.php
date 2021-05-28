<!-- PAGE-HEADER -->
@extends('pages.common.table')

@section('table-content')
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
                            @foreach($productList as $key => $product)
                                <tr>
                                    <td>{{$product->id}}</td><td>{{$product->product_name}}</td>
                                    <td>{{$product->category->category_name}}</td>
                                    <td>{{$product->brand->brand_name}}</td>
                                    <td>{{$product->product_desc}}</td>
                                    <td>{{$product->product_price}}</td>
                                    <td>{{$product->product_image}}</td>
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
                            @endforeach

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

