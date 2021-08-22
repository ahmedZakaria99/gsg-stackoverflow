<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'location', 'image_path'
    ];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault([]);
    }

    public function getImageUrlAttribute()
    {
        if (!$this->image_path) {
            return asset('assets/front/images/placeholder.png'); // any path you want
        }
        return asset('storage/' . $this->image_path);
    }
}
