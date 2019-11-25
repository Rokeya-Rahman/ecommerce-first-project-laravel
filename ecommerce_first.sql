-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 05:42 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_first`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Aarong', 'Aarong (Bengali: আড়ং; meaning Village Fair) is a chain of Bangladeshi department stores specializing in Bengali ethnic wear and handicrafts. It is owned by the non-profit development agency BRAC, and employs thousands of rural artisans across the country. It currently operates fourteen outlets in six Bangladeshi metropolitan cities', 1, '2019-09-02 10:19:49', '2019-09-05 20:06:03'),
(2, 'Kay Kraft', 'Among all another leading brand, Kay Kraft is a popular one. The brand has a different aspect of garments. In 1993, the kay kraft has been established. It produces different types of traditional dress. The focus of this brand is also to the Scarf, Tops, Fotua, Short Panjabi, long Panjabi. This brand also works as accessories suppliers.', 1, '2019-09-02 10:21:40', '2019-09-02 10:27:01'),
(3, 'Le Reve', 'Le Reve is famous for a unique item. Although the band is unique, it works like other fashion houses. But it emphasizes the ethnic dress. This fashion house works with women, men and kids items. Le Reve is a small part of the Reve Tex Ltd. its branch is available in Sylhet, Narayangonj, and Dhaka.', 1, '2019-09-02 10:22:17', '2019-09-02 10:22:17'),
(4, 'Anjans', 'In the clothing arena, it is another remarkable fashion house. This fashion house is established in 1994. This produces different types of artistic cloths. Especially, It produces various types of women dress. Saree, Kurti, Kid’s Wear, Salwar Kameez, Fotua, Panjabi, Shirt, Hometex, Handicraft are the dress of Anjan’s.', 1, '2019-09-02 10:23:57', '2019-09-02 10:28:27'),
(5, 'Dorjibari', 'It is another distinguished fashion house in this country. Among all others leading exporter and manufactures, it is one. The brand has gained popularity within a short period of time. Its activities have been run in 2007. This brand also produces different types of handicraft. The popularity of the dorjibairi is skyscrapers in Bangladesh.', 1, '2019-09-02 10:24:13', '2019-09-02 10:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Clothing', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', 1, '2019-09-02 10:10:21', '2019-09-02 10:57:29'),
(2, 'Purses & Wallets', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', 1, '2019-09-02 10:13:16', '2019-09-02 10:58:02'),
(3, 'Shoes', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', 1, '2019-09-02 10:14:55', '2019-09-10 03:37:02'),
(4, 'Watches', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', 1, '2019-09-02 10:16:48', '2019-09-02 10:58:20'),
(5, 'Jewellery', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', 1, '2019-09-02 10:17:35', '2019-09-02 10:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email_address`, `password`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'MD.', 'Cool', 'cool@gmail.com', '$2y$10$TbkE7pHLl6RUKoHTVM/hy.Mu74/yJvKpsjMieLiVlb1U0D7PZxdEO', '0123456789', 'Cool Street', '2019-09-07 21:17:22', '2019-09-07 21:17:22'),
(3, 'Admin', 'Project', 'admin@project.com', '$2y$10$Yv3nm3TSwi.nkRP0TFYIreUeKg6HLbwaNJM4Kt6OyJ961.iV.8JPW', '9876543210', 'Admin Street', '2019-09-07 21:42:10', '2019-09-07 21:42:10'),
(4, 'askjadjkbhv', 'cfdcfdfvfv', 'xsxcsdcds@gmail.com', '$2y$10$6kUEcVIXtys/0YidNWdnHOR3jeOyhsz8vWhanzYsKJSK52gRv.rtu', '2154584851', 'dgfgthgh', '2019-09-07 21:43:46', '2019-09-07 21:43:46'),
(5, 'Ami', 'Khan', 'amikhan@hotmail.com', '$2y$10$tv2yoIsy21ddPO6Go843p.PXN8nBvEB5mzqKn5Z0n/3Vcgs0rIFSy', '2441139', 'Khan Street', '2019-09-07 22:22:11', '2019-09-07 22:22:11'),
(12, 'Shorna', 'Khan', 'cool2@gmail.com', '$2y$10$WRQyl8mcpWKUW5je7uaZFuYLkr.Q1Y.nrDWBPylwQ.POusLwEfE7O', '45541', 'fdgdfhfh', '2019-09-08 20:23:01', '2019-09-08 20:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_29_131108_create_categories_table', 2),
(4, '2019_08_31_055253_create_brands_table', 3),
(5, '2019_08_31_142353_create_products_table', 4),
(6, '2019_09_08_014509_create_customers_table', 5),
(7, '2019_09_09_023152_create_shippings_table', 6),
(8, '2019_09_09_034803_create_orders_table', 7),
(9, '2019_09_09_034916_create_payments_table', 7),
(10, '2019_09_09_035118_create_order_details_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` double(10,2) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 19600.00, 'Pending', '2019-09-09 10:18:49', '2019-09-09 10:18:49'),
(2, 14, 3, 19600.00, 'Pending', '2019-09-09 10:20:12', '2019-09-09 10:20:12'),
(3, 14, 3, 19600.00, 'Pending', '2019-09-09 10:20:37', '2019-09-09 10:20:37'),
(4, 14, 3, 19600.00, 'Pending', '2019-09-09 10:21:30', '2019-09-09 10:21:30'),
(5, 1, 5, 39200.00, 'Pending', '2019-09-10 20:24:28', '2019-09-10 20:24:28');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 10, 'Bangles', 3800.00, 2, '2019-09-09 10:18:49', '2019-09-09 10:18:49'),
(2, 1, 9, 'Best Watch', 7700.00, 1, '2019-09-09 10:18:49', '2019-09-09 10:18:49'),
(3, 1, 12, 'Bags', 4300.00, 1, '2019-09-09 10:18:50', '2019-09-09 10:18:50'),
(4, 2, 10, 'Bangles', 3800.00, 2, '2019-09-09 10:20:12', '2019-09-09 10:20:12'),
(5, 2, 9, 'Best Watch', 7700.00, 1, '2019-09-09 10:20:12', '2019-09-09 10:20:12'),
(6, 2, 12, 'Bags', 4300.00, 1, '2019-09-09 10:20:13', '2019-09-09 10:20:13'),
(7, 3, 10, 'Bangles', 3800.00, 2, '2019-09-09 10:20:38', '2019-09-09 10:20:38'),
(8, 3, 9, 'Best Watch', 7700.00, 1, '2019-09-09 10:20:38', '2019-09-09 10:20:38'),
(9, 3, 12, 'Bags', 4300.00, 1, '2019-09-09 10:20:38', '2019-09-09 10:20:38'),
(10, 4, 10, 'Bangles', 3800.00, 2, '2019-09-09 10:21:31', '2019-09-09 10:21:31'),
(11, 4, 9, 'Best Watch', 7700.00, 1, '2019-09-09 10:21:31', '2019-09-09 10:21:31'),
(12, 4, 12, 'Bags', 4300.00, 1, '2019-09-09 10:21:31', '2019-09-09 10:21:31'),
(13, 5, 16, 'Kids Dress', 4600.00, 4, '2019-09-10 20:24:29', '2019-09-10 20:24:29'),
(14, 5, 11, 'Frock', 2600.00, 8, '2019-09-10 20:24:29', '2019-09-10 20:24:29');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_type`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cash', 'Pending', '2019-09-09 10:18:49', '2019-09-09 10:18:49'),
(2, 2, 'Cash', 'Pending', '2019-09-09 10:20:12', '2019-09-09 10:20:12'),
(3, 3, 'Cash', 'Pending', '2019-09-09 10:20:37', '2019-09-09 10:20:37'),
(4, 4, 'Cash', 'Pending', '2019-09-09 10:21:30', '2019-09-09 10:21:30'),
(5, 5, 'Cash', 'Pending', '2019-09-10 20:24:29', '2019-09-10 20:24:29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `product_name`, `product_price`, `product_quantity`, `short_description`, `long_description`, `product_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'T-Shirt', 2500.00, 780, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum nibh nibh, eget cursus augue pellentesque vel. Mauris eleifend lobortis nunc, ut rhoncus elit consectetur eget. In nisi nunc, consequat hendrerit lacus a, egestas vulputate augue. Sed purus justo, posuere non ultrices ac, imperdiet sit amet enim. Proin id dolor nec libero rhoncus varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur purus enim, placerat non metus non, placerat auctor enim. Nam laoreet tellus non mollis condimentum. Proin tempor ligula a tellus egestas, eget porta metus consequat. Quisque eget faucibus urna. Donec sit amet quam convallis, auctor odio ut, ultricies nibh. Duis purus dolor, convallis nec nisi vel, maximus tincidunt libero. Morbi varius mollis nunc, in consectetur odio tempus non.</p>', 'product-images/T-Shirt.jpg', 1, '2019-09-02 10:33:39', '2019-10-26 21:25:31'),
(2, 2, 2, 'Stylist Purses', 6800.00, 340, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum nibh nibh, eget cursus augue pellentesque vel. Mauris eleifend lobortis nunc, ut rhoncus elit consectetur eget. In nisi nunc, consequat hendrerit lacus a, egestas vulputate augue. Sed purus justo, posuere non ultrices ac, imperdiet sit amet enim. Proin id dolor nec libero rhoncus varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur purus enim, placerat non metus non, placerat auctor enim. Nam laoreet tellus non mollis condimentum. Proin tempor ligula a tellus egestas, eget porta metus consequat. Quisque eget faucibus urna. Donec sit amet quam convallis, auctor odio ut, ultricies nibh. Duis purus dolor, convallis nec nisi vel, maximus tincidunt libero. Morbi varius mollis nunc, in consectetur odio tempus non.</p>', 'product-images/Stylist Purses.jpg', 1, '2019-09-02 10:41:19', '2019-09-02 10:41:19'),
(3, 3, 3, 'Women\'s Shoes', 3800.00, 400, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum nibh nibh, eget cursus augue pellentesque vel. Mauris eleifend lobortis nunc, ut rhoncus elit consectetur eget. In nisi nunc, consequat hendrerit lacus a, egestas vulputate augue. Sed purus justo, posuere non ultrices ac, imperdiet sit amet enim. Proin id dolor nec libero rhoncus varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur purus enim, placerat non metus non, placerat auctor enim. Nam laoreet tellus non mollis condimentum. Proin tempor ligula a tellus egestas, eget porta metus consequat. Quisque eget faucibus urna. Donec sit amet quam convallis, auctor odio ut, ultricies nibh. Duis purus dolor, convallis nec nisi vel, maximus tincidunt libero. Morbi varius mollis nunc, in consectetur odio tempus non.</p>', 'product-images/Women\'s Shoes.jpg', 1, '2019-09-02 10:42:48', '2019-09-02 10:42:48'),
(4, 4, 4, 'stylist Watch', 10000.00, 150, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum nibh nibh, eget cursus augue pellentesque vel. Mauris eleifend lobortis nunc, ut rhoncus elit consectetur eget. In nisi nunc, consequat hendrerit lacus a, egestas vulputate augue. Sed purus justo, posuere non ultrices ac, imperdiet sit amet enim. Proin id dolor nec libero rhoncus varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur purus enim, placerat non metus non, placerat auctor enim. Nam laoreet tellus non mollis condimentum. Proin tempor ligula a tellus egestas, eget porta metus consequat. Quisque eget faucibus urna. Donec sit amet quam convallis, auctor odio ut, ultricies nibh. Duis purus dolor, convallis nec nisi vel, maximus tincidunt libero. Morbi varius mollis nunc, in consectetur odio tempus non.</p>', 'product-images/stylist Watch.jpg', 1, '2019-09-02 10:44:16', '2019-09-02 10:44:16'),
(5, 5, 1, 'Earring', 1440.00, 100, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum nibh nibh, eget cursus augue pellentesque vel. Mauris eleifend lobortis nunc, ut rhoncus elit consectetur eget. In nisi nunc, consequat hendrerit lacus a, egestas vulputate augue. Sed purus justo, posuere non ultrices ac, imperdiet sit amet enim. Proin id dolor nec libero rhoncus varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur purus enim, placerat non metus non, placerat auctor enim. Nam laoreet tellus non mollis condimentum. Proin tempor ligula a tellus egestas, eget porta metus consequat. Quisque eget faucibus urna. Donec sit amet quam convallis, auctor odio ut, ultricies nibh. Duis purus dolor, convallis nec nisi vel, maximus tincidunt libero. Morbi varius mollis nunc, in consectetur odio tempus non.</p>', 'product-images/Earring.jpg', 1, '2019-09-02 10:46:08', '2019-09-05 21:53:25'),
(6, 1, 5, 'Shari', 9850.00, 410, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', '<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>', 'product-images/Shari.jpg', 1, '2019-09-02 10:47:29', '2019-10-26 21:25:04'),
(7, 2, 4, 'Men\'s Wallets', 5100.00, 60, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum nibh nibh, eget cursus augue pellentesque vel. Mauris eleifend lobortis nunc, ut rhoncus elit consectetur eget. In nisi nunc, consequat hendrerit lacus a, egestas vulputate augue. Sed purus justo, posuere non ultrices ac, imperdiet sit amet enim. Proin id dolor nec libero rhoncus varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur purus enim, placerat non metus non, placerat auctor enim. Nam laoreet tellus non mollis condimentum. Proin tempor ligula a tellus egestas, eget porta metus consequat. Quisque eget faucibus urna. Donec sit amet quam convallis, auctor odio ut, ultricies nibh. Duis purus dolor, convallis nec nisi vel, maximus tincidunt libero. Morbi varius mollis nunc, in consectetur odio tempus non.</p>', 'product-images/Men\'s Wallets.jpg', 1, '2019-09-02 10:49:01', '2019-09-02 10:49:01'),
(8, 3, 2, 'Men\'s Shoes', 4300.00, 180, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum nibh nibh, eget cursus augue pellentesque vel. Mauris eleifend lobortis nunc, ut rhoncus elit consectetur eget. In nisi nunc, consequat hendrerit lacus a, egestas vulputate augue. Sed purus justo, posuere non ultrices ac, imperdiet sit amet enim. Proin id dolor nec libero rhoncus varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur purus enim, placerat non metus non, placerat auctor enim. Nam laoreet tellus non mollis condimentum. Proin tempor ligula a tellus egestas, eget porta metus consequat. Quisque eget faucibus urna. Donec sit amet quam convallis, auctor odio ut, ultricies nibh. Duis purus dolor, convallis nec nisi vel, maximus tincidunt libero. Morbi varius mollis nunc, in consectetur odio tempus non.</p>', 'product-images/Men\'s Shoes.jpg', 1, '2019-09-02 10:50:52', '2019-09-02 10:50:52'),
(9, 4, 3, 'Best Watch', 7700.00, 230, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum nibh nibh, eget cursus augue pellentesque vel. Mauris eleifend lobortis nunc, ut rhoncus elit consectetur eget. In nisi nunc, consequat hendrerit lacus a, egestas vulputate augue. Sed purus justo, posuere non ultrices ac, imperdiet sit amet enim. Proin id dolor nec libero rhoncus varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur purus enim, placerat non metus non, placerat auctor enim. Nam laoreet tellus non mollis condimentum. Proin tempor ligula a tellus egestas, eget porta metus consequat. Quisque eget faucibus urna. Donec sit amet quam convallis, auctor odio ut, ultricies nibh. Duis purus dolor, convallis nec nisi vel, maximus tincidunt libero. Morbi varius mollis nunc, in consectetur odio tempus non.</p>', 'product-images/Best Watch.jpg', 1, '2019-09-02 10:52:14', '2019-09-02 10:52:14'),
(10, 5, 3, 'Bangles', 3800.00, 60, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', '<p>&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum nibh nibh, eget cursus augue pellentesque vel. Mauris eleifend lobortis nunc, ut rhoncus elit consectetur eget. In nisi nunc, consequat hendrerit lacus a, egestas vulputate augue. Sed purus justo, posuere non ultrices ac, imperdiet sit amet enim. Proin id dolor nec libero rhoncus varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur purus enim, placerat non metus non, placerat auctor enim. Nam laoreet tellus non mollis condimentum. Proin tempor ligula a tellus egestas, eget porta metus consequat. Quisque eget faucibus urna. Donec sit amet quam convallis, auctor odio ut, ultricies nibh. Duis purus dolor, convallis nec nisi vel, maximus tincidunt libero. Morbi varius mollis nunc, in consectetur odio tempus non.&lt;/p&gt;</p>', 'product-images/Bangles.jpg', 1, '2019-09-02 20:04:18', '2019-09-02 20:04:18'),
(11, 6, 5, 'Frock', 2600.00, 300, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', '<p>&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum nibh nibh, eget cursus augue pellentesque vel. Mauris eleifend lobortis nunc, ut rhoncus elit consectetur eget. In nisi nunc, consequat hendrerit lacus a, egestas vulputate augue. Sed purus justo, posuere non ultrices ac, imperdiet sit amet enim. Proin id dolor nec libero rhoncus varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur purus enim, placerat non metus non, placerat auctor enim. Nam laoreet tellus non mollis condimentum. Proin tempor ligula a tellus egestas, eget porta metus consequat. Quisque eget faucibus urna. Donec sit amet quam convallis, auctor odio ut, ultricies nibh. Duis purus dolor, convallis nec nisi vel, maximus tincidunt libero. Morbi varius mollis nunc, in consectetur odio tempus non.&lt;/p&gt;</p>', 'product-images/Frock.jpg', 1, '2019-09-02 19:46:26', '2019-09-02 19:46:26'),
(12, 2, 1, 'Bags', 4300.00, 240, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', '<p>&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum nibh nibh, eget cursus augue pellentesque vel. Mauris eleifend lobortis nunc, ut rhoncus elit consectetur eget. In nisi nunc, consequat hendrerit lacus a, egestas vulputate augue. Sed purus justo, posuere non ultrices ac, imperdiet sit amet enim. Proin id dolor nec libero rhoncus varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur purus enim, placerat non metus non, placerat auctor enim. Nam laoreet tellus non mollis condimentum. Proin tempor ligula a tellus egestas, eget porta metus consequat. Quisque eget faucibus urna. Donec sit amet quam convallis, auctor odio ut, ultricies nibh. Duis purus dolor, convallis nec nisi vel, maximus tincidunt libero. Morbi varius mollis nunc, in consectetur odio tempus non.&lt;/p&gt;</p>', 'product-images/Bags.jpg', 1, '2019-09-02 19:47:26', '2019-09-05 21:54:16'),
(13, 3, 4, 'KIds Shoes', 2200.00, 50, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', '<p>&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum nibh nibh, eget cursus augue pellentesque vel. Mauris eleifend lobortis nunc, ut rhoncus elit consectetur eget. In nisi nunc, consequat hendrerit lacus a, egestas vulputate augue. Sed purus justo, posuere non ultrices ac, imperdiet sit amet enim. Proin id dolor nec libero rhoncus varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur purus enim, placerat non metus non, placerat auctor enim. Nam laoreet tellus non mollis condimentum. Proin tempor ligula a tellus egestas, eget porta metus consequat. Quisque eget faucibus urna. Donec sit amet quam convallis, auctor odio ut, ultricies nibh. Duis purus dolor, convallis nec nisi vel, maximus tincidunt libero. Morbi varius mollis nunc, in consectetur odio tempus non.&lt;/p&gt;</p>', 'product-images/KIds Shoes.jpg', 1, '2019-09-02 19:49:05', '2019-09-02 19:49:05'),
(14, 4, 4, 'New Watches', 790.00, 135, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', '<p>&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum nibh nibh, eget cursus augue pellentesque vel. Mauris eleifend lobortis nunc, ut rhoncus elit consectetur eget. In nisi nunc, consequat hendrerit lacus a, egestas vulputate augue. Sed purus justo, posuere non ultrices ac, imperdiet sit amet enim. Proin id dolor nec libero rhoncus varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur purus enim, placerat non metus non, placerat auctor enim. Nam laoreet tellus non mollis condimentum. Proin tempor ligula a tellus egestas, eget porta metus consequat. Quisque eget faucibus urna. Donec sit amet quam convallis, auctor odio ut, ultricies nibh. Duis purus dolor, convallis nec nisi vel, maximus tincidunt libero. Morbi varius mollis nunc, in consectetur odio tempus non.&lt;/p&gt;</p>', 'product-images/New Watches.jpg', 1, '2019-09-02 19:50:43', '2019-09-02 19:50:43'),
(15, 5, 2, 'Bracelet', 4700.00, 140, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', '<p>&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum nibh nibh, eget cursus augue pellentesque vel. Mauris eleifend lobortis nunc, ut rhoncus elit consectetur eget. In nisi nunc, consequat hendrerit lacus a, egestas vulputate augue. Sed purus justo, posuere non ultrices ac, imperdiet sit amet enim. Proin id dolor nec libero rhoncus varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur purus enim, placerat non metus non, placerat auctor enim. Nam laoreet tellus non mollis condimentum. Proin tempor ligula a tellus egestas, eget porta metus consequat. Quisque eget faucibus urna. Donec sit amet quam convallis, auctor odio ut, ultricies nibh. Duis purus dolor, convallis nec nisi vel, maximus tincidunt libero. Morbi varius mollis nunc, in consectetur odio tempus non.&lt;/p&gt;</p>', 'product-images/Bracelet.jpg', 1, '2019-09-02 20:01:39', '2019-09-02 20:01:39'),
(16, 1, 1, 'Kids Dress', 4600.00, 400, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.', '<p>&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum nibh nibh, eget cursus augue pellentesque vel. Mauris eleifend lobortis nunc, ut rhoncus elit consectetur eget. In nisi nunc, consequat hendrerit lacus a, egestas vulputate augue. Sed purus justo, posuere non ultrices ac, imperdiet sit amet enim. Proin id dolor nec libero rhoncus varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur purus enim, placerat non metus non, placerat auctor enim. Nam laoreet tellus non mollis condimentum. Proin tempor ligula a tellus egestas, eget porta metus consequat. Quisque eget faucibus urna. Donec sit amet quam convallis, auctor odio ut, ultricies nibh. Duis purus dolor, convallis nec nisi vel, maximus tincidunt libero. Morbi varius mollis nunc, in consectetur odio tempus non.&lt;/p&gt;</p>', 'product-images/Kids Dress.jpg', 1, '2019-09-03 08:47:56', '2019-09-03 08:47:56');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `full_name`, `email_address`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Shorna Khan', 'cool2@gmail.com', '45541', 'fdgdfhfh', '2019-09-08 20:51:49', '2019-09-08 20:51:49'),
(2, 'MD. Cool', 'cool@gmail.com', '1426598487', 'gjhykujlkukgs', '2019-09-09 03:47:18', '2019-09-09 03:47:18'),
(3, 'fbghbgnhnm fbgnhgmnh', 'dgvffbfgb@hotmail.com', '5416848364521', 'drgbtfhnygjnuh', '2019-09-09 10:18:44', '2019-09-09 10:18:44'),
(4, 'MD. Cool', 'cool@gmail.com', '0123456789', 'Cool Street', '2019-09-09 21:17:35', '2019-09-09 21:17:35'),
(5, 'MD. Cool', 'cool@gmail.com', '0123456789', 'Cool Street', '2019-09-10 20:24:23', '2019-09-10 20:24:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MD. cool', 'cool@gmail.com', NULL, '$2y$10$2GKgQDSBC9g02.9WZEB6q.mhLXyQJylDfLUsbQYHjtrgxGyzDmMvO', NULL, '2019-08-28 05:37:06', '2019-08-28 05:37:06'),
(2, 'admin', 'admin@project.com', NULL, '$2y$10$mxl/Qwdz72SzfsSt0vzwCeEbfNRl1yqUBz9SeGENgxulE6xJp4kM2', NULL, '2019-08-28 21:44:22', '2019-08-28 21:44:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
