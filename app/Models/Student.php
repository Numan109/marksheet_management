<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'std_name',
        'std_class',
        'std_roll',
        'std_gender',
        'std_dateOfbirth',
        'std_age',
        'std_religion',
        'std_nationality',
        'std_birth_reg',
        'std_present_add',
        'std_permenent_add',
        'std_homedistrict',
        'std_phone',
        'std_email',
        'std_image',
        'std_sig',
        'std_father_name',
        'std_father_phone',
        'std_father_occupation',
        'std_father_email',
        'std_mother_name',
        'std_mother_phone',
        'std_mother_occupation',
        'std_mother_email',
        'std_password',
    ];
}
