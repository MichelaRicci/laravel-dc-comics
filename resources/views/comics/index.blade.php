@extends('main')

@section('title', 'comics')

@section('home-content')
<section class="comics-gallery py-3">
        <div class="container">
            <div class="title-box">
                <h2 class="text-uppercase text-center">Current Series</h2>
            </div>
            <div class="row flewx-wrap">
                @foreach ($comics as $comic)
                <div class="cards">
                    <figure>
                        <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                    </figure>
                    <div class="text-uppercase text-white">{{ $comic['series'] }}</div>
                </div>
                @endforeach
            </div>
            <div class="btn d-flex">
                <button class="bg-primary text-uppercase text-white fw-bold load-btn">Load More</button>
            </div>
        </div>
    </section>
@endsection
