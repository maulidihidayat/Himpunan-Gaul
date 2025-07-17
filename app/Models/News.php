<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Str;

class News extends Model
{
    use HasFactory;

    protected $primaryKey = 'news_id';

    
    protected static function booted()
    {
        static::creating(function ($news) {
            $news->slug = Str::slug($news->title);
        });

        static::updating(function ($news) {
            $news->slug = Str::slug($news->title);
        });
    }
    protected $fillable = [
        'title',
        'content',
        'slug',
        'publish_date',
        'image',
        'created_by',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    protected $casts = [
        'publish_date' => 'datetime',
    ];
}
