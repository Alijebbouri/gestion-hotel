
<x-app-layout>
    <h3 class="text-2xl font-bold text-gray-900 mt-2 ms-4 underline border-b">Our Rooms</h3>
    <div class="flex flex-wrap justify-center items-center">
        @foreach ($rooms as $room)
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 xl:w-1/3 mb-8 mt-4">
            <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white h-full mx-4">
                <img src="{{ asset('images/' . $room->image) }}" alt="{{ $room->image }}" class="w-full h-48 object-cover">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $room->type }}</div>
                    <p class="text-gray-700 text-base">
                        {{ $room->description }}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $room->id }}</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                        @if ($room->status === '1')
                            <span class="text-green-500">Available</span>
                        @else
                            <span class="text-red-500">Not Available</span>
                        @endif
                    </span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $room->price }} dhs</span>
                </div>
                <div class="flex justify-center pb-4">
                    <a href="{{ url('createReservations',$room->id) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Reserve</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="flex justify-center">
        {{ $rooms->links() }}
    </div>

</x-app-layout>
