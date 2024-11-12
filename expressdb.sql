-- Membuat database baru
CREATE DATABASE IF NOT EXISTS `express`;
USE `express`;



-- Tabel untuk users (informasi pengguna)
CREATE TABLE IF NOT EXISTS `users` (
    `user_id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(100) NOT NULL UNIQUE,
    `email` VARCHAR(100) NOT NULL UNIQUE,
    `password_hash` VARCHAR(255) NOT NULL,
    `role` enum("admin","user") NOT NULL,
    `first_name` VARCHAR(100),
    `last_name` VARCHAR(100),
    `phone_number` VARCHAR(20),
    `address` TEXT,
    `photo_profile` varchar(100),
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


-- Tabel untuk products (informasi produk sepatu)
CREATE TABLE IF NOT EXISTS `products` (
    `product_id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `description` TEXT,
    `price` DECIMAL(10, 2) NOT NULL,
    `stock_quantity` INT NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabel untuk images (gambar produk)
CREATE TABLE IF NOT EXISTS `images` (
    `image_id` INT AUTO_INCREMENT PRIMARY KEY,
    `product_id` INT NOT NULL,
    `image_url` VARCHAR(255) NOT NULL,
    `image_type` ENUM('thumbnail', 'main', 'gallery') NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`product_id`) REFERENCES `products`(`product_id`)
);

-- Tabel untuk orders (pesanan)
CREATE TABLE IF NOT EXISTS `orders` (
    `order_id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT NOT NULL,
    `order_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `total_price` DECIMAL(10, 2) NOT NULL,
    `status` ENUM('pending', 'completed', 'cancelled') DEFAULT 'pending',
    `shipping_address` VARCHAR(255),
    FOREIGN KEY (`user_id`) REFERENCES `users`(`user_id`)
);

-- Tabel untuk order_items (detail produk dalam pesanan)
CREATE TABLE IF NOT EXISTS `order_items` (
    `order_item_id` INT AUTO_INCREMENT PRIMARY KEY,
    `order_id` INT NOT NULL,
    `product_id` INT NOT NULL,
    `quantity` INT NOT NULL,
    `unit_price` DECIMAL(10, 2) NOT NULL,
    `total_price` DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (`order_id`) REFERENCES `orders`(`order_id`),
    FOREIGN KEY (`product_id`) REFERENCES `products`(`product_id`)
);

-- Tabel untuk cart (keranjang belanja)
CREATE TABLE IF NOT EXISTS `cart` (
    `cart_id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT NOT NULL,
    `product_id` INT NOT NULL,
    `quantity` INT NOT NULL,
    `added_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES `users`(`user_id`),
    FOREIGN KEY (`product_id`) REFERENCES `products`(`product_id`)
);
