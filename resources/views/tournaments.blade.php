<x-base-layout>
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-3 gap-8">
            <!-- Center Section -->
            <div class="col-span-2 bg-white shadow-md rounded p-6">
                <h1 class="text-2xl font-bold text-gray-700 mb-4">Tournaments</h1>
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

        <div class="bg-white shadow-md rounded p-10">
            <div class="overflow-x-auto">
                <table class="min-w-full mb-5 rounded-lg">
                    <thead>
                        <tr>
                            <th class="py-3 px-6 text-left text-gray-700 font-semibold">Team 1</th>
                            <th class="py-3 px-6 text-left text-gray-700 font-semibold">Team 2</th>
                            <th class="py-3 px-6 text-left text-gray-700 font-semibold">Score</th>
                            <th class="py-3 px-6 text-left text-gray-700 font-semibold">Field</th>
                            <th class="py-3 px-6 text-left text-gray-700 font-semibold">Referee</th>
                            <th class="py-3 px-6 text-left text-gray-700 font-semibold">Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($matches as $match)
                            <tr class="border-b">
                                <td class="py-4 px-6">{{ $match->team1_id }}</td>
                                <td class="py-4 px-6">{{ $match->team2_id }}</td>
                                <td class="py-4 px-6">{{ $match->team1_score }} - {{ $team->team2_score }}</td>
                                <td class="py-4 px-6">{{ $match->field }}</td>
                                <td class="py-4 px-6">{{ $match->referee_id }}</td>
                                <td class="py-4 px-6">{{ $match->time }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


    </main>
</x-base-layout>
