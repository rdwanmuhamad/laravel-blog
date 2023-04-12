@extends('layouts.main')

@section('title')
    Post
@endsection

@section('content')
    <div class="container mt-5">
        <h2 class="mb-3 text-center">All Post</h2>

        <div class="search mb-3">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="/posts" method="GET">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if (request('user'))
                            <input type="hidden" name="user" value="{{ request('user') }}">
                        @endif
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search..." name="search"
                                value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card-hero mb-5">
            @if ($posts->count())
                <div class="card mb-3">
                    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                        alt="{{ $posts[0]->category->name }}">
                    <div class="card-body text-center">
                        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                                class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                        <p><small class="text-muted">By <a href="/posts?user={{ $posts[0]->user->username }}"
                                    class="text-decoration-none">{{ $posts[0]->user->name }}</a>
                                in <a href="/posts?category={{ $posts[0]->category->slug }}"
                                    class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                                {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                        </p>
                        <p class="card-text">{{ $posts[0]->excerpt }}</p>
                        <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read more...</a>
                    </div>
                </div>
        </div>

        <div class="card-content mb-3">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class="position-absolute bg-dark px-3 py-2 text-white"
                                style="background-color: rgba(0, 0, 0, 0.7)"><a
                                    href="/posts?category={{ $post->category->slug }}"
                                    class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top"
                                alt="{{ $post->category->name }}">
                            <div class="card-body">
                                <a href="{{ route('posts', $post->slug) }}" class="text-decoration-none">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                </a>
                                <p><small class="text-muted">By <a href="/posts?user={{ $post->user->username }}"
                                            class="text-decoration-none">{{ $post->user->name }}</a>
                                        in <a href="/posts?category={{ $post->category->slug }}"
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

        <div class="pagination d-flex justify-content-center">
            <div class="row">
                <div class="col-md-12">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>

    @else
        <p class="text-center fs-4">No Post Found...</p>
     @endif

@endsection
