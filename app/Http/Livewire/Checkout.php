<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Checkout extends Component
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
        'item.removed' => 'itemRemoved',
        'checkout.completed' => 'itemRemoved'
    ];

    /**
     * A mount lifecycle hook
     *
     * @return void
     */
    public function mount()
    {
        $this->items = get_cart_content();
    }

    /**
     * Fires when an item is removed from a cart
     *
     * @return void
     */
    public function itemRemoved()
    {
        $this->items = get_cart_content();
    }

    /**
     * Make payment and place user order
     *
     * @return void
     */
    public function checkoutOrders() {
        truncate_cart();
        $this->emit('checkout.completed');
    }

}
