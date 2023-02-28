<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    @yield('cdns')

    @vite('resources/js/app.js')

    
</head>
<body>
    @include('includes.header')
    <main>

        <div class="jumbotron">
        </div> 
        @yield('home-content')

        <div class="bg-container z-1 position-absolute">
            <div class="container">
                <div class="row">
                    <div class="d-flex">


                        <div class="col d-flex mt-5">
                            <div class="p-3">
                                <h4 class="text-uppercase">DC Comics</h4>
                                <ul>
                                    <li><a href="#">Characters</a></li>
                                    <li><a href="#">Comics</a></li>
                                    <li><a href="#">Movies</a></li>
                                    <li><a href="#">TV</a></li>
                                    <li><a href="#">Games</a></li>
                                    <li><a href="#">Videos</a></li>
                                    <li><a href="#">News</a></li>
                                </ul>

                                <h4 class="text-uppercase">Shop</h4>

                                <ul>
                                    <li><a href="#">Shop DC</a></li>
                                    <li><a href="#">Shop DC Collectibles</a></li>
                                </ul>
                            </div>

                            <div class="p-3">
                                <h4 class="text-uppercase">DC</h4>
                                <ul>
                                    <li><a href="#">Therm of use</a></li>
                                    <li><a href="#">Privacy policy (New)</a></li>
                                    <li><a href="#">Ad Choices</a></li>
                                    <li><a href="#">Advertisign</a></li>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Subscriptions</a></li>
                                    <li><a href="#">Talent Workshops</a></li>
                                    <li><a href="#">CPSC Certificates</a></li>
                                    <li><a href="#">Ratings</a></li>
                                    <li><a href="#">Shop Help</a></li>
                                    <li><a href="#">Contact US</a></li>
                                </ul>
                            </div>

                            <div class="p-3">
                                <h4 class="text-uppercase">Sites</h4>
                                <ul>
                                    <li><a href="#">DC</a></li>
                                    <li><a href="#">MAD Magazine</a></li>
                                    <li><a href="#">DC Kids</a></li>
                                    <li><a href="#">DC Universe</a></li>
                                    <li><a href="#">DC Power Visa</a></li>
                                </ul>
                            </div>


                        </div> 

                        <div class="logo-container">
                            <img class="logo" src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="logo">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    @include('includes.footer')
    
</body>
</html>
