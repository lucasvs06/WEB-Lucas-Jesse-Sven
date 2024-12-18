<x-base-layout>
    <form action="{{ route('match.store') }}" method="POST" class="max-w-md mx-auto bg-white p-6 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-4">Create a Match Automatically</h2>

        <!-- CSRF Token -->
        @csrf

        <!-- Willekeurige teams -->
        <input type="hidden" name="team1_id" value="{{ $team1->id }}">
        <input type="hidden" name="team2_id" value="{{ $team2->id }}">

        <!-- Automatische standaardwaarden -->
        <input type="hidden" name="team1_score" value="0">
        <input type="hidden" name="team2_score" value="0">
        <input type="hidden" name="field" value="Main Field">
        <input type="hidden" name="referee_id" value="{{ rand(1, 10) }}"> <!-- Verander naar een echte lijst referees indien nodig -->
        <input type="hidden" name="time" value="{{ now()->addDays(1)->format('Y-m-d H:i:s') }}">

        <!-- Team Namen Ter Weergave -->
        <div class="mb-4">
            <p class="block text-gray-700 font-bold mb-2">Team 1: <span class="font-normal">{{ $team1->name }}</span></p>
        </div>
        <div class="mb-4">
            <p class="block text-gray-700 font-bold mb-2">Team 2: <span class="font-normal">{{ $team2->name }}</span></p>
        </div>

        <!-- Veld Weergave -->
        <div class="mb-4">
            <p class="block text-gray-700 font-bold mb-2">Field: <span class="font-normal">Main Field</span></p>
        </div>

        <!-- Referee ID -->
        <div class="mb-4">
            <p class="block text-gray-700 font-bold mb-2">Referee ID: <span class="font-normal">{{ rand(1, 10) }}</span></p>
        </div>

        <!-- Tijd -->
        <div class="mb-4">
            <p class="block text-gray-700 font-bold mb-2">Time: <span class="font-normal">{{ now()->addDays(1)->format('Y-m-d H:i:s') }}</span></p>
        </div>

        <!-- Submit Button -->
        <div class="mt-4">
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                Make Match
            </button>
        </div>
    </form>
</x-base-layout>
