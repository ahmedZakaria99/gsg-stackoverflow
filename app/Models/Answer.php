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
        'user_id', 'question_id', 'content'
    ];
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }

    public function votes()
    {
        return $this->morphMany(Vote::class,'votable');
    }

}
