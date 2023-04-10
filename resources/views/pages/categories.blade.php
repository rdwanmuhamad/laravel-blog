@extends('layouts.main')

@section('title')
    Categories
@endsection

@section('content')
    <div class="container mt-4">
        <h1>{{ $title }}</h1>
        @foreach ($categories as $category)
            <ul>
                <li>
                    <a href="/category/{{ $category->slug }}">
                        <h2>{{ $category->name }}</h2>
                    </a>
                </li>
            </ul>
        @endforeach
    </div>
@endsection
