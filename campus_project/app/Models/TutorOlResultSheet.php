<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorOlResultSheet extends Model
{
    use HasFactory;
    protected $fillable = [
        'tutor_OL_Resultsheet_Pic',
        'tutor_id'
    ];

}
