@extends('front-end.master')

@section('title')
    Payment
@endsection

@section('body')

    <div class="content">
        <div class="single-wl3">
            <div class="container">
                <div class="col-md-12 well text-danger text-center">
                    Dear {{ Session::get('customerName') }}, please give us the payment method.
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">

                        {{ Form::open(['route'=>'new-order', 'method'=>'post']) }}
                        <table class="table table-bordered">
                            <tr>
                                <th>Cash on Delivery</th>
                                <td><input type="radio" name="payment_type" value="Cash"/>Cash on Delivery</td>
                            </tr>
                            <tr>
                                <th>Paypal</th>
                                <td><input type="radio" name="payment_type" value="Paypal"/>Paypal</td>
                            </tr>
                            <tr>
                                <th>BKash</th>
                                <td><input type="radio" name="payment_type" value="BKash"/>BKash</td>
                            </tr>
                            <tr>
                                <th></th>
                                <td><input type="submit" name="btn" value="Confirm Order"/></td>
                            </tr>
                        </table>
                        {{ Form::close() }}

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection











