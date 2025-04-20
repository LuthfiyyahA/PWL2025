<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KegiatanModel extends Model
{
    use HasFactory;
    protected $table = 'kegiatan_ukm';
    protected $primaryKey = 'kegiatan_id';
    protected $fillable = [
        'ukm_id',
        'nama_kegiatan',
        'deskripsi_kegiatan',
    ];

    public function ukm(): BelongsTo
    {
        return $this->belongsTo(UkmModel::class, 'ukm_id', 'ukm_id');
    }
}