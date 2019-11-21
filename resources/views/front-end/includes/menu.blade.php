<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
    <ul class="nav navbar-nav">
        @foreach($categories as $category)
            <li class="active"><a href="{{ route('category-product', ['id'=>$category->id]) }}" class="act">{{ $category->category_name }}</a></li>
        @endforeach
    </ul>
</div>