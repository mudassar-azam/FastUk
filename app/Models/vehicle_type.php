<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicle_type extends Model
{
    use HasFactory;
    protected $table="tj_type_vehicule_rental";
    protected $primaryKey="id";
}
