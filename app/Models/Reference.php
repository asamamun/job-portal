<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reference extends Model
{
    use HasFactory;
    protected $fillable = [
        'applicant_id',
        'name',
        'organization',
        'designation',
        'phone',
        'relation',
        'email',
        'address',
    ];
    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class);
    }
}
