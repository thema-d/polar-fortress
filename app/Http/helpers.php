<?php

/**
 * Format a given price
 *
 * @var integer $amount The amount of the price in cents
 *
 * @return string The formatted string including dollar sign
 */
function formatPrice($amount)
{
    return "$" . number_format($amount/100, 2);
}
