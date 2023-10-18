<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['nom','prenom','date_in','date_out','address','city','phone','code_postal','total_price','user_id','room_id'];
    public function room(){
        return $this->belongsTo(Room::class,'room_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}