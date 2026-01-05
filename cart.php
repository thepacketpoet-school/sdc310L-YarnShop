<!--
    Yarn & Thread Online Store - Shopping Cart Page
    SDC310L Course Project
    Author: Haley Archer
    Date: December 2025
-->
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
                <a href="cart.php" class="active">Shopping Cart</a>
            </nav>
        </div>
    </header>
    <main>
        <h2>Your Shopping Cart</h2>
        <div class="cart-container">
            <table class="cart-table">
                <thead><tr><th>Product</th><th>Price</th><th>Quantity</th><th>Subtotal</th><th>Action</th></tr></thead>
                <tbody>
                    <tr><td colspan="5" class="empty-cart"><p>Your cart is empty.</p><p><a href="index.php">Continue shopping</a></p></td></tr>
                </tbody>
            </table>
            <div class="cart-summary">
                <h3>Order Summary</h3>
                <div class="summary-row"><span>Subtotal:</span><span>$0.00</span></div>
                <div class="summary-row"><span>Tax (8.25%):</span><span>$0.00</span></div>
                <div class="summary-row total"><span>Total:</span><span>$0.00</span></div>
                <button class="checkout-btn" disabled>Proceed to Checkout</button>
            </div>
        </div>
        <div class="cart-actions"><a href="index.php" class="continue-shopping">&larr; Continue Shopping</a></div>
    </main>
    <footer><p>&copy; 2026 Yarn & Thread - SDC310L Course Project by Haley Archer</p></footer>
</body>
</html>
