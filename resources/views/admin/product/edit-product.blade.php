@extends('admin.master')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="card-header">
                    <h4 class="text-center text-success">Add Product From</h4>
                </div>

                <div class="card-body">
                    <h3 class="text-center text-success my-3">{{ Session::get('massage') }}</h3>

                    {{ Form::open(['route'=>'update-product', 'method'=>'POST', 'class'=>'from-horizontal', 'enctype'=>'multipart/form-data', 'name'=>'editProductionFrom']) }}

                    <div class="form-group row">
                        <label class="control-label col-md-4">Category Name</label>
                        <div class="col-md-8">
                            <select class="form-control" name="category_id">
                                <option>--- Select Category name ---</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->has('category_id') ? $errors->first('category_id') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-md-4">Brand Name</label>
                        <div class="col-md-8">
                            <select class="form-control" name="brand_id">
                                <option>--- Select Brand name ---</option>
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->has('brand_id') ? $errors->first('brand_id') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-md-4">Product Name</label>
                        <div class="col-md-8">
                            <input type="text" value="{{ $product->product_name }}" class="form-control" name="product_name"/>
                            <input type="hidden" value="{{ $product->id }}" class="form-control" name="product_id"/>
                            <span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-md-4">Product Price</label>
                        <div class="col-md-8">
                            <input type="number" value="{{ $product->product_price }}" class="form-control" name="product_price"/>
                            <span class="text-danger">{{ $errors->has('product_price') ? $errors->first('product_price') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-md-4">Product Quantity</label>
                        <div class="col-md-8">
                            <input type="number" value="{{ $product->product_quantity }}" class="form-control" name="product_quantity"/>
                            <span class="text-danger">{{ $errors->has('product_quantity') ? $errors->first('product_quantity') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-md-4">Short Description</label>
                        <div class="col-md-8">
                            <textarea name="short_description" class="form-control">{{ $product->short_description }}</textarea>
                            <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-md-4">Long Description</label>
                        <div class="col-md-8">
                            <textarea name="long_description" id="editor" class="form-control">{{ $product->long_description }}</textarea>
                            <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-md-4">Product Image</label>
                        <div class="col-md-8">
                            <input type="file" name="product_image" accept="image/*"/>
                            <br />
                            <img src="{{ asset($product->product_image) }}" alt="" height="80" width="80"/>
                            <span class="text-danger">{{ $errors->has('product_image') ? $errors->first('product_image') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-md-4">Publication Status</label>
                        <div class="col-md-8 radio">
                            <lable><input type="radio" name="publication_status" {{ $category->publication_status == 1 ? 'checked' : '' }} value="1"/>Published</lable>
                            <lable><input type="radio" name="publication_status" {{ $category->publication_status == 0 ? 'checked' : '' }} value="0" class="ml-4"/>Unpublished</lable>
                            <br />
                            <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Product Info"/>
                        </div>
                    </div>

                    {{ Form::close() }}

                </div>

            </div>
        </div>
    </div>

    <script>
        document.forms['editProductionFrom'].elements['category_id'].value = '{{ $product->category_id }}';
        document.forms['editProductionFrom'].elements['brand_id'].value = '{{ $product->brand_id }}';
    </script>

@endsection