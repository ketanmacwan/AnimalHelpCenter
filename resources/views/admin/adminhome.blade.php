<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin\admin.css">
    
    <title>Animal Help Center</title>
</head>
<body>
    <nav>    
        </label>
        <label class="logo">animal</label>
        <ul>
            <li><a class="active" href="">ADMIN</a></li>
            <li><a href="">DONATION</a></li>
            <li><a href="{{ url('adoption_post') }}">ADOPTION</a></li>
            <li><a href="{{ url('adoption_details') }}">Adoption_details</a></li>
            <li>
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
            <li>
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                            </x-dropdown-link>
                            </li>                
            </form>
            
        </ul>

    </nav>
</body>
</html>

