<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UkmModel extends Model
{
    use HasFactory;

    protected $table = 'ukm';
    protected $primaryKey = 'ukm_id';
    protected $fillable = [
        'nama',
        'deskripsi',
        'ketua_umum',
        'tahun_berdiri',
    ];
}
