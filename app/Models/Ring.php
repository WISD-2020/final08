<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ring extends Model
{
    use HasFactory;

    protected $table = 'rings';

    protected $fillable = [
        'id',
        'name',
        'price',
        'type',
        'figure',
    ];

    protected $casts = [
        'id' => 'string',
        'name' => 'string',
        'price' => 'integer',
        'type' => 'string',
        'figure' => 'string',
    ];
}
