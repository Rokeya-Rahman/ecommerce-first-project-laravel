@extends('front-end.master')

@section('title')
    Product Details
@endsection

@section('body')
    @include('front-end.includes.banner')

    <!--content-->
    <div class="content">
        <div class="single-wl3">
            <div class="container">
                <div class="row">
                    <div class="col-md-11 col-md-offset-1">
                        <h3 class="text-center text-success">My Shopping Cart</h3>
                        <hr />
                        <table class="table table-bordered">
                            <tr class="bg-primary">
                                <th>Serial No</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Action</th>
                            </tr>
                            @php($i = 1)
                            @php($sum = 0)
                            @foreach($cartProducts as $cartProduct)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $cartProduct->name }}</td>
                                    <td><img src="{{ asset($cartProduct->options->image) }}" alt="" height="50" width="50"/></td>
                                    <td>&#x9f3; {{ $cartProduct->price }}</td>
                                    <td>
                                        {{ Form::open(['route'=>'update-cart', 'method'=>'post'])  }}
                                            <input type="number" name="qty" value="{{ $cartProduct->qty }}" min="1">
                                            <input type="hidden" name="rowId" value="{{ $cartProduct->rowId }}" min="1">
                                            <input type="submit" name="btn" value="update">
                                        {{ Form::close() }}
                                    </td>
                                    <td>&#x9f3; {{ $total = $cartProduct->price*$cartProduct->qty }}</td>
                                    <td>
                                        <a href="{{ route('delete-cart-item', ['rowId'=>$cartProduct->rowId]) }}" class="btn bg-danger btn-xs">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                                <?php $sum = $sum+$total; ?>
                            @endforeach
                        </table>
                        <hr />
                        <table class="table table-bordered">
                            <tr>
                                <th>Item Total</th>
                                <th>&#x9f3; {{ $sum }}</th>
                            </tr>
                            <tr>
                                <th>Vat Total</th>
                                <th>&#x9f3; {{ $vat = 0 }}</th>
                            </tr>
                            <tr>
                                <th>Grand Total</th>
                                <th>&#x9f3; {{ $orderTotal = $sum+$vat }}</th>
                                <?php
                                    Session::put('orderTotal', $orderTotal);
                                ?>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11 col-md-offset-1">
                        @if(Session::get('customerId') && Session::get('shippingId'))
                            <a href="{{ route('checkout-payment') }}" class="btn btn-success pull-right">Checkout</a>
                        @elseif(Session::get('customerId'))
                            <a href="{{ route('checkout-shipping') }}" class="btn btn-success pull-right">Checkout</a>
                        @else
                            <a href="{{ route('checkout') }}" class="btn btn-success pull-right">Checkout</a>
                        @endif
                        <a href="" class="btn btn-success">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--content-->

@endsection