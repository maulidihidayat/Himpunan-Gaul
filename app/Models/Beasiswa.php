<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Beasiswa extends Model
{
    
    use HasFactory;

    protected $primaryKey = "beasiswa_id";
    protected static function booted()
    {
        static::creating(function ($beasiswa) {
            $beasiswa->slug = Str::slug($beasiswa->title);
        });

        static::updating(function ($beasiswa) {
            $beasiswa->slug = Str::slug($beasiswa->title);
        });
    }
    protected $fillable = [
        'title', 
        'slug',
        'description',
        'image',
        'publish_date',
        'publish_by',

    ];

     public function creator()
    {
        return $this->belongsTo(\App\Models\User::class, 'publish_by');
    }

    protected $casts = [
        'publish_date' => 'datetime',
    ];
}
