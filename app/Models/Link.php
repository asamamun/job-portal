<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Link extends Model
{
    use HasFactory;
    protected $fillable = [
        'applicant_id',
        'title',
        'url',
    ];
    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class);
    }
}
