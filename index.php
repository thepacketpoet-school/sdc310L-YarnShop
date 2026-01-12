<?php
/*
    Haley's Hobby Yarn & Thread - Catalog Page
    SDC310L Course Project
    Author: Haley Archer
    Date: January 2026
*/
session_start();
require_once 'includes/db_connect.php';

// Fetch all products from database
$stmt = $pdo->query("SELECT * FROM products ORDER BY product_id");
$products = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haley's Hobby Yarn & Thread - Online Yarn Store</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1>🧶 Haley's Hobby Yarn & Thread</h1>
            <p class="tagline">Quality yarns for every project</p>
            <nav>
                <a href="index.php" class="active">Catalog</a>
                <a href="cart.php">Shopping Cart (<?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>)</a>
            </nav>
        </div>
    </header>
    <main>
        <h2>Our Yarn Collection</h2>
        <p class="intro">Browse our selection of premium yarns for all your crafting needs.</p>
        <div class="product-grid">
            <?php foreach ($products as $product): ?>
            <div class="product-card">
                <div class="product-image">
                    <img src="<?php echo htmlspecialchars($product['image_url']); ?>" 
                         alt="<?php echo htmlspecialchars($product['product_name']); ?>">
                </div>
                <div class="product-info">
                    <h3><?php echo htmlspecialchars($product['product_name']); ?></h3>
                    <p class="description"><?php echo htmlspecialchars($product['description']); ?></p>
                    <p class="price">$<?php echo number_format($product['price'], 2); ?></p>
                    <p class="stock">In stock: <?php echo $product['quantity_in_stock']; ?></p>
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
                        <label>Qty:</label>
                        <input type="number" name="quantity" value="1" min="1" max="<?php echo $product['quantity_in_stock']; ?>">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </main>
    <footer><p>&copy; 2026 Haley's Hobby Yarn & Thread - SDC310L Course Project by Haley Archer</p></footer>
</body>
</html>
