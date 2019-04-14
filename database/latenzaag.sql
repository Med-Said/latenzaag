-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 10:49 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latenzaag`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categorie` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `marque` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commandes_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `categorie`, `nom`, `prix`, `marque`, `commandes_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Galaxy Paint', 40, 'Galaxy', 1, NULL, NULL),
(2, NULL, 'SAMSUNG GALAXY NOTE 9', 800, 'Samsung', 1, NULL, NULL),
(3, NULL, 'KOENIGSEGG CCXR TREVITA', 12113390.04, 'hyundai', 2, NULL, NULL),
(4, NULL, 'BUGATTI VEYRON BY MANSORY VIVERE', 9025042.53, 'Bugatti Veyron', 3, NULL, NULL),
(5, NULL, 'Creative', 65, 'Luft Und Liebe', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `articles_stocks`
--

CREATE TABLE `articles_stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categorie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles_stocks`
--

INSERT INTO `articles_stocks` (`id`, `categorie`, `nom`, `marque`, `prix`, `description`, `img`, `created_at`, `updated_at`) VALUES
(1, 'transport', 'BUGATTI\'S LA VOITURE NOIRE', 'Volkswagen', 57538602.7, 'tres rapide ...', '1.jpg', '2019-04-11 21:27:06', '2019-04-11 21:27:06'),
(2, 'transport', 'KOENIGSEGG CCXR TREVITA', 'hyundai', 12113390.04, 'Costing more than an apartment in JBR', '2.jpg', '2019-04-11 21:30:56', '2019-04-11 21:30:56'),
(3, 'transport', 'LAMBORGHINI VENENO ROADSTER', 'Lamborghini', 9085042.53, 'Lamborghini Veneno Roadster is characterized by the 6.5lt  V12 engine.', '3.jpg', '2019-04-11 21:34:58', '2019-04-11 21:34:58'),
(4, 'transport', 'LYKAN HYPERSPORT', 'W Motors', 9085041.53, 'The Lykan HyperSport is also known as the first Arab sports car.', '4.jpg', '2019-04-11 21:37:30', '2019-04-11 21:37:30'),
(5, 'transport', 'BUGATTI VEYRON BY MANSORY VIVERE', 'Bugatti Veyron', 9025042.53, 'The mighty Bugatti Veyron by Mansory Vivere is one of the fastest and the most expensive cars in the list', '5.png', '2019-04-11 21:44:20', '2019-04-11 21:44:20'),
(6, 'transport', 'ASTON MARTIN VALKRYIE', 'Valkyrie', 9015042.53, 'Valkyrie is Aston Martin\'s first hypercar and is undoubtedly the best.', '6.jpg', '2019-04-11 21:47:44', '2019-04-11 21:47:44'),
(7, 'transport', 'FERRARI PININFARINA SERGIO', 'FERRARI', 8015042.53, 'Ferrari Pininfarina Sergio is one of the most highly coveted vehicles in the world.', '7.jpg', '2019-04-11 21:49:21', '2019-04-11 21:49:21'),
(8, 'transport', 'KAWASAKI Z900', 'kawasak', 34826, 'Although inspired by the legendary motorcycle which had defined the term “Superbike” back in the ’70s.', '8.jpg', '2019-04-11 21:56:30', '2019-04-11 21:56:30'),
(9, 'transport', 'TRIUMPH THRUXTON R', 'triumph', 7570.87, 'Over the last many years, the Triumph Thruxton has been giving us the unadulterated essence of motorcycling with its simplistic café racer stance and smooth power delivery.', '9.jpg', '2019-04-11 21:58:07', '2019-04-11 21:58:07'),
(10, 'transport', 'BMW R NINET RACER', 'bmw', 41018.97, 'Released first in 2016.', '10.jpg', '2019-04-11 22:00:30', '2019-04-11 22:00:30'),
(11, 'transport', 'ROYAL ENFIELD CONTINENTAL GT 650', 'royal enfield', 22712.61, 'The Continental GT 650 is Royal Enfield‘s way of making the most powerful and the lightest modern day cafe racer which blends retro style with modern appeal perfectly.', '11.jpg', '2019-04-11 22:03:35', '2019-04-11 22:03:35'),
(12, 'transport', 'YAMAHA XSR900 ABARTH', 'yamaha', 38917.29, 'The child of the Japanese Blue team and the Italian powerhouse Abarth looks absolutely stunning.', '12.jpg', '2019-04-11 22:05:09', '2019-04-11 22:05:09'),
(13, 'vêtement', 'Galaxy Paint', 'Galaxy', 40, 'description générale à des fins de test', '13.jpg', '2019-04-11 22:19:14', '2019-04-11 22:19:14'),
(14, 'vêtement', 'Striped', 'Striped', 35, 'description générale à des fins de test', '14.jpg', '2019-04-11 22:20:31', '2019-04-11 22:20:31'),
(15, 'vêtement', 'Painter', 'Painter', 70, 'description générale à des fins de test', '15.jpg', '2019-04-11 22:21:35', '2019-04-11 22:21:35'),
(16, 'vêtement', 'Creative', 'Luft Und Liebe', 65, 'description générale à des fins de test', '16.jpg', '2019-04-11 22:22:27', '2019-04-11 22:22:27'),
(17, 'vêtement', 'Ghost', 'Ghost', 50, 'description générale à des fins de test', '17.jpg', '2019-04-11 22:23:35', '2019-04-11 22:23:35'),
(18, 'vêtement', 'HOEREV', 'hoerev', 70, 'description générale à des fins de test', '18.jpg', '2019-04-11 22:29:25', '2019-04-11 22:29:25'),
(19, 'vêtement', 'Springfield Chino Lino Slim Frq', 'Springfield', 80, 'description générale à des fins de test', '19.jpg', '2019-04-11 22:30:24', '2019-04-11 22:30:24'),
(20, 'vêtement', 'US Type BDU Ranger', 'BDU', 77, 'description générale à des fins de test', '20.jpg', '2019-04-11 22:31:33', '2019-04-11 22:31:33'),
(21, 'vêtement', 'INDICODE Ives', 'Ives', 107, 'description générale à des fins de test', '21.jpg', '2019-04-11 22:32:13', '2019-04-11 22:32:13'),
(22, 'vêtement', 'INDICODE Cargo', 'Cargo', 77, 'description générale à des fins de test', '22.jpg', '2019-04-11 22:33:12', '2019-04-11 22:33:12'),
(23, 'vêtement', 'slogan sweatshirt', 'Warehouse', 30, 'description générale à des fins de test', '23.jpg', '2019-04-11 22:37:26', '2019-04-11 22:37:26'),
(24, 'vêtement', 'Pimkie Embellished Collar', 'Pimkie', 45, 'description générale à des fins de test', '24.jpg', '2019-04-11 22:38:42', '2019-04-11 22:38:42'),
(25, 'vêtement', 'Soul valerie rib', 'Brave', 54, 'description générale à des fins de test', '25.jpg', '2019-04-11 22:40:15', '2019-04-11 22:40:15'),
(26, 'Education', 'To Sell is Human', 'generique', 20, 'description générale à des fins de test', '26.jpg', '2019-04-11 22:43:43', '2019-04-11 22:43:43'),
(27, 'Education', 'Everybody Lies', 'generique', 20, 'description générale à des fins de test', '27.jpg', '2019-04-11 22:44:35', '2019-04-11 22:44:35'),
(28, 'Education', 'Pitch Anything', 'generique', 40, 'description générale à des fins de test', '28.jpg', '2019-04-11 22:45:45', '2019-04-11 22:45:45'),
(29, 'Electronique', 'MacBook Pro', 'Appel', 4082.21, 'description générale à des fins de test', '29.jpg', '2019-04-11 23:04:51', '2019-04-11 23:04:51'),
(30, 'Electronique', 'ASUS ZenBook 14', 'ASUS', 2000, 'description générale à des fins de test', '30.jpg', '2019-04-11 23:06:14', '2019-04-11 23:06:14'),
(31, 'Electronique', 'Microsoft surface Laptop', 'Microsoft', 4900, 'description générale à des fins de test', '31.jpg', '2019-04-11 23:07:03', '2019-04-11 23:07:03'),
(32, 'Electronique', 'Ordinateur Apple Macbook AIR', 'Apple', 1500, 'description générale à des fins de test', '32.jpg', '2019-04-11 23:08:01', '2019-04-11 23:08:01'),
(33, 'Electronique', 'ACER Swift 5', 'ACER', 1200, 'description générale à des fins de test', '33.png', '2019-04-11 23:08:48', '2019-04-11 23:08:48'),
(34, 'Electronique', 'Microsoft Surface Pro', 'Microsoft', 1300, 'description générale à des fins de test', '34.jpg', '2019-04-11 23:09:32', '2019-04-11 23:09:32'),
(35, 'Electronique', 'HP Spectre', 'HP', 2200, 'description générale à des fins de test', '35.jpg', '2019-04-11 23:10:10', '2019-04-11 23:10:10'),
(36, 'Electronique', 'HONOR 8X MAX', 'Honor', 500, 'Honor a sorti il y a quelques semaines le successeur du dernier 7X, le 8X et sa version « plus size » le 8X Max, offrant un écran de 7,12 pouces que l’on peut sans mal qualifié de géant.', '36.png', '2019-04-11 23:17:55', '2019-04-11 23:17:55'),
(37, 'Electronique', 'IPHONE XS MAX', 'Appel', 700, 'La dernière Keynote Apple, n’a pas révélé 2, mais bien 3 nouveaux produits : iPhone XR, l’iPhone XS et XS Max. Bien que l’iPhone XS soit une réédition de l’iPhone X de l’an dernier, le XS Max propose quant à lui un écran de 6,5 pouces', '37.jpg', '2019-04-11 23:18:55', '2019-04-11 23:18:55'),
(38, 'Electronique', 'ONE PLUS 6T', 'One Plus', 550, 'One Plus est l’un des seuls constructeurs à lancer autant de modèles de smartphone chaque année, avec deux appareils annuels', '38.png', '2019-04-11 23:19:53', '2019-04-11 23:19:53'),
(39, 'Electronique', 'SAMSUNG GALAXY NOTE 9', 'Samsung', 800, 'Tout comme certains constructeurs, Samsung a ici repris dans les grandes lignes le design du Galaxy Note 8, restant ainsi sur un design très carré.', '39.png', '2019-04-11 23:20:48', '2019-04-11 23:20:48'),
(40, 'Electronique', 'LG V40 THINQ', 'LG', 500, 'Le petit nouveau de la marque LG, le V40 ThinQ se démarque de ces concurrents en se positionnant comme le smartphone dédié à la photo', '40.png', '2019-04-11 23:21:38', '2019-04-11 23:21:38'),
(41, 'Electronique', 'XIAOMI MI MIX 3', 'XIAOMI', 600, 'La marque de l’empire du milieu, Xiaomi a lancé fin octobre son dernier né le MI MIX 3, un appareil borderless sans encoche reposant sur un mécanisme coulissant.', '41.jpg', '2019-04-11 23:22:24', '2019-04-11 23:22:24'),
(42, 'Electronique', 'GOOGLE PIXEL 3 XL', 'Google', 650, 'Google commercialise pour la première fois en France deux de ces smartphones : le Pixel 3 et le Pixel 3 XL.', '42.png', '2019-04-11 23:23:04', '2019-04-11 23:23:04'),
(43, 'Electronique', 'HUAWEI MATE 20 PRO', 'HUAWEI', 710, 'Petit frère du P20 Pro le Mate 20 Pro se présente comme un smartphone professionnel.', '43.jpg', '2019-04-11 23:23:50', '2019-04-11 23:23:50'),
(44, 'Electronique', 'ASUS ZENFONE 5', 'ASUS', 650, 'Le Zenfone 5 est le premier smartphone du constructeur Asus à réellement s’imposer sur le marché avec très bon rapport qualité/prix.', '44.png', '2019-04-11 23:24:42', '2019-04-11 23:24:42'),
(45, 'Electronique', 'SONY XPERIA XZ3', 'SONY', 800, 'Sony intègre pour la première fois sur l’un de ces smartphones une dalle OLED et un design plus moderne que sur ces précédents modèles.', '45.jpeg', '2019-04-11 23:25:19', '2019-04-11 23:25:19');

-- --------------------------------------------------------

--
-- Table structure for table `commandes`
--

CREATE TABLE `commandes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `montant` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commandes`
--

INSERT INTO `commandes` (`id`, `montant`, `created_at`, `updated_at`) VALUES
(1, 840, NULL, NULL),
(2, 12113390.04, NULL, NULL),
(3, 9025107.53, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(79, '2014_10_12_000000_create_users_table', 1),
(80, '2014_10_12_100000_create_password_resets_table', 1),
(81, '2019_03_29_173252_create_articles_table', 1),
(82, '2019_03_29_221054_create_commandes_table', 1),
(83, '2019_03_29_221308_create_users_commandes_table', 1),
(84, '2019_03_30_005945_create_articles_stocks_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lieu`, `nni`, `tel`, `email`, `isAdmin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'hay al amel', '6139685811', '53507076', 'admin@gmail.com', 1, '2019-04-11 21:03:33', '$2y$10$waKfzJgRHNqEUNVveGDYRe6XN8Fl7aYnjK./m1RwoYpQM0k0/edr2', NULL, '2019-04-11 21:02:31', '2019-04-11 21:03:33'),
(2, 'user1', 'lieu 1', '3454345678', '21122112', 'user1@gmail.com', NULL, '2019-04-11 21:04:56', '$2y$10$zzYEHw7nCdUjVvEXwPlwDujZJZAB5IXUuaq6kW/aD0W1DYtFi950.', NULL, '2019-04-11 21:04:44', '2019-04-11 21:04:56'),
(3, 'user2', 'lieu 2', '8765784567', '45362748', 'user2@gmail.com', NULL, '2019-04-11 21:05:43', '$2y$10$VAefQhdN/0sy8s8TVZHepePuk.9AZuyqQ/svgfmkKPrt5SqZVzRAa', NULL, '2019-04-11 21:05:33', '2019-04-11 21:05:43'),
(4, 'user3', 'lieu 3', '8765784561', '45362746', 'user3@gmail.com', NULL, '2019-04-11 21:06:49', '$2y$10$6K81KeDQa6kyKEE5mpSgReATsHUB/5t529lBHQIDFr/SpH9hwXG1S', NULL, '2019-04-11 21:06:39', '2019-04-11 21:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `users_commandes`
--

CREATE TABLE `users_commandes` (
  `users_id` bigint(20) NOT NULL,
  `commandes_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_commandes`
--

INSERT INTO `users_commandes` (`users_id`, `commandes_id`, `created_at`, `updated_at`) VALUES
(2, 1, NULL, NULL),
(2, 2, NULL, NULL),
(2, 3, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles_stocks`
--
ALTER TABLE `articles_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nni_unique` (`nni`),
  ADD UNIQUE KEY `users_tel_unique` (`tel`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_commandes`
--
ALTER TABLE `users_commandes`
  ADD PRIMARY KEY (`users_id`,`commandes_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `articles_stocks`
--
ALTER TABLE `articles_stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
