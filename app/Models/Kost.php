<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Kost extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'owner_id',
        'status',
        'price'
    ];

    /**
     * Get the owner that owns the Kost
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id', 'owner_id');
    }

    /**
     * Get the detail associated with the Kost
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function detail(): HasOne
    {
        return $this->hasOne(KostDetail::class, 'kost_id', 'id');
    }

    /**
     * Get all of the facilities for the Kost
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilities(): HasMany
    {
        return $this->hasMany(KostFacility::class, 'kost_id', 'id');
    }
}
