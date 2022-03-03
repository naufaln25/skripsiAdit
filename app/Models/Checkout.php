<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'venue_id',
        'tanggal_sewa',
        'jam_sewa',
        'durasi',
        'total',
        'is_paid'
    ];

    protected $dates =['tanggal_sewa', 'jam_sewa'];

    protected $primaryKey = 'checkout_id';
    /**
     * Get the Venue that owns the Checkout
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Venue(): BelongsTo
    {
        return $this->belongsTo(Venue::class);
    }
}
