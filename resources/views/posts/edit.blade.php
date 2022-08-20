@extends('layouts.main')

@section('title')
    Home Page
@endsection

@section('content')
    <form action="/posts/{{ $post->id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <h1>Edit post</h1>
        <label for="title">Title</label><br>
        <input type="text" id="title" name="title" placeholder="Enter title" value="{{ $post->title }}"><br>
        <label for="content">Content</label><br>
        <textarea name="content" id="content">{{ $post->content }}</textarea>

        <select name="category_id">
            @foreach ($categories as $category)
                @if ($category->id == $post->category_id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }} </option>
                @else
                    <option value="{{ $category->id }}">{{ $category->name }} </option>
                @endif
            @endforeach
        </select>
        <br><br>
        <input type="submit" value="Submit">
    </form>
@endsection
