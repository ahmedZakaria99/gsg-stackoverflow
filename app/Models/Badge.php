<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'achievements',
            'badge_id',
            'user_id',
            'id',
            'id'
        );
    }
}
