<?php
/*
    Haley's Hobby Yarn & Thread - Shopping Cart View
    SDC310L Course Project - Week 4
    Author: Haley Archer
    Date: January 18, 2026
    Description: Shopping cart page using MVC architecture
*/
session_start();
require_once(__DIR__ . '/controller/cart_controller.php');
require_once(__DIR__ . '/controller/catalog_controller.php');

// Handle add to cart
if (isset($_POST['add_to_cart'])) {
    $product_id = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];
    add_to_cart($product_id, $quantity);
    header("Location: cart.php");
    exit;
}

// Handle remove from cart
if (isset($_GET['remove'])) {
    $product_id = (int)$_GET['remove'];
    remove_from_cart($product_id);
    header("Location: cart.php");
    exit;
}

// Handle update cart
if (isset($_POST['update_cart'])) {
    update_cart($_POST['quantities']);
    header("Location: cart.php");
    exit;
}

$cart_data = get_cart_data();
$cart_count = get_cart_count();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Haley's Hobby Yarn & Thread</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1>🧶 Haley's Hobby Yarn & Thread</h1>
            <p class="tagline">Quality yarns for every project</p>
            <nav>
                <a href="index.php">Catalog</a>
                <a href="cart.php" class="active">Shopping Cart (<?php echo $cart_count; ?>)</a>
            </nav>
        </div>
    </header>
    <main>
        <h2>Your Shopping Cart</h2>
        <div class="cart-container">
            <?php if (empty($cart_data['items'])): ?>
                <div class="empty-cart-message">
                    <p>Your cart is empty.</p>
                    <p><a href="index.php" class="continue-shopping">Continue shopping</a></p>
                </div>
            <?php else: ?>
                <form method="POST" action="cart.php">
                    <table class="cart-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cart_data['items'] as $item): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($item['product_name']); ?></td>
                                <td>$<?php echo number_format($item['price'], 2); ?></td>
                                <td>
                                    <input type="number" name="quantities[<?php echo $item['product_id']; ?>]" 
                                           value="<?php echo $item['cart_quantity']; ?>" min="0" max="<?php echo $item['quantity_in_stock']; ?>">
                                </td>
                                <td>$<?php echo number_format($item['line_total'], 2); ?></td>
                                <td><a href="cart.php?remove=<?php echo $item['product_id']; ?>" class="remove-btn">Remove</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="cart-actions">
                        <button type="submit" name="update_cart" class="update-btn">Update Cart</button>
                        <a href="index.php" class="continue-shopping">&larr; Continue Shopping</a>
                    </div>
                </form>
                <div class="cart-summary">
                    <h3>Order Summary</h3>
                    <div class="summary-row"><span>Subtotal:</span><span>$<?php echo number_format($cart_data['subtotal'], 2); ?></span></div>
                    <div class="summary-row"><span>Tax (8.25%):</span><span>$<?php echo number_format($cart_data['tax'], 2); ?></span></div>
                    <div class="summary-row total"><span>Total:</span><span>$<?php echo number_format($cart_data['total'], 2); ?></span></div>
                    <button class="checkout-btn">Proceed to Checkout</button>
                </div>
            <?php endif; ?>
        </div>
    </main>
    <footer><p>&copy; 2026 Haley's Hobby Yarn & Thread - SDC310L Course Project by Haley Archer</p></footer>
</body>
</html>
