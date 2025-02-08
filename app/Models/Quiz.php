<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quizzes'; // The table name
    protected $fillable = ['category', 'level', 'question', 'answer', 'choices']; // Columns in the table
}
