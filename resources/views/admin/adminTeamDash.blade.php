<x-base-layout>
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-3 gap-8">
            <!-- Center Section -->
            <div class="col-span-2 bg-white shadow-md rounded p-6">

                <div class="flex justify-between items-center mb-4">
                    <h1 class="text-2xl font-bold text-gray-700">Teams (Admin version)</h1>

                </div>
                <p class="flex text-gray-600 mb-6">All the teams! for you to edit and delete.</p>

            </div>

              <!-- Right Section -->
              <div class="bg-white shadow-md rounded p-6">
                <div class="space-y-4">
                    <a href="{{route('admin.users')}}"
                       class="block bg-blue-500 text-white py-2 rounded hover:bg-blue-600 text-center">
                        Manage Users
                    </a>
                    <a href="{{route('admin.teams')}}"
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
                            <th class="py-3 px-6 text-left text-gray-700 font-semibold">Name</th>
                            <th class="py-3 px-6 text-left text-gray-700 font-semibold">Members</th>
                            <th class="py-3 px-6 text-left text-gray-700 font-semibold">Points</th>
                            <th class="py-3 px-6 text-left text-gray-700 font-semibold">Creator</th>
                            <th class="py-3 px-6 text-center text-gray-700 font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                            <tr class="border-b">
                                <td class="py-4 px-6">{{ $team->name }}</td>
                                <td class="py-4 px-6">{{ $team->members }}</td>
                                <td class="py-4 px-6">{{ $team->points }}</td>
                                <td class="py-4 px-6">{{ $team->creator_id }}</td>
                                <td class="py-4 px-6 text-center">
                                    <!-- Edit Button -->
                                    <a href="{{ route('teams.edit', $team->id) }}" class="text-blue-600 hover:underline mr-2">Edit</a>
                                    <!-- Delete Button -->
                                    <form action="{{ route('teams.destroy', $team->id) }}" method="POST" class="inline-block">
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



        </div>
    </main>
</x-base-layout>
