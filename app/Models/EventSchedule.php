<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

Class EventSchedule extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'event_id',
        'session_name',
        'start_time',
        'end_time',
        'speaker',
        'description',
        'status',
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
