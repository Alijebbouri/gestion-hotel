<x-app-layout>
    <div class="container mt-10">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <div class="bg-white shadow-md rounded-lg p-4">
                <h4 class="text-xl font-semibold mb-4">Order view</h4>
                <div class="mb-4">
                    <label class="font-semibold">First Name:</label>
                    <div class="border rounded p-2">{{ $orders->nom }}</div>
                </div>
                <div class="mb-4">
                    <label class="font-semibold">Last Name:</label>
                    <div class="border rounded p-2">{{ $orders->prenom }}</div>
                </div>
                {{-- <div class="mb-4">
                    <label class="font-semibold">Email:</label>
                    <div class="border rounded p-2">{{ $orders->email }}</div>
                </div> --}}
                <div class="mb-4">
                    <label class="font-semibold">Phone:</label>
                    <div class="border rounded p-2">{{ $orders->phone }}</div>
                </div>
                <div class="mb-4">
                    <label class="font-semibold">Shipping Address:</label>
                    <div class="border rounded p-2">{{ $orders->address }} {{ $orders->city }} {{ $orders->region }} </div>
                </div>
                <div class="mb-4">
                    <label class="font-semibold">Zip Code:</label>
                    <div class="border rounded p-2">{{ $orders->code_postal }}</div>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg p-4">
                <h4 class="text-xl font-semibold mb-4">Order Items</h4>
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-4 py-2">
                                        <img src="{{ asset('images/' . $orders->image) }}" alt="{{ $orders->image }}" class="w-12 h-12 object-cover rounded">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm font-medium text-gray-900">{{ $orders->type }}</div></td>
                                    <td class="px-6 py-4 whitespace-nowrap"><div class="text-sm font-medium text-gray-900">{{ $orders->price }}</div></td>
                                </tr>
                        </tbody>
                        <tfoot class="bg-gray-100">
                            <tr>
                                <td colspan="3" class="text-right font-semibold">Total:</td>
                                <td class="px-4 py-2">{{ $orders->total_price }} Dhs</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
