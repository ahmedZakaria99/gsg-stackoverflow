<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'description', 'status'
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class, 'question_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(
            Tag::class,
            'question_tag',
            'question_id',
            'tag_id',
            'id',
            'id'
        );
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
