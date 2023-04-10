@extends('layouts.main')

@section('title')
    Post
@endsection

@section('content')
    <div class="container mb-5 border-bottom">
        @foreach ($posts as $post)
            <article class="mb-5">
                <a href="{{ route('posts', $post->slug) }}" class="text-decoration-none">
                    <h2>{{ $post->title }}</h2>
                </a>
                <p>By <a href="/author/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                <p>{{ $post->excerpt }}</p>

                <p><a href="/category/{{ $post->category->slug }}" class="text-decoration-none">Read more...</a></p>
            </article>
        @endforeach
    </div>
@endsection
