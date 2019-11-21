@extends('admin.master')

@section('body')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-body">
                <h3 class="text-center text-success" id="textCut">{{ Session::get('massage') }}</h3>
                <table class="table table-bordered">
                    <tr class="bg-primary text-white text-center">
                        <th>Serial No</th>
                        <th>Customer Name</th>
                        <th>Order Total</th>
                        <th>Order Date</th>
                        <th>Order Status</th>
                        <th>Payment Type</th>
                        <th>Payment Status</th>
                        <th>Action</th>
                    </tr>

                    @php($i=1)
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $order->first_name.' '.$order->last_name }}</td>
                            <td>{{ $order->order_total }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->order_status }}</td>
                            <td>{{ $order->payment_type }}</td>
                            <td>{{ $order->payment_status }}</td>
                            <td>
                                <a href="{{ route('view-order-detail', ['id'=>$order->id]) }}" class="btn btn-info btn-xs" title="View Order Details">
                                    <i class="fas fa-search-plus"></i>
                                </a>
                                <a href="{{ route('view-order-invoice', ['id'=>$order->id]) }}" class="btn btn-warning btn-xs" title="View Order Invoice">
                                    <i class="fas fa-receipt"></i>
                                </a>
                                <a href="{{ route('download-order-invoice', ['id'=>$order->id]) }}" class="btn btn-facebook btn-xs" title="Download Order Invoice">
                                    <i class="fas fa-file-download"></i>
                                </a>
                                <a href="" class="btn btn-success btn-xs" title="Edit Order">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-xs" title="Delete Order">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</div>

@endsection
