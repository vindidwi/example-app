@extends('Components.layouts')

@section('title', 'Login')

@section('content')
<div class='w-full h-screen flex items-center justify-center'> <!-- Update untuk memastikan elemen terpusat -->
    <div class="w-full max-w-md bg-white p-8 border border-gray-300 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-700">Login</h2>
        <form action="/contact" method="get">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                <input type="password" id="password" name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
            </div>
            <div class="mb-6 flex items-center justify-between">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="remember" class="form-checkbox h-4 w-4 text-indigo-600">
                    <span class="ml-2 text-gray-700">Remember me</span>
                </label>
                <a href="#" class="text-sm text-indigo-600 hover:underline">Forgot password?</a>
            </div>
            <div>
                <a href="/contact">
                    <button class="w-full bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-indigo-500 transition-colors duration-300">
                        Login
                    </button>
                </a>

            </div>
        </form>

        <p class="mt-6 text-center text-gray-600">
            Don't have an account? <a href="/register" class="text-indigo-600 hover:underline">Sign up</a>
        </p>
    </div>
</div>
@endsection
