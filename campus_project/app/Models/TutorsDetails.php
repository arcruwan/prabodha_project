<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorsDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'address',
        'contactNumber',
        'contactNumberFixed',
        'gender',
        'nic',
        'email',
        'description',
        'yearofOLExam',
        'OLIndexNumber',
        'OLResult',
        'yearofALExam',
        'ALIndexNumber',
        'ALResult',
        'quolificationDescription',
        'language',
        'type',
        'currentOccupation',
        'experience',
        'login_id',
        'checkStatus'
    ];
}
