<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $rooms = Room::paginate(5);
        return view('admin.rooms.index',[
            'rooms'=>$rooms
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.rooms.partials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomRequest $request)
    {
        $validatedData = $request->validated();
        $room = new Room();
        $room->type = $validatedData['type'];
        if($request->hasFile('image')) {
            // $imagePath = $request->file('image')->store('images', 'public');
            // $produit->image = $imagePath;
            $file = $request->file('image');
            $imageName = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('images'), $imageName);
            $room->image = $imageName;
        }
        $room->price = $validatedData['price'];
        // $room->status = $request->status;
        $room->description = $validatedData['description'];
        $room->save();
        return redirect()->route('rooms.index')->with([
            'success' => 'Room successfully added'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $room = Room::find($id);
        return view('admin.rooms.partials.show',compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $room = Room::find($id);
        return view('admin.rooms.partials.edit',compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomRequest $request, $id)
    {
        $room = Room::find($id);
        $validatedData = $request->validated();
        $room->status = $request->status;
        if($request->hasFile('image')) {
            // $imagePath = $request->file('image')->store('images', 'public');
            // $produit->image = $imagePath;
            $file = $request->file('image');
            $imageName = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('images'), $imageName);
            $room->image = $imageName;
        }
        $room->fill($validatedData);
        $room->save();
        return redirect()->route('rooms.index')->with([
            'success' => 'Room successfully updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $room = Room::find($id);
        $room->delete();
        return redirect()->route('rooms.index')->with([
            'success' => 'room succefully deleted'
        ]);
    }
}

