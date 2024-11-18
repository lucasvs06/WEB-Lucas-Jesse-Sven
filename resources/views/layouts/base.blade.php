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
    <header class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold ml-4">Webshop.test</h1>
        </div>
    </header>

    <main class="container mx-auto p-4 my-8 bg-white shadow-md rounded-lg">
        {{ $slot }}
    </main>

    <div class="fixed bottom-0 left-0 w-full">
        <footer class="bg-blue-600 text-white p-4">
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
