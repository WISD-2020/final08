<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'id',
        'userid',
        'ringid',
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

    public function user()
    {
        return $this->belongsTo('App\Models\User','id');
    }
}
