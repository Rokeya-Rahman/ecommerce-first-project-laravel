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
                        {{ Form::open(['route'=>'update-brand', 'method'=>'POST', 'class'=>'from-horizontal']) }}

                            <div class="form-group row">
                                <label for="" class="col-md-4">Brand Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="brand_name" value="{{ $brand->brand_name }}" class="form-control"/>
                                    <input type="hidden" name="brand_id" value="{{ $brand->id }}" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4">Brand Description</label>
                                <div class="col-md-8">
                                    <textarea name="brand_description" class="form-control">{{ $brand->brand_description }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4">Publication Status</label>
                                <div class="col-md-8 radio">
                                    <label><input type="radio" name="publication_status" {{ $brand->publication_status == 1 ? 'checked' : '' }} value="1"/>Published</label>
                                    <label><input type="radio" name="publication_status" {{ $brand->publication_status == 0 ? 'checked' : '' }} value="0" class="ml-4"/>Unpublished</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4"></div>
                                <div class="col-md-8">
                                    <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Brand Info"/>
                                </div>
                            </div>

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection