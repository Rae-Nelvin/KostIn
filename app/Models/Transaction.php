<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kost_id',
        'status',
        'mulai_stay',
        'akhir_stay',
        'total_price',
        'bukti_pembayaran'
    ];

    /**
     * Get the user associated with the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    /**
     * Get the kost associated with the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function kost(): HasOne
    {
        return $this->hasOne(Kost::class, 'id', 'kost_id');
    }

    /**
     * Get the bukti_pembayaran associated with the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bukti_pembayaran(): HasOne
    {
        return $this->hasOne(Picture::class, 'id', 'bukti_pembayaran');
    }
}
