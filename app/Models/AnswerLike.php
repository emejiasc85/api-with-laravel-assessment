<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerLike extends Model
{
    use HasFactory;

    protected $table   = 'answer_likes';
    protected $guarded = [];

    /* relations */

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
