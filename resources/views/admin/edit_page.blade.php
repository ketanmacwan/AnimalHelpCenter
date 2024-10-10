<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        *{
    margin: 0;
    padding: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}
body{
    font-family:monospace;   
    background-color: white; 
}
nav{
    background: grey;
    height: 80px;
    width: 100%;
}
label.logo{
    color: black;
    font-size: 35px;
    line-height: 80px;
    padding: 0 100px;
    font-weight: bold;
}
nav ul{
    float: right;
    margin-right: 20px;
}
nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 0 5px;
}
nav ul li a{
    color: white;
    font-size: 17px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
}
a.active,a:hover{
    background: #0e0791;
    transition: .5s;

}

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
            <li><a  href="\home">ADMIN</a></li>
            <li><a href="">DONATION</a></li>
            <li><a class="active" href="{{ url('adoption_post') }}">ADOPTION</a></li>
            <li><a href="{{ url('adoption_details') }}">Adoption_details</a></li>
            <li>
        </ul>
    </nav>
    <div>

            @if(session()->has('message'))

            <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert" aria-hideen="true"></button>

                {{session()->get('message')}}

            </div>

@endif

        <h1> Update Adoption Details</h1>
        <div>
            <form action="{{url('update_post', $post->id)}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="div_center">

                        <label>Name</label>
                        <input type="text" name="title" value="{{$post->title}}">
                        @error('title')
                        <div class="danger-class">{{ $message }}</div>
                        @enderror

                </div>

                <div class="div_center">

                        <label>Description</label>
                        <textarea name="description">{{$post->description}}</textarea>
                        @error('description')
                        <div class="danger-class">{{ $message }}</div>
                        @enderror

                </div>

                <div class="div_center">
                    <label> old image</label>
                    <img style="margin:auto;" src="/postimage/{{$post->image}}" height="100px" width="150px">
                </div>

                <div class="div_center">

                        <label>Update Image</label>
                        <input type="file" name="image" value="{{$post->image}}">
                        @error('image')
                        <div class="danger-class">{{ $message }}</div>
                        @enderror

                </div>

                <div class="div_center">

                        
                        <input type="submit" value="update">

                </div>

            </form>
        </div>
    </div>
</body>
</html>

