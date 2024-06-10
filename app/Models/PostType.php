<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PostType extends Model
{
    use HasFactory;
    public function applicants(): BelongsToMany
    {
        return $this->belongsToMany(Applicant::class);
    }
}
