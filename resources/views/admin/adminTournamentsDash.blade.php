<x-base-layout>
 <main class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-3 gap-8">
        <!-- Center Section -->
        <div class="col-span-2 bg-white shadow-md rounded p-6">

            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold text-gray-700">Tournaments (Admin version)</h1>
            </div>
            <p class="flex text-gray-600 mb-6">All the tournaments for you to edit and delete.</p>

        </div>

        <!-- Right Section -->
        <div class="bg-white shadow-md rounded p-6">
            <div class="space-y-4">
                <a href="#"
                   class="block bg-blue-500 text-white py-2 rounded hover:bg-blue-600 text-center">
                    Manage Tournaments
                </a>
                <a href="#"
                   class="block bg-green-500 text-white py-2 rounded hover:bg-green-600 text-center">
                    View all teams
                </a>
            </div>
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
