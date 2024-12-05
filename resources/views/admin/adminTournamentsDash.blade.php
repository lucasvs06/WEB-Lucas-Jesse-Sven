<x-base-layout>
    <main class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-3 gap-8">
            <!-- Center Section -->
            <div class="col-span-2 bg-white shadow-md rounded p-6">

                <div class="flex justify-between items-center mb-4">
                    <h1 class="text-2xl font-bold text-gray-700">Tournaments (Admin version)</h1>



                    <a href="{{ route('match.create') }}"
                        class="text-lg font-semibold text-white bg-green-500 hover:bg-green-600 px-4 py-2 rounded-md text-center shadow-md transition duration-200">
                        + Match
                    </a>
                </div>
                <p class="flex text-gray-600 mb-6">Create / Edit / Delete, your matches here!</p>
            </div>


            <!-- Right Section -->
            <div class="bg-white shadow-md rounded p-6">
                <div class="space-y-4">
                    <a href="{{ route('admin.users') }}"
                        class="block bg-blue-500 text-white py-2 rounded hover:bg-blue-600 text-center">
                        Manage Users
                    </a>
                    <a href="{{ route('admin.teams') }}"
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
                            <th class="py-3 px-6 text-center text-gray-700 font-semibold">Score</th>
                            <th class="py-3 px-6 text-center text-gray-700 font-semibold">Field</th>
                            <th class="py-3 px-6 text-center text-gray-700 font-semibold">Referee</th>
                            <th class="py-3 px-6 text-center text-gray-700 font-semibold">Time</th>
                            <th class="py-3 px-6 text-center text-gray-700 font-semibold">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($matches as $match)
                            <tr class="border-b">
                                <td class="py-4 px-6">{{ $match->team1->name ?? 'No team assigned' }}</td>
                                <td class="py-4 px-6">{{ $match->team2->name ?? 'No team assigned' }}</td>
                                <td class="py-4 px-6 text-center">{{ $match->team1_score }} - {{ $match->team2_score }}</td>
                                <td class="py-4 px-6 text-center">{{ $match->field }}</td>
                                <td class="py-4 px-6 text-center">{{ $match->referee_id }}</td>
                                <td class="py-4 px-6 text-center" >{{ $match->time }}</td>
                                <td class="py-4 px-6 text-center">
                                    <!-- Edit Button -->
                                    <a href="#" class="text-blue-600 hover:underline mr-2">Edit</a>
                                    <!-- Delete Button -->
                                    <form action="{{route('match.destroy', $match->id)}}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline"
                                            onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </main>
</x-base-layout>
