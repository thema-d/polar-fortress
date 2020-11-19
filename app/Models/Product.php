<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements Buyable
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

    /**
     * Get the identifier of the Buyable item.
     *
     * @return int|string
     */
    public function getBuyableIdentifier($options = null)
    {
        return $this->id;
    }

    /**
     * Get the name, title or description of the Buyable item.
     *
     * @return string
     */
    public function getBuyableDescription($options = null)
    {
        return $this->name;
    }

    /**
     * Get the price of the Buyable item.
     *
     * @return float
     */
    public function getBuyablePrice($options = null)
    {
        return $this->price;
    }

    /**
     * Get the weight of the Buyable item.
     *
     * @return float
     */
    public function getBuyableWeight($options = null)
    {
        return 1;
    }
}
