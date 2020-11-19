<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Cart;

class ProductController extends Controller
{

    /**
     * A cart instance to manage cart operations
     *
     * @var Gloudemans\Shoppingcart\Cart
     */
    protected $cart;

    /**
     * Init essential operations
     *
     * @return void
     */
    public function __construct(Cart $cart)
    {
        $this->cart = $cart;

        $this->instantiateCart('my-cart-2');

        $cartItem = $this->cart->add('293ad', 'Product 1', 1, 9.99, 0, ['size' => 'large']);
        $this->persistCart('my-cart-2');
    }

    /**
     * Instantiate a cart
     *
     * @param string $identifier
     *
     * @return void
     */
    private function instantiateCart($identifier = 'my-cart')
    {
        $this->cart->instance($identifier); // create a cart instance
    }

    /**
     * Save or update a cart to database
     *
     * @param string $identifier
     *
     * @return void
     */
    private function persistCart($identifier = 'my-cart')
    {
        if (!cart_exists($identifier)) {
            $this->cart->store($identifier);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $products = Product::all()->except($product->id)->take(6);
        return view('product.single', ['product' => $product, 'products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
