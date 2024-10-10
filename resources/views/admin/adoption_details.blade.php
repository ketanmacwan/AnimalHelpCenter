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
        .table_degin{
            border: 1px solid white;
            width:80%;
            text-align:center; 
            margin-left:80px;
        }

        /* table tr , th{
            color:white;
        } */

        .th_degin{
            background-color:skyblue;
        }
        .img_degin{
            height:100px;
            width:150px;
            padding:10px;            
        }
        .td_degin{
        
        }
    </style>
    
    <title>Adoption Details</title>
</head>
<body>
    
    <nav>
        </label>
        <label class="logo">animal</label>
        <ul>
            <li><a href="/home">ADMIN</a></li>
            <li><a href="">DONATION</a></li>
            <li><a href="{{ url('adoption_post') }}">ADOPTION</a></li>
            <li><a class="active" href="{{ url('adoption_details') }}">Adoption_details</a></li>
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
    
            <div class="page-content">

                @if(session()->has('message'))

                <div class="btn btn-outline-danger">

                    <button type="button" class="close" data-dismiss="alert" aria-hideen="true"></button>

                    {{session()->get('message')}}

                </div>

                @endif

                    <h1>Adoption_Details_List</h1>



                    <table class="table_degin">
                <form method="get" action="{{ route('adoption') }}">   
                    Name:<input type="text" name="title">
                    <input type="submit" value="submit">
                </form>

                            <tr class="th_degin">
                                <th>Name</th>
                                <th>Description</th>
                                <th>Post by</th>
                                <th>Post status</th>
                                <th>UserType</th>
                                <th>Image</th>
                                <th>Delete</th>

                                <th>Edit</th>
                                

                                
                            </tr>


                        @foreach($post as $post)
                            <tr class="td_degin">
                                <td>{{$post->title}}</td>
                                <td>{{$post->description}}</td>
                                <td>{{$post->name}}</td>
                                <td>{{$post->post_staus}}</td>
                                <td>{{$post->usertype}}</td>
                                <td>
                                    <img  class="img_degin" src="postimage/{{$post->image}}" alt="">
                                </td>

                                <td>
                                    <a href="{{url('delete_post',$post->id)}}" class="btn btn-danger" onClick="return confirm('Are You Sure to Delete This ?')">Delete</a>
                                </td>

                                <td>
                                    <a href="{{url('edit_post',$post->id)}}" class="btn btn-success">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                </tr>

              

                   </table>

                   
                   
                   

            </div>
</body>
</html>

