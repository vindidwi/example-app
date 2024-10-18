@extends('Components.layouts')

@section('title', 'Register')

@section('content')
<div class='w-full h-screen flex items-center justify-center'> <!-- Update untuk memastikan elemen terpusat -->
    <div class="w-full max-w-md bg-white p-8 border border-gray-300 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-700">Register</h2>
        <form action="/register" method="POST">
            @csrf <!-- Laravel CSRF protection -->

            <!-- Name Field -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
            </div>

            <!-- Email Field -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
            </div>

            <!-- Password Field -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                <input type="password" id="password" name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
            </div>

            <!-- Confirm Password Field -->
            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-700 font-semibold mb-2">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
            </div>

            <!-- Register Button -->
            <div>
                <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-indigo-500 transition-colors duration-300">
                    Register
                </button>
            </div>
        </form>

        <p class="mt-6 text-center text-gray-600">
            Already have an account? <a href="/login" class="text-indigo-600 hover:underline">Login</a>
        </p>
    </div>
</div>
@endsection
