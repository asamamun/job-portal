<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PostType extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function applicants(): BelongsToMany
    {
        return $this->belongsToMany(Applicant::class);
    }
}
