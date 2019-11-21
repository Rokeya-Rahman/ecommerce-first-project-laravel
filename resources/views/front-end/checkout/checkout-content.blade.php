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
                    <div class="col-md-12 well">
                        <h3 class="text-danger text-center">You have to login to complete your valuable order. If you are not registered, then please register first. </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 well">
                        <h3 class="text-success text-center">Register if you are not registered before! </h3>
                        <br/>

                        {{ Form::open(['route'=>'customer-sign-up', 'method'=>'post']) }}
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email_address" id="emailAddress" class="form-control" placeholder="example@gmail.com"/>
                            <span id="res"></span>
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
                            <input type="submit" id="regBtn" name="btn" class="form-control btn btn-info" value="Register"/>
                        </div>
                        {{ Form::close() }}

                    </div>
                    <div class="col-md-5 col-md-offset-1 well">
                        <h3 class="text-success text-center">Already Registered? Login Here!</h3>
                        <br />
                        <h4 class="text-center text-danger py-3">{{ Session::get('message') }}</h4>
                        <br />

                        {{ Form::open(['route'=>'customer-login', 'method'=>'post']) }}
                        <div class="form-group">
                            <input type="email" name="email_address" class="form-control" placeholder="example@gmail.com"/>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btn" class="form-control btn btn-info" value="Login"/>
                        </div>
                        {{ Form::close() }}
                        {{--['route'=>'customer-login', 'method'=>'post']--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<script>--}}

        {{--var emailAddress = document.getElementById('emailAddress');--}}
        {{--emailAddress.onblur = function () {--}}
            {{--var email = document.getElementById('emailAddress').value;--}}
            {{--var xmlHttp = new XMLHttpRequest();--}}
            {{--var serverPage = 'http://localhost/first/public/ajax-email-check/'+email;--}}
            {{--xmlHttp.open('get', serverPage);--}}
            {{--xmlHttp.onreadystatechange = function () {--}}
                {{--if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {--}}
                    {{--document.getElementById('res').innerHTML = xmlHttp.responseText;--}}
                    {{--if (xmlHttp.responseText == 'Already Exist') {--}}
                        {{--document.getElementById('regBtn').disabled = true;--}}
                    {{--} else {--}}
                        {{--document.getElementById('regBtn').disabled = false;--}}
                    {{--}--}}
                {{--}--}}
            {{--};--}}
            {{--xmlHttp.send(null);--}}
        {{--}--}}


    {{--</script>--}}
@endsection











