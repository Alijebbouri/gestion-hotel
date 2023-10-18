@extends('layouts.admin')
@section('content')


<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left mt-3 text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Full Details
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                    Date
                </th>

                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Data
                </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">
                    {{ $reservation->id }} - {{ $reservation->nom }} {{ $reservation->prenom }}
                </td>
                <td class="px-6 py-4">
                    <img src="{{ asset('images/' . $reservation->room->image) }}" alt="{{ $reservation->room->image }}" width="50">
                </td>
                <td class="px-6 py-4">
                    {{ $reservation->date_in }} To {{ $reservation->date_out }}
                </td>
                <td class="px-6 py-4">
                    @if ($reservation->room->status === '1')
                        <p class="text-green-500">Avaliable</p>
                    @else
                        <p class="text-red-500">Not Avaliable</p>
                    @endif
                </td>
                <td class="px-6 py-4">
                    {{ $reservation->price_total }}
                </td>
                <td class="px-6 py-4">
                    {{ $reservation->address }}, {{ $reservation->city }}, {{ $reservation->code_postal }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $reservations->links() }}
</div>

@endsection
