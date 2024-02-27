@extends('main')

@section('title', 'Actualités - '. $post->title)

@section('content')
    <section id="content" class="s-content">

        <section class="s-pageheader pageheader">
            <div class="row">
                <div class="column xl-12">
                    <h1 class="page-title">
                        <span class="page-title__small-type text-pretitle">Actualité</span>
                        {{ $post->title }}
                        <span class="page-title__small-type text-pretitle">Catégorie
                            @foreach($post->categories as $category)
                                <a href="{{ route('posts.index', ['category' => $category->slug]) }}">{{ $category->title }}</a>
                            @endforeach
                        </span>

                    </h1>
                </div>
            </div>
        </section>

        <div class="container mx-auto my-20">
            <div class="mx-8">
                <img class="max-h-[700px] w-full rounded-xl object-cover shadow-xl"
                     src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}">
            </div>

            <div class="row">
                <div class="column xl-12">
                    <article class="s-content__entry entry format-standard">
                        <div class="s-content__media">

                        </div> <!-- end s-content__media -->
                        <div class="s-content__primary space-y-5">
                            {!! $post->body !!}
                        </div> <!-- end s-content__primary -->
                    </article> <!-- end entry -->
                </div>
            </div>

        </div>

    </section> <!-- s-content-->

@endsection
