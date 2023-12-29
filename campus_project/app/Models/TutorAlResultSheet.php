<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorAlResultSheet extends Model
{
    use HasFactory;
    protected $fillable = [
        'tutor_AL_Resultsheet_Pic',
        'tutor_id'
    ];
}
