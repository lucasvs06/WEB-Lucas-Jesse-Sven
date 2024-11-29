<x-base-layout>
    <form action="{{route('players.store')}}" method="POST" class="max-w-md mx-auto bg-white p-6 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-4">Create a Team</h2>

        <!-- CSRF Token -->
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold mb-2">Player Name:</label>
            <input type="text" id="name" name="name" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
        </div>

        <!-- Submit Button -->
        <div class="mt-4">
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                Submit
            </button>
        </div>
    </form>
</x-base-layout>
