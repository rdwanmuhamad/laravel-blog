@extends('layouts.main')

@section('title')
    Single Post
@endsection

@section('content')
    <div class="container mt-4">
        <article class="mb-5">
            <h2>{{ $post->title }}</h2>
            <p>By Muhamad Ridwan in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{!! $post->content !!}</p>
        </article>
        <a href="/posts">Back to posts</a>
    </div>
@endsection
