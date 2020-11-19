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

    /**
     * Mount lifecycle hook
     *
     * @return void
     */
    public function mount()
    {
        $this->products = Product::all()->take(12);
        create_cart();
    }

    public function addItemToCart(Product $product)
    {
        add_item_to_cart($product);
        $this->emit('item.added');
    }
    
    public function render()
    {
        return view('livewire.product-list');
    }
}
