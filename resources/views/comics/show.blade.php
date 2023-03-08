@extends('main')
@section('title', $comic->title)

@section('main-content')
<div class="container">
    <div class="w-50 mx-0">
        <ul>
            <li><strong>Title: </strong>{{ $comic->title }}</li>
            <li><p><strong>Description: </strong>{{ $comic->description }}</p></li>
            <li><img class="mb-3" src="{{$comic->thumb}}" alt="{{$comic->title}}" style="width: 12rem"></li>
            <li><strong>Price: </strong>{{ $comic->price }}</li>
            <li><strong>Series: </strong>{{ $comic->series }}</li>
            <li><strong>Release: </strong>{{ $comic->sale_date }}</li>
            <li><strong>Type: </strong>{{ $comic->type }}</li>
            <li><strong>Artist: </strong>{{ $comic->artists }}</li>
            <li><strong>Writers: </strong>{{ $comic->writers }}</li> 
        </ul>

        <a href="{{ route('comics.index') }}">
            <div class="btn btn-secondary mb-3">Back</div>
        </a>
    </div>
</div>
@endsection