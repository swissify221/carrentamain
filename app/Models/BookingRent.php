<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingRent extends Model
{
    use HasFactory;
    protected $table = 'booking_rents';
    protected $primaryKey = 'booking_rents_id';
}
