@extends('Components.layouts')

@section('title', 'Contact Us')

@section('content')
<div class="w-full h-full flex items-center justify-center mt-10">
    <div class="w-full max-w-5xl">
        <h1 class="text-3xl font-bold mb-6 text-center">Contact Us</h1>

        <!-- Search bar -->
        <div class="mb-4">
            <input type="text" id="search" placeholder="Search by name..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
        </div>

        <!-- Table -->
        <table id="peopleTable" class="w-full border-collapse border border-gray-400">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Role</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Email</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $people = [
                        ['name' => 'John Doe', 'role' => 'Mahasiswa', 'email' => 'john@example.com'],
                        ['name' => 'Jane Smith', 'role' => 'Karyawan', 'email' => 'jane@example.com'],
                        ['name' => 'Alan Walker', 'role' => 'Mahasiswa', 'email' => 'alan@example.com'],
                        ['name' => 'Sara Lee', 'role' => 'Karyawan', 'email' => 'sara@example.com'],
                        ['name' => 'David Kim', 'role' => 'Mahasiswa', 'email' => 'david@example.com'],
                        ['name' => 'Lisa Brown', 'role' => 'Karyawan', 'email' => 'lisa@example.com'],
                        ['name' => 'Tom Holland', 'role' => 'Mahasiswa', 'email' => 'tom@example.com'],
                        ['name' => 'Emma Watson', 'role' => 'Karyawan', 'email' => 'emma@example.com'],
                        ['name' => 'Chris Evans', 'role' => 'Mahasiswa', 'email' => 'chris@example.com'],
                        ['name' => 'Scarlett Johansson', 'role' => 'Karyawan', 'email' => 'scarlett@example.com'],
                    ];
                @endphp

                @foreach ($people as $person)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $person['name'] }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $person['role'] }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $person['email'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Script untuk pencarian nama -->
<script>
    document.getElementById('search').addEventListener('input', function () {
        const searchTerm = this.value.toLowerCase();
        const rows = document.querySelectorAll('#peopleTable tbody tr');

        rows.forEach(row => {
            const name = row.cells[0].textContent.toLowerCase();
            if (name.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>
@endsection
