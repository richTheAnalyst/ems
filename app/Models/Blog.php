<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        "title",
        "image",
        "content",
        "user_id",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
