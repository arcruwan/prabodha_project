<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorOtherQualificationPic extends Model
{
    use HasFactory;
    protected $fillable = [
        'tutor_other_qualifications_Pic',
        'tutor_qualifications_id',
    ];
}
