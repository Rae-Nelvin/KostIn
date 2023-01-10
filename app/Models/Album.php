<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'kost_id',
        'cover_id',
    ];

    /**
     * Get the kost that owns the Album
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kost(): BelongsTo
    {
        return $this->belongsTo(Kost::class, 'id', 'kost_id');
    }

    /**
     * Get the cover associated with the Album
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cover(): HasOne
    {
        return $this->hasOne(Picture::class, 'id', 'cover_id');
    }
}
