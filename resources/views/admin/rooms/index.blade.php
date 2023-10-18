@extends('layouts.admin')
@section('content')
<button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 mb-2 px-4 rounded" >
    <a href="{{ route('rooms.create') }}" >Add Room</a><br>
  </button>

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left mt-3 text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                    Type
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $room)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">
                    {{ $room->id }}
                </td>
                <td class="px-6 py-4">
                    <img src="{{ asset('images/' . $room->image) }}" alt="{{ $room->image }}" width="50">
                </td>
                <td class="px-6 py-4">
                    {{ $room->type }}
                </td>
                <td class="px-6 py-4">
                    @if ($room->status === '1')
                        <p class="text-green-500">Avaliable</p>
                    @else
                        <p class="text-red-500">Not Avaliable</p>
                    @endif
                </td>
                <td class="px-6 py-4">
                    {{ $room->price }}
                </td>
                <td class="px-6 py-4  d-flex ">
                    <a href="{{ route('rooms.show', $room->id) }}" class="px-4 py-2 ms-2 bg-cyan-400 text-white hover:bg-cyan-700 rounded-xl"><x-info-icon/></a>
                    <a href="{{ route('rooms.edit', $room->id) }}" class="px-4 py-2 ms-2 bg-green-400 text-white hover:bg-green-700 rounded-xl"><x-edit-icon/></a>
                    <button class="px-4 py-2 ms-2 bg-red-500 text-white hover:bg-red-700 rounded-xl" onclick="deleteRoom({{ $room->id }})"><x-trash-icon/></button>
                    <form id="deleteForm{{ $room->id }}" action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $rooms->links() }}
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function deleteRoom(id) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger mr-2'
            },
            buttonsStyling: false
        });

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm' + id).submit();
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your room is safe :)',
                    'error'
                );
            }
        });
    }

</script>
@if(session()->has("success"))
        <script>
            Swal.fire({
                position: 'center-center',
                icon: 'success',
                title: "{{session()->get('success')}}",
                showConfirmButton: false,
                timer: 3500
            });
        </script>
    @endif
@endsection
