<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'question',
        'option_one',
        'option_two',
        'option_three',
        'option_four',
        'answer',
    ];
    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }
}
