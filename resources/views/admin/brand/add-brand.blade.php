@extends('admin.master')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-10 mx-auto">
                    <div class="card-header">
                        <h4 class="text-center text-success">Add Brand From</h4>
                    </div>

                    <div class="card-body">
                        <h3 class="text-center text-success my-3">{{ Session::get('massage') }}</h3>

                        {{ Form::open(['route'=>'new-brand', 'method'=>'POST', 'class'=>'from-horizontal']) }}

                            <div class="form-group row">
                                <label class="control-label col-md-4">Brand Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="brand_name" class="form-control">
                                    <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-4">Brand Description</label>
                                <div class="col-md-8">
                                    <textarea name="brand_description" class="form-control"></textarea>
                                    <span class="text-danger">{{ $errors->has('brand_description') ? $errors->first('brand_description') : ' ' }}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-4">Publication Status</label>
                                <div class="col-md-8 radio">
                                    <lable><input type="radio" name="publication_status" value="1"/>Published</lable>
                                    <lable><input type="radio" name="publication_status" value="0" class="ml-4"/>Unpublished</lable>
                                    <br />
                                    <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4"></div>
                                <div class="col-md-8">
                                    <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Brand Info"/>
                                </div>
                            </div>
                        
                            {{--<div class="form-group row">--}}
                                {{--{{ Form::label('brand_name', 'Brand Name', ['class' => 'col-md-3']) }}--}}
                                {{--<div class="col-md-9">--}}
                                    {{--{{ Form::text('brand_name','', ['class' => 'form-control']) }}--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection