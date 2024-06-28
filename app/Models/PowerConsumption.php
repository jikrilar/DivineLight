<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PowerConsumption extends Model
{
    use HasFactory;

    protected $fillable = [
        'power',
        'energy',
        'voltage',
        'current'
    ];
}
