<x-guest-layout>
    <div class="max-w-md mx-auto p-6 ">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
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

            <!-- Remember Me -->
            <div class="flex items-center">
                <input id="remember_me" type="checkbox" name="remember" class="text-indigo-600 focus:ring focus:ring-indigo-500">
                <label for="remember_me" class="ml-2 text-sm text-gray-600">Remember me</label>
            </div>

            <!-- Forgot Password Link -->
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline focus:outline-none focus:ring focus:ring-indigo-500">
                    Forgot your password?
                </a>
            @endif
            <div class="flex items-center">
                <a href="{{ route('register') }}" class="text-sm text-indigo-600 hover:underline focus:outline-none focus:ring focus:ring-indigo-500">
                    U don't have account ?
                </a>
            </div>
            <!-- Login Button -->
            <button type="submit" class="w-full bg-indigo-600 text-white p-2 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-500">
                Log in
            </button>
        </form>
    </div>
</x-guest-layout>
