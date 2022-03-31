<?php

use app\config\Database;

require __DIR__ . ('/Database.php');

$db = Database::getInstance();

try {

  $db->query("CREATE TABLE IF NOT EXISTS `users` (
    `id` INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `is_active` TINYINT(1) NOT NULL DEFAULT 1,
    `role_id` INT(1) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP()
  ) ENGINE=INNODB;


  CREATE TABLE IF NOT EXISTS `user_tokens` (
    `id` INT(2) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `user_id` INT(2) NOT NULL,
    `token` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
    `country` VARCHAR(255) DEFAULT NULL,
    `device` VARCHAR(255) DEFAULT NULL,
    `os` VARCHAR(255) DEFAULT NULL
  ) ENGINE=INNODB;

  CREATE TABLE IF NOT EXISTS `authors` (
    `id` INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(255) DEFAULT NULL,
    `email` VARCHAR(255) DEFAULT NULL,
    `bio` TEXT DEFAULT NULL,
    `is_active` TINYINT(1) NOT NULL DEFAULT 1,
    `created_by` INT(5) DEFAULT NULL,
    `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP()
  ) ENGINE=INNODB;


  CREATE TABLE IF NOT EXISTS `books` (
    `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `image` VARCHAR(255) NOT NULL,
    `price` DOUBLE NOT NULL,
    `description` TEXT NOT NULL,
    `pages_number` INT(2) NOT NULL,
    `category_id` INT(3) NOT NULL,
    `author_id` INT(3) NOT NULL,
    `publisher_id` INT(3) NOT NULL,
    `quantity` INT(2) NOT NULL,
    `format` VARCHAR(255) NOT NULL,
    `created_by` INT(3) DEFAULT NULL,
    `is_active` TINYINT(1) NOT NULL DEFAULT 1,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
  ) ENGINE=INNODB;

  CREATE TABLE IF NOT EXISTS `categories` (
    `id` INT(2) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `image` VARCHAR(255) NOT NULL,
    `is_active` TINYINT(1) NOT NULL DEFAULT 1,
    `created_by` INT(3) DEFAULT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
  ) ENGINE=INNODB;


  CREATE TABLE IF NOT EXISTS `cities` (
    `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `is_active` TINYINT(1) NOT NULL DEFAULT 1,
    `created_by` INT(2) DEFAULT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
  ) ENGINE=INNODB;


  CREATE TABLE IF NOT EXISTS `offers` (
    `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `discount` DOUBLE NOT NULL,
    `start_date` DATE DEFAULT NULL,
    `end_date` DATE DEFAULT NULL,
    `book_ids` VARCHAR(255) DEFAULT NULL,
    `category_ids` VARCHAR(255) DEFAULT NULL,
    `all_books` TINYINT(1) DEFAULT NULL,
    `is_active` TINYINT(1) NOT NULL DEFAULT 1,
    `created_by` INT(2) DEFAULT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
  ) ENGINE=INNODB;


  CREATE TABLE IF NOT EXISTS `orders` (
    `id` INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `user_id` INT(2) NOT NULL,
    `status` INT(2) NOT NULL,
    `total` DOUBLE NOT NULL,
    `discount` DOUBLE NOT NULL,
    `net_total` DOUBLE NOT NULL,
    `payment_method` INT(2) DEFAULT NULL,
    `address_id` INT(2) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
  ) ENGINE=INNODB;


  CREATE TABLE IF NOT EXISTS `order_details` (
    `id` INT(2) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `order_id` INT(2) NOT NULL,
    `book_id` INT(2) NOT NULL,
    `quantity` INT(2) NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
  ) ENGINE=INNODB;


  CREATE TABLE IF NOT EXISTS `payments` (
    `id` INT(2) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `image` VARCHAR(255) NOT NULL,
    `is_active` TINYINT(1) NOT NULL DEFAULT 1,
    `created_by` INT(2) DEFAULT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
  ) ENGINE=INNODB;


  CREATE TABLE IF NOT EXISTS `publishers` (
    `id` INT(2) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(255) NOT NULL,
    `alt_phone` VARCHAR(255) DEFAULT NULL,
    `fax` VARCHAR(255) DEFAULT NULL,
    `email` VARCHAR(255) DEFAULT NULL,
    `address` VARCHAR(255) DEFAULT NULL,
    `country` VARCHAR(255) NOT NULL,
    `image` VARCHAR(255) DEFAULT NULL,
    `is_active` TINYINT(1) NOT NULL DEFAULT 1,
    `created_by` INT(2) DEFAULT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
  ) ENGINE=INNODB;


  CREATE TABLE IF NOT EXISTS `roles` (
    `id` INT(2) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `is_active` TINYINT(1) NOT NULL DEFAULT 1,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
  ) ENGINE=INNODB;


  CREATE TABLE IF NOT EXISTS `user_addresses` (
    `id` INT(2) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `user_id` INT(2) NOT NULL,
    `city_id` INT(2) NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(255) NOT NULL,
    `is_active` TINYINT(1) NOT NULL DEFAULT 1,
    `lat` DOUBLE DEFAULT NULL,
    `lng` DOUBLE DEFAULT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP()
  ) ENGINE=INNODB;


  CREATE TABLE IF NOT EXISTS `user_payment_methods` (
    `id` INT(2) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `user_id` INT(2) NOT NULL,
    `payment_id` INT(2) NOT NULL,
    `is_active` TINYINT(4) NOT NULL DEFAULT 1,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP()
  ) ENGINE=INNODB;


  CREATE TABLE IF NOT EXISTS `user_profiles` (
    `id` INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `image` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(255) NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `user_id` INT(5) NOT NULL UNIQUE ,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP()
  ) ENGINE=INNODB;


  ALTER TABLE users 
    ADD CONSTRAINT fk_user_role
    FOREIGN KEY (role_id) REFERENCES roles(id);
    
  ALTER TABLE user_tokens 
    ADD CONSTRAINT fk_token_user
    FOREIGN KEY (user_id) REFERENCES users(id);
    
  ALTER TABLE authors 
    ADD CONSTRAINT fk_author_user_created
    FOREIGN KEY (created_by) REFERENCES users(id);
    
  ALTER TABLE books 
    ADD CONSTRAINT fk_book_category
    FOREIGN KEY (category_id) REFERENCES categories(id);
    
  ALTER TABLE books 
    ADD CONSTRAINT fk_book_author
    FOREIGN KEY (author_id) REFERENCES authors(id);
    
  ALTER TABLE books 
    ADD CONSTRAINT fk_book_publisher
    FOREIGN KEY (publisher_id) REFERENCES publishers(id);
    
  ALTER TABLE books 
    ADD CONSTRAINT fk_book_user_created
    FOREIGN KEY (created_by) REFERENCES users(id);
    
  ALTER TABLE categories 
    ADD CONSTRAINT fk_category_user_created
    FOREIGN KEY (created_by) REFERENCES users(id);
    
  ALTER TABLE cities 
    ADD CONSTRAINT fk_city_user_created
    FOREIGN KEY (created_by) REFERENCES users(id);
    
  ALTER TABLE offers 
    ADD CONSTRAINT fk_offer_user_created
    FOREIGN KEY (created_by) REFERENCES users(id);
    
  ALTER TABLE orders 
    ADD CONSTRAINT fk_order_user
    FOREIGN KEY (user_id) REFERENCES users(id);
    
  ALTER TABLE orders 
    ADD CONSTRAINT fk_order_payment_method
    FOREIGN KEY (payment_method) REFERENCES payments(id);
    
  ALTER TABLE orders 
    ADD CONSTRAINT fk_order_address
    FOREIGN KEY (address_id) REFERENCES user_addresses(id);
    
  ALTER TABLE order_details 
    ADD CONSTRAINT fk_order_details_order
    FOREIGN KEY (order_id) REFERENCES orders(id);
    
  ALTER TABLE order_details 
    ADD CONSTRAINT fk_order_details_book
    FOREIGN KEY (book_id) REFERENCES books(id);
    
  ALTER TABLE payments 
    ADD CONSTRAINT fk_payment_user_created
    FOREIGN KEY (created_by) REFERENCES users(id);
    
  ALTER TABLE publishers 
    ADD CONSTRAINT fk_publisher_user_created
    FOREIGN KEY (created_by) REFERENCES users(id);
    
  ALTER TABLE user_addresses 
    ADD CONSTRAINT fk_address_user
    FOREIGN KEY (user_id) REFERENCES users(id);
    
  ALTER TABLE user_addresses 
    ADD CONSTRAINT fk_address_city
    FOREIGN KEY (city_id) REFERENCES cities(id);
    
  ALTER TABLE user_payment_methods 
    ADD CONSTRAINT fk_payment_method_user
    FOREIGN KEY (user_id) REFERENCES users(id);
    
  ALTER TABLE user_payment_methods 
    ADD CONSTRAINT fk_payment_method_payment
    FOREIGN KEY (payment_id) REFERENCES payments(id);
    
  ALTER TABLE user_profiles 
    ADD CONSTRAINT fk_profile_user
    FOREIGN KEY (user_id) REFERENCES users(id);
");

  echo "Database table created successfully";
} catch (Exception $err) {
  echo $err->getMessage();
}
