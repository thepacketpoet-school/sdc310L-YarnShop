<!--
    Yarn & Thread Online Store - Catalog Page
    SDC310L Course Project
    Author: Haley Archer
    Date: December 2025
    Description: Main catalog page displaying yarn products for sale
-->
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
                <a href="cart.php">Shopping Cart</a>
            </nav>
        </div>
    </header>
    <main>
        <h2>Our Yarn Collection</h2>
        <p class="intro">Browse our selection of premium yarns for all your crafting needs.</p>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image"><img src="images/placeholder.svg" alt="Soft Merino Wool"></div>
                <div class="product-info">
                    <h3>Soft Merino Wool - Dusty Rose</h3>
                    <p class="description">Premium 100% merino wool yarn, perfect for sweaters and scarves.</p>
                    <p class="price">$12.99</p>
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="product_id" value="1">
                        <label>Qty:</label><input type="number" name="quantity" value="1" min="1" max="10">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image"><img src="images/placeholder.svg" alt="Cotton Blend"></div>
                <div class="product-info">
                    <h3>Cotton Blend - Ocean Blue</h3>
                    <p class="description">Lightweight cotton blend yarn ideal for summer projects.</p>
                    <p class="price">$8.99</p>
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="product_id" value="2">
                        <label>Qty:</label><input type="number" name="quantity" value="1" min="1" max="10">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image"><img src="images/placeholder.svg" alt="Chunky Alpaca"></div>
                <div class="product-info">
                    <h3>Chunky Alpaca - Cream</h3>
                    <p class="description">Luxuriously soft alpaca yarn for quick, cozy projects.</p>
                    <p class="price">$18.99</p>
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="product_id" value="3">
                        <label>Qty:</label><input type="number" name="quantity" value="1" min="1" max="10">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image"><img src="images/placeholder.svg" alt="Acrylic Worsted"></div>
                <div class="product-info">
                    <h3>Acrylic Worsted - Rainbow Multi</h3>
                    <p class="description">Colorful self-striping acrylic yarn. Great for beginners.</p>
                    <p class="price">$5.99</p>
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="product_id" value="4">
                        <label>Qty:</label><input type="number" name="quantity" value="1" min="1" max="10">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image"><img src="images/placeholder.svg" alt="Bamboo Silk"></div>
                <div class="product-info">
                    <h3>Bamboo Silk - Sage Green</h3>
                    <p class="description">Eco-friendly bamboo and silk blend with beautiful drape.</p>
                    <p class="price">$14.99</p>
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="product_id" value="5">
                        <label>Qty:</label><input type="number" name="quantity" value="1" min="1" max="10">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image"><img src="images/placeholder.svg" alt="Mohair Lace"></div>
                <div class="product-info">
                    <h3>Mohair Lace - Blush Pink</h3>
                    <p class="description">Delicate mohair lace weight yarn for elegant accessories.</p>
                    <p class="price">$16.99</p>
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="product_id" value="6">
                        <label>Qty:</label><input type="number" name="quantity" value="1" min="1" max="10">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer><p>&copy; 2026 Yarn & Thread - SDC310L Course Project by Haley Archer</p></footer>
</body>
</html>
