@extends('layout.app')

@section('title', 'Contact')

@section('content')
<h2 class="text-3xl mb-4">Contact List</h2>

<table class="table-auto w-full bg-white shadow-md rounded-lg">
    <thead class="bg-gray-200">
        <tr>
            <th class="px-4 py-2">No</th>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Role</th>
            <th class="px-4 py-2">Email</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 1; $i <= 10; $i++)
            <tr class="text-center">
                <td class="py-2 px-4 border-b">{{ $i }}</td>
                <td class="py-2 px-4 border-b">Person {{ $i }}</td>
                <td class="py-2 px-4 border-b">{{ $i % 2 == 0 ? 'Student' : 'Employee' }}</td>
                <td class="py-2 px-4 border-b">person{{ $i }}@example.com</td>
            </tr>
        @endfor
    </tbody>
</table>
@endsection