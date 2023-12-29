<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorProfilePic extends Model
{
    use HasFactory;
    protected $fillable = [
        'tutor_proPic',
        'tutor_id'
    ];
}

