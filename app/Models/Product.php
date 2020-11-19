<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\CanBeBought;

class Product extends Model implements Buyable
{
    use HasFactory, CanBeBought;

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
     *
     * @return integer
     */
    public function getDiscountedPriceAttribute()
    {
        if (!$this->discount) {
            return $this->price;
        }
        return $this->price - ($this->price * $this->discount / 100);
    }
}
