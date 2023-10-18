<x-app-layout>
    <div class="container mx-auto my-8 p-8 bg-white rounded-lg shadow-lg">
        <h2 class="text-3xl font-semibold mb-6">Reservation Details</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white rounded-lg shadow-md p-6">
                <img src="{{ asset('images/'.$room->image) }}" alt="{{ $room->type }}" class="w-32 h-32 object-cover rounded-md mb-4">
                <h3 class="text-xl font-semibold mb-2">{{ $room->type }}</h3>
                <p class="text-gray-600">{{ $room->description }}</p>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <table class="min-w-full text-center">
                    <tr class="border-b">
                        <th class="text-left py-2 border-e">Name Room</th>
                        <td class="text-gray-700 py-2">{{ $room->type }}</td>
                    </tr>
                    <tr class="border-b">
                        <th class="text-left py-2 border-e">Price</th>
                        <td class="text-gray-700 py-2">{{ $room->price }}</td>
                    </tr>
                    <tr class="border-b">
                        <th class="text-left py-2 border-e">Status Room</th>
                        <td class="text-gray-700 py-2">
                            @if ($room->status === '1')
                                <p class="text-green-500">Avaliable</p>
                            @else
                                <p class="text-red-500">Not Avaliable</p>
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <h2 class="text-3xl font-semibold my-6">Personal Details</h2>

        <form action="{{ url('placeReservation', $room->id) }}" method="post" class="grid grid-cols-2 gap-4">
            @csrf
            <div class="form-group">
                <label for="nom" class="block text-sm font-medium text-gray-700 mb-2">Nom</label>
                <input type="text" name="nom" id="nom" class="form-input w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Nom">
            </div>

            <div class="form-group">
                <label for="prenom" class="block text-sm font-medium text-gray-700 mb-2">Prénom</label>
                <input type="text" name="prenom" id="prenom" class="form-input w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Prénom">
            </div>

            <div class="form-group">
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                <input type="tel" name="phone" id="phone" class="form-input w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter your phone">
            </div>

            <div class="form-group">
                <label for="date_in" class="block text-sm font-medium text-gray-700 mb-2">Date In</label>
                <input type="date" name="date_in" id="date_in" class="form-input w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Date In">
            </div>

            <div class="form-group">
                <label for="date_out" class="block text-sm font-medium text-gray-700 mb-2">Date Out</label>
                <input type="date" name="date_out" id="date_out" class="form-input w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Date Out">
            </div>

            <div class="form-group">
                <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Address</label>
                <input type="text" name="address" id="address" class="form-input w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter your address">
            </div>

            <div class="form-group">
                <label for="city" class="block text-sm font-medium text-gray-700 mb-2">City</label>
                <input type="text" name="city" id="city" class="form-input w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter your city">
            </div>

            <div class="form-group">
                <label for="code_postal" class="block text-sm font-medium text-gray-700 mb-2">Postal Code</label>
                <input type="text" name="code_postal" id="code_postal" class="form-input w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Enter your postal code">
            </div>
            <button type="submit" class="col-span-2 px-4 py-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-600">Place Reservation</button>
        </form>
    </div>
</x-app-layout>
