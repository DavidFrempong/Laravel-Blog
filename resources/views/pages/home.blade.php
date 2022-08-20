@extends('layouts.main')

@section('title')
    Home Page
@endsection

@section('sidebar')
    Side menu
@endsection

@section('content')
   Welcome back, {{$user_name}}
@endsection