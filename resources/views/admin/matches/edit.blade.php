<x-base-layout>
    <form action="{{route('match.update', $match->id)}}" method="POST" class="max-w-md mx-auto bg-white p-6 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-4">Create a Match</h2>

        <!-- CSRF Token -->
        @csrf

        <div class="mb-4">
            <label for="team1_id" class="block text-gray-700 font-bold mb-2">Team 1</label>
            <select name="team1_id" id="team1_id" class="w-full border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="team2_id" class="block text-gray-700 font-bold mb-2">Team 2</label>
            <select name="team2_id" id="team2_id" class="w-full border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" >
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="field" class="block text-gray-700 font-semibold mb-2">Field:</label>
            <input type="text" id="field" name="field" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" value="{{ $match->field }}" required>
        </div>

        <div class="mb-4">
            <label for="referee_id" class="block text-gray-700 font-bold mb-2">Referee</label>
            <select name="referee_id" id="referee_id" class="w-full border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="time" class="block text-gray-700 font-semibold mb-2">Time:</label>
            <input type="datetime-local" id="time" name="time" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" value="{{ $match->time }}" required>
        </div>

        <!-- Submit Button -->
        <div class="mt-4">
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                Submit
            </button>
        </div>
    </form>
</x-base-layout>
