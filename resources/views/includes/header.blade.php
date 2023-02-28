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

            <!-- <ul class="fw-bold">
                <li><a href="{{ Route('characters') }}" class="text-uppercase">Characters</a></li>
                <li><a href="{{ Route('comics') }}" class="text-uppercase">Comics</a></li>
                <li><a href="{{ Route('movies') }}" class="text-uppercase">Movies</a></li>
                <li><a href="{{ Route('tv') }}" class="text-uppercase">TV</a></li>
                <li><a href="{{ Route('games') }}" class="text-uppercase">Games</a></li>
                <li><a href="{{ Route('collectibles') }}" class="text-uppercase">Collectibles</a></li>
                <li><a href="{{ Route('videos') }}" class="text-uppercase">Videos</a></li>
                <li><a href="{{ Route('fans') }}" class="text-uppercase">Fans</a></li>
                <li><a href="{{ Route('news') }}" class="text-uppercase">News</a></li>
                <li><a href="{{ Route('shop') }}" class="text-uppercase">Shop</a></li>
            </ul> -->
            <div><input id="searchbar" type="text"  placeholder="Search" class="mt-4"></div>


        </div>
    </nav>
    
</header>