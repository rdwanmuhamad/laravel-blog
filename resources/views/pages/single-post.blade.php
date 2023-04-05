@extends('layouts.main')

@section('title')
    Single Post
@endsection

@section('content')
    <div class="container mt-4">
        <article class="mb-5">
            <h2>{{ $post['title'] }}</h2>
            <h5>{{ $post['author'] }}</h5>
            <p>{{ $post['content'] }}</p>
        </article>
        <a href="/posts">Back to posts</a>
    </div>
@endsection
