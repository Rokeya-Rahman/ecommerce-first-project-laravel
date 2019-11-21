@extends('front-end.master')

@section('title')
    Checkout
@endsection

@section('body')

    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Products</span></h3>
        </div>
    </div>
    <div class="content">
        <div class="single-wl3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 well">
                        <h3 class="text-success text-center">Register if you are not registered before! </h3>
                        <br/>
                        {{ Form::open(['method'=>'post']) }}
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email_address" class="form-control" placeholder="example@gmail.com"/>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <input type="number" name="phone_number" class="form-control" placeholder="Phone No."/>
                        </div>
                        <div class="form-group">
                            <textarea name="address" class="form-control" placeholder="Address"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btn" class="form-control btn btn-success" value="Register"/>
                        </div>
                        {{ Form::close() }}

                    </div>
                    <div class="col-md-5 col-md-offset-1 well">
                        <h3 class="text-success text-center">Already Registered? Login Here!</h3>
                        <br/>
                        <h4 class="text-center text-danger py-3">{{ Session::get('message') }}</h4>

                        {{ Form::open(['method'=>'post']) }}
                        <div class="form-group">
                            <input type="email" name="email_address" class="form-control" placeholder="example@gmail.com"/>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btn" class="form-control btn btn-success" value="Login"/>
                        </div>
                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection











