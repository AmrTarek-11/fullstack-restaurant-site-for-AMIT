<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bistro Bliss</title>
    <link rel="stylesheet" href="{{ asset('css/styleoftheheader.css') }}">
</head>

<body>
    <header>
        <!-- Top header -->
        <div class="topheader">
            <div class="topheadercontain">
                <div class="lefttop">
                    <p>(414) 857 - 0107</p>
                    <p>yummy@bistrobliss</p>
                </div>
                <div class="righttop">
                    <img src="{{ asset('images/1.png') }}" alt="">
                    <img src="{{ asset('images/2.png') }}" alt="">
                    <img src="{{ asset('images/3.png') }}" alt="">
                    <img src="{{ asset('images/4.png') }}" alt="">
                </div>
            </div>
        </div>

        <!-- Navbar -->
        <nav>
            <div class="left">
                <img  src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
                <p   class="logoword">Bistro Bliss</p>
            </div>

            <div class="middle">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/about') }}">About</a>
                <a href="{{ url('/menu') }}">Menu</a>
                <a href="{{ url('/pages') }}">Pages</a>

                @auth
                    <a href="{{ route('profile') }}" >Profile</a>
                @endauth

            

            </div>

            <div class="right">
                <a href="/booktable">
                    <button class="btn-book">Book A Table</button>

                </a>
   
                @guest
                    <!-- Show when NOT logged in -->
                    <a href="{{ route('login') }}" class="btn-auth">Login</a>
                    <a href="{{ route('register') }}" class="btn-auth">Register</a>
                @endguest



                @auth
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn-auth">Logout</button>
                    </form>
                @endauth
                 @auth
                    @if (auth()->user()->role === 'admin')
                        <a style="color: red" href="{{ route('admin.adminpanel') }}">dashboard</a>
                    @endif
                @endauth
            </div>
        </nav>
    </header>
</body>

</html>
