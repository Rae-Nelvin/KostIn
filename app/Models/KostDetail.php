<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class KostDetail extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'kost_id',
        'description',
        'tipe_kost',
        'jumlah_kamar',
        'jumlah_penghuni',
        'ukuran_kamar',
        'jatuh_tempo',
        'alamat_id',
        'favourites',
        'cover_id'
    ];

    /**
     * Get the kost that owns the KostDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kost(): BelongsTo
    {
        return $this->belongsTo(Kost::class, 'id', 'kost_id');
    }

    /**
     * Get the alamat associated with the KostDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alamat(): HasOne
    {
        return $this->hasOne(AlamatDetail::class, 'id', 'alamat_id');
    }

    /**
     * Get the album associated with the KostDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cover(): HasOne
    {
        return $this->hasOne(Picture::class, 'id', 'cover_id');
    }

}
