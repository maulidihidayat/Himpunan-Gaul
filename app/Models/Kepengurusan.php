<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepengurusan extends Model
{
    use HasFactory;

    protected $table = 'kepengurusans';
    protected $primaryKey = 'kepengurusan_id';
    protected $fillable = [
        'name',
        'position_title',
        'period',
        'image',
        'peran',
    ];

}
