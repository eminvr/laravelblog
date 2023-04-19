
@isset($categories)
<div class="col-md-3">
    <div class="list-group">
        @foreach ($categories as $category)
        <a href="#" class="list-group-item list-group-item-action">
            {{ $category->name }}

            <span class="badge bg-primary rounded-pill">{{$category->articleCount()}}</span>
        </a>
        @endforeach

    </div>
</div>
@endisset
