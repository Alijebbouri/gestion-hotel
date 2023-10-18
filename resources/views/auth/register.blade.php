<x-guest-layout>
    <div class="max-w-md mx-auto p-6">
        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                       class="mt-1 p-2 w-full border rounded-lg focus:ring focus:ring-indigo-500">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                       class="mt-1 p-2 w-full border rounded-lg focus:ring focus:ring-indigo-500">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                <input id="password" type="password" name="password" required
                       class="mt-1 p-2 w-full border rounded-lg focus:ring focus:ring-indigo-500">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-600">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required
                       class="mt-1 p-2 w-full border rounded-lg focus:ring focus:ring-indigo-500">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Already Registered Link -->
            <div class="flex items-center">
                <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:underline focus:outline-none focus:ring focus:ring-indigo-500">
                    Already registered?
                </a>
            </div>

            <!-- Register Button -->
            <button type="submit" class="w-full bg-indigo-600 text-white p-2 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-500">
                Register
            </button>
        </form>
    </div>
</x-guest-layout>
