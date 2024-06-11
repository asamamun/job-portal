<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'applicant_id',
        'title',
        'description',
        'url',
        'start_date',
        'end_date',
        'status',
    ];
    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class);
    }
}
