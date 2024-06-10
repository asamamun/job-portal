<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;
    public function states(): HasMany
    {
        return $this->hasMany(State::class);
    }
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
