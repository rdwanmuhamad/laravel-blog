@extends('layouts.main')

@section('title')
    Category
@endsection

@section('content')
    <div class="container mt-4">
        <h1 class="mb-3">Post by Category : {{ $category }}</h1>
        @foreach ($posts as $post)
            <article class="mb-5">
                <a href="{{ route('posts', $post->slug) }}">
                    <h2>{{ $post->title }}</h2>
                </a>
                <p>By <a href="/author/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                <p>{{ $post->excerpt }}</p>
            </article>
        @endforeach
    </div>
@endsection
