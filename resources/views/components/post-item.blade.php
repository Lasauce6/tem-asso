<div class="blog-card-bg post-card">
    <div class="blog-card__img">
        <a href="{{ route('posts.show', $post->slug) }}">
            <div class="relative">
                <div class="absolute inset-0 overflow-hidden z-10 rounded-t-[30px]">
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                </div>
                <div class="absolute inset-0 backdrop-filter backdrop-blur-sm z-20 rounded-t-[30px]"></div>

                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="w-auto max-h-[300px] object-contain z-30 relative">
            </div>
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
        <a href="{{ route('posts.show', $post->slug) }}">
            <div class="blog-card__text">
                {{ $post->shortBody() }}
            </div>
        </a>
    </div> <!-- end blog-card -->
</div>
