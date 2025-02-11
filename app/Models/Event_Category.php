<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

Class Event_Category extends Model
{
    protected $fillable = [
        'name',
        'description',
        'status',
    ];

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}