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
