@extends('layouts.admin')
@section('content')
<div class="max-w-sm rounded overflow-hidden m-auto shadow-lg bg-white">
    <img src="{{ asset('images/' . $room->image) }}" alt="{{ $room->image }}" class="w-full h-auto">
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
</div>
@endsection
