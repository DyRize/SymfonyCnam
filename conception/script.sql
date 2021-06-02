-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : mer. 02 juin 2021 à 13:42
-- Version du serveur :  8.0.23
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `symfonycnam`
--
CREATE DATABASE IF NOT EXISTS `symfonycnam` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `symfonycnam`;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int NOT NULL,
  `author_id` int NOT NULL,
  `type_id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `author_id`, `type_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(96, 313, 78, 'Article 1', 'Si quelqu\'un pouvait me remplacer, je vous escorte! dit Homais. -- Garçon! deux demi- tasses! -- Partons-nous? reprit à la Barbe d\'or ou au jardin, il lui fallait une femme. Elle lui dit: -- Que vous seriez bon, monsieur, dit la bru, avec un mari vêtu d\'un habit de velours vert. Je le veux. Faites-le.» Ces messieurs s\'étonnèrent beaucoup des idées d\'infini, d\'idéal? -- Il est déjà formé comme un cotret, et bourgeonnée comme un idiot devant la statue de Pierre Corneille. -- Continuez! fit une inclination rapide et referma la porte, le pria de lui fournir ce qu\'elle pouvait avoir, imaginant une maladie nerveuse: on devait sans murmure pour n\'être point renvoyée; et, comme une promesse incertaine qui se gonflait d\'un soupir; et, défaillante, tout en causant, et Charles se jeta à genoux qui pleure est son épouse Diane de Poitiers, comtesse de Brézé, seigneur de la nouveauté, peu à peu près toutes les épreuves de la nourrice, Emma reprit le bras sous une guirlande de fleurs que vous.', '1980-06-03 07:29:41', '1980-06-03 07:29:41'),
(97, 314, 81, 'Article 2', 'Dieu des bonnes soeurs inclinées sur leur habit noir, dont les roues tournaient dans des râteliers en forme de nacelle. Les rideaux de toile où l\'on vendait des cotonnades, des couvertures et ayant sans cesse obligé d\'être à cheval... -- Mais, si je n\'avais pas d\'autres chiens à fouetter! Ah! tant pis, reviens plus tard! Et il ne tarda pas à trois heures, ne m\'attends plus, ma chérie. Il faut vous secouer, monsieur Bovary; ça se passera! Venez nous voir; ma fille pense à ma charreterie, dont la lucarne d\'un grenier le profil maigre de M. Guillaumin, commençait à se demander pourquoi il venait chercher son ombrelle, elle l\'ouvrit. L\'ombrelle, de soie verte et blasonné à son bras, tout en cousant, elle se coucha tout du long, des gouttes ruisselaient, avait une lettre. Nastasie descendit les marches en courant et disparut. Mais c\'était surtout aux heures des repas qu\'elle n\'en sortirait pas? Elle valait bien cependant toutes celles qu\'il avait dites, tâchant de se sentir troublé.', '2021-02-14 09:50:06', '1980-06-03 07:29:41'),
(98, 317, 80, 'Article 3', 'Enjouée jadis, expansive et tout empourprée aux pommettes comme une maison blanche avec ses ongles le velours de sa troisième, ses parents sont à dormir... -- Oh! non, n\'est-ce pas, que tu m\'attendras?... à midi? Il fit venir de Rouen dans un abîme, et l\'emportait parmi les périls incessants d\'une mer orageuse, sachant d\'ailleurs faire respecter la paix comme la veille, tandis que Tuvache, courbé comme un fil de fer à la voir, Léon souvent avait dîné chez le pharmacien, donnez cours à la ville arrivaient à peine arrivé, il sauta vivement de la chaise où madame Homais disait, en tirant les cordons de sa composition, et il se mit à haleter rapidement. La langue tout entière semblait près de se montrer moins discrets. Aussi jugea-t-elle utile de descendre chaque fois que revenait le mercredi, elle se mit à lui raconter cette histoire, qu\'elle savait par coeur des couplets qu\'il chantait aux bienvenues, s\'enthousiasma pour Béranger, sut faire du punch dans l\'amphithéâtre aux dissections!.', '2015-01-10 12:50:07', '1980-06-03 07:29:41'),
(99, 318, 79, 'Article 4', 'Le sable des allées. Tout à coup, comme à grands pas lourds dans ses cheveux, et elle se renversa contre la patère de cuivre; elle s\'y prit pour obtenir de son examen, dont il éblouit les habitants par un temps de madame Bovary. Il le regarda brûler. Les petites baies de carton éclataient, les fils d\'archal se tordaient, le galon se fondait; et les meilleurs baisers ne vous semble-t-il pas, répliqua madame Bovary, interrompit Homais en dressant ses sourcils et en l\'y serrant davantage, pour accélérer les choses. Cinq ans plus tard dans le sentier au bord du chemin, devant la maison semblaient garder son bonnet grec: -- Ce sera, sans doute, on l\'aura retenue à dîner dans les chambres. La première avait été mauvaise, sans doute la petite Berthe, qui secouait au bout de ses tempes elle entendait la rumeur de la cheminée ses boutons de rose naturels, en guise de boules, au sommet. Jusqu\'au soir, on mangea. Quand on a de plus belles; mais, moi, je ne sais pas trop lourde..., commode.', '1973-08-13 21:03:01', '1980-06-03 07:29:41'),
(100, 319, 80, 'Article 5', 'Tuvache avaient, par excès de tendresse. Rodolphe, le soir, en traversant le corridor, l\'avait surprise dans la boutique du pharmacien, et s\'était cru en plein visage, au milieu de la confiance renaît, et enfin la France respire!...» -- Du vinaigre! cria-t-il. Ah! mon Dieu, oui! n\'ai-je pas ma faute. Alors, s\'étant versé de l\'eau avec sa pommade, était retourné d\'une demi-lieue en arrière, croyant l\'apercevoir à chaque bouffée. -- Tu n\'oublies rien? -- Non. -- Comment voulais-tu que je vous regardais par le côté de la condescendance, ni d\'autre part commettre une maladresse, en invitant le jeune garçon. -- Ah! pas de discourir; puis, à la Corbeille, journal des femmes, et cette femme du pharmacien lui tintèrent à croire que c\'est vous qui n\'avez pas de raconter l\'agonie de Voltaire, à l\'usage des jeunes gens_, etc. Madame Bovary mère, qui, après douze ans d\'absence, lui avait commandé tous ces messieurs le connaissaient comme leur mère. Ils avaient pour les rapatrier. Mais elles.', '1970-05-07 11:10:57', '1980-06-03 07:29:41');

-- --------------------------------------------------------

--
-- Structure de la table `article_type`
--

CREATE TABLE `article_type` (
  `id` int NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article_type`
--

INSERT INTO `article_type` (`id`, `code`, `label`) VALUES
(78, 'INFO', 'INFORMATION'),
(79, 'EVENT', 'EVENEMENT'),
(80, 'BDE', 'BDE'),
(81, 'ADMN', 'ADMINISTRATION');

-- --------------------------------------------------------

--
-- Structure de la table `calendar`
--

CREATE TABLE `calendar` (
  `id` int NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `all_day` tinyint(1) NOT NULL,
  `background_color` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `border_color` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_color` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `calendar`
--

INSERT INTO `calendar` (`id`, `title`, `start`, `end`, `description`, `all_day`, `background_color`, `border_color`, `text_color`) VALUES
(2, 'Evènement n°0', '2021-05-31 08:00:00', '2021-05-31 13:00:00', 'Description de l\'évènement n°0', 0, '#0080c0', '#ff0000', '#ffffff'),
(3, 'Evènement n°1', '2021-06-01 10:00:00', '2021-06-01 12:00:00', 'Description de l\'évènement n°1', 0, '#0080c0', '#ff0000', '#ffffff'),
(4, 'Evènement n°2', '2021-06-02 12:00:00', '2021-06-02 17:00:00', 'Description de l\'évènement n°2', 0, '#0080c0', '#ff0000', '#ffffff'),
(5, 'Evènement n°3', '2021-06-03 10:00:00', '2021-06-03 18:00:00', 'Description de l\'évènement n°3', 0, '#0080c0', '#ff0000', '#ffffff'),
(6, 'Evènement n°4', '2021-06-04 07:00:00', '2021-06-04 16:00:00', 'Description de l\'évènement n°4', 0, '#0080c0', '#ff0000', '#ffffff'),
(7, 'Evènement n°5', '2021-06-05 08:00:00', '2021-06-05 18:00:00', 'Description de l\'évènement n°5', 0, '#0080c0', '#ff0000', '#ffffff'),
(8, 'Evènement n°6', '2021-06-06 09:00:00', '2021-06-06 17:00:00', 'Description de l\'évènement n°6', 0, '#0080c0', '#ff0000', '#ffffff'),
(9, 'Evènement n°7', '2021-06-07 08:00:00', '2021-06-07 16:00:00', 'Description de l\'évènement n°7', 0, '#0080c0', '#ff0000', '#ffffff'),
(10, 'Evènement n°8', '2021-06-08 08:00:00', '2021-06-08 14:00:00', 'Description de l\'évènement n°8', 0, '#0080c0', '#ff0000', '#ffffff'),
(11, 'Evènement n°9', '2021-06-09 12:00:00', '2021-06-09 19:00:00', 'Description de l\'évènement n°9', 0, '#0080c0', '#ff0000', '#ffffff'),
(12, 'Evènement n°10', '2021-06-10 12:00:00', '2021-06-10 19:00:00', 'Description de l\'évènement n°10', 0, '#0080c0', '#ff0000', '#ffffff'),
(13, 'Evènement n°11', '2021-06-11 07:00:00', '2021-06-11 15:00:00', 'Description de l\'évènement n°11', 0, '#0080c0', '#ff0000', '#ffffff'),
(14, 'Evènement n°12', '2021-06-12 07:00:00', '2021-06-12 14:00:00', 'Description de l\'évènement n°12', 0, '#0080c0', '#ff0000', '#ffffff'),
(15, 'Evènement n°13', '2021-06-13 09:00:00', '2021-06-13 14:00:00', 'Description de l\'évènement n°13', 0, '#0080c0', '#ff0000', '#ffffff'),
(16, 'Evènement n°14', '2021-06-14 07:00:00', '2021-06-14 18:00:00', 'Description de l\'évènement n°14', 0, '#0080c0', '#ff0000', '#ffffff');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210316214430', '2021-03-24 07:52:10', 46),
('DoctrineMigrations\\Version20210321172958', '2021-03-24 07:55:33', 35),
('DoctrineMigrations\\Version20210322145256', '2021-03-24 07:55:33', 40),
('DoctrineMigrations\\Version20210518192045', '2021-05-18 19:21:00', 34),
('DoctrineMigrations\\Version20210518195956', '2021-05-18 20:00:12', 60),
('DoctrineMigrations\\Version20210520194251', '2021-05-20 19:43:04', 1438),
('DoctrineMigrations\\Version20210524071212', '2021-05-24 07:12:23', 83),
('DoctrineMigrations\\Version20210527094321', '2021-05-30 18:59:36', 46),
('DoctrineMigrations\\Version20210601214410', '2021-06-01 21:44:19', 43);

-- --------------------------------------------------------

--
-- Structure de la table `grade`
--

CREATE TABLE `grade` (
  `id` int NOT NULL,
  `subject_id` int NOT NULL,
  `student_id` int NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `grade`
--

INSERT INTO `grade` (`id`, `subject_id`, `student_id`, `label`, `date`, `value`) VALUES
(28, 313, 34, 'mathematiques pour l\'informatique', '1974-01-14 23:05:57', 15),
(29, 313, 36, 'mathematiques pour l\'informatique', '1994-03-17 00:26:27', 20),
(30, 313, 35, 'mathematiques pour l\'informatique', '2010-12-16 19:51:11', 8);

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `id` int NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `started_at` datetime NOT NULL,
  `ended_at` datetime DEFAULT NULL,
  `description` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `project`
--

INSERT INTO `project` (`id`, `code`, `label`, `started_at`, `ended_at`, `description`) VALUES
(12, 'PQRL2021', 'Porquerolles', '1999-05-03 16:16:26', NULL, 'Charles répondit qu\'ils s\'en allaient dès le potage. Le lendemain, à midi, elle reçut un protêt; et la mère Lefrançois lui demanda d\'où venait ce papier. -- Eh bien; nous nous aimerons! Tiens, je.');

-- --------------------------------------------------------

--
-- Structure de la table `project_student`
--

CREATE TABLE `project_student` (
  `project_id` int NOT NULL,
  `student_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `project_student`
--

INSERT INTO `project_student` (`project_id`, `student_id`) VALUES
(12, 34),
(12, 35),
(12, 36);

-- --------------------------------------------------------

--
-- Structure de la table `project_subject`
--

CREATE TABLE `project_subject` (
  `project_id` int NOT NULL,
  `subject_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `project_subject`
--

INSERT INTO `project_subject` (`project_id`, `subject_id`) VALUES
(12, 335),
(12, 338);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id` int NOT NULL,
  `manager_id` int NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `started_at` datetime NOT NULL,
  `ended_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id`, `manager_id`, `code`, `label`, `started_at`, `ended_at`) VALUES
(30, 46, 'prm_2018', '2018-2021', '1978-05-28 07:20:44', NULL),
(31, 47, 'prm_2019', '2019-2022', '1998-11-08 03:53:20', NULL),
(32, 45, 'prm_2020', '2020-2023', '1998-08-13 19:33:59', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE `student` (
  `id` int NOT NULL,
  `related_user_id` int NOT NULL,
  `promotion_id` int NOT NULL,
  `arrived_at` datetime NOT NULL,
  `graduated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`id`, `related_user_id`, `promotion_id`, `arrived_at`, `graduated_at`) VALUES
(34, 317, 31, '1978-12-19 00:07:22', NULL),
(35, 319, 31, '1995-11-21 13:13:15', NULL),
(36, 318, 31, '1988-07-29 16:23:49', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `subject`
--

CREATE TABLE `subject` (
  `id` int NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `subject`
--

INSERT INTO `subject` (`id`, `code`, `label`) VALUES
(313, 'STMN01', 'Mathématiques pour l\'informatique'),
(314, 'STMN02', 'Architecture des systèmes informatiques'),
(315, 'STMN03', 'Algorithmique et programmation'),
(316, 'STMN04', 'Base de la physique pour le transmédia'),
(317, 'STMN05', 'Rapport R1'),
(318, 'STMN06', 'Communication Expression'),
(319, 'STMN08', 'Gestion des projets des médias numériques'),
(320, 'STMN09', 'Traitement du signal'),
(321, 'STMN0A', 'Principes des systèmes d\'exploitation'),
(322, 'STMN0C', 'Technologies transmédia'),
(323, 'STMN0D', 'Interface Homme - Machine'),
(324, 'STMN0E', 'Rapport R2'),
(325, 'STMN1B', 'Programmation et outils de développement d\'application transmédia'),
(326, 'STMN0B', 'Réseaux'),
(327, 'STMN10', 'Synthèse et analyse des images et du son'),
(328, 'STMN11', 'Base de données'),
(329, 'STMN12', 'Conception et développement 1 : programmation orientée objet'),
(330, 'STMN13', 'Projets pluridisciplinaires 1'),
(331, 'STMN14', 'Communication expression S3'),
(332, 'STMN15', 'Rapport R3'),
(333, 'STMN18', 'Conception et développement 2 : programmation mobile'),
(334, 'STMN19', 'Programmation Web'),
(335, 'STMN1A', 'Systèmes d\'interaction'),
(336, 'STMN1C', 'Rapport R4'),
(337, 'STMN1D', 'Sejour international'),
(338, 'STMN21', 'Génie Logiciel');

-- --------------------------------------------------------

--
-- Structure de la table `subject_student`
--

CREATE TABLE `subject_student` (
  `subject_id` int NOT NULL,
  `student_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `subject_student`
--

INSERT INTO `subject_student` (`subject_id`, `student_id`) VALUES
(313, 34),
(313, 35),
(313, 36),
(326, 34),
(326, 35),
(326, 36),
(333, 34),
(333, 35),
(333, 36),
(334, 34),
(334, 35),
(334, 36),
(335, 34),
(335, 35),
(335, 36),
(336, 34),
(336, 35),
(336, 36),
(337, 34),
(337, 35),
(337, 36),
(338, 34),
(338, 35),
(338, 36);

-- --------------------------------------------------------

--
-- Structure de la table `subject_teacher`
--

CREATE TABLE `subject_teacher` (
  `subject_id` int NOT NULL,
  `teacher_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `subject_teacher`
--

INSERT INTO `subject_teacher` (`subject_id`, `teacher_id`) VALUES
(315, 46),
(327, 46),
(327, 47),
(333, 45),
(335, 44);

-- --------------------------------------------------------

--
-- Structure de la table `teacher`
--

CREATE TABLE `teacher` (
  `id` int NOT NULL,
  `related_user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `teacher`
--

INSERT INTO `teacher` (`id`, `related_user_id`) VALUES
(44, 313),
(45, 314),
(46, 315),
(47, 316);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` datetime NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `last_connexion_date` datetime NOT NULL,
  `roles` json NOT NULL,
  `is_verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `birth_date`, `phone_number`, `created_at`, `last_connexion_date`, `roles`, `is_verified`) VALUES
(313, 'Yannick', 'Bacquet', 'yannick.bacquet@univ-tln.fr', '$argon2id$v=19$m=65536,t=4,p=1$J/jZOoZKnUvgsmuko0wh3g$3wEd0qKwQD8L3SWCGW9nZ9iUdd2VMjBlDyXNJbti2Qk', '2007-01-13 00:05:37', '+33 (0)6 35 32 09 58', '2021-06-02 13:42:04', '2021-06-02 13:42:04', '[\"ROLE_ADMIN\"]', 0),
(314, 'Olivia', 'Papini', 'olivia.papini@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$SsBWSw1A2TFoMp4wz2fHfA$qz3i7zLat6bsEZuWtBxdTRebEmFsahmvIEAzop7Na8Y', '2000-06-16 00:39:51', '0238383636', '2021-06-02 13:42:04', '2021-06-02 13:42:04', '[\"ROLE_SPEAKER\"]', 0),
(315, 'Jean-Marc', 'Robert', 'jean-marc.robert@lecnam.net', '$argon2id$v=19$m=65536,t=4,p=1$c5my//Sv/WdN60+AzdJWnw$1mh3PTLBesA5ejhpoNioR4SPS9zivJGqqKiG9GAz8/E', '1995-09-23 14:55:07', '+33 1 40 48 23 57', '2021-06-02 13:42:04', '2021-06-02 13:42:04', '[\"ROLE_SPEAKER\"]', 0),
(316, 'Ricard', 'Marxer', 'ricard.marxer@lecnam.net', '$argon2id$v=19$m=65536,t=4,p=1$YW5wvzjnWopxLjbfjjyvLA$ytSL+HX89C5kQq9pT3UFUSW2Dq0UXTuiklS5NxFPN/w', '1982-06-30 14:28:33', '0505782348', '2021-06-02 13:42:04', '2021-06-02 13:42:04', '[\"ROLE_SPEAKER\"]', 0),
(317, 'Dylan', 'Le Flour', 'dylan.leflour25@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$4GqyVKR7A4LXk9Y6+ZUVGw$EUYf4FfTiNV/uNc9t6RDhKDHJMtH9wKYXRZpdSkRZks', '1999-10-25 00:00:00', '0786423929', '2021-06-02 13:42:04', '2021-06-02 13:42:04', '[\"ROLE_DELEGATE\", \"ROLE_BDE\", \"ROLE_STUDENT\"]', 0),
(318, 'Corentin', 'Maugez', 'corentin.mgz@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$dpu+FD7XWdT33zY+tw/BqA$CZbCUv3haL9Te4a9QV+m1AFoMh2eMsXfpdWTnjoAjVI', '1997-03-22 00:00:00', '0626221481', '2021-06-02 13:42:04', '2021-06-02 13:42:04', '[\"ROLE_BDE\", \"ROLE_STUDENT\"]', 0),
(319, 'Ludovic', 'Genevois', 'ludovic.genevois@hotmail.fr', '$argon2id$v=19$m=65536,t=4,p=1$z0ssDKrF7xG5qal86hRhYw$NRpmYDlJRsuLwcPR+SA2EltVECnH9TM9ipRln2okEwc', '1997-04-24 00:00:00', '0651190268', '2021-06-02 13:42:04', '2021-06-02 13:42:04', '[\"ROLE_STUDENT\"]', 0),
(320, 'Pauline', 'Rocher', 'antoinette.menard@neveu.fr', '$argon2id$v=19$m=65536,t=4,p=1$RemLGKgInsinBf+4wnCrkQ$KJvVI56wFyMbhd5U5T3zezaPSyf82MLOOBQ+vhXotnw', '2013-08-12 23:06:30', '+33 (0)8 05 72 24 96', '2021-06-02 13:42:04', '2021-06-02 13:42:04', '[]', 0),
(321, 'Dorothée', 'Labbe', 'amaillet@orange.fr', '$argon2id$v=19$m=65536,t=4,p=1$qi5CxlnbHFXiX6v4eaDDHw$iaD3r0NiTIOa3KkJhF8WtZD9F0/FAU8oL6wlAaH92/o', '1972-12-11 17:12:36', '+33 (0)9 32 72 02 60', '2021-06-02 13:42:04', '2021-06-02 13:42:04', '[]', 0),
(322, 'Anouk', 'Ferreira', 'andree.raymond@lebreton.fr', '$argon2id$v=19$m=65536,t=4,p=1$LOSr2zsNd7aETVkdEVgzEQ$qZ2Z/vTkoVOKdOj0HnTD++P332v2bEZtCZLSr2LBbQg', '2004-12-16 06:35:10', '+33 9 90 18 78 22', '2021-06-02 13:42:04', '2021-06-02 13:42:04', '[]', 0),
(323, 'Caroline', 'Fleury', 'odumas@sfr.fr', '$argon2id$v=19$m=65536,t=4,p=1$8TcRUdF57Sy5kzZV+h33UA$ekya5SuE30q4W0ThUO5HkNhZGEbRsjju6yynWDJtREg', '2000-02-27 10:12:51', '01 49 96 95 34', '2021-06-02 13:42:05', '2021-06-02 13:42:05', '[]', 0),
(324, 'Thérèse', 'Techer', 'thibault.andre@loiseau.com', '$argon2id$v=19$m=65536,t=4,p=1$2R3MT+EgFrhits6a7DBf4w$Sx/Ysj/rqw3dMnCXyrUmvasuh+Di/7DrYDmpPCr6whs', '2017-01-16 05:37:05', '+33 (0)1 61 75 56 25', '2021-06-02 13:42:05', '2021-06-02 13:42:05', '[]', 0),
(325, 'Nicolas', 'Cousin', 'gilbert68@free.fr', '$argon2id$v=19$m=65536,t=4,p=1$+gRJTPoD8ESVRgXhVDab1Q$9BZFwU8uNREH8FZPYPd3MfQtEbjwtuq7bsy4umja6x0', '2000-06-12 01:42:29', '+33 (0)1 11 45 50 23', '2021-06-02 13:42:05', '2021-06-02 13:42:05', '[]', 0),
(326, 'Océane', 'Bonneau', 'tleconte@yahoo.fr', '$argon2id$v=19$m=65536,t=4,p=1$Aw5BkMVJxo8HHi7ibVwU9Q$q/RHaaKr2jdLLt7dihdPbEmLxqWJzibnWp/T8UQr8zQ', '2003-10-14 14:15:04', '01 32 27 55 73', '2021-06-02 13:42:05', '2021-06-02 13:42:05', '[]', 0),
(327, 'Christelle', 'Robert', 'frederic03@dbmail.com', '$argon2id$v=19$m=65536,t=4,p=1$k6qnd3xyOhCLaOq28K5hLQ$D7YjBJ8y+6YdgdBR1LJaSl+qwjtq2oTlPsZK4bIv0vI', '2003-01-25 04:30:44', '+33 7 30 20 46 67', '2021-06-02 13:42:05', '2021-06-02 13:42:05', '[]', 0),
(328, 'Françoise', 'Lefevre', 'maggie.petitjean@club-internet.fr', '$argon2id$v=19$m=65536,t=4,p=1$7Zk94Lc/Ofbbt0PvsADhuw$r6lcs+ctDYQ4Aj/y1jo368V8sqGti0eUx4S7W438TfM', '1982-06-01 00:19:01', '+33 8 03 52 96 58', '2021-06-02 13:42:05', '2021-06-02 13:42:05', '[]', 0),
(329, 'Rémy', 'Gilbert', 'benoit90@germain.com', '$argon2id$v=19$m=65536,t=4,p=1$738Rgn6oyu+ZoAmry7NQGQ$vq3qfJSbRrbHRVkmuIxWjFEXLdR9pi7hQzCgW2mV5dI', '1993-11-20 01:54:46', '0428820377', '2021-06-02 13:42:05', '2021-06-02 13:42:05', '[]', 0),
(330, 'Augustin', 'Blin', 'vbenard@club-internet.fr', '$argon2id$v=19$m=65536,t=4,p=1$PD8YUs65PO8MqrmDaV5KhA$Z7iVrSuuWLx7xpDIJERWzxkRAAjZdXVxwgWQNtlN22U', '1977-09-13 06:29:33', '0360610551', '2021-06-02 13:42:05', '2021-06-02 13:42:05', '[]', 0),
(331, 'Maryse', 'Robert', 'alexandre.laurence@alexandre.com', '$argon2id$v=19$m=65536,t=4,p=1$nuA7QWDu2rqGJbYARKAngw$zGCl4L5sLMIegCBz6YGRwhs6pz7yNxorSp5lzswxOtE', '2018-02-26 12:22:29', '03 58 27 40 98', '2021-06-02 13:42:05', '2021-06-02 13:42:05', '[]', 0),
(332, 'Michel', 'Masson', 'vaillant.noemi@sfr.fr', '$argon2id$v=19$m=65536,t=4,p=1$QbnzIY3UNXTnN7+6hkbXug$4r+j0mLGmhMIi7+dlfKDZivZ20dpd8BqBEiyYVgz19I', '2011-09-15 09:30:14', '+33 (0)9 82 55 96 83', '2021-06-02 13:42:05', '2021-06-02 13:42:05', '[]', 0),
(333, 'Margot', 'Blanchet', 'frederic.leconte@laposte.net', '$argon2id$v=19$m=65536,t=4,p=1$+9okc1zdqf/qP9/6/nyeNA$KzU6AdqKouMWyHPNxzGaFFgB+rQmo19J4793bDo7PFs', '1974-01-25 20:33:32', '+33 (0)7 75 57 65 25', '2021-06-02 13:42:06', '2021-06-02 13:42:06', '[]', 0),
(334, 'Aurélie', 'Loiseau', 'adelaide.lefebvre@club-internet.fr', '$argon2id$v=19$m=65536,t=4,p=1$SHDnoH68y3IT8y9VxJObAg$Kg+ED5acyLsGSRS3F3Jw2Mcy8BBCcO7YhGRxuFn43gc', '2008-02-27 09:24:40', '05 26 85 25 69', '2021-06-02 13:42:06', '2021-06-02 13:42:06', '[]', 0),
(335, 'Raymond', 'Laporte', 'weiss.alix@joly.com', '$argon2id$v=19$m=65536,t=4,p=1$MQTFotoXnwIBCWQbrA3b2w$YPxiDkXRO5lziCYxR0QJSyPu8W+ihAc55hUF0kt8wu4', '2014-09-20 01:52:20', '08 07 62 59 14', '2021-06-02 13:42:06', '2021-06-02 13:42:06', '[]', 0),
(336, 'Joseph', 'Gros', 'yjacquot@lebon.com', '$argon2id$v=19$m=65536,t=4,p=1$m5LP1/6PIPBRObR7o6xvaw$JNOsld2fZHYc7jL+H8AeSZl1+8X3XZQ6AsQ14ZkKbug', '1986-12-14 23:48:00', '0733857383', '2021-06-02 13:42:06', '2021-06-02 13:42:06', '[]', 0),
(337, 'Nathalie', 'Martinez', 'guy20@live.com', '$argon2id$v=19$m=65536,t=4,p=1$kpFFcDm039J3SWLxhJX0Dw$IfJPrakEwl5km78MZkhEDwLQgUPcD339WDdcY6DJ7s8', '1981-03-08 14:44:06', '0349867650', '2021-06-02 13:42:06', '2021-06-02 13:42:06', '[]', 0),
(338, 'François', 'Lebon', 'marguerite90@yahoo.fr', '$argon2id$v=19$m=65536,t=4,p=1$yiu1wC4Wn8ZX4mMcn6n4zA$B0fAmtpUUCUEWctdR+lrleMBd9R9ZeaoiZP5VlKglHw', '1973-04-17 07:07:37', '07 96 21 17 87', '2021-06-02 13:42:06', '2021-06-02 13:42:06', '[]', 0),
(339, 'Victor', 'Le Goff', 'renaud.oceane@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$C1MpsycPbrBqApYVTpHxyg$hkOrifyhIKfpp3u7ssDgYAdn7LWG1J3ldj55Dnagi/8', '2015-04-21 23:04:56', '+33 (0)3 49 08 32 48', '2021-06-02 13:42:06', '2021-06-02 13:42:06', '[]', 0),
(340, 'Martine', 'Besson', 'nathalie.gimenez@royer.fr', '$argon2id$v=19$m=65536,t=4,p=1$/219nXoWMhXWUDCS20uPZw$gxnd1j6iWNcVb9AWnM/lEkem/jVWSCF/lQVESrjFc/4', '2019-12-19 01:31:01', '+33 (0)1 83 38 39 56', '2021-06-02 13:42:06', '2021-06-02 13:42:06', '[]', 0),
(341, 'Patrick', 'Auger', 'georges.alphonse@hotmail.fr', '$argon2id$v=19$m=65536,t=4,p=1$799/WCY2WGVunrLmQh9mWw$iWS2qUlrGunK1uATec1UonM7ShnzZ91jokIcr2UF/ao', '2011-07-13 09:10:16', '+33 (0)3 31 97 03 53', '2021-06-02 13:42:06', '2021-06-02 13:42:06', '[]', 0),
(342, 'Matthieu', 'Martel', 'anastasie.lemoine@orange.fr', '$argon2id$v=19$m=65536,t=4,p=1$wfFwLqVxb9NGnzoB0CStpg$e0BMNuOyXugWNXES5Mlqi1g1YqVV5SwNpfBY+t6Cvho', '2015-01-10 10:09:56', '+33 5 41 30 65 69', '2021-06-02 13:42:06', '2021-06-02 13:42:06', '[]', 0),
(343, 'Arthur', 'Chevallier', 'durand.alfred@live.com', '$argon2id$v=19$m=65536,t=4,p=1$kNmrHnSzPX2uQ/eeq43cPQ$mAhX+cSGM2xL2H3upbmSI1pvhuFHpzPzkMuVERPR5Cs', '1973-11-06 07:23:05', '07 50 42 47 44', '2021-06-02 13:42:06', '2021-06-02 13:42:06', '[]', 0),
(344, 'Louis', 'Bernard', 'devaux.marine@live.com', '$argon2id$v=19$m=65536,t=4,p=1$36P6jiOWJSFocn9oiAVSkA$l3BOXtN6QjV8zpEX/j7yPI3F9+NSJYeM8u+BZvvvVyE', '1972-10-30 14:20:24', '+33 (0)3 34 46 59 71', '2021-06-02 13:42:07', '2021-06-02 13:42:07', '[]', 0),
(345, 'Agnès', 'Renaud', 'vhernandez@tele2.fr', '$argon2id$v=19$m=65536,t=4,p=1$408jILnTURJD1rUV3G2KiQ$kHwpi4iA/TZNn93Voou3jd4hkUEHkMw2Q1ODqdgE2hc', '2018-01-05 00:08:05', '+33 (0)9 11 93 83 88', '2021-06-02 13:42:07', '2021-06-02 13:42:07', '[]', 0),
(346, 'Martin', 'Maillard', 'noel.michel@yahoo.fr', '$argon2id$v=19$m=65536,t=4,p=1$lv0sc/Wk30NYBIXq4xoBlA$IAIKqGu22Z2tskZd4UOc5sMubdqUaXJb9Js1Kcdmcjc', '2018-05-08 17:38:18', '0382675731', '2021-06-02 13:42:07', '2021-06-02 13:42:07', '[]', 0),
(347, 'Luc', 'Lebreton', 'victor20@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$JBOdfeepF/9E1kg3hGS1mA$CXcS+ZZCtl0RPqkPojU1n7JQR0GweZvbLA0uE3h7wtg', '1974-11-27 17:44:22', '06 83 61 22 34', '2021-06-02 13:42:07', '2021-06-02 13:42:07', '[]', 0),
(348, 'David', 'Allain', 'tdelaunay@petitjean.fr', '$argon2id$v=19$m=65536,t=4,p=1$W8SIuazoZqUAGy55TEQwMA$NChzMeZ54vRiUlp7UkU/KGOI4AGY0xsKwkFXboGLWi8', '2016-02-29 00:53:41', '02 75 69 99 48', '2021-06-02 13:42:07', '2021-06-02 13:42:07', '[]', 0),
(349, 'Louise', 'Bouvet', 'vbertrand@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$1cqdwHA2X38r0AcZ8o0iGg$4i6OmNeXmUR3UM7Di/X5xZhRH8XFyDbl2JdVxIfLyKI', '1977-12-17 20:27:42', '06 90 71 37 17', '2021-06-02 13:42:07', '2021-06-02 13:42:07', '[]', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_23A0E66F675F31B` (`author_id`),
  ADD KEY `IDX_23A0E66C54C8C93` (`type_id`);

--
-- Index pour la table `article_type`
--
ALTER TABLE `article_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_595AAE3423EDC87` (`subject_id`),
  ADD KEY `IDX_595AAE34CB944F1A` (`student_id`);

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `project_student`
--
ALTER TABLE `project_student`
  ADD PRIMARY KEY (`project_id`,`student_id`),
  ADD KEY `IDX_213DA356166D1F9C` (`project_id`),
  ADD KEY `IDX_213DA356CB944F1A` (`student_id`);

--
-- Index pour la table `project_subject`
--
ALTER TABLE `project_subject`
  ADD PRIMARY KEY (`project_id`,`subject_id`),
  ADD KEY `IDX_6DD0321F166D1F9C` (`project_id`),
  ADD KEY `IDX_6DD0321F23EDC87` (`subject_id`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C11D7DD1783E3463` (`manager_id`);

--
-- Index pour la table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_B723AF3398771930` (`related_user_id`),
  ADD KEY `IDX_B723AF33139DF194` (`promotion_id`);

--
-- Index pour la table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `subject_student`
--
ALTER TABLE `subject_student`
  ADD PRIMARY KEY (`subject_id`,`student_id`),
  ADD KEY `IDX_12A1039123EDC87` (`subject_id`),
  ADD KEY `IDX_12A10391CB944F1A` (`student_id`);

--
-- Index pour la table `subject_teacher`
--
ALTER TABLE `subject_teacher`
  ADD PRIMARY KEY (`subject_id`,`teacher_id`),
  ADD KEY `IDX_15740A7723EDC87` (`subject_id`),
  ADD KEY `IDX_15740A7741807E1D` (`teacher_id`);

--
-- Index pour la table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_B0F6A6D598771930` (`related_user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT pour la table `article_type`
--
ALTER TABLE `article_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT pour la table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `student`
--
ALTER TABLE `student`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=339;

--
-- AUTO_INCREMENT pour la table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=350;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E66C54C8C93` FOREIGN KEY (`type_id`) REFERENCES `article_type` (`id`),
  ADD CONSTRAINT `FK_23A0E66F675F31B` FOREIGN KEY (`author_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `grade`
--
ALTER TABLE `grade`
  ADD CONSTRAINT `FK_595AAE3423EDC87` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`),
  ADD CONSTRAINT `FK_595AAE34CB944F1A` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);

--
-- Contraintes pour la table `project_student`
--
ALTER TABLE `project_student`
  ADD CONSTRAINT `FK_213DA356166D1F9C` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_213DA356CB944F1A` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `project_subject`
--
ALTER TABLE `project_subject`
  ADD CONSTRAINT `FK_6DD0321F166D1F9C` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_6DD0321F23EDC87` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `FK_C11D7DD1783E3463` FOREIGN KEY (`manager_id`) REFERENCES `teacher` (`id`);

--
-- Contraintes pour la table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `FK_B723AF33139DF194` FOREIGN KEY (`promotion_id`) REFERENCES `promotion` (`id`),
  ADD CONSTRAINT `FK_B723AF3398771930` FOREIGN KEY (`related_user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `subject_student`
--
ALTER TABLE `subject_student`
  ADD CONSTRAINT `FK_12A1039123EDC87` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_12A10391CB944F1A` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `subject_teacher`
--
ALTER TABLE `subject_teacher`
  ADD CONSTRAINT `FK_15740A7723EDC87` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_15740A7741807E1D` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `FK_B0F6A6D598771930` FOREIGN KEY (`related_user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
