<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
class ReservationController extends Controller
{
    public function index(){
        $reservations = Reservation::paginate(5);
        return view('admin.reservations.index',compact('reservations'));
    }
    public function Reservations(){
        $user_id = Auth::id();
        $reservations = Reservation::where('user_id',$user_id)->get();
        return view('user.managments.reservations', compact('reservations'));
    }
    public function createreservation($id)
{
    $room = Room::find($id);
    return view('user.managments.place_reservations', compact('room'));
}

public function placeReservation(Request $request,$id)
{
    $user = Auth::user();
    $room = Room::find($id);
    $reservation = new Reservation();
    $reservation->user_id = $user->id;
    $reservation->room_id = $room->id;
    $reservation->nom = $request->nom;
    $reservation->prenom = $request->prenom;
    $reservation->date_in = $request->date_in;
    $reservation->date_out = $request->date_out;
    $reservation->address = $request->address;
    $reservation->city = $request->city;
    $reservation->phone = $request->phone;
    $reservation->code_postal = $request->code_postal;
    $reservation->price_total = $room->price;
    $reservation->save();
    return redirect()->route('success');
}
    // public function viewReservations($id){
    //     $reservations = Reservation::where('id', $id)->where('user_id', Auth::id())->first();
    //     return view('user.managements.view_reservations', compact('reservations'));
    // }
    public function successReservation(){
        return view('user.managments.success_reservations');
    }
}
