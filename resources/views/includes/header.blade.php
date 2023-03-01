@php 

$menu = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop']

@endphp




<header>

    <nav class="container justify-content-around align-items-center">
        <div class="nav-left">
            <a href="{{ url('/') }}">
                <img id="logo-header" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo DC">
            </a>
        </div>
        <div class="nav-right d-flex">
            @foreach ($menu as $menu)
             <ul>
                <li><a class="text-uppercase fw-bold" href="{{$menu}}">{{ $menu }}</a></li>
            </ul>
            @endforeach

            <div><input id="searchbar" type="text"  placeholder="Search" class="mt-4"></div>


        </div>
    </nav>

    <div class="jumbotron"></div>
    
</header>