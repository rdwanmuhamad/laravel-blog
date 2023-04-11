@extends('layouts.main')

@section('title')
    Categories
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-3 mb-3">
                    <div class="card text-bg-dark text-white bg-dark border-0">
                        <a href="/category/{{ $category->slug }}" class="text-decoration-none text-white">
                            <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img"
                                alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title flex-fill text-center p-4 fs-3"
                                    style="background-color: rgba(0, 0, 0, 0.7)"">{{ $category->name }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
