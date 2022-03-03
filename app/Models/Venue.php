<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;

class Venue extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'price',
        'description',
        'image'
    ];

    // protected $primaryKey = 'venue_id';

    public function getIsLoginAttribute()
    {
        if (Auth::check()) {
            return false;
        }
    }
}
