<?php
/*
    Cart Controller
    SDC310L Course Project - Week 4
    Author: Haley Archer
    Date: January 18, 2026
    Description: Controller for shopping cart operations
*/

require_once(__DIR__ . '/../model/products_db.php');
require_once(__DIR__ . '/../model/cart_db.php');

// Add item to cart
function add_to_cart($product_id, $quantity)
{
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] += $quantity;
    } else {
        $_SESSION['cart'][$product_id] = $quantity;
    }
}

// Remove item from cart
function remove_from_cart($product_id)
{
    if (isset($_SESSION['cart'][$product_id])) {
        unset($_SESSION['cart'][$product_id]);
    }
}

// Update cart quantities
function update_cart($quantities)
{
    foreach ($quantities as $product_id => $quantity) {
        $quantity = (int)$quantity;
        if ($quantity > 0) {
            $_SESSION['cart'][(int)$product_id] = $quantity;
        } else {
            unset($_SESSION['cart'][(int)$product_id]);
        }
    }
}

// Get cart data with product details
function get_cart_data()
{
    if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
        return ['items' => [], 'subtotal' => 0, 'tax' => 0, 'total' => 0];
    }
    
    $cart_ids = array_keys($_SESSION['cart']);
    $products = get_cart_items($cart_ids);
    
    $cart_items = [];
    $subtotal = 0;
    
    foreach ($products as $product) {
        $item = $product;
        $item['cart_quantity'] = $_SESSION['cart'][$product['product_id']];
        $item['line_total'] = $product['price'] * $item['cart_quantity'];
        $subtotal += $item['line_total'];
        $cart_items[] = $item;
    }
    
    $tax_rate = 0.0825;
    $tax = $subtotal * $tax_rate;
    $total = $subtotal + $tax;
    
    return [
        'items' => $cart_items,
        'subtotal' => $subtotal,
        'tax' => $tax,
        'total' => $total
    ];
}
?>
