<?php

use Illuminate\Database\DatabaseManager;

/**
 * Format a given price
 *
 * @var integer $amount The amount of the price in cents
 *
 * @return string The formatted string including dollar sign
 */
function format_price($amount)
{
    return "$" . number_format($amount/100, 2);
}

/**
 * Get the database connection name.
 *
 * @return string
 */
function getConnectionName()
{
    $connection = config('cart.database.connection');

    return is_null($connection) ? config('database.default') : $connection;
}

/**
 * Get the database table name.
 *
 * @return string
 */
function getTableName()
{
    return config('cart.database.table', 'shoppingcart');
}

/**
 * Check if a shopping cart already exists in the database
 *
 * @var string $identifier The cart name
 *
 * @return boolean
 */
function cart_exists($identifier)
{
    return app(DatabaseManager::class)
        ->connection(getConnectionName())
        ->table(getTableName())
        ->where('identifier', $identifier)
        ->exists();
}

/**
 * Instantiate a cart
 *
 * @param string $identifier
 *
 * @return void
 */
function create_cart()
{
    $identifier = get_identifier();
    Cart::instance($identifier)->restore($identifier);
    dump(get_identifier());
    dump(Cart::content());
}

/**
 * Create or get a new identifier for current session
 *
 * @return string
 */
function get_identifier()
{
    $identifier = session('current_user_cart_id');

    if (!$identifier) {
        session(['current_user_cart_id' => Str::random(30)]);
    }

    return session('current_user_cart_id');
}

/**
 * Add item to cart and save it
 *
 * @param string $identifier
 *
 * @return void
 */
function add_item_to_cart($item)
{
    // get already existing cart in database
    // add new item to it
    // save it back to database
    if (!cart_exists($identifier)) {
        Cart::store($identifier);
    }
}
