@extends('layouts.admin')
@section('content')
<div class="bg-white w-9/12 m-auto rounded-md shadow p-3">
    <h1 class="text-3xl font-bold text-black text-center">Add Room</h1><br>
<form action="{{ route('rooms.store') }}" method="post" enctype="multipart/form-data" class="max-w-md mx-auto">
    @csrf
    <div class="mb-4">
        <label for="type" class="block text-gray-700 text-sm font-bold mb-2 ">Type:</label>
        <input type="text" name="type" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow px-4 py-2 w-full" />
        @error('type')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image:</label>
        <input type="file" name="image" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm px-4 py-2 w-full" />
        @error('image')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status:</label>
        <select name="status" id="status" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm px-4 py-2 w-full">
            <option value="Available">Available</option>
            <option value="Not Available">Not Available</option>
        </select>
        @error('status')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price:</label>
        <input type="number" name="price" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm px-4 py-2 w-full" />
        @error('price')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
        <textarea name="description" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm px-4 py-2 w-full" rows="5"></textarea>
        @error('description')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>
    <div class="flex justify-center">
        <input type="submit" value="Submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded cursor-pointer">
    </div>
</form>
</div>
@endsection

