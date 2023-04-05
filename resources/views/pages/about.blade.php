@extends('layouts.main')

@section('title')
    About
@endsection

@section('content')
    <div class="container mt-4">
        <h1>Halaman About</h1>
        <h3>{{ $name }}</h3>
        <p>{{ $email }}</p>
        <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
    </div>
@endsection
