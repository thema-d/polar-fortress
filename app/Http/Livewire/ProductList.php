<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    /**
     * List of products
     * 
     * @var \App\Models\Product[]
     */
    public $products = [];

    public function mount() {
        $this->products = Product::all()->take(10);
    }
    
    public function render()
    {
        return view('livewire.product-list');
    }
}
