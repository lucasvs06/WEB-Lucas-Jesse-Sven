<x-base-layout>
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-3 gap-8">
            <!-- Center Section -->
            <div class="col-span-2 bg-white shadow-md rounded p-6">
                <h1 class="text-2xl font-bold text-gray-700 mb-4">Teams / Tournaments</h1>
                <p class="text-gray-600 mb-6">a choice for you to see Tournaments or teams.</p>
                <div class="flex space-x-4">
                    <a href="{{route('tournaments')}}" class="flex-1 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 text-center">Tournaments</a>
                    <a href="{{route('teams')}}" class="flex-1 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 text-center">Teams</a>
                </div>
            </div>

            <!-- Right Section -->
            <div class="bg-white shadow-md rounded p-6">
                <h2 class="text-lg font-bold mb-4">Coins</h2>
                <p class="text-gray-700">Your coin balance will be displayed here.</p>
            </div>
        </div>
    </main>
</x-base-layout>
