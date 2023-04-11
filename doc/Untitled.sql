CREATE TABLE `category` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `title` int(11) NOT NULL
);

CREATE TABLE `products` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `category_id` int(11),
  `name` varchar(100) DEFAULT NULL,
  `price_input` float(20) DEFAULT 0,
  `price_output` float(20) DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `summary` longtext DEFAULT NULL,
  `sales` int(20) DEFAULT 0,
  `createdAt` date,
  `slug` varchar(100) UNIQUE
);

CREATE TABLE `product_image` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `image` varchar(255)
);

CREATE TABLE `product_variant` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `grams` float(20),
  `price` float(20),
  `option` varchar(100),
  `title` varchar(100),
  `modified_on` date
);

CREATE TABLE `users` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `name` varchar(100),
  `address` varchar(255),
  `phone` varchar(20),
  `email` varchar(100),
  `avatar` varchar(255)
);

CREATE TABLE `comments` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `content` varchar(300),
  `createdAt` date,
  `updatedAt` date
);

CREATE TABLE `news` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `content` varchar(300),
  `createdAt` date,
  `updatedAt` date
);

CREATE TABLE `orders` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(100),
  `address` varchar(255),
  `phone` varchar(20)
);

CREATE TABLE `order_detail` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL
);

CREATE TABLE `statistic` (
  `id_statistic` int(11) PRIMARY KEY NOT NULL,
  `product_id` int(11) NOT NULL,
  `createdAt` date
);

CREATE TABLE `banner` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `image` varchar(200) NOT NULL
);

CREATE TABLE `about` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `content` longtext
);

ALTER TABLE `products` ADD FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

ALTER TABLE `product_image` ADD FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

ALTER TABLE `comments` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `comments` ADD FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

ALTER TABLE `orders` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `order_detail` ADD FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

ALTER TABLE `order_detail` ADD FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

ALTER TABLE `statistic` ADD FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

ALTER TABLE `product_variant` ADD FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
