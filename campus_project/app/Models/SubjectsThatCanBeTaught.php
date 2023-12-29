<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectsThatCanBeTaught extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject',
        'selectedLevel',
        'tutor_id'
    ];
}
