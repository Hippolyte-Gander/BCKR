-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour bckr
CREATE DATABASE IF NOT EXISTS `bckr` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bckr`;

-- Listage de la structure de table bckr. commentaire
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int NOT NULL AUTO_INCREMENT,
  `poste_id` int DEFAULT NULL,
  `appartient_id` int DEFAULT NULL,
  `date_poste` datetime NOT NULL,
  `message` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_67F068BCA0905086` (`poste_id`),
  KEY `IDX_67F068BCD35BF833` (`appartient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table bckr.commentaire : ~0 rows (environ)
DELETE FROM `commentaire`;
INSERT INTO `commentaire` (`id`, `poste_id`, `appartient_id`, `date_poste`, `message`) VALUES
	(3, 1, 1, '2024-10-28 14:44:07', 'Qui ramène l\'apéro ?'),
	(4, 1, 3, '2024-10-28 15:59:52', 'test');

-- Listage de la structure de table bckr. doctrine_migration_versions
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Listage des données de la table bckr.doctrine_migration_versions : ~1 rows (environ)
DELETE FROM `doctrine_migration_versions`;
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
	('DoctrineMigrations\\Version20241002064948', '2024-10-28 07:56:15', 310);

-- Listage de la structure de table bckr. evenement
CREATE TABLE IF NOT EXISTS `evenement` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime DEFAULT NULL,
  `visibilite` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `places` int NOT NULL,
  `affiche` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table bckr.evenement : ~0 rows (environ)
DELETE FROM `evenement`;
INSERT INTO `evenement` (`id`, `titre`, `description`, `contenu`, `image`, `date_debut`, `date_fin`, `visibilite`, `places`, `affiche`) VALUES
	(1, 'Réunion mensuelle du Comité', 'Réunion pour faire le point sur le club.', 'Le Badminton Club Kriegsheim Rottelsheim (BCKR) tiendra sa réunion mensuelle du club pourde faire le point sur les projets en cours et les événements à venir.\r\n\r\nOrdre du jour\r\n\r\n    Bilan des compétitions de la saison : Retour sur les derniers tournois et performances des équipes.\r\n    Organisation des événements à venir : Planification du tournoi de Noël et préparation de la fête de fin d’année.\r\n    Inscriptions et renouvellements : Point sur les adhésions et les créneaux d’entraînement pour la nouvelle saison.\r\n    Propositions et échanges : Discussion ouverte pour recueillir les idées des membres sur les améliorations possibles au sein du club.\r\n\r\nLa réunion sera suivie d’un moment de convivialité autour d’un petit apéritif. N’hésitez pas à venir partager vos idées et à prendre part aux décisions qui feront vivre le BCKR toute l’année !', NULL, '2024-11-26 20:00:00', '2024-11-26 23:00:00', 'admins', 6, '9a1d8d317519f64e66017c66fc1c1477.webp'),
	(2, 'Barbecue de fin d\'année', 'Barbecue pour fêter l\'arrivée de l\'été', 'Le Badminton Club Kriegsheim Rottelsheim (BCKR) est heureux de convier tous ses membres, ainsi que leurs familles et amis, à son barbecue annuel, qui se tiendra le samedi 10 juin de 12h à 17h, au Parc des Sports de Kriegsheim. Cet événement est l’occasion idéale de se retrouver en dehors des terrains et de partager un moment convivial en famille et entre passionnés.\r\nUn moment de convivialité\r\n\r\nCe barbecue est désormais une tradition incontournable pour le BCKR. Il permet aux joueurs, entraîneurs, bénévoles, et sympathisants du club de se rassembler, de renforcer les liens et de célébrer une année pleine de belles performances et de moments sportifs inoubliables.\r\nRepas, grillades et bonne humeur\r\n\r\nAu programme : des grillades variées pour plaire à tous, avec des viandes, poissons et options végétariennes. Le club fournira également des boissons et quelques douceurs sucrées en dessert. Les participants sont encouragés à apporter une salade, un gâteau ou une spécialité de leur choix pour garnir la table commune et partager ce moment de manière conviviale.\r\nActivités et animations\r\n\r\nEn plus du barbecue, diverses activités ludiques et sportives seront proposées tout au long de la journée. Un mini-tournoi amical de badminton en extérieur, ainsi que des jeux de plein air pour enfants et adultes (pétanque, molkky), permettront de prolonger l’esprit sportif et de profiter ensemble d’un moment de détente.\r\nInformations pratiques\r\n\r\nLa participation est gratuite, mais pour des raisons d’organisation, il est demandé de confirmer sa présence auprès des organisateurs avant le 5 juin. Venez nombreux pour fêter cette journée sous le signe de l’amitié et du sport !\r\n\r\nLe BCKR vous attend avec impatience pour partager ensemble ce bel événement !', NULL, '2025-06-07 19:00:00', '2025-06-07 23:30:00', 'membres', 35, 'ebc8a51cba36b8aa0da1de8ca2581741.webp'),
	(3, 'test', 'test', 'gdrhtf fy', NULL, '2024-11-02 10:54:00', '2024-11-03 10:54:00', 'tous', 5, 'abe5fa57349251d68601f14289c03875.webp'),
	(4, 'Marche Gourmande', 'Marche Gourmande du BCKR – Balade et Saveurs en Plein Air', 'Le Badminton Club Kriegsheim Rottelsheim (BCKR) est heureux de vous inviter à sa Marche Gourmande annuelle, qui se tiendra le dimanche 14 mai. Cette journée allie plaisir de la randonnée et découverte des spécialités locales, le tout dans une ambiance conviviale et chaleureuse. Venez seul, en famille, ou entre amis pour une belle escapade gourmande à travers les paysages de Kriegsheim et Rottelsheim !\r\nUne balade gourmande pour tous\r\n\r\nLe parcours de 8 km, accessible à tous, est ponctué de 5 étapes gastronomiques, où chaque participant pourra déguster des mets préparés par nos partenaires producteurs et artisans locaux. À chaque halte, des spécialités de la région vous attendent : charcuteries, fromages, produits de saison, et douceurs sucrées. Une boisson est également proposée à chaque étape, avec des options sans alcool pour les enfants et les conducteurs.\r\nProgramme de la journée\r\n\r\n    Départ : Les départs sont échelonnés entre 10h et 12h depuis le gymnase de Kriegsheim. Les horaires seront attribués lors de l’inscription pour éviter les encombrements et assurer une balade agréable.\r\n    Étapes gourmandes : Chaque point de dégustation mettra à l’honneur des produits du terroir, avec des options végétariennes disponibles sur demande.\r\n    Retour : La marche se conclura par une dernière halte festive où des boissons et des desserts seront offerts, avec un espace de détente pour se reposer et échanger.\r\n\r\nInformations pratiques et inscriptions\r\n\r\nLes inscriptions sont ouvertes jusqu’au 30 avril. Une participation de 15 € par adulte et 8 € par enfant est demandée pour couvrir les frais de restauration. Les places étant limitées, n’attendez pas pour réserver ! Pour toute information complémentaire, contactez-nous via notre site internet ou auprès des membres du BCKR.\r\n\r\nVenez nombreux pour profiter d\'une journée sous le signe de la nature, de la convivialité et des saveurs locales !', NULL, '2024-11-30 10:30:00', '2024-11-30 23:30:00', 'tous', 50, 'eddfe74e765c2a64ffd74ad75c581d5d.webp');

-- Listage de la structure de table bckr. image_evenement
CREATE TABLE IF NOT EXISTS `image_evenement` (
  `id` int NOT NULL AUTO_INCREMENT,
  `evenement_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int NOT NULL,
  `updated_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`),
  KEY `IDX_D3A4B34AFD02F13` (`evenement_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table bckr.image_evenement : ~0 rows (environ)
DELETE FROM `image_evenement`;

-- Listage de la structure de table bckr. messenger_messages
CREATE TABLE IF NOT EXISTS `messenger_messages` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `body` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table bckr.messenger_messages : ~0 rows (environ)
DELETE FROM `messenger_messages`;

-- Listage de la structure de table bckr. participations
CREATE TABLE IF NOT EXISTS `participations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_inscrit_id` int DEFAULT NULL,
  `evenement_inscrit_id` int NOT NULL,
  `nbr_participants` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FDC6C6E86DCD4FEE` (`user_inscrit_id`),
  KEY `IDX_FDC6C6E88E2AD382` (`evenement_inscrit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table bckr.participations : ~0 rows (environ)
DELETE FROM `participations`;
INSERT INTO `participations` (`id`, `user_inscrit_id`, `evenement_inscrit_id`, `nbr_participants`) VALUES
	(1, 1, 1, 2),
	(3, 1, 3, 1);

-- Listage de la structure de table bckr. user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `pseudo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_licence` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_telephone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_naissance` date DEFAULT NULL COMMENT '(DC2Type:date_immutable)',
  `photo_profil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_IDENTIFIER_EMAIL` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table bckr.user : ~1 rows (environ)
DELETE FROM `user`;
INSERT INTO `user` (`id`, `email`, `roles`, `password`, `is_verified`, `pseudo`, `num_licence`, `nom`, `prenom`, `num_telephone`, `date_naissance`, `photo_profil`, `adresse`, `ville`, `cp`) VALUES
	(1, 'admin@exemple.com', '["ROLE_USER", "ROLE_MEMBRE", "ROLE_ADMIN"]', '$2y$13$7klJBrdJF011eAZXNOr0sOAmqRKP9GGei9QAloe0vZJR708vHmiR2', 0, 'adminPseudo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
