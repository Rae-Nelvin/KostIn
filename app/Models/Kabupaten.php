<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Kabupaten extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'picture_id'
    ];

    /**
     * Get the picture associated with the Kabupaten
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function picture(): HasOne
    {
        return $this->hasOne(Picture::class, 'id', 'picture_id');
    }
}
