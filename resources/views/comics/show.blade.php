@extends('main')
@section('title', $comic->title)

@section('main-content')
<ul>
    <li>Title:{{ $comic->title }}</li>
    <li><p>Description:{{ $comic->description }}</p></li>
    <li><img src="{{$comic->thumb}}" alt="{{$comic->title}}"></li>
    <li>Price:{{ $comic->price }}</li>
    <li>Series:{{ $comic->series }}</li>
    <li>Release:{{ $comic->sale_date }}</li>
    <li>Type:{{ $comic->type }}</li>
    <li>Artist:{{ $comic->artists }}</li>
    <li>Writers:{{ $comic->writers }}</li> 
</ul>
@endsection