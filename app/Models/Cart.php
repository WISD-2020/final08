<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';

    protected $fillable = [
        'name',
        'price',
        'type',
        'figure',
    ];

    protected $casts = [
        'name' => 'string',
        'price' => 'integer',
        'type' => 'string',
        'figure' => 'string',
    ];
}
