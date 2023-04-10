@extends('layouts.main')

@section('title')
    Single Post
@endsection

@section('content')
    <div class="container mt-4">
        <article class="mb-5">
            <h2>{{ $post->title }}</h2>
            <p>By <a href="/author/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{!! $post->content !!}</p>
        </article>
        <a href="/posts">Back to posts</a>
    </div>
@endsection
