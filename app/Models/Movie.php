<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Movie extends Model implements HasMedia
{
    use HasFactory;
    use softDeletes;
    use InteractsWithMedia;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'release_date',
        'duration',
        'is_visible',
        'rating',
    ];

    protected $casts = [
        'is_visible' => 'boolean',
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
