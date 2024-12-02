<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Doc Title -->
    <title>Prac</title>
</head>

<body class="bg-gray-100 text-gray-800">
    <header class="bg-green-600 text-white p-4 shadow-md">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold ml-4">Pra c3</h1>

            <nav class="mt-2 flex justify-between w-full">
                <div class="flex justify-start">
                    <a href="{{ route('homepage') }}" class="text-lg font-semibold hover:text-yellow-400 mx-4">Home</a>
                    <a href="{{ route('decisions') }}"
                        class="text-lg font-semibold hover:text-yellow-400 mx-4">Teams / Tournaments</a>

                    @if (auth()->user() && auth()->user()->admin)
                        <a href="{{route('admin.dash')}}"
                            class="text-lg font-semibold hover:text-yellow-400 mx-4 text-red-700">
                            Admin Table
                        </a>
                    @endif
                </div>

                    <div class="flex justify-end">
                        @guest
                            <a href="{{ route('login') }}"
                                class="text-lg font-semibold hover:text-yellow-400 mx-4">Login</a>
                            <a href="{{ route('register') }}"
                                class="text-lg font-semibold hover:text-yellow-400 mx-4">Register</a>
                        @endguest
                        @auth
                            <a href="{{ route('user.teams') }}" class="text-lg font-semibold hover:text-yellow-400 mx-4">My
                                Teams</a>


                            <a href="{{ route('logout') }}" class="text-lg font-semibold hover:text-yellow-400 mx-4"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endauth
                    </div>
            </nav>
    </header>

    <main class="container mx-auto p-4 my-8 bg-white shadow-md rounded-lg">
        {{ $slot }}
    </main>

    <div class="fixed bottom-0 left-0 w-full">
        <footer class="bg-green-600 text-white p-4">
            <div class="container mx-auto">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nulla maxime dolorem sapiente, saepe
                    neque
                    corrupti veritatis ratione commodi in beatae! Commodi quae suscipit qui vero, excepturi voluptatem
                    nesciunt sit.</p>
            </div>
        </footer>
    </div>
</body>

</html>
