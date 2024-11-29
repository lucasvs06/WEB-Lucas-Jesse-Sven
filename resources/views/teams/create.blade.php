<x-base-layout>
    <form action="{{route('teams.store')}}" method="POST" class="max-w-md mx-auto bg-white p-6 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-4">Create a Team</h2>

        <!-- CSRF Token -->
        @csrf

        <!-- Team Name -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold mb-2">Team Name</label>
            <input type="text" id="name" name="name" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
        </div>

        <div class="mb-4">
            <label for="school" class="block text-gray-700 font-semibold mb-2">School</label>
            <input type="text" id="school" name="school" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
        </div>

        <!-- Members -->
        <div class="mb-4">
            <label for="members" class="block text-gray-700 font-semibold mb-2">Members</label>
            <input type="number" id="members" name="members" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" min="0" required>
        </div>

        <!-- Submit Button -->
        <div class="mt-4">
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                Submit
            </button>
        </div>
    </form>
</x-base-layout>
