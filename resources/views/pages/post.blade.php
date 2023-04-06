@extends('layouts.main')

@section('title')
    Post
@endsection

@section('content')
    <div class="container mt-4">
        @foreach ($posts as $post)
            <article class="mb-5">
                <a href="{{ route('posts', $post->slug) }}">
                    <h2>{{ $post->title }}</h2>
                </a>
                <h5>{{ $post->author }}</h5>
                <p>{{ $post->excerpt }}</p>
            </article>
        @endforeach
    </div>
@endsection
