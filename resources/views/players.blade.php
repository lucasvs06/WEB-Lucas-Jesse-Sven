<x-base-layout>
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-3 gap-8">
            <!-- Center Section -->
            <div class="col-span-2 bg-white shadow-md rounded p-6">

                <div class="flex justify-between items-center mb-4">
                    <h1 class="text-2xl font-bold text-gray-700">Teams</h1>


                </div>
                <p class="flex text-gray-600 mb-6">a choice for you to see matches or teams.</p>
                <div class="flex space-x-4">
                    <a href="{{ route('matches') }}"
                        class="flex-1 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 text-center">Matches</a>
                    <a href="{{ route('teams') }}"
                        class="flex-1 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 text-center">Teams</a>
                </div>
            </div>

            <!-- Right Section -->
            <div class="bg-white shadow-md rounded p-6">
                <h2 class="text-lg font-bold mb-4">Coins</h2>
                <p class="text-gray-700">Your coin balance will be displayed here.</p>
            </div>
        </div>

        <div class="bg-white shadow-md rounded p-10">
            <div class="overflow-x-auto">
                <table class="min-w-full mb-5 rounded-lg">
                    <thead>
                        <tr>
                            <th class="py-3 px-6 text-left text-gray-700 font-semibold">Name</th>
                            <th class="py-3 px-6 text-left text-gray-700 font-semibold">Age</th>
                            <th class="py-3 px-6 text-left text-gray-700 font-semibold">Weight (Kg)</th>
                            <th class="py-3 px-6 text-left text-gray-700 font-semibold">Nationality</th>
                            <th class="py-3 px-6 text-left text-gray-700 font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
            </div>



        </div>
    </main>
</x-base-layout>
