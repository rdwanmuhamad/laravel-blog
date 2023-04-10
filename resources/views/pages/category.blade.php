@extends('layouts.main')

@section('title')
    Category
@endsection

@section('content')
    <div class="container mt-4">
        <h1>Post Category : {{ $category }}</h1>
        @foreach ($posts as $post)
            <article class="mb-5">
                <a href="{{ route('posts', $post->slug) }}">
                    <h2>{{ $post->title }}</h2>
                </a>
                <p>By Muhamad Ridwan in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                <p>{{ $post->excerpt }}</p>
            </article>
        @endforeach
    </div>
@endsection
