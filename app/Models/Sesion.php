<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    use HasFactory;

    protected $fillable = [
        'from',
        'to',
        'b_date',
        'p_time_at',
        'pickup_time_type',
        'p_time_after',
        'p_time_from',
        'p_time_to',
        'package_type',
        'quantity',
        'weight',
        'unit',
        'length',
        'width',
        'height',
        'size_unit',
        'vehicle',
        'company_name1',
        'company_name2',
        'postal_code1',
        'postal_code2',
        'ph1',
        'ph2',
        'name1',
        'name2',
        'distance',
        'ffinal',
    ];
}
