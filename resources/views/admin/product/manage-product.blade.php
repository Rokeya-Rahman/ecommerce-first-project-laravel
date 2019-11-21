@extends('admin.master')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <h3 class="text-center text-success" id="textCut">{{ Session::get('massage') }}</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr class="bg-primary text-white text-center">
                                <th>Serial No</th>
                                <th>Category Name</th>
                                <th>Brand Name</th>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            @php($i=1)
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $product->category_name }}</td>
                                    <td>{{ $product->brand_name }}</td>
                                    <td>{{ $product->product_name }}</td>
                                    <td>
                                        <img src="{{ asset($product->product_image) }}" alt="" height="100" width="100">
                                    </td>
                                    <td>{{ $product->product_price }}</td>
                                    <td>{{ $product->product_quantity }}</td>
                                    <td>{{ $product->publication_status }}</td>
                                    <td>
                                        <a href=""  class="btn bg-warning btn-xs text-white" title="View Details">
                                            <i class="fas fa-search-plus"></i>
                                        </a>
                                        @if($product->publication_status == 1)
                                            <a href="{{ route('unpublished-product', ['id'=>$product->id]) }}" class="btn bg-info btn-xs text-white">
                                                <i class="fas fa-arrow-up"></i>
                                            </a>
                                        @else
                                            <a href="{{ route('published-product', ['id'=>$product->id]) }}" class="btn bg-warning btn-xs text-white">
                                                <i class="fas fa-arrow-down"></i>
                                            </a>
                                        @endif
                                        <a href="{{ route('edit-product', ['id'=>$product->id]) }}"  class="btn bg-success btn-xs text-white" title="Edit">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <a href="{{ route('delete-product', ['id'=>$product->id]) }}" class="btn bg-danger btn-xs text-white">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
