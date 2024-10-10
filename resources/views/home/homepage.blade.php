<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Animal Help Center</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body class="antialiased">
        <header>
    <nav>
        </label>
        <label class="logo">animal care</label>
        <ul>
            <li><a class="active" href="">HOME</a></li>
            <li><a href="{{ url('/about') }}">ABOUT</a></li>
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
        </div>
    </nav>
   <header>
   <div class="banner">
            <div class="leftSide">
                <h1>We are a animal care branch that cares for animal</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus ipsum explicabo rem vel assumenda totam, nam optio ducimus, illo voluptate repellendus illum praesentium amet iusto reiciendis libero quisquam, blanditiis minima?</p>
                <button>Donate</button>
                <button>Adopt</button>
            </div>
            <div class="rightSide">
                <img src="R.png" >
            </div>
        </div>
    </body>
</html>