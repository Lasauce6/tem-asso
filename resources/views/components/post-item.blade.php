<div class="blog-card-bg">
    <div class="blog-card__img">
        <a href="{{ route('posts.show', $post->slug) }}">
            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}">
        </a>
    </div>
    <div class="grid-list-items__item blog-card">
        <div class="blog-card__header">
            <div class="blog-card__cat-links">
                @foreach($post->categories as $category)
                    <a href="{{ route('posts.category', $category->slug) }}">{{ $category->title }}</a>
                @endforeach
            </div>
            <h3 class="blog-card__title"><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h3>
        </div>
        <div class="blog-card__text">
            {{ $post->shortBody() }}
        </div>
    </div> <!-- end blog-card -->
</div>
