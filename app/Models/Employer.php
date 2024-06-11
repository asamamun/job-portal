<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employer extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'website',
        'licence_no',
        'contact_person',
        'contact_phone',
        'contact_email',
        'logo',
        'description',
        'founded',
        'linkedin',
        'facebook',
        'twitter',
        'instagram',
        'points',
        'type',
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
