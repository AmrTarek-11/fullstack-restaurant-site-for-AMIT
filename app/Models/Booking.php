<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'date',
        'time',
        'no_of_guests',
        'notes',
        'status',
    ];

    // A booking belongs to a user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
