-- Yarn & Thread Online Store Database
-- SDC310L Course Project - Haley Archer
-- Created: December 2025

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Create Database
CREATE DATABASE IF NOT EXISTS yarn_shop DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE yarn_shop;

-- Table structure for table `products`
CREATE TABLE products (
  product_id INT(11) NOT NULL AUTO_INCREMENT,
  product_name VARCHAR(100) NOT NULL,
  description TEXT,
  price DECIMAL(10,2) NOT NULL,
  quantity_in_stock INT(11) NOT NULL DEFAULT 0,
  image_url VARCHAR(255) DEFAULT NULL,
  category VARCHAR(50) DEFAULT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (product_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Sample data for table `products`
INSERT INTO products (product_name, description, price, quantity_in_stock, image_url, category) VALUES
('Soft Merino Wool - Dusty Rose', 'Premium 100% merino wool yarn, perfect for sweaters and scarves. Super soft and warm. 200 yards per skein.', 12.99, 50, 'images/merino-dusty-rose.jpg', 'Wool'),
('Cotton Blend - Ocean Blue', 'Lightweight cotton blend yarn ideal for summer projects. Machine washable. 150 yards per skein.', 8.99, 75, 'images/cotton-ocean-blue.jpg', 'Cotton'),
('Chunky Alpaca - Cream', 'Luxuriously soft alpaca yarn for quick, cozy projects. Hypoallergenic. 100 yards per skein.', 18.99, 30, 'images/alpaca-cream.jpg', 'Alpaca'),
('Acrylic Worsted - Rainbow Multi', 'Colorful self-striping acrylic yarn. Great for beginners and kids projects. 300 yards per skein.', 5.99, 100, 'images/acrylic-rainbow.jpg', 'Acrylic'),
('Bamboo Silk - Sage Green', 'Eco-friendly bamboo and silk blend with beautiful drape. Perfect for shawls. 175 yards per skein.', 14.99, 40, 'images/bamboo-sage.jpg', 'Bamboo'),
('Mohair Lace - Blush Pink', 'Delicate mohair lace weight yarn for elegant accessories. Creates beautiful halo effect. 400 yards per skein.', 16.99, 25, 'images/mohair-blush.jpg', 'Mohair');

COMMIT;
