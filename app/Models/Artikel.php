<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Artikel extends Model
{
    use HasFactory;

    protected $primaryKey = "artikel_id";

    protected static function booted()
    {
        static::creating(function ($artikel) {
            $artikel->slug = Str::slug($artikel->title);
        });

        static::updating(function ($artikel) {
            $artikel->slug = Str::slug($artikel->title);
        });
    }
    protected $fillable = [
        'title',
        'content',
        'slug',
        'image',
        'publish_date',
        'created_by',
    ];

    public function creator()
    {
        return $this->belongsTo(\App\Models\User::class, 'created_by');
    }

    protected $casts = [
        'publish_date' => 'datetime',
    ];

}
