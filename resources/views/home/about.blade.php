<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ABOUT</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body class="antialiased">
        <nav>
            </label>
            <label class="logo">ABOUT</label>
            <ul>
                <li><a href="{{ url('/') }}">HOME</a></li>
                <li><a class="active" href="{{ url('/about') }}">ABOUT</a></li>
                <li><a href="{{ url('/donation') }}">DONATE</a></li>
                <li><a href="{{ url('/adoption') }}">ADOPTION</a></li>
                @if (Route::has('login'))
            
            @auth
            <li>
            <x-app-layout>
            </x-app-layout>
            </li>
            @else
            <li><a href="{{ url('/login') }}">LOGIN</a></li>
            <li><a href="{{ url('/register') }}">REGISTER</a></li>

            @endauth
            @endif
            </ul>
        </nav>
        <div class="banner">
            <div class="leftSide">
            <h1>WHO WE ARE</h1>
            <h1>We are a nonprofit animal welfare organisation working to create a safe and healthy world for every animal, and for the people who love them.</h1>
            <p>Animal care is here for every animal in need, and has been since 2010. We believe that every animal deserves the best. That’s why we are dedicated
               to the rescue and rehabilitation of stray and abandoned animals — we believe we can transform their quality of life through kindness and compassion. </p>
        </div>
        </div>
        <footer>
            <div>
            <div class="banner">
            <div class="rightSide">
                <h1>Our vision is a kind and loving world for every animal.</h1>
                <p>Tens of thousands of animals later, we’re still working hard 
                    to ensure every dog / cat / elephant / horse / tortoise / rabbit 
                    is treated with love, care, and respect. </p>
            </div>
            </div>
        </footer>
    </body>
</html>