<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorsOtherQualification extends Model
{
    use HasFactory;
    protected $fillable = [
        'QualificationType',
        'NatureofQualification',
        'completeYear',
        'description',
        'tutor_id'
    ];
}


