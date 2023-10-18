@extends('layouts.admin')
@section('content')
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left mt-3 text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Role
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Created_at
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">
                    {{ $user->id }}
                </td>
                <td class="px-6 py-4">
                    {{ $user->name }}
                </td>
                <td class="px-6 py-4">
                    @if ($user->role === '1')
                        <p class="text-green-500">Admin</p>
                    @else
                        <p class="text-red-500">User</p>
                    @endif
                </td>
                <td class="px-6 py-4">
                    {{ $user->email }}
                </td>
                <td class="px-6 py-4">
                    {{ $user->created_at }}
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>

@endsection
