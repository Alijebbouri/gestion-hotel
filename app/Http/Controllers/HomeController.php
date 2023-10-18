<?php

namespace App\Http\Controllers;


use App\Models\Room;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index(){
        if (Auth::check()) {
            $role = Auth::user()->role;
            if ($role == '1') {
                $allReservations = Reservation::count();
                $allRooms = Room::count();
                $allUsers = User::count();
                return view('admin.dashboard',compact('allReservations','allRooms','allUsers'));
            }else{
                $rooms = Room::simplePaginate(6);
                return view('user.index',compact('rooms'));
            }
        }else {
            return redirect()->back('/');
        }
    }


}
