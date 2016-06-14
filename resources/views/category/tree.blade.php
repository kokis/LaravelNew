<ul>
    @foreach($categories as $category)
        <li><a href="{{ url('category/'.$category->title) }}">{{ $category->title }}</a></li>
        @if($category->children)
            @include('category.tree', ['categories' => $category->children])
        @endif
    @endforeach
</ul>