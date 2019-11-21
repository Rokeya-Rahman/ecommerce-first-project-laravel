@extends('admin.master')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-10 mx-auto">
                    <div class="card-header">
                        <h4 class="text-center text-success">Add Category From</h4>
                    </div>

                    <div class="card-body">
                        <h3 class="text-center text-success my-3">{{ Session::get('massage') }}</h3>
                        <form action="{{ route('new-category') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4">Category Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="category_name" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4">Category Description</label>
                                <div class="col-md-8">
                                    <textarea name="category_description" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4">Publication Status</label>
                                <div class="col-md-8 radio">
                                    <label><input type="radio" name="publication_status" value="1"/>Published</label>
                                    <label><input type="radio" name="publication_status" value="0" class="ml-4"/>Unpublished</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4"></div>
                                <div class="col-md-8">
                                    <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Category Info"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

        {{--<div class="row text-center">--}}
            {{--<div class="col-md-10 col-md-offset-1">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">--}}
                        {{--<h4 class="text-center text-success">Add Category From</h4>--}}
                    {{--</div>--}}
                    {{--<div class="panel-body">--}}
                        {{--<form action="" method="post" class="form-horizontal">--}}
                            {{--<div class="form-group row">--}}
                                {{--<label for="" class="control-label col-md-4">Category Name</label>--}}
                                {{--<div class="col-md-8">--}}
                                    {{--<input type="text" name="category_name" class="form-control">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

@endsection