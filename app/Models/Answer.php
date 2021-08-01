<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    const ACCEPTED_TRUE = 1;
    const ACCEPTED_FALSE = 0;

    protected $fillable = [
        'user_id', 'question_id', 'content', 'accepted'
    ];
}
