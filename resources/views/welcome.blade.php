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
    <nav>
        </label>
        <label class="logo">animal</label>
        <ul>
            <li><a class="active" href="">HOME</a></li>
            <li><a href="{{ url('/about') }}">ABOUT</a></li>
            <li><a href="{{ url('/donation') }}">DONATION</a></li>
            <li><a href="{{ url('/adoption') }}">ADOPTION</a></li>
            <li><a href="{{ url('/login') }}">LOGIN</a></li>
            <li><a href="{{ url('/register') }}">REGISTER</a></li>
        </ul> 
    </nav>
        <!-- <h1>Animal Help Center</h1> -->
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

    
        <div>
                <table align="center">
                    <form method="get" action="">
                    Name:<input type="text" name="name">
                    <input type="submit" value="submit">
                    </form>

                    <tr>
                        <th>ID</th>
                        <th>Hospital Name</th>
                        <th>Area</th>
                        <th>Address</th>
                        <th colspan="2">Action</th>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>animal care</td>
                        <td>sindhu bhavan</td>
                        <td>bodakdev</td>
                        <td><a href="">EDIT</a></td>
                        <td><a href="">Delete</a></td>
                    </tr>

                    <tr>
                    <td colspan="6"  class="d-flex justify-content-center"></td>
                    </tr>
                </table>
        </div>
    </body>
</html>
