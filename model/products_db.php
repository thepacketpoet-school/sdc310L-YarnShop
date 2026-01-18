<?php
/*
    Products Database Model
    SDC310L Course Project - Week 4
    Author: Haley Archer
    Date: January 18, 2026
    Description: Database operations for products
*/

require_once('database.php');

// Get all products from database
function get_all_products()
{
    $pdo = get_db_conn();
    $stmt = $pdo->query("SELECT * FROM products ORDER BY product_id");
    return $stmt->fetchAll();
}

// Get a single product by ID
function get_product($product_id)
{
    $pdo = get_db_conn();
    $stmt = $pdo->prepare("SELECT * FROM products WHERE product_id = ?");
    $stmt->execute([$product_id]);
    return $stmt->fetch();
}
?>
