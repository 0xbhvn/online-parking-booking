<!DOCTYPE html>
<html>

<head>
    <title>Parking Booking</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body{
            background-color:#edd9c0;
            color:black;}
        .topnav {
            background-color: #3b3a36;
            overflow: hidden;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        .topnav a:hover {
            background-color:#c0dfd9;
            color: black;
        }

        .topnav a.active {
            background-color:#e9ece5;
            color: white;
        }
        .topnav-right {
            float: right;
        }

        *{
            margin:0;
            padding:0;
        }
    </style>
</head>

<body>
<div class="topnav">
    <a style="color:black;" class="active" href="/">APSIT Parking Booking</a>
    <div class="topnav-right">
        @guest
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        @else
            <a href="/home">Home</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="#">{{ auth()->user()->name }}</a></li>
                <li class="nav-item"><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a></li>
            </ul>


            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest
    </div>
</div>
<br>
    <main class="py-4">
        @yield('content')
    </main>

</body>
</html>
