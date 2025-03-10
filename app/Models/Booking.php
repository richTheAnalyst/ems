<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Booking extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'event_id',
        'name',
        'email',
        'phone',
        'seats',
        'booking_date',
        'gist',
        'organizer_id',
    ];

    protected $casts = [
        'booking_date' => 'datetime',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function organizer()
    {
        return $this->belongsTo(Organizer::class, 'organizer_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
