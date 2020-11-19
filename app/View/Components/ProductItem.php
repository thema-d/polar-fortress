<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Product;

class ProductItem extends Component
{

    /**
     * A product being rendered
     *
     * @var \App\Models\Product
     */
    public $product;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($product)
    {
        $this->product = $product;
    }

    /**
     * Format a given price
     *
     * @var integer $amount The amount of the price in cents
     *
     * @return string The formatted string including dollar sign
     */
    public function formatPrice($amount)
    {
        return "$" . number_format($amount/100, 2);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.product-item');
    }
}
