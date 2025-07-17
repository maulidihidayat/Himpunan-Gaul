<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Pencapaian extends Model
{
    use HasFactory;

    protected $primaryKey = "pencapaian_id";
    protected static function booted()
    {
        static::creating(function ($pencapaian) {
            $pencapaian->slug = Str::slug($pencapaian->title);
        });

        static::updating(function ($pencapaian) {
            $pencapaian->slug = Str::slug($pencapaian->title);
        });
    }
    protected $fillable = [
        'title',
        'description',
        'image',
        'publish_date',
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
