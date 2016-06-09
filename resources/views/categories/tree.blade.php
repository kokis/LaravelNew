<ul>
    @foreach($categories as $category)
        <li>{{ $category->title }}</li>
        @if($category->children)
            @include('categories.tree', ['categories' => $category->children])
        @endif
    @endforeach
</ul>