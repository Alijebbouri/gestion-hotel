<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = ['type','image','status','description','price'];
    public function reservations(){
        return $this->hasMany(Reservation::class,'room_id');
    }
}
