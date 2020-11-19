<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShoppingCartBox extends Component
{

    /**
     * List of all items in the cart
     * 
     * @var array
     */
    public $items = [];
    
    /**
     * Event listeners
     * 
     * @var array
     * 
     */
    protected $listeners = [
        'item.added' => 'itemAdded'
    ];

    /**
     * A mount lifecycle hook
     *
     * @return void
     */
    public function mount() {
        $this->items = get_cart_content();
        // dump($this->items);
    }

    /**
     * Fires when a new item is added to cart
     *
     * @return void
     */
    public function itemAdded() {
        $this->items = get_cart_content();
    }

    /**
     * Removes item from a cart
     * 
     * @param string $rowId
     * 
     * @return void
     */
    public function removeItemFromCart($rowId) {
        remove_item_from_cart($rowId);
        $this->items = get_cart_content();
        $this->emit('item.removed');
    }
    
    public function render()
    {
        return view('livewire.shopping-cart-box');
    }
}
