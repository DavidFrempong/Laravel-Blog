@extends('layouts.main')

@section('title')
    Home Page
@endsection

@section('sidebar')
    Side menu
@endsection

@section('content')
@foreach ($posts as $post)
    <a href="/posts/{{ $post->id }}">
        <h1>{{ $post->title }}</h1>
        <h3>{{ $post->category->name }}</h3>
    </a>
    <p>{{ $post->content }}</p>
    @endforeach
@endsection
