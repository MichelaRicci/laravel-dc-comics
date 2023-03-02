@extends('main')
@section('title', $comic->title)

@section('main-content')
    <h1>{{ $comic->title }}</h1>
@endsection