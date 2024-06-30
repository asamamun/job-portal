<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Applicant extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nid',
        'file',
        'cv',
        'jobtype',
        'location',
        'dob',
        'type',
        'available_for',
        'points',
        'status',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function post_types(): BelongsToMany
    {
        return $this->belongsToMany(PostType::class);
    }
    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class);
    }
    public function experiences(): HasMany
    {
        return $this->hasMany(Experience::class);
    }
    public function educations(): HasMany
    {
        return $this->hasMany(Education::class);
    }
    public function references(): HasMany
    {
        return $this->hasMany(Reference::class);
    }
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
    public function languages(): HasMany
    {
        return $this->hasMany(Language::class);
    }
    public function links(): HasMany
    {
        return $this->hasMany(Link::class);
    }
    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
    public function results(): HasMany
    {
        return $this->hasMany(Result::class);
    }
    public function save_posts(): BelongsToMany
    {
        return $this->belongsToMany(SavePost::class);
    }
    public function applicant_posts(): BelongsToMany
    {
        return $this->belongsToMany(ApplicantPost::class);
    }
}
