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
        'kabupaten_id',
        'provinsi',
        'kode_pos'
    ];

    /**
     * Get the provinsi associated with the AlamatDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function kabupaten(): HasOne
    {
        return $this->hasOne(Kabupaten::class, 'id', 'kabupaten_id');
    }
}
