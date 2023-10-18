<x-app-layout>
    <div class="container mt-10 m-auto">
        <div class="bg-white shadow-md rounded-lg p-4">
            <h4 class="text-xl font-semibold mb-4">Reservations Items</h4>
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="mx-auto min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @php
                                $totalPrice = 0;
                        @endphp
                        @foreach ($reservations as $reservation)
                        <tr>
                            <td class="px-4 py-2">
                                <img src="{{ asset('images/' . $reservation->room->image) }}" alt="{{ $reservation->room->image }}" class="w-12 h-12 object-cover rounded">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm font-medium text-gray-900">{{ $reservation->room->type }}</div></td>
                            <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm font-medium text-gray-900">{{ $reservation->price_total }}</div></td>
                            <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm font-medium text-gray-900">
                                @if ($reservation->room->status === '1')
                                    <p class="text-green-500">Avaliable</p>
                                @else
                                    <p class="text-red-500">Not Avaliable</p>
                                @endif</div></td>
                        </tr>
                    </tbody>
                    @php
                        $totalPrice += $reservation->price_total;
                    @endphp
                    @endforeach
                    <tfoot class="bg-gray-100">
                        <tr>
                            <td colspan="3" class="text-right font-semibold">Total:</td>
                            <td class="px-4 py-2">{{ $totalPrice }} Dhs</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
