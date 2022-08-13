<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    public $table = 'options';

    protected $fillable = [
        'points',
        'question_id',
        'option',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
}
