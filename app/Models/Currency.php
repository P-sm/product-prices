<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    /** @use HasFactory<\Database\Factories\CurrencyFactory> */
    use HasFactory;
    protected $primaryKey = 'code';
    public $incrementing = false;
    public $timestamps = false;

    protected $casts = [
        'rate' => 'float',
    ];
}
