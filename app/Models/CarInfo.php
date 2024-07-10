<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarInfo extends Model
{
    use HasFactory;
    protected $table = 'car_infos';
    protected $primaryKey = 'car_infos_id';
}
