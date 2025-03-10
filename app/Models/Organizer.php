<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Organizer extends Model
{
    use HasFactory,Notifiable;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'bio',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class, foreignKey: 'organizer_id');
    }
}
