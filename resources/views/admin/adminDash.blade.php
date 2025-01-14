<x-base-layout>

    <body>
    <!-- Stretched Admin Dashboard -->
    <div class="flex justify-center">
    <div class="bg-white shadow-lg rounded-lg p-10 m-10 w-full max-w-4xl text-center">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Admin Dashboard</h1>
        <div class="space-y-4">
            <a href="{{route('admin.users')}}"
               class="block bg-red-500 text-white py-2 rounded hover:bg-red-600">
                Manage Users
            </a>
            <a href="{{route('admin.teams')}}"
               class="block bg-green-500 text-white py-2 rounded hover:bg-green-600">
                Manage Teams
            </a>
            <a href="{{route('tournaments.dash')}}"
               class="block bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
                Manage Tournaments
            </a>
            <a href="/logout"
               class="block bg-yellow-500 text-white py-2 rounded hover:bg-yellow-600">
                Other
            </a>
        </div>
    </div>
</div>
</body>

</x-base-layout>
