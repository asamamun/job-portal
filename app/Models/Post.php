<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }
    public function functional(): BelongsTo
    {
        return $this->belongsTo(Functional::class);
    }
    public function industrial(): BelongsTo
    {
        return $this->belongsTo(Industrial::class);
    }
    public function special(): BelongsTo
    {
        return $this->belongsTo(Special::class);
    }
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }
    public function applicants(): BelongsToMany
    {
        return $this->belongsToMany(Applicant::class);
    }

}
