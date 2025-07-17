<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registrasi extends Model
{
    use HasFactory;
    protected $table = 'registrasis';
    protected $primaryKey = 'registrasi_id';

    protected $fillable = [
        'nim',
        'nama',
        'email',
        'no_hp',
        'semester',
        'kelas',
    ];
}
