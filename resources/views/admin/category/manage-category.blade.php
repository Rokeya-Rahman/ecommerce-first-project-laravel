@extends('admin.master')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <h3 class="text-center text-success" id="textCut">{{ Session::get('massage') }}</h3>
                    <table class="table table-bordered">
                        <tr class="bg-primary text-white text-center">
                            <th>Serial No</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td>{{ $category->category_description }}</td>
                            <td>{{ $category->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                            <td>
                                @if($category->publication_status == 1)
                                    <a href="{{ route('unpublished-category', ['id'=>$category->id]) }}" class="btn bg-info btn-xs text-white">
                                        <i class="fas fa-arrow-up"></i>
                                    </a>
                                @else
                                    <a href="{{ route('publish-category', ['id'=>$category->id]) }}" class="btn bg-warning btn-xs text-white">
                                        <i class="fas fa-arrow-down"></i>
                                    </a>
                                @endif

                                <a href="{{ route('edit-category', ['id'=>$category->id]) }}" class="btn bg-success btn-xs text-white">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="{{ route('delete-category', ['id'=>$category->id]) }}" class="btn bg-danger btn-xs text-white">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
