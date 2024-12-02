<!-- resources/views/menu.blade.php -->

<!DOCTYPE html>
<html lang="lt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">

<div class="flex h-screen">
    <!-- Kairioji juosta -->
    <div class="w-1/4 bg-blue-800 text-white p-6">
        @auth
            <!-- Jei vartotojas prisijungęs -->
            <h2 class="text-2xl font-semibold mb-6">{{ Auth::user()->name }}</h2> <!-- Vartotojo vardas -->

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="text-xl bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded-full block mb-2">
                    Atsijungti
                </button>
            </form>
        @else
            <!-- Jei vartotojas neprisijungęs -->
            <a href="{{ route('login') }}" class="text-xl bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-full block mb-2">
                Prisijungti
            </a>
            <a href="{{ route('register') }}" class="text-xl bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-full block">
                Registruotis
            </a>
        @endauth
    </div>

    <!-- Dešinė pusė -->
    <div class="w-3/4 p-8">
        <div class="bg-white shadow-md rounded-lg p-8 text-center">
            <h1 class="text-4xl font-semibold text-gray-800">Sveiki, atvykę į Paskaitunas</h1>
            <p class="mt-4 text-lg text-gray-600">Čia galite valdyti savo paskaitas ir turinį.</p>
        </div>
    </div>
</div>

</body>

</html>
