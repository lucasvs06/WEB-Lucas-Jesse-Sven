<x-base-layout>
    <form action="{{ route('user.update', $user->id) }}" method="POST" class="max-w-md mx-auto bg-white p-6 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-4">Edit the user!</h2>

        <!-- CSRF Token -->
        @csrf

        <!-- User Name -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
            <input type="text" id="name" name="name" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" value="{{ $user->name }}" required>
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
            <input type="text" id="email" name="email" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" min="0" value="{{ $user->email }}" required>
        </div>

        <!-- Admin Checkbox -->
        <div class="mb-4">
            <label for="admin" class="block text-gray-700 font-semibold mb-2">Admin</label>
            <input type="checkbox" id="admin" name="admin" value="1" {{ $user->admin ? 'checked' : '' }}>
            <span class="ml-2">Admin</span>
        </div>

        <!-- Submit Button -->
        <div class="mt-4">
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                Submit
            </button>
        </div>
    </form>
</x-base-layout>
