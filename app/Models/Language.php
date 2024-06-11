<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Language extends Model
{
    use HasFactory;
    protected $fillable = [
        'applicant_id',
        'name',
        'level',
        'type',
    ];
    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class);
    }
}
