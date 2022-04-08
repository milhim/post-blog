<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Post</title>

</head>

<body class="  w-100" style="background-color: rgba(172, 166, 166, 0.747)">

    <nav class="p-3 bg-white d-flex justify-content-between mb-4">

        <ul class="d-flex items-center list-unstyled m-0 ">
            <li>
                <a href="" class="p-3 fs-5 text-black text-decoration-none">Home</a>
            </li>

            <li>
                <a href="{{route('dashboard')}}" class="p-3 fs-5 text-black text-decoration-none">Dashboard</a>
            </li>

            <li>
                <a href="{{route('posts')}}" class="p-3 fs-5 text-black text-decoration-none">Post</a>
            </li>
        </ul>

        <ul class="d-flex items-center list-unstyled m-0 ">
            @auth
                <li>
                    <a href="" class="p-3 fs-5 text-black text-decoration-none">{{auth()->user()->name}}</a>
                </li>
                <li>
                    <form action="{{route('logout')}}" class="d-inline p-3" method="POST">
                       @csrf
                        <button type="submit" class=" fs-5 bg-white border-0">Logout</button>
                    </form>
                </li>

            @endauth

            @guest
                <li>
                    <a href="{{ route('login') }}" class="p-3 fs-5 text-black text-decoration-none">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="p-3 fs-5 text-black text-decoration-none">Register</a>
                </li>
            @endguest


        </ul>

    </nav>


    @yield('content')


</body>

</html>
