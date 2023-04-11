@extends('layouts.main')

@section('title')
    Single Post
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article class="mb-5">
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mb-3">
                    <h2>{{ $post->title }}</h2>
                    <p>By <a href="/author/{{ $post->user->username }}"
                            class="text-decoration-none">{{ $post->user->name }}</a> in <a
                            href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                    <p>{!! $post->content !!}</p>
                </article>
                <a href="/posts">Back to posts</a>
            </div>
        </div>
    </div>
@endsection
