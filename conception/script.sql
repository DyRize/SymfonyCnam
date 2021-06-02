-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : mar. 01 juin 2021 à 22:05
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
(91, 276, 74, 'Article 1', 'Il fallut tirer la chose était scabreuse et qu\'il regardait monter doucement dans un bassin de marbre où, parmi du cresson et des tableaux orgiaques avec des visions de béatitude se répandit en paroles sur les planches étroites qui servaient d\'enseigne à sa disposition, et qu\'ils font bien d\'autres! exclama l\'apothicaire. -- Monsieur!... reprit l\'ecclésiastique avec des gestes mignons de tête, et alors il s\'écria: -- Oh! Rodolphe!... fit lentement la côte du Bois-Guillaume, où il y avait même soin de mettre pour eux, et on entendait par moments une pêche mûre qui tombait toute seule de sa liberté, qui le silence comme un sacerdoce, bien que le vôtre; et qu\'on ait l\'idée, par exemple de monter une poule patriotique pour la chasse. Après la cour un cabriolet, et, pressant le palefrenier, l\'encourageant, s\'informant à toute force, il dressa contre lui une batterie cachée, qui décelait la profondeur de son corsage. Deux jours après, Hippolyte n\'y pouvant plus tenir, ils retirèrent encore.', '1988-10-07 03:32:16', '1988-10-07 03:32:16'),
(92, 277, 77, 'Article 2', 'Elle allait chez les libraires, répété dans les ténèbres, au pied des collines vertes, et les angles. -- Où vous voudrez! dit Léon poussant Emma dans une douceur tout enfantine, et sa tête avec un sentiment de siccité au pharynx, puis des râles élégiaques d\'une douceur infinie, et les rayons des deux côtés sur un canapé dans cet enivrement sans même s\'inquiéter de rien, dit-elle. Alors M. Lheureux (s\'adressant au pharmacien, qui passait sur la bouche, comme pour aller fermer la pharmacie. Elle avait des femmes. Il lui faut toujours sa place dans le lointain, la fanfare de ses lectures les plus lointains. Mais une jeune fille de quatorze ans, orpheline et de n\'avoir pas songé à rien au monde! tu es bon, toi! Et elle soupira. -- O Rodolphe! si tu te trompes! Alors, délicatement et presque dans la basse-cour, crier les volailles que la bonne apportait une botte vernie. Mais Hippolyte, n\'osant à tous les deux tiers, avouer conséquemment la vente de l\'immeuble, négociation bien conduite.', '1972-02-13 00:39:49', '1988-10-07 03:32:16'),
(93, 280, 76, 'Article 3', 'Elle se précipitait à droite comme pour aller faire à quelqu\'un la confidence de votre existence.» C\'était la réclame qu\'il destinait à une haridelle semblable, dont les blés verts, s\'allongea bientôt et se combinant de soi-même des carrés verts réguliers. L\'église a été rebâtie à neuf heures du soir, Hivert la réveilla. En rentrant chez elle, Emma se graissa donc les mains de mes enfants, mettre l\'étincelle dans leur verre. Cependant, au haut d\'un mollet rebondi. Le Marquis ouvrit la porte. Bovary, pendant ce temps-là, n\'osait bouger de sa gentillesse et de térébenthine, quatre onces de cire bleue, suppliait M. Bovary était partie, il essayait de s\'aviver à tous les soirs! Pauvre petite femme! Ça bâille après l\'amour, comme aux plantes indiennes, des terrains préparés, une température particulière? Les soupirs au clair de lune, je me ferai saigner, s\'il le faut; nous deviendrons amis, je les inviterai chez moi... Ah! parbleu! ajouta-t-il, voilà les comices bientôt; elle y resta.', '1985-04-04 13:29:03', '1988-10-07 03:32:16'),
(94, 281, 75, 'Article 4', 'Au sortir de table; et, par égard pour sa fille. D\'abord, elle trouva moyen d\'expulser la mère Bovary s\'effraya pour le 4 septembre, un lundi. Enfin le samedi, l\'avant-veille, arriva. Rodolphe vint le chercher pour dîner. Il avait mené une vie bruyante de débauches, pleine de monde, de vacarme et de madame Bovary, rien n\'est plus à l\'aise dans les espaces immaculés. Elle sortit, elle traversa le boulevard, chez un voisin. Sa femme avait été folle de lui prendre quelque chose? Qu\'est-ce donc? qu\'y a-t-il? -- Ce qu\'il ne pourrait payer les billets, qu\'on les renouvellerait, et que je vous prierais... -- De M. Guillaumin. Et, avec des cigares l\'étourdit. Elle s\'évanouissait; on la poussait vers lui, si bien que, sur des bâtons. Les bêtes étaient là, le souhaitait presque, et c\'était pour Bovary comme l\'indéfinissable suicide d\'une partie d\'elle-même! -- Si vous étiez comme moi, répliqua Léon; quelle meilleure chose, en effet, prêtait sur gages, et c\'est dans ce temps-là! quelle liberté!.', '1986-09-19 04:01:50', '1988-10-07 03:32:16'),
(95, 282, 76, 'Article 5', 'Au petit jour, madame Bovary l\'abandonnant à chaque souffle de sa langue, passant entre les colonnes, tandis que d\'insaisissables pensées qui lui serrait les mains de Justin; ses genoux sa tapisserie commencée, souvent elle tressaillait à l\'apparition de cette majesté débonnaire que donnent la conscience d\'un grand espace. Le bleu du ciel pâle. Ainsi vu d\'en haut, où sont les... -- Comment? -- Oh! pas ici! -- Où vous voudrez. -- Voulez-vous... Elle parut réfléchir, et, d\'un mouvement brusque entrait dans la voiture, avait essayé de la place, sans chapeau, abandonna la maison. Emma fit sa toilette avec la pointe de son mari, était venue se réfugier en sa présence, l\'émotion tombait, et il comptait les écailles leur tomber des yeux. Alors elle tâcha de se sentir troublé. -- Diable!... cependant... elle est fort gentille, cette femme pourrait encore lui proposer un arrangement. C\'était de visiter sa maison; il désirait la connaître; et, madame Bovary mère arriva. Elle revit la ferme, on.', '2000-09-13 14:08:35', '1988-10-07 03:32:16');

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
(74, 'INFO', 'INFORMATION'),
(75, 'EVENT', 'EVENEMENT'),
(76, 'BDE', 'BDE'),
(77, 'ADMN', 'ADMINISTRATION');

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
(25, 287, 31, 'mathematiques pour l\'informatique', '1972-11-25 15:44:47', 15),
(26, 287, 33, 'mathematiques pour l\'informatique', '1988-11-24 18:07:13', 20),
(27, 287, 32, 'mathematiques pour l\'informatique', '1997-01-24 17:06:46', 8);

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
(11, 'PQRL2021', 'Porquerolles', '1993-07-06 06:11:26', NULL, 'Paris, titres de romans, quadrilles nouveaux, et le bourg paresseux, s\'écartant de sa poitrine large la ligne des bancs, marchant à grands pas lourds dans ses bras. On le tuerait plutôt que.');

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
(11, 31),
(11, 32),
(11, 33);

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
(11, 309),
(11, 312);

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
(27, 42, 'prm_2018', '2018-2021', '2002-02-14 16:06:07', NULL),
(28, 43, 'prm_2019', '2019-2022', '1989-01-31 04:54:32', NULL),
(29, 41, 'prm_2020', '2020-2023', '2014-02-23 12:29:54', NULL);

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
(31, 280, 28, '2018-02-20 15:07:50', NULL),
(32, 282, 28, '2004-01-19 03:10:06', NULL),
(33, 281, 28, '1991-11-15 06:46:03', NULL);

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
(287, 'STMN01', 'Mathématiques pour l\'informatique'),
(288, 'STMN02', 'Architecture des systèmes informatiques'),
(289, 'STMN03', 'Algorithmique et programmation'),
(290, 'STMN04', 'Base de la physique pour le transmédia'),
(291, 'STMN05', 'Rapport R1'),
(292, 'STMN06', 'Communication Expression'),
(293, 'STMN08', 'Gestion des projets des médias numériques'),
(294, 'STMN09', 'Traitement du signal'),
(295, 'STMN0A', 'Principes des systèmes d\'exploitation'),
(296, 'STMN0C', 'Technologies transmédia'),
(297, 'STMN0D', 'Interface Homme - Machine'),
(298, 'STMN0E', 'Rapport R2'),
(299, 'STMN1B', 'Programmation et outils de développement d\'application transmédia'),
(300, 'STMN0B', 'Réseaux'),
(301, 'STMN10', 'Synthèse et analyse des images et du son'),
(302, 'STMN11', 'Base de données'),
(303, 'STMN12', 'Conception et développement 1 : programmation orientée objet'),
(304, 'STMN13', 'Projets pluridisciplinaires 1'),
(305, 'STMN14', 'Communication expression S3'),
(306, 'STMN15', 'Rapport R3'),
(307, 'STMN18', 'Conception et développement 2 : programmation mobile'),
(308, 'STMN19', 'Programmation Web'),
(309, 'STMN1A', 'Systèmes d\'interaction'),
(310, 'STMN1C', 'Rapport R4'),
(311, 'STMN1D', 'Sejour international'),
(312, 'STMN21', 'Génie Logiciel');

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
(287, 31),
(287, 32),
(287, 33),
(300, 31),
(300, 32),
(300, 33),
(307, 31),
(307, 32),
(307, 33),
(308, 31),
(308, 32),
(308, 33),
(309, 31),
(309, 32),
(309, 33),
(310, 31),
(310, 32),
(310, 33),
(311, 31),
(311, 32),
(311, 33),
(312, 31),
(312, 32),
(312, 33);

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
(289, 42),
(301, 42),
(301, 43),
(307, 41),
(309, 40);

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
(40, 276),
(41, 277),
(42, 278),
(43, 279);

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
(276, 'Yannick', 'Bacquet', 'yannick.bacquet@univ-tln.fr', '$argon2id$v=19$m=65536,t=4,p=1$PT6oAdFpF74oYCZBfQ8chw$xgKiaE9geRKseZcOujBEZxPEjyTx/RGGXyuQB8Pid1o', '2014-03-29 11:46:28', '+33 (0)6 79 46 44 04', '2021-06-01 21:44:42', '2021-06-01 21:44:42', '[\"ROLE_ADMIN\"]', 0),
(277, 'Olivia', 'Papini', 'olivia.papini@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$F1tSeM4B/3TaMvM0435j3A$95ggBRDmfPz3Yk4XRB+1Aayw2qyDI+ahdLqIU8+VxiA', '1992-01-22 13:55:11', '+33 (0)6 71 33 76 30', '2021-06-01 21:44:42', '2021-06-01 21:44:42', '[\"ROLE_SPEAKER\"]', 0),
(278, 'Jean-Marc', 'Robert', 'jean-marc.robert@lecnam.net', '$argon2id$v=19$m=65536,t=4,p=1$/ZxPpzEAi1S3urrwbsKsvw$EN/y90yN7+hd/QoobbIzhO5KAskHnqviiL7MJgkJ4cI', '1973-01-23 06:53:05', '01 07 14 33 24', '2021-06-01 21:44:42', '2021-06-01 21:44:42', '[\"ROLE_SPEAKER\"]', 0),
(279, 'Ricard', 'Marxer', 'ricard.marxer@lecnam.net', '$argon2id$v=19$m=65536,t=4,p=1$cDiZ1IorbPBu0nc8W9GhtA$ePbNwhn+QL26E7dx2m6JnxnUraTKvA3ow54uXBM4GMg', '2008-03-25 15:36:18', '0589348676', '2021-06-01 21:44:42', '2021-06-01 21:44:42', '[\"ROLE_SPEAKER\"]', 0),
(280, 'Dylan', 'Le Flour', 'dylan.leflour25@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$4OuUi0yHwa+IR6/Zq3jgFQ$+Epbp2xdNIUmzjjUFco8cQgkeDDx04pqXDGekYxAdX0', '1999-10-25 00:00:00', '0786423929', '2021-06-01 21:44:42', '2021-06-01 21:44:42', '[\"ROLE_DELEGATE\", \"ROLE_BDE\", \"ROLE_STUDENT\"]', 0),
(281, 'Corentin', 'Maugez', 'corentin.mgz@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$Veus2em6CrbEdaIUOzK5aQ$qlIXFeUsTnDa9pgnM/39zsJCxoXlW9CRp6HI8mLuM2g', '1997-03-22 00:00:00', '0626221481', '2021-06-01 21:44:42', '2021-06-01 21:44:42', '[\"ROLE_BDE\", \"ROLE_STUDENT\"]', 0),
(282, 'Ludovic', 'Genevois', 'ludovic.genevois@hotmail.fr', '$argon2id$v=19$m=65536,t=4,p=1$AXOJu9BSAXhgeP7rSjLoMA$edV2Uk8hdAqHTQGETkNpwQ+7++CMAlg46iAqN88dfok', '1997-04-24 00:00:00', '0651190268', '2021-06-01 21:44:42', '2021-06-01 21:44:42', '[\"ROLE_STUDENT\"]', 0),
(283, 'Thibault', 'Poulain', 'nicole.camus@clement.org', '$argon2id$v=19$m=65536,t=4,p=1$8sMZ6fjpmadJnbKlvIUcMg$Blc+MXgJ0Y/Fq6FvIUdlnVgiPb+vOCQOmYxf4YvcIiM', '1993-12-29 18:08:22', '+33 (0)2 01 65 66 35', '2021-06-01 21:44:42', '2021-06-01 21:44:42', '[]', 0),
(284, 'Jacques', 'Mathieu', 'alice.legrand@gay.fr', '$argon2id$v=19$m=65536,t=4,p=1$EVKlLOKJoK6wHFnG70Gb7w$Hf4SWUlJEUe6HjCkP33kj/0RCbvzZ4yWscnBtduCBiQ', '1973-10-03 00:05:06', '0791020512', '2021-06-01 21:44:42', '2021-06-01 21:44:42', '[]', 0),
(285, 'Nath', 'Gerard', 'anastasie86@moulin.com', '$argon2id$v=19$m=65536,t=4,p=1$N1l8CC41CFatelaw9RWJ3A$yd2inmj25I1Fhm3Usfiphk08RclB9T6r5Ctu4ziJ5xA', '2020-04-01 09:31:26', '+33 6 95 76 87 57', '2021-06-01 21:44:43', '2021-06-01 21:44:43', '[]', 0),
(286, 'Daniel', 'Besson', 'raymond.meyer@pelletier.fr', '$argon2id$v=19$m=65536,t=4,p=1$3AQrnzpzx7TPWUjaiiillQ$25CB2Zg3bJ586oR2JnFBdAbqogfL19Vnc6VxRegiRFM', '1986-07-22 11:48:12', '06 88 02 92 34', '2021-06-01 21:44:43', '2021-06-01 21:44:43', '[]', 0),
(287, 'Amélie', 'Blondel', 'chevallier.martine@leroux.com', '$argon2id$v=19$m=65536,t=4,p=1$a4feN4hlnxZKe6OmDE1f0g$4t0+wa8UKgOa2PfgdXlOALZlcaUtmkhBx8cAAAKngUc', '1997-12-26 06:50:47', '0248623241', '2021-06-01 21:44:43', '2021-06-01 21:44:43', '[]', 0),
(288, 'William', 'Verdier', 'qbernard@club-internet.fr', '$argon2id$v=19$m=65536,t=4,p=1$e8qFyFCc/JXWbV7ogP6HOQ$g0ticCmw6Fnn02T33pjZ0fRD02njBf+2bs3SlU746EI', '2003-09-18 05:13:02', '09 51 00 56 73', '2021-06-01 21:44:43', '2021-06-01 21:44:43', '[]', 0),
(289, 'Marianne', 'Meunier', 'christine.gomez@giraud.com', '$argon2id$v=19$m=65536,t=4,p=1$oBzVUEA5Y+aoDbeN6GxJAw$xLK7MefYpIMROXwr2eVEsfYtnvE1n/pkiGY+N+VCxaY', '1983-04-09 11:15:06', '+33 (0)2 15 47 29 02', '2021-06-01 21:44:43', '2021-06-01 21:44:43', '[]', 0),
(290, 'Isaac', 'Leroy', 'valentine73@roche.fr', '$argon2id$v=19$m=65536,t=4,p=1$HCLlLqzh0rlOuok0htnOXg$3o8uNtSStWOn0TJHCVA6SsWz/7Z7bL+89MantgiNNWI', '1973-05-15 23:10:40', '0261903841', '2021-06-01 21:44:43', '2021-06-01 21:44:43', '[]', 0),
(291, 'Frédéric', 'Bouchet', 'zacharie.brunet@lemaire.fr', '$argon2id$v=19$m=65536,t=4,p=1$IZtXUZ2YSNympmw0mZSK4g$mwBXODkaRVly42S1a4onZOF2Kogm6FDEziZK4l1JhdI', '2010-03-16 11:11:26', '06 80 74 52 64', '2021-06-01 21:44:43', '2021-06-01 21:44:43', '[]', 0),
(292, 'Marine', 'Rousset', 'coulon.francois@club-internet.fr', '$argon2id$v=19$m=65536,t=4,p=1$BzpYuNCkvLrz+3w/1kzYHg$9M4Pyiag3webWakQJLGnwTSISNGovOwMAL9BwWtWBN4', '1990-03-14 14:40:42', '04 19 03 51 60', '2021-06-01 21:44:43', '2021-06-01 21:44:43', '[]', 0),
(293, 'Emmanuelle', 'Rocher', 'moreau.eugene@gallet.org', '$argon2id$v=19$m=65536,t=4,p=1$u2/reJ9+M87NAh8w7JF1Ng$Vk93c6d1HRH51uFgoOz/Sj/PQQWSDR4sYCNapWjCQYs', '1999-02-02 19:54:37', '0105341159', '2021-06-01 21:44:43', '2021-06-01 21:44:43', '[]', 0),
(294, 'Josette', 'Berthelot', 'mathilde.fournier@wanadoo.fr', '$argon2id$v=19$m=65536,t=4,p=1$Xi0yK86nugRD6/J9gpLveA$P0GnAwZfoQBJlV9yu9Yb3riA6dobNGzOuGGbzSOvOAo', '1972-12-28 15:29:04', '0212543104', '2021-06-01 21:44:43', '2021-06-01 21:44:43', '[]', 0),
(295, 'Tristan', 'Lenoir', 'hugues.loiseau@orange.fr', '$argon2id$v=19$m=65536,t=4,p=1$LVBroAXIFrPNYv+ffQwBJg$wucIwfgJnUgkXOQfsZdIGgfNsaBYxNf+rrfAz30ands', '1985-07-31 11:36:32', '0514375147', '2021-06-01 21:44:43', '2021-06-01 21:44:43', '[]', 0),
(296, 'Louis', 'Guyot', 'ximbert@club-internet.fr', '$argon2id$v=19$m=65536,t=4,p=1$dcndyuedbmmEZYqxcluc4A$hWhGlu5NhLAbyj0d4TEVA+c/AsPyl6dfA4ikMgOaCI4', '1978-04-08 11:24:52', '0342734592', '2021-06-01 21:44:44', '2021-06-01 21:44:44', '[]', 0),
(297, 'Joseph', 'Benard', 'jblanchard@poulain.com', '$argon2id$v=19$m=65536,t=4,p=1$Q6urF16a70faxedWC7bLHQ$ORU//kKdPu5fwiJnLyDI4y8dkIB2i2ESjDDP61wJV9c', '1975-10-03 21:42:15', '0622787124', '2021-06-01 21:44:44', '2021-06-01 21:44:44', '[]', 0),
(298, 'Franck', 'Jacques', 'ibigot@menard.com', '$argon2id$v=19$m=65536,t=4,p=1$zOXSiuiK2cPpta+dHe0uKA$b/S5b3TP8C55kNu3KQTvpuxGl6ZgpkQJ3dCqTCR3ZSk', '1980-10-26 03:45:11', '+33 (0)6 61 70 97 21', '2021-06-01 21:44:44', '2021-06-01 21:44:44', '[]', 0),
(299, 'Olivie', 'Roger', 'drobin@club-internet.fr', '$argon2id$v=19$m=65536,t=4,p=1$S4E7DAjtTo9BLj8AleNt4g$y/IwLWZ0/EmrK/ZXmf2DNjSDN1B9A2ud4u5C9bKOjqw', '1977-04-28 12:55:53', '+33 5 22 79 51 15', '2021-06-01 21:44:44', '2021-06-01 21:44:44', '[]', 0),
(300, 'François', 'Simon', 'vincent92@delannoy.com', '$argon2id$v=19$m=65536,t=4,p=1$t5j4hjumOFFXJuIX6/5Z2Q$s3Djk5dFqfxHAUeGulk37FSTgk+ampzQdH/taKaJVL0', '1997-03-08 14:22:01', '0635074799', '2021-06-01 21:44:44', '2021-06-01 21:44:44', '[]', 0),
(301, 'Louis', 'Rodrigues', 'nathalie38@delmas.com', '$argon2id$v=19$m=65536,t=4,p=1$byttHqjAIKs3+MNVyACjwQ$aBHIE06h5nfNEyimSysXGbNtHZyft+XT+/zRWuTBenk', '1982-01-07 00:59:30', '+33 (0)8 19 07 18 50', '2021-06-01 21:44:44', '2021-06-01 21:44:44', '[]', 0),
(302, 'René', 'Lemonnier', 'diane99@ramos.com', '$argon2id$v=19$m=65536,t=4,p=1$vLRrrw2SP6oFuacaYbTteg$ku5Ne3SLD99bp44KXEltBqF6iseXtdLCCeWUUkZf/ic', '2020-03-10 12:38:13', '09 02 88 66 74', '2021-06-01 21:44:44', '2021-06-01 21:44:44', '[]', 0),
(303, 'Franck', 'Regnier', 'mrey@lambert.com', '$argon2id$v=19$m=65536,t=4,p=1$PcSH31h7StsSCexKJZTV6Q$+WQ4evWTI9USekMp/MR6hyK6ZFqBmhQ2IIHIShQJ65M', '1987-06-27 17:15:02', '+33 6 65 34 19 60', '2021-06-01 21:44:44', '2021-06-01 21:44:44', '[]', 0),
(304, 'Michelle', 'Dupre', 'langlois.josette@auger.fr', '$argon2id$v=19$m=65536,t=4,p=1$ewnLGob9MYhOGIib99qlGw$EXBoX/opVdLdIwLgN1oKDg5bkBYcAJs3/ZQzfienu6g', '1984-12-07 11:10:47', '+33 7 77 24 98 88', '2021-06-01 21:44:44', '2021-06-01 21:44:44', '[]', 0),
(305, 'David', 'Millet', 'qferreira@vidal.fr', '$argon2id$v=19$m=65536,t=4,p=1$vPQXhPOg+fLyyjJmBg1FJA$7zljTz3pXia6FJ8uqcVmpZGTTlMSLpUpHYdhvs054Q8', '2009-02-02 06:30:03', '+33 (0)9 12 66 02 28', '2021-06-01 21:44:44', '2021-06-01 21:44:44', '[]', 0),
(306, 'Honoré', 'Gonzalez', 'smoreau@pichon.com', '$argon2id$v=19$m=65536,t=4,p=1$l0XSPZRSe8dbEBsqUS9clg$1VMyayvM0Osh0IKNT8e5In0yfrb2frSIp98PMCgj7+g', '1988-12-28 05:40:00', '+33 (0)6 29 96 94 72', '2021-06-01 21:44:44', '2021-06-01 21:44:44', '[]', 0),
(307, 'Honoré', 'Clement', 'rene78@wanadoo.fr', '$argon2id$v=19$m=65536,t=4,p=1$irNmmRxLLAJ9P8catF/Odg$CQDhP403Ut21pXOn2Bc9OUEIbkDevG5a34ZiSrDPOsc', '2021-04-09 16:12:37', '+33 (0)2 68 48 54 26', '2021-06-01 21:44:45', '2021-06-01 21:44:45', '[]', 0),
(308, 'Jean', 'Laine', 'ubarbier@legrand.fr', '$argon2id$v=19$m=65536,t=4,p=1$/59baEaNL0pX4Cl7O9m/tw$b7UHyTPofU1CpN2qklMi+QV4m4tzZvT5hKWkWy0wSFk', '2010-01-22 17:32:36', '+33 7 39 21 72 73', '2021-06-01 21:44:45', '2021-06-01 21:44:45', '[]', 0),
(309, 'Gabrielle', 'Daniel', 'alexandre78@fernandez.org', '$argon2id$v=19$m=65536,t=4,p=1$mybB/3IWEA8QBMl/oeiLKw$1iSD4FnuxwGeSjB3xunCBTuePFGKR4OQCy6wXdFv2M0', '1975-12-22 19:30:51', '+33 9 35 42 73 70', '2021-06-01 21:44:45', '2021-06-01 21:44:45', '[]', 0),
(310, 'Édith', 'Giraud', 'tnicolas@barbe.fr', '$argon2id$v=19$m=65536,t=4,p=1$q3ipoZxmYNT67ZeD/M44gQ$yKhKGtsELdqjrgRa5gfbUQtLkK1aHUw6AleG1IPU4oc', '2009-04-04 17:49:12', '+33 4 48 09 42 79', '2021-06-01 21:44:45', '2021-06-01 21:44:45', '[]', 0),
(311, 'Maggie', 'Paul', 'marthe.lacombe@lagarde.fr', '$argon2id$v=19$m=65536,t=4,p=1$2VODqt4NyYs74Aox8VApDg$xKrv75/4ZaqiAWzW8M1uz/t4A1cLljlZqmu8pAnOZUw', '1976-12-17 02:23:56', '+33 1 11 04 20 38', '2021-06-01 21:44:45', '2021-06-01 21:44:45', '[]', 0),
(312, 'Sylvie', 'Lemoine', 'maryse.bousquet@laposte.net', '$argon2id$v=19$m=65536,t=4,p=1$2ICJwa3TNWBjfeA3a4w48g$zQrpoWZ810TN7L0DQuJepqSV+Q3+ZlSUuO2DLMhF7/E', '2008-12-21 16:47:41', '+33 (0)9 44 00 29 35', '2021-06-01 21:44:45', '2021-06-01 21:44:45', '[]', 0);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT pour la table `article_type`
--
ALTER TABLE `article_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT pour la table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `student`
--
ALTER TABLE `student`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT pour la table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

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
