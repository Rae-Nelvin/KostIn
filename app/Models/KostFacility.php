<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KostFacility extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'kost_id',
        'facility_id'
    ];
    
    /**
     * Get the kost that owns the KostFacility
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kost(): BelongsTo
    {
        return $this->belongsTo(Kost::class, 'id', 'kost_id');
    }

    /**
     * Get all of the facilities for the KostFacility
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilities(): HasMany
    {
        return $this->hasMany(Facility::class, 'id', 'facility_id');
    }
}
