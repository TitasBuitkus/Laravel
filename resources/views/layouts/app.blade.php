<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Paskaitunas') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #dd0d0d; /* Light blue background for a fresh look */
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 2rem;
        }

        .navbar {
            background-color: #ff5733; /* Bright orange navbar */
            color: #da9e06;
        }

        .navbar-brand {
            color: #dd0d0d !important;
            font-weight: bold;
            font-size: 1.5rem;
        }

        .navbar-nav .nav-link {
            color: #ffffff !important;
            margin-right: 15px;
            font-weight: 500;
        }

        .navbar-nav .nav-link:hover {
            color: #ffc107 !important; /* Bright yellow on hover */
        }

        .nav-item.dropdown .nav-link {
            font-weight: 700;
        }

        .dropdown-item {
            font-weight: 500;
            background-color: #ffcc00; /* Yellow background for dropdown items */
        }

        .dropdown-item:hover {
            background-color: #ff5733; /* Darker orange on hover */
            color: #dd0d0d;
        }

        main {
            background-color: #ffffff; /* White background for content */
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            border: 2px solid #ff5733; /* Border with the same bright color */
        }

        footer {
            text-align: center;
            padding: 1rem;
            background-color: #ff5733; /* Footer in bright orange */
            color: #ffffff;
        }

        footer p {
            margin: 0;
        }

        .btn-primary {
            background-color: #ff5733; /* Primary button bright color */
            color: #ffffff;
        }

        .btn-primary:hover {
            background-color: #ffcc00; /* Hover effect with yellow */
            color: #da9e06;
        }
    </style>

    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
<div id="app">
    <!-- Navbar (optional) -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Prisijungti') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registruotis') }}</a>
                            </li>
                        @endif

                        @if (Route::has('home'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 {{ config('app.name') }}. All rights reserved.</p>
    </footer>
</div>
</body>
</html>
