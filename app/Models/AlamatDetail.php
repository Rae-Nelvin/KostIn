<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AlamatDetail extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'alamat',
        'kecamatan',
        'kabupaten',
        'provinsi_id',
        'kode_pos'
    ];

    /**
     * Get the provinsi associated with the AlamatDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function provinsi(): HasOne
    {
        return $this->hasOne(Province::class, 'id', 'provinsi_id');
    }
}
