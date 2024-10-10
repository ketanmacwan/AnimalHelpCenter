<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DONATE</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="style.css">
        <style>
            header{
                width:100vw;
                min-height:100vh;
                background:#34495e;
                font-size:1.2rem;
                display:flex;
                justify-content:center;
                align-items:center;
            }
            .container{
                background:white;
                max-width:800px;
                min-height:500px;
                display:flex;
                justify-content:space-between;
                align-items:flex-start;
                padding:0.5rem 1.5rem;
            }
            .left{
                flex-basis:50%;
            }
            .right{
                flex-basis:50%;
            }form{
                padding:1rem;
            }
            H3{
                margin-top:1rem;
                color:#2c3e50;
            }
            form input[type="text"]{
                width:100%;
                padding:0.5rem 0.7rem;
                margin:0.5rem 0;
                outline:none;
            }
            form input[type="email"]{
                width:100%;
                padding:0.5rem 0.7rem;
                margin:0.5rem 0;
                outline:none;
            }
            form input[type="number"]{
                width:100%;
                padding:0.5rem 0.7rem;
                margin:0.5rem 0;
                outline:none;
            }
            #zip{
                display:flex;
                margin-top:0.5rem;
            }
            #zip select{
                padding:0.5rem 0.7rem;
            }
        </style>
        
    </head>
    <body class="antialiased">
    <nav>
        </label>
        <label class="logo">Donate Now</label>
        <ul>
            <li><a href="{{ url('/') }}">HOME</a></li>
            <li><a href="{{ url('/about') }}">ABOUT</a></li>
            <li><a class="active" href="">DONATE</a></li>
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
                <!-- donation details-->
        <header>
            <div class="container">
                <div class="left">
                    <h3>Donate For Animal Care</h3>
                    <form>
                        FIRST_NAME<input type="text" name="" placeholder="First Name">
                        LAST_NAME<input type="text" name="" placeholder="Last Name">
                        EMAIL<input type="email" name="" placeholder="Enter Email">
                        PHONE<input type="number" name="" placeholder="Enter Number">
                    </form>
                </div>
                <div class="right">
                <h3>PAYMENT</h3>
                <form>
                        Accepted Card
                        <img src="" width="100">
                        <img src="" width="50">
                        <br><br>
                        Donation Amount<input type="number" name="" placeholder="Enter Number">
                        <input type="submit" >
                        <input type="reset">
                    </form>
                </div>
            </div>
        </header>   
   
    </body>
</html>