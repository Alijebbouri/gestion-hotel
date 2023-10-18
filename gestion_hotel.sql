-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 18 oct. 2023 à 21:56
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_09_204113_create_rooms_table', 1),
(6, '2023_10_09_204123_create_reservations_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `price_total` decimal(8,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `nom`, `prenom`, `date_in`, `date_out`, `address`, `city`, `phone`, `code_postal`, `price_total`, `user_id`, `room_id`, `created_at`, `updated_at`) VALUES
(1, 'Flaouti', 'admin', '2023-10-18', '2023-10-22', 'ahfir', 'berkane', 766426687, 60300, 2000.00, 2, 1, '2023-10-14 23:02:21', '2023-10-14 23:02:21'),
(2, 'Flaouti', 'Oumaima', '2023-10-21', '2023-10-22', 'ahfir', 'berkane', 766426687, 60300, 1500.00, 2, 7, '2023-10-14 23:20:45', '2023-10-14 23:20:45'),
(3, 'Flaouti', 'Oumaima', '2023-10-18', '2023-10-20', 'rue taounat hay moulouiya berkane', 'berkane', 766426687, 60300, 2000.00, 2, 1, '2023-10-17 18:48:34', '2023-10-17 18:48:34'),
(4, 'admin', 'admin', '2023-10-19', '2023-10-22', 'berkane', 'berkane', 766426687, 60300, 2000.00, 2, 1, '2023-10-17 18:54:00', '2023-10-17 18:54:00'),
(5, 'admin', 'Oumaima', '2023-10-11', '2023-10-18', 'ahfir', 'berkane', 766426687, 60300, 6000.00, 2, 2, '2023-10-17 18:56:51', '2023-10-17 18:56:51');

-- --------------------------------------------------------

--
-- Structure de la table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rooms`
--

INSERT INTO `rooms` (`id`, `type`, `image`, `status`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 'deluxe room', '1697316081_deluxe room.jpg', '1', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum quae dolor aut hic doloribus mollitia velit adipisci voluptates quo commodi odio possimus, rem ducimus harum qui. Totam tenetur sit voluptate?', 2000.00, '2023-10-14 19:41:21', '2023-10-14 23:10:06'),
(2, 'honeymoon room', '1697328403_honey.jpg', '1', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum quae dolor aut hic doloribus mollitia velit adipisci voluptates quo commodi odio possimus, rem ducimus harum qui. Totam tenetur sit voluptate?', 6000.00, '2023-10-14 23:06:43', '2023-10-14 23:10:23'),
(3, 'View room', '1697328448_view room.jpg', '1', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum quae dolor aut hic doloribus mollitia velit adipisci voluptates quo commodi odio possimus, rem ducimus harum qui. Totam tenetur sit voluptate?', 2000.00, '2023-10-14 23:07:28', '2023-10-14 23:10:31'),
(4, 'family room', '1697328658_family-room.jpg', 'Available', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum quae dolor aut hic doloribus mollitia velit adipisci voluptates quo commodi odio possimus, rem ducimus harum qui. Totam tenetur sit voluptate?', 1000.00, '2023-10-14 23:10:58', '2023-10-14 23:10:58'),
(5, 'luxuary room', '1697328771_luxury room.jpg', '1', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum quae dolor aut hic doloribus mollitia velit adipisci voluptates quo commodi odio possimus, rem ducimus harum qui. Totam tenetur sit voluptate?', 3000.00, '2023-10-14 23:12:51', '2023-10-14 23:12:51'),
(6, 'standard room', '1697328797_standard room.jpg', '1', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum quae dolor aut hic doloribus mollitia velit adipisci voluptates quo commodi odio possimus, rem ducimus harum qui. Totam tenetur sit voluptate?', 4000.00, '2023-10-14 23:13:17', '2023-10-14 23:13:17'),
(7, 'single room', '1697328829_single room hotel.jpg', '1', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum quae dolor aut hic doloribus mollitia velit adipisci voluptates quo commodi odio possimus, rem ducimus harum qui. Totam tenetur sit voluptate?', 1500.00, '2023-10-14 23:13:49', '2023-10-14 23:13:49'),
(8, 'Penthouse Suite', '1697328927_The-Reverie-Saigon-PENT0316-f7aa98f45f8948c3916d68321c670f05.jpg', '1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et delectus in molestiae quae iure quidem repellendus explicabo deleniti asperiores consectetur laborum vel officia voluptatem, laboriosam ex modi, sint velit quaerat.', 8001.00, '2023-10-14 23:15:27', '2023-10-14 23:15:27'),
(9, 'Executive Room', '1697328974_executive-room.jpg', '1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et delectus in molestiae quae iure quidem repellendus explicabo deleniti asperiores consectetur laborum vel officia voluptatem, laboriosam ex modi, sint velit quaerat.', 2500.00, '2023-10-14 23:16:14', '2023-10-14 23:16:14'),
(10, 'Connecting Room', '1697329012_connecting room.jpg', '1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et delectus in molestiae quae iure quidem repellendus explicabo deleniti asperiores consectetur laborum vel officia voluptatem, laboriosam ex modi, sint velit quaerat.', 10000.00, '2023-10-14 23:16:52', '2023-10-14 23:16:52');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.ma', '1', NULL, '$2y$10$drsBogT0f5rFPApKPGZVd.bOgTpFc982W5q/DpYckJ6kv2o5ppk0S', NULL, '2023-10-14 19:40:39', '2023-10-14 19:40:39'),
(2, 'user 2', 'user@mail.ma', '0', NULL, '$2y$10$Xt/z0RYfTxyyZzWNMugTO.ONxtUq3tOOq2LgWAhMQ78gb9ngnY/Eq', NULL, '2023-10-14 19:47:25', '2023-10-14 19:47:25');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_user_id_foreign` (`user_id`),
  ADD KEY `reservations_room_id_foreign` (`room_id`);

--
-- Index pour la table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
