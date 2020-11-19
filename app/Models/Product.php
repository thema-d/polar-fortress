<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'images' => 'array',
        'sizes' => 'array',
    ];
}
