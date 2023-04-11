@extends('layouts.main')

@section('title')
    Post
@endsection

@section('content')
    <div class="container mt-5">
        <div class="card-hero mb-5">
            @if ($posts->count())
                <div class="card mb-3">
                    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                        alt="{{ $posts[0]->category->name }}">
                    <div class="card-body text-center">
                        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                                class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                        <p><small class="text-muted">By <a href="/author/{{ $posts[0]->user->username }}"
                                    class="text-decoration-none">{{ $posts[0]->user->name }}</a>
                                in <a href="/category/{{ $posts[0]->category->slug }}"
                                    class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                                {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                        </p>
                        <p class="card-text">{{ $posts[0]->excerpt }}</p>
                        <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read more...</a>
                    </div>
                </div>
            @else
                <p class="text-center fs-4">No Post Found...</p>
            @endif
        </div>

        <div class="card-content">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="position-absolute bg-dark px-3 py-2 text-white"
                                style="background-color: rgba(0, 0, 0, 0.7)"><a href="/category/{{ $post->category->slug }}"
                                    class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top"
                                alt="{{ $post->category->name }}">
                            <div class="card-body">
                                <a href="{{ route('posts', $post->slug) }}" class="text-decoration-none">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                </a>
                                <p><small class="text-muted">By <a href="/author/{{ $post->user->username }}"
                                            class="text-decoration-none">{{ $post->user->name }}</a>
                                        in <a href="/category/{{ $post->category->slug }}"
                                            class="text-decoration-none">{{ $post->category->name }}</a>
                                        {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- @foreach ($posts->skip(1) as $post)
            <article class="mb-5">
                <a href="{{ route('posts', $post->slug) }}" class="text-decoration-none">
                    <h2>{{ $post->title }}</h2>
                </a>
                <p>By <a href="/author/{{ $post->user->username }}"
                        class="text-decoration-none">{{ $post->user->name }}</a>
                    in <a href="/category/{{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a></p>
                <p>{{ $post->excerpt }}</p>

                <p><a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more...</a></p>
            </article>
        @endforeach --}}
    </div>
@endsection
