<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model
{
    use HasFactory;



    protected $fillable = [
        'movie_id',
        'user_id',
        'title',
        'content',
        'is_visible',
    ];

    protected $casts = [
        'is_visible' => 'boolean',
    ];

    public function movie(): BelongsTo{
        return $this->belongsTo(Movie::class);
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

}
