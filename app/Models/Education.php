<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Education extends Model
{
    use HasFactory;
    protected $fillable = [
        'applicant_id',
        'level',
        'institute',
        'board',
        'duration',
        'session',
        'subject',
        'group',
        'division',
        'grade',
        'grade_out_of',
        'passing_year',    
    ];
    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class);
    }
}
