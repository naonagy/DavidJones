-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table proiect.carts: ~0 rows (approximately)
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;
/*!40000 ALTER TABLE `carts` ENABLE KEYS */;

-- Dumping data for table proiect.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping data for table proiect.favorites: ~0 rows (approximately)
/*!40000 ALTER TABLE `favorites` DISABLE KEYS */;
/*!40000 ALTER TABLE `favorites` ENABLE KEYS */;

-- Dumping data for table proiect.migrations: ~11 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_10_14_182510_create_customers_table', 1),
	(6, '2022_10_14_185831_create_products_table', 1),
	(7, '2022_10_14_192825_create_orders_table', 1),
	(8, '2022_10_14_194001_create_orderlines_table', 1),
	(9, '2022_10_16_154710_create_favorites_table', 1),
	(10, '2022_10_17_172830_create_carts_table', 1),
	(11, '2022_10_19_201155_add_is_admin_to_users_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table proiect.orderlines: ~72 rows (approximately)
/*!40000 ALTER TABLE `orderlines` DISABLE KEYS */;
INSERT INTO `orderlines` (`orderline_id`, `order_id`, `product_id`, `quantity`, `price_each`) VALUES
	(1, 1, 29, 1, 139.00),
	(13, 1, 2, 1, 59.00),
	(14, 1, 72, 1, 179.00),
	(15, 1, 29, 3, 139.00),
	(16, 1, 2, 1, 59.00),
	(17, 1, 72, 1, 179.00),
	(18, 1, 29, 3, 139.00),
	(19, 1, 73, 2, 179.00),
	(20, 1, 2, 1, 59.00),
	(21, 1, 72, 1, 179.00),
	(22, 1, 29, 3, 139.00),
	(23, 1, 73, 2, 179.00),
	(24, 1, 29, 1, 139.00),
	(34, 25, 54, 1, 159.00),
	(35, 25, 2, 1, 59.00),
	(36, 25, 4, 1, 69.00),
	(55, 32, 54, 1, 159.00),
	(56, 32, 2, 1, 59.00),
	(57, 32, 4, 1, 69.00),
	(58, 33, 54, 1, 159.00),
	(59, 33, 2, 1, 59.00),
	(60, 33, 4, 1, 69.00),
	(61, 34, 54, 1, 159.00),
	(62, 34, 2, 1, 59.00),
	(63, 34, 4, 1, 69.00),
	(64, 35, 54, 1, 159.00),
	(65, 35, 2, 1, 59.00),
	(66, 35, 4, 1, 69.00),
	(67, 36, 54, 1, 159.00),
	(68, 36, 2, 1, 59.00),
	(69, 36, 4, 1, 69.00),
	(70, 37, 54, 1, 159.00),
	(71, 37, 2, 1, 59.00),
	(72, 37, 4, 1, 69.00),
	(73, 38, 54, 1, 159.00),
	(74, 38, 2, 1, 59.00),
	(75, 38, 4, 1, 69.00),
	(76, 39, 54, 1, 159.00),
	(77, 39, 2, 1, 59.00),
	(78, 39, 4, 1, 69.00),
	(82, 41, 54, 1, 159.00),
	(83, 41, 2, 1, 59.00),
	(84, 41, 4, 1, 69.00),
	(85, 42, 54, 1, 159.00),
	(86, 42, 2, 1, 59.00),
	(87, 42, 4, 1, 69.00),
	(97, 46, 54, 1, 159.00),
	(98, 46, 2, 1, 59.00),
	(99, 46, 4, 1, 69.00),
	(100, 46, 54, 1, 159.00),
	(101, 46, 2, 1, 59.00),
	(102, 46, 4, 1, 69.00),
	(122, 55, 2, 1, 59.00),
	(123, 55, 72, 1, 179.00),
	(124, 55, 29, 3, 139.00),
	(125, 55, 73, 2, 179.00),
	(126, 55, 29, 1, 139.00),
	(127, 55, 84, 1, 149.00),
	(128, 56, 4, 1, 69.00),
	(129, 57, 72, 3, 179.00),
	(130, 57, 10, 1, 49.00),
	(131, 58, 9, 2, 55.00),
	(132, 58, 2, 1, 59.00),
	(133, 59, 29, 1, 139.00),
	(134, 59, 29, 2, 139.00),
	(135, 59, 41, 3, 159.00),
	(136, 60, 46, 2, 199.00),
	(137, 60, 3, 1, 55.00),
	(138, 61, 23, 1, 169.00),
	(139, 61, 58, 1, 189.00),
	(140, 61, 69, 2, 199.00),
	(141, 62, 54, 1, 159.00),
	(142, 62, 23, 1, 169.00);
/*!40000 ALTER TABLE `orderlines` ENABLE KEYS */;

-- Dumping data for table proiect.orders: ~21 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`order_id`, `customer_id`, `status`, `total_price`, `country`, `city`, `address`, `created_at`, `updated_at`) VALUES
	(1, 2, 'Comanda noua', 159.00, 'Romania', 'Baia Mare', 'Str. Mihai Eminescu, nr. 2', '2022-10-22 10:33:44', NULL),
	(25, 1, 'Comanda noua', 287.00, 'România', 'Baia Sprie', 'Str. Mihai Eminescu, nr. 53', '2022-10-22 16:20:08', '2022-10-22 16:20:08'),
	(32, 1, 'Comanda noua', 287.00, 'România', 'Baia Sprie', 'Str. Mihai Eminescu, nr. 53', '2022-10-22 22:05:36', '2022-10-22 22:05:36'),
	(33, 1, 'Comanda noua', 287.00, 'România', 'Baia Sprie', 'Str. Mihai Eminescu, nr. 53', '2022-10-22 22:06:46', '2022-10-22 22:06:46'),
	(34, 1, 'Comanda noua', 287.00, 'România', 'Baia Sprie', 'Str. Mihai Eminescu, nr. 53', '2022-10-22 22:08:36', '2022-10-22 22:08:36'),
	(35, 1, 'Comanda noua', 287.00, 'România', 'Baia Sprie', 'Str. Mihai Eminescu, nr. 53', '2022-10-22 22:10:23', '2022-10-22 22:10:23'),
	(36, 1, 'Comanda noua', 287.00, 'România', 'Baia Sprie', 'Str. Mihai Eminescu, nr. 53', '2022-10-22 22:11:04', '2022-10-22 22:11:04'),
	(37, 1, 'Comanda noua', 287.00, 'România', 'Baia Sprie', 'Str. Mihai Eminescu, nr. 53', '2022-10-22 22:12:50', '2022-10-22 22:12:50'),
	(38, 1, 'Comanda noua', 287.00, 'România', 'Baia Sprie', 'Str. Mihai Eminescu, nr. 53', '2022-10-22 22:13:36', '2022-10-22 22:13:36'),
	(39, 1, 'Comanda noua', 287.00, 'România', 'Baia Sprie', 'Str. Mihai Eminescu, nr. 53', '2022-10-22 22:14:28', '2022-10-22 22:14:28'),
	(41, 1, 'Comanda noua', 287.00, 'România', 'Baia Sprie', 'Str. Mihai Eminescu, nr. 53', '2022-10-22 22:17:42', '2022-10-22 22:17:42'),
	(42, 1, 'Comanda noua', 287.00, 'România', 'Baia Sprie', 'Str. Mihai Eminescu, nr. 53', '2022-10-22 22:18:31', '2022-10-22 22:18:31'),
	(46, 1, 'Comanda noua', 287.00, 'România', 'Baia Sprie', 'Str. Mihai Eminescu, nr. 53', '2022-10-22 22:22:45', '2022-10-22 22:22:45'),
	(55, 2, 'Comanda noua', 1301.00, 'România', 'Baia Sprie', 'Str. Mihai Eminescu, nr. 53', '2022-10-22 22:33:33', '2022-10-22 22:33:33'),
	(56, 2, 'Comanda noua', 69.00, 'România', 'Baia Sprie', 'Str. Mihai Eminescu, nr. 53', '2022-10-22 22:38:36', '2022-10-22 22:38:36'),
	(57, 2, 'Comanda noua', 604.00, 'România', 'Baia Mare', 'Str. Mihai Eminescu, nr. 53', '2022-10-23 20:44:19', '2022-10-23 20:44:19'),
	(58, 1, 'Comanda noua', 187.00, 'România', 'Baia Sprie', 'Str. Mihai Eminescu, nr. 53', '2022-10-23 22:24:39', '2022-10-23 22:24:39'),
	(59, 1, 'Comanda noua', 912.00, 'România', 'Baia Sprie', 'Str. Mihai Eminescu, nr. 53', '2022-10-24 19:31:31', '2022-10-24 19:31:31'),
	(60, 1, 'Comanda noua', 471.00, 'România', 'Baia Sprie', 'Str. Mihai Eminescu, nr. 53', '2022-10-24 19:37:46', '2022-10-24 19:37:46'),
	(61, 2, 'Comanda noua', 774.00, 'România', 'Baia Sprie', 'Str. Mihai Eminescu, nr. 53', '2022-10-24 19:43:04', '2022-10-24 19:43:04'),
	(62, 2, 'Comanda noua', 346.00, 'România', 'Baia Sprie', 'Str. Mihai Eminescu, nr. 53', '2022-10-24 19:58:25', '2022-10-24 19:58:25');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping data for table proiect.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping data for table proiect.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping data for table proiect.products: ~79 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `product_name`, `description`, `product_category`, `quantity`, `product_image`, `product_price`, `product_color`, `created_at`, `updated_at`) VALUES
	(2, 'Portofel Sabina', 'Portofel argintiu casual', 'Portofele', 1, '1666213504.jpg', 59.00, 'Argintiu', '2022-10-19 21:05:04', '2022-10-19 21:05:04'),
	(3, 'Portofel Larra', 'Portofel casual bej', 'Portofele', 5, '1666213724.jpg', 55.00, 'Bej', '2022-10-19 21:08:44', '2022-10-19 21:08:44'),
	(4, 'Portofel Larisa', 'Portofel casual bej', 'Portofele', 9, '1666213752.jpg', 69.00, 'Caramiziu', '2022-10-19 21:09:12', '2022-10-19 21:09:12'),
	(5, 'Portofel Larisa', 'Portofel cu imprimeu reptila', 'Portofele', 12, '1666213810.jpg', 49.00, 'Cognac', '2022-10-19 21:10:10', '2022-10-19 21:10:10'),
	(6, 'Portofel Ariana', 'Portofel casual cu imprimeu logo', 'Portofele', 5, '1666213857.jpg', 55.00, 'Bej', '2022-10-19 21:10:57', '2022-10-19 21:10:57'),
	(7, 'Portofel Lori', 'Portofel casual kaki', 'Portofele', 4, '1666213912.jpg', 59.00, 'Kaki', '2022-10-19 21:11:52', '2022-10-19 21:11:52'),
	(8, 'Portofel Lori', 'Portofel casual roz', 'Portofele', 7, '1666213954.jpg', 55.00, 'Roz', '2022-10-19 21:12:34', '2022-10-19 21:12:34'),
	(9, 'Portofel Sabina', 'Portofel casual fuchsia', 'Portofele', 3, '1666213989.jpg', 55.00, 'Fuchsia', '2022-10-19 21:13:09', '2022-10-19 21:13:09'),
	(10, 'Portofel Linda', 'Portofel casual galben', 'Portofele', 1, '1666214017.jpg', 49.00, 'Galben', '2022-10-19 21:13:37', '2022-10-19 21:13:37'),
	(11, 'Portofel Gianina', 'Portofel casual gri metalizat', 'Portofele', 15, '1666214055.jpg', 39.00, 'Gri metalizat', '2022-10-19 21:14:15', '2022-10-19 21:14:15'),
	(12, 'Portofel Larisa', 'Portofel casual kaki', 'Portofele', 0, '1666214090.jpg', 55.00, 'Kaki', '2022-10-19 21:14:50', '2022-10-19 21:14:50'),
	(13, 'Portofel Helga', 'Portofel casual cu imprimeu logo', 'Portofele', 2, '1666214129.jpg', 49.00, 'Maro', '2022-10-19 21:15:29', '2022-10-19 21:15:29'),
	(14, 'Portofel Larisa', 'Portofel negru cu imprimeu reptila', 'Portofele', 6, '1666214172.jpg', 59.00, 'Negru', '2022-10-19 21:16:12', '2022-10-19 21:16:12'),
	(15, 'Portofel Sabina', 'Portofel negru cu imprimeu reptila', 'Portofele', 3, '1666214225.jpg', 49.00, 'Negru', '2022-10-19 21:17:05', '2022-10-19 21:17:05'),
	(16, 'Portofel Linda', 'Portofel negru casual', 'Portofele', 8, '1666214261.jpg', 49.00, 'Negru', '2022-10-19 21:17:41', '2022-10-19 21:17:41'),
	(17, 'Portofel Larra', 'Portofel rosu cu imprimeu', 'Portofele', 0, '1666214301.jpg', 69.00, 'Rosu', '2022-10-19 21:18:21', '2022-10-19 21:18:21'),
	(18, 'Portofel Larisa', 'Portofel rosu inchis cu imprimeu', 'Portofele', 4, '1666214347.jpg', 65.00, 'Rosu', '2022-10-19 21:19:07', '2022-10-19 21:19:07'),
	(19, 'Portofel Gianina', 'Portofel casual roz plamaniu', 'Portofele', 10, '1666214386.jpg', 65.00, 'Roz plamaniu', '2022-10-19 21:19:46', '2022-10-19 21:19:46'),
	(20, 'Portofel Sara', 'Portofel casual galben mustar', 'Portofele', 3, '1666214422.jpg', 55.00, 'Galben', '2022-10-19 21:20:22', '2022-10-19 21:20:22'),
	(21, 'Portofel Larisa', 'Portofel casual cu imprimeu reptila', 'Portofele', 13, '1666214466.jpg', 59.00, 'Verde inchis', '2022-10-19 21:21:06', '2022-10-19 21:21:06'),
	(22, 'Geanta Melania', 'Geanta medie bleumarin', 'Genti', 3, '1666214543.jpg', 159.00, 'Bleumarin', '2022-10-19 21:22:23', '2022-10-19 21:22:23'),
	(23, 'Geanta Nola', 'Geanta medie cu imprimeu', 'Genti', 1, '1666214578.jpg', 169.00, 'Bleumarin', '2022-10-19 21:22:58', '2022-10-19 21:22:58'),
	(24, 'Geanta Glory', 'Geanta medie bej inchis', 'Genti', 4, '1666214611.jpg', 139.00, 'Bej inchis', '2022-10-19 21:23:31', '2022-10-19 21:23:31'),
	(25, 'Geanta Ana', 'Geanta mare bordo', 'Genti', 8, '1666214659.jpg', 145.00, 'Bordo', '2022-10-19 21:24:19', '2022-10-19 21:24:19'),
	(26, 'Geanta Lea', 'Geanta mare office/casual', 'Genti', 6, '1666214701.jpg', 159.00, 'Caramiziu', '2022-10-19 21:25:01', '2022-10-19 21:25:01'),
	(27, 'Geanta Debbie', 'Geanta mica cu imprimeu', 'Genti', 0, '1666214728.jpg', 139.00, 'Corai', '2022-10-19 21:25:28', '2022-10-19 21:25:28'),
	(28, 'Geanta Clara', 'Geanta mare crem', 'Genti', 8, '1666214762.jpg', 159.00, 'Crem', '2022-10-19 21:26:02', '2022-10-19 21:26:02'),
	(29, 'Geanta Melania', 'Geanta medie in doua culori', 'Genti', 3, '1666214796.jpg', 139.00, 'Bordo/negru', '2022-10-19 21:26:36', '2022-10-19 21:26:36'),
	(30, 'Geanta aAntonia', 'Geanta mica casual', 'Genti', 0, '1666214871.jpg', 149.00, 'Maro', '2022-10-19 21:27:51', '2022-10-19 21:27:51'),
	(31, 'Geanta Melania', 'Geanta medie in doua culori', 'Genti', 7, '1666214910.jpg', 159.00, 'Maro', '2022-10-19 21:28:30', '2022-10-19 21:28:30'),
	(32, 'Geanta Melania', 'Geanta medie in doua culori', 'Genti', 3, '1666214935.jpg', 159.00, 'Roz/Negru', '2022-10-19 21:28:55', '2022-10-19 21:28:55'),
	(33, 'Geanta Antonia', 'Geanta mica casual', 'Genti', 6, '1666214973.jpg', 169.00, 'Verde inchis', '2022-10-19 21:29:33', '2022-10-19 21:29:33'),
	(34, 'Geanta Vera', 'Geanta medie in trei culori', 'Genti', 2, '1666215006.jpg', 169.00, 'Caramiziu/Crem', '2022-10-19 21:30:06', '2022-10-19 21:30:06'),
	(35, 'Geanta Mia', 'Geanta mica casual', 'Genti', 0, '1666215052.jpg', 129.00, 'Rosu', '2022-10-19 21:30:52', '2022-10-19 21:30:52'),
	(36, 'Geanta Elissa', 'Geanta medie in trei culori', 'Genti', 5, '1666215099.jpg', 159.00, 'Maro', '2022-10-19 21:31:39', '2022-10-19 21:31:39'),
	(37, 'Geanta Geanina', 'Geanta medie oficce/casual', 'Genti', 6, '1666215135.jpg', 169.00, 'Kaki', '2022-10-19 21:32:15', '2022-10-19 21:32:15'),
	(38, 'Rucsac PC', 'Rucsac PC unisex', 'Rucsacuri', 9, '1666215179.jpg', 169.00, 'Negru', '2022-10-19 21:32:59', '2022-10-19 21:32:59'),
	(39, 'Geanta Nola', 'Geanta medie cu imprimeu', 'Genti', 4, '1666215223.jpg', 179.00, 'Maro', '2022-10-19 21:33:43', '2022-10-19 21:33:43'),
	(40, 'Geanta Roxi', 'Geanta mica office/elegant', 'Genti', 9, '1666215287.jpg', 149.00, 'Caramiziu', '2022-10-19 21:34:47', '2022-10-19 21:34:47'),
	(41, 'Geanta Roxi', 'Geanta mica office/elegant', 'Genti', 3, '1666215321.jpg', 159.00, 'Negru', '2022-10-19 21:35:21', '2022-10-19 21:35:21'),
	(42, 'Geanta Nola', 'Geanta medie neagra', 'Genti', 6, '1666215361.jpg', 159.00, 'Negru', '2022-10-19 21:36:01', '2022-10-19 21:36:01'),
	(43, 'Geanta Dalia', 'Geanta mica cu maner', 'Genti', 2, '1666215409.jpg', 179.00, 'Negru', '2022-10-19 21:36:49', '2022-10-19 21:36:49'),
	(44, 'Geanta Glory', 'Geanta medie casual', 'Genti', 5, '1666215438.jpg', 159.00, 'Negru', '2022-10-19 21:37:18', '2022-10-19 21:37:18'),
	(45, 'Geanta Flowers', 'Geanta medie cu flori 3D', 'Genti', 7, '1666215490.jpg', 149.00, 'Portocaliu', '2022-10-19 21:38:10', '2022-10-19 21:38:10'),
	(46, 'Geanta Sofia', 'Geanta rosie cu imprimeu reptila', 'Genti', 4, '1666215533.jpg', 199.00, 'Rosu', '2022-10-19 21:38:53', '2022-10-19 21:38:53'),
	(47, 'Geanta Heidi', 'Geanta mare Heidi', 'Genti', 9, '1666215567.jpg', 189.00, 'Rosu', '2022-10-19 21:39:27', '2022-10-19 21:39:27'),
	(48, 'Geanta Nola', 'Geanta medie office/eleganta', 'Genti', 3, '1666215607.jpg', 179.00, 'Rosu', '2022-10-19 21:40:07', '2022-10-19 21:40:14'),
	(49, 'Geanta Andi', 'Geanta mare roz', 'Genti', 0, '1666215654.jpg', 169.00, 'Roz', '2022-10-19 21:40:54', '2022-10-19 21:40:54'),
	(50, 'Geanta Alissa', 'Geanta medie office/elegant', 'Genti', 1, '1666215695.jpg', 159.00, 'Roz', '2022-10-19 21:41:35', '2022-10-19 21:41:35'),
	(51, 'Geanta Glory', 'Geanta medie office/elegant', 'Genti', 3, '1666215726.jpg', 139.00, 'Roz plamaniu', '2022-10-19 21:42:06', '2022-10-19 21:42:06'),
	(52, 'Geanta Nola', 'Geanta medie office/elegant', 'Genti', 4, '1666215760.jpg', 169.00, 'Verde inchis', '2022-10-19 21:42:40', '2022-10-19 21:42:40'),
	(53, 'Geanta Petra', 'Geanta mare perforata', 'Genti', 1, '1666215790.jpg', 169.00, 'Mov pal', '2022-10-19 21:43:10', '2022-10-19 21:43:10'),
	(54, 'Rucsac Larra', 'Rucsac mediu casual', 'Rucsacuri', 2, '1666215840.jpg', 159.00, 'Albastru', '2022-10-19 21:44:00', '2022-10-19 21:44:00'),
	(55, 'Rucsac Andreea', 'Rucsac bej mediu', 'Rucsacuri', 8, '1666292509.jpg', 149.00, 'Bej', '2022-10-20 19:01:49', '2022-10-20 19:01:49'),
	(56, 'Rucsac Dana', 'Rucsac cognac mediu', 'Rucsacuri', 5, '1666292556.jpg', 169.00, 'Cognac', '2022-10-20 19:02:36', '2022-10-20 19:02:36'),
	(57, 'Rucsac Ronnie', 'Rucsac mediu cognac', 'Rucsacuri', 10, '1666293051.jpg', 189.00, 'Cognac', '2022-10-20 19:10:51', '2022-10-20 19:10:51'),
	(58, 'Rucsac Olga', 'Rucsac crem casual', 'Rucsacuri', 1, '1666294317.jpg', 189.00, 'Crem', '2022-10-20 19:31:57', '2022-10-20 19:31:57'),
	(69, 'Rucsac Nicole', 'Rucsac mediu caramiziu', 'Rucsacuri', 4, '1666297907.jpg', 199.00, 'Caramiziu', '2022-10-20 20:31:47', '2022-10-20 20:31:47'),
	(72, 'Rucsac Debra', 'Rucsac mare kaki', 'Rucsacuri', 7, '1666297959.jpg', 179.00, 'Kaki', '2022-10-20 20:32:39', '2022-10-20 20:32:39'),
	(73, 'Rucsac Nicole', 'Rucsac mediu negru', 'Rucsacuri', 6, '1666298008.jpg', 179.00, 'Negru', '2022-10-20 20:33:29', '2022-10-20 20:33:29'),
	(74, 'Rucsac Anda', 'Rucsac bleumarin mediu', 'Rucsacuri', 8, '1666298054.jpg', 189.00, 'Bleumarin', '2022-10-20 20:34:14', '2022-10-20 20:34:14'),
	(75, 'Rucsac Magda', 'Rucsac mare caramiziu', 'Rucsacuri', 9, '1666298135.jpg', 159.00, 'Caramiziu', '2022-10-20 20:35:35', '2022-10-20 20:35:35'),
	(76, 'Rucsac Daniela', 'Rucsac mediu kaki', 'Rucsacuri', 1, '1666299247.jpg', 169.00, 'Kaki', '2022-10-20 20:54:07', '2022-10-20 20:54:07'),
	(77, 'Rucsac Larra', 'Rucsac mediu verde inchis', 'Rucsacuri', 5, '1666299321.jpg', 179.00, 'Verde inchis', '2022-10-20 20:55:21', '2022-10-20 21:05:57'),
	(78, 'Rucsac Amelia', 'Rucsac mic cu imprimeu', 'Rucsacuri', 7, '1666299852.jpg', 179.00, 'Maro', '2022-10-20 21:04:12', '2022-10-20 21:04:12'),
	(79, 'Rucsac Eni', 'Rucsac mediu alb', 'Rucsacuri', 3, '1666299928.jpg', 179.00, 'Alb', '2022-10-20 21:05:28', '2022-10-20 21:05:28'),
	(80, 'Rucsac Heidi', 'Rucsac mediu negru', 'Rucsacuri', 0, '1666300062.jpg', 159.00, 'Negru', '2022-10-20 21:07:42', '2022-10-20 21:07:42'),
	(81, 'Rucsac Naomi', 'Rucsac mare rosu', 'Rucsacuri', 7, '1666300106.jpg', 179.00, 'Rosu', '2022-10-20 21:08:26', '2022-10-20 21:08:26'),
	(82, 'Rucsac Maria', 'Rucsac mediu roz pal', 'Rucsacuri', 2, '1666300178.jpg', 199.00, 'Roz', '2022-10-20 21:09:38', '2022-10-20 21:09:38'),
	(83, 'Rucsac Carina', 'Rucsac casual verde inchis', 'Rucsacuri', 5, '1666300223.jpg', 159.00, 'Verde inchis', '2022-10-20 21:10:23', '2022-10-20 21:10:23'),
	(84, 'Rucsac Corina', 'Rucsac mare visiniu', 'Rucsacuri', 9, '1666300273.jpg', 149.00, 'Visiniu', '2022-10-20 21:11:13', '2022-10-20 21:11:13'),
	(85, 'Rucsac Andreea', 'Rucsac mic casual', 'Rucsacuri', 3, '1666300316.jpg', 159.00, 'Negru', '2022-10-20 21:11:56', '2022-10-20 21:11:56'),
	(86, 'Rucsac Andreea', 'Rucsac mic casual', 'Rucsacuri', 8, '1666300371.jpg', 210.00, 'Verde inchis', '2022-10-20 21:12:51', '2022-10-20 21:12:51'),
	(87, 'Rucsac Hannah', 'Rucsac mic casual', 'Rucsacuri', 4, '1666300408.jpg', 179.00, 'Rosu/Bordo', '2022-10-20 21:13:28', '2022-10-20 21:13:28'),
	(88, 'Rucsac Amira', 'Rucsac mare rosu', 'Rucsacuri', 4, '1666300442.jpg', 199.00, 'Rosu', '2022-10-20 21:14:02', '2022-10-20 21:14:02'),
	(89, 'Rucsac Iulia', 'Rucsac mare rosu', 'Rucsacuri', 6, '1666300486.jpg', 169.00, 'Rosu', '2022-10-20 21:14:46', '2022-10-20 21:14:46'),
	(90, 'Rucsac Ema', 'Rucsac mare rosu', 'Rucsacuri', 11, '1666300517.jpg', 139.00, 'Rosu', '2022-10-20 21:15:17', '2022-10-20 21:15:17'),
	(91, 'Rucsac Thalia', 'Rucsac mare rosu', 'Rucsacuri', 9, '1666300545.jpg', 199.00, 'Rosu', '2022-10-20 21:15:46', '2022-10-20 21:15:46'),
	(92, 'Rucsac Alexandra', 'Rucsac mediu roz somon', 'Rucsacuri', 2, '1666300595.jpg', 169.00, 'Roz somon', '2022-10-20 21:16:35', '2022-10-20 21:16:35');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping data for table proiect.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
	(1, 'Admin', 0, 'admin@example.com', NULL, '$2y$10$oMxiU3TP1sTXeEWPR//3VeSKpKarWrzzXauFOaEkN8Rz0ZmRAzmSy', NULL, '2022-10-19 20:32:10', '2022-10-19 20:32:10', 1),
	(2, 'Naomi Nagy', 722590626, 'naomi.nagy01@gmail.com', NULL, '$2y$10$cIZQnpZXTav6c7PKWGou4e15aDnMJtv40KjJNqt837O/WjCA/o5qm', NULL, '2022-10-21 11:15:46', '2022-10-21 11:15:46', 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
