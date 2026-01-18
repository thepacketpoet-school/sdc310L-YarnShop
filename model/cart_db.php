<?php
/*
    Cart Database Model
    SDC310L Course Project - Week 4
    Author: Haley Archer
    Date: January 18, 2026
    Description: Database operations for cart items
*/

require_once('database.php');

// Get cart items with product details
function get_cart_items($cart_ids)
{
    if (empty($cart_ids)) {
        return [];
    }
    
    $pdo = get_db_conn();
    $placeholders = implode(',', array_fill(0, count($cart_ids), '?'));
    $stmt = $pdo->prepare("SELECT * FROM products WHERE product_id IN ($placeholders)");
    $stmt->execute($cart_ids);
    return $stmt->fetchAll();
}
?>
