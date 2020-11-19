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

    /**
     * Returns price after applying discount if there is any
     */
    public function getDiscountedPriceAttribute() {
        if (!$this->discount) return $this->price;
        return $this->price - ($this->price * $this->discount / 100);
    }
}
