<?php
/*
    Catalog Controller
    SDC310L Course Project - Week 4
    Author: Haley Archer
    Date: January 18, 2026
    Description: Controller for catalog operations
*/

require_once(__DIR__ . '/../model/products_db.php');

// Get all products for display
function get_products_for_catalog()
{
    return get_all_products();
}

// Get cart item count for display
function get_cart_count()
{
    if (!isset($_SESSION['cart'])) {
        return 0;
    }
    return count($_SESSION['cart']);
}
?>
