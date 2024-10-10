<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin\admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        h1{
            color:blue;
            text-align:center;
            font-size:15px; 
            padding:30px;   
        }
        .div_center{
            text-align:center;
            padding: 30px;
        }
        label{
            display:inline-block;
            width:200px;
            color:black;

        }
        .danger-class{
            color:red;
            font-size:15px;
        }
        .is-invalid-custom{
            border: red solid 1px;
        }

    </style>
    
    <title>Animal Help Center</title>
</head>
<body>
    <nav>
        </label>
        <label class="logo">animal</label>
        <ul>
            <li><a href="{{ url('/home') }}">ADMIN</a></li>
            <li><a href="">DONATION</a></li>
            <li><a class="active" href="{{ url('adoption_post') }}">ADOPTION</a></li>
            <li><a href="{{ url('adoption_details') }}">Adoption_details</a></li>
            <li>
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
            </li>   
        </ul>
        
    </nav>
    <div>

            @if(session()->has('message'))

            <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert" aria-hideen="true"></button>

                {{session()->get('message')}}

            </div>

            @endif

        <h1>Adoption Details</h1>
        <div>
            <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="div_center">

                        <label>Name</label>
                        <input type="text" name="title" value="{{old('title')}}">
                        @error('title')
                        <div class="danger-class">{{ $message }}</div>
                        @enderror

                </div>

                <div class="div_center">

                        <label>Description</label>
                        <textarea name="description" value="{{old('description')}}"></textarea>
                        @error('description')
                        <div class="danger-class">{{ $message }}</div>
                        @enderror

                </div>

                <div class="div_center">

                        <label>Image</label>
                        <input type="file" name="image" value="{{old('image')}}">
                        @error('image')
                        <div class="danger-class">{{ $message }}</div>
                        @enderror

                </div>

                <div class="div_center">

                        
                        <input type="submit">

                </div>

            </form>
            {{-- @foreach ($errors->all() as $error)
            {{ $error }}
            @endforeach --}}
            {{-- {{ $errors->all() }} --}}
        </div>
    </div>
</body>
</html>