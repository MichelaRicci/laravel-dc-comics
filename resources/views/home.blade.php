@extends('main')


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

    <section id="shop-section">
        <div class="container d-flex">
            <div class="shop-card">
                <img class="img-fluid" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="buy-comics-digital-comics.png">
                <div class="text-uppercase text-white ps-3 align-self-center">Digital Comics</div>
            </div>
            <div class="shop-card">
                <img class="img-fluid"  src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="buy-comics-merchandise">
                <div class="text-uppercase text-white ps-3 align-self-center">DC Merchandise </div>
            </div>
            <div class="shop-card">
                <img class="img-fluid" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="buy-comics-subscriptions.png">
                <div class="text-uppercase text-white ps-3 align-self-center">Subscription </div>
            </div>
            <div class="shop-card">
                <img class="img-fluid" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="/buy-comics-shop-locator.png">
                <div class="text-uppercase text-white ps-3 align-self-center">Comic Shop Locator </div>
            </div>
            <div class="shop-card">
                <img class="img-fluid" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="buy-dc-power-visa.svg">
                <div class="text-uppercase text-white ps-3 align-self-center">DC Power Visa </div>
            </div>
        </div>
    </section>
@endsection