<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'answer', 
        'answerA',
        'answerB',
        'answerC',
        'answerD',
        'owner',
        'difficult'
    ];
}
