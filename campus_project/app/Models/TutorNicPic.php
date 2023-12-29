<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorNicPic extends Model
{
    use HasFactory;
    protected $fillable = [
        'tutor_nicPic',
        'tutor_id'
    ];
}
