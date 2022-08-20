@extends('layouts.main')

@section('title')
    Home Page
@endsection

@section('sidebar')
    Side menu
@endsection

@section('content')
    <form action="/posts" method="POST">
        {{ csrf_field() }}
        <h1>Create a new post</h1>
        <label for="title">Title</label><br>
        <input type="text" id="title" name="title" placeholder="Enter title"><br>
        <label for="content">Content</label><br>
        <textarea type="password" name="content" id="content"></textarea>
        <br><br>
        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }} </option>
            @endforeach
        </select>
        <input type="submit" value="Submit">
    </form>
@endsection
