<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ADOPTION</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body class="antialiased">
    <nav>
        </label>
        <label class="logo">You can adopt</label>
        <ul>
            <li><a href="{{ url('/') }}">HOME</a></li>
            <li><a href="{{ url('/about') }}">ABOUT</a></li>
            <li><a href="{{ url('/donation') }}">DONATE</a></li>
            <li><a class="active" href="">ADOPTION</a></li>
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
    </body>
</html>