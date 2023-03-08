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
        <div class="d-flex">
            <a href="{{ route('comics.index') }}">
                <div class="btn btn-secondary mb-3 me-2">Back</div>
            </a>
            <form action="{{route('comics.destroy',$comic->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mb-3 me-2">Delete</button>

            <a href="{{route('comics.edit', $comic->id)}}"> 
                <div class= "btn btn-warning text-white mb-3 me-2">Edit</div>
            </a>
        </div>
    </div>
</div>
@endsection