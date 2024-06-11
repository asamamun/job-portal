<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantPostType extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id',
        'post_type_id',
    ];
}
