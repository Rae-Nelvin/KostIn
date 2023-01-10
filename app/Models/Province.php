<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Province extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'picture_id'
    ];

    /**
     * Get the picture associated with the Province
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function picture(): HasOne
    {
        return $this->hasOne(Picture::class, 'id', 'picture_id');
    }
}
