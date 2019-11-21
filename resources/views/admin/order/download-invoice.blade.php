<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
</head>

<body>

<div class="row">
    <div class="col-md-12">
        <div class="card m-1">
            <div class="card-body">
                <header>
                    <h1 style="background-color: #2c9faf; text-align: center; color: white;">Invoice</h1>
                    <div class="text-left">
                        <h4>Shipping Info</h4>
                        <address>
                            <p>{{ $shipping->full_name }}</p>
                            <p>{{ $shipping->address }}</p>
                            <p>{{ $shipping->phone_number }}</p>
                        </address>
                    </div>
                    <div style="text-align: right;">
                        <h4>Billing Info</h4>
                        <address>
                            <p>{{ $customer->first_name.' '.$customer->last_name }}</p>
                            <p>{{ $customer->address }}</p>
                            <p>{{ $customer->phone_number }}</p>
                        </address>
                    </div>
                </header>
                <article>
                    <table class="inventory" border="1">
                        <thead>
                        <tr>
                            <th><span>Item</span></th>
                            <th><span>Description</span></th>
                            <th><span>Rate</span></th>
                            <th><span>Quantity</span></th>
                            <th><span>Price</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($sum = 0)
                        @foreach($orderDetails as $orderDetail)
                            <tr>
                                <td><span>{{ $orderDetail->product_name }}</span></td>
                                <td><span>Experience Review</span></td>
                                <td><span>TK. </span><span>{{ $orderDetail->product_price }}</span></td>
                                <td><span>{{ $orderDetail->product_quantity }}</span></td>
                                <td><span>TK. </span><span>{{ $total = $orderDetail->product_price*$orderDetail->product_quantity }}</span></td>
                            </tr>
                            @php($sum = $sum + $total)
                        @endforeach
                        </tbody>
                    </table>

                    <table class="balance" border="1">
                        <tr>
                            <th><span>Total</span></th>
                            <td><span>TK.</span><span>{{ $sum }}</span></td>
                        </tr>
                    </table>
                </article>

            </div>
        </div>
    </div>
</div>
</body>
</html>