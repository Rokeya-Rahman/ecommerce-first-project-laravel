@extends('front-end.master')

@section('title')
    Shipping
@endsection

@section('body')

    <div class="content">
        <div class="single-wl3">
            <div class="container">
                <div class="col-md-12 well text-danger text-center">
                    Dear {{ Session::get('customerName') }}, please give us the following shopping info to complete your valuable order. If your billing info & shipping info are same then just press on <span class="text-success">Save Shipping Info</span> button.
                </div>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h3 class="text-success text-center">Shipping Info goes here...</h3>
                        <br/>
                        <p class="text-info text-center">If your billing info and shipping info are same, then just press on save shipping info button </p>
                        <br/>

                        {{ Form::open(['route'=>'new-shipping', 'method'=>'post']) }}
                        <div class="form-group">
                            <input type="text" value="{{ $customer->first_name.' '.$customer->last_name }}" name="full_name" class="form-control" placeholder="Full Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" value="{{ $customer->email_address }}" name="email_address" class="form-control" placeholder="example@gmail.com"/>
                        </div>
                        <div class="form-group">
                            <input type="number" value="{{ $customer->phone_number }}" name="phone_number" class="form-control" placeholder="Phone No."/>
                        </div>
                        <div class="form-group">
                            <textarea name="address" class="form-control" placeholder="Address">{{ $customer->address }}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btn" class="form-control btn btn-success" value="Save Shipping Info"/>
                        </div>
                        {{ Form::close() }}

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection











