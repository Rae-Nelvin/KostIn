<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Kampus extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'alamat_id',
        'logo_id'
    ];

    /**
     * Get the alamat associated with the Kampus
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alamat(): HasOne
    {
        return $this->hasOne(AlamatDetail::class, 'id', 'alamat_id');
    }

    /**
     * Get the logo associated with the Kampus
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function logo(): HasOne
    {
        return $this->hasOne(Picture::class, 'id', 'logo_id');
    }
}
