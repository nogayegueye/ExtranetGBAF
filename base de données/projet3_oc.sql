-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 22 oct. 2021 à 18:36
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet3_oc`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

DROP TABLE IF EXISTS `acteur`;
CREATE TABLE IF NOT EXISTS `acteur` (
  `id_acteur` int(11) NOT NULL AUTO_INCREMENT,
  `acteur` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `logo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_acteur`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `acteur`
--

INSERT INTO `acteur` (`id_acteur`, `acteur`, `description`, `logo`) VALUES
(1, 'Formation&co', 'Formation&co est une association française présente sur tout le territoire.\r\nNous proposons à des personnes issues de tout milieu de devenir entrepreneur grâce à un crédit et un accompagnement professionnel et personnalisé.\r\nNotre proposition : \r\n●	un financement jusqu’à 30 000€ ;\r\n●	un suivi personnalisé et gratuit ;\r\n●	une lutte acharnée contre les freins sociétaux et les stéréotypes. \r\n\r\nLe financement est possible, peu importe le métier : coiffeur, banquier, éleveur de chèvres… . \r\nNous collaborons avec des personnes talentueuses et motivées.\r\nVous n’avez pas de diplômes ? Ce n’est pas un problème pour nous ! Nos financements s’adressent à tous.', 'formation_co.png'),
(2, 'DSA-France', 'Dsa France accélère la croissance du territoire et s’engage avec les collectivités territoriales.\r\nNous accompagnons les entreprises dans les étapes clés de leur évolution.\r\nNotre philosophie : s’adapter à chaque entreprise.\r\nNous les accompagnons pour voir plus grand et plus loin et proposons des solutions de financement adaptées à chaque étape de la vie des entreprises', 'Dsa_france.png'),
(3, 'CDE (Chambre Des Entrepreneurs)', 'La CDE (Chambre Des Entrepreneurs) accompagne les entreprises dans leurs démarches de formation. \r\nSon président est élu pour 3 ans par ses pairs, chefs d’entreprises et présidents des CDE.', 'CDE.png'),
(5, 'Protect-People', 'Protectpeople finance la solidarité nationale.\r\nNous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de bénéficier d’une protection sociale.\r\n\r\nChez Protectpeople, chacun cotise selon ses moyens et reçoit selon ses besoins.\r\nProectecpeople est ouvert à tous, sans considération d’âge ou d’état de santé.\r\nNous garantissons un accès aux soins et une retraite.\r\nChaque année, nous collectons et répartissons 300 milliards d’euros.\r\nNotre mission est double :\r\n●	sociale : nous garantissons la fiabilité des données sociales ;\r\n●	économique : nous apportons une contribution aux activités économiques.', 'protectpeople.png');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom_utilisateur` varchar(100) NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `reponse` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id_user`, `nom`, `prenom`, `nom_utilisateur`, `mot_de_passe`, `question`, `reponse`) VALUES
(11, 'nogave', 'gaye', 'losirendam', 'a627406db29f6093da55214bb08fe7d3c959e212', 'bonjour', 'oui'),
(12, 'moustapha', 'gueye', 'mgueye', '33bc23c37b06492290e3134d1d5b8ffd35310de9abc4bc10f98856d871c95d3c', 'bonjour', 'oui'),
(13, 'seck', 'astou', 'aseck', 'f6035f930127c484695d06f5ebf7a98fbf79323bf44758aed3c2b4d00901e6d3', 'pays ', 'france'),
(14, 'fall', 'penda', 'penda', 'f6035f930127c484695d06f5ebf7a98fbf79323bf44758aed3c2b4d00901e6d3', 'bonjour', 'oui'),
(15, 'nom', 'prenomaa', 'surnom', '91b25c04f92efe0bc87e0cb53fa885732ce30222', 'question', 'reponse'),
(16, 'gueyea', 'adjia', 'madaa', 'a627406db29f6093da55214bb08fe7d3c959e212', 'bonjour', 'oui'),
(17, 'ndiaye', 'mamiaa', 'mamia', '1dbedaa4cc1adfe2a4e96fb3376fbcc716804e31', 'gfuu', 'hvcgft'),
(18, 'a', 'ba', 'ab', '6fee74066d6f9452b311669272b91809504534c5', 'gf', 'gfd'),
(19, 'bb', 'cca', 'bc', '65c441647a1b1a038807cc977588a8ea6912aab3754785ceb025ad99730749f8', 'hjgf', 'gfdyt'),
(20, 'loo', 'birane', 'baye', 'f6035f930127c484695d06f5ebf7a98fbf79323bf44758aed3c2b4d00901e6d3', 'bonjour', 'oui'),
(21, 'seck', 'ibrahima', 'serigne', 'f6035f930127c484695d06f5ebf7a98fbf79323bf44758aed3c2b4d00901e6d3', 'je sais', 'pas'),
(22, 'seck', 'mame', 'diarra', 'f2d81a260dea8a100dd517984e53c56a7523d96942a834b9cdc249bd4e8c7aa9', 'bonjour', 'oui'),
(23, 'fall', 'mareme', 'astou', 'f6035f930127c484695d06f5ebf7a98fbf79323bf44758aed3c2b4d00901e6d3', 'ohhh', 'ohhh'),
(24, 'ndiaye', 'maguette', 'maguita', 'f6035f930127c484695d06f5ebf7a98fbf79323bf44758aed3c2b4d00901e6d3', 'best', 'best');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_acteur` int(11) NOT NULL,
  `date_add` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post` text NOT NULL,
  PRIMARY KEY (`id_post`),
  KEY `id_user` (`id_user`,`id_acteur`),
  KEY `id_acteur` (`id_acteur`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id_post`, `id_user`, `id_acteur`, `date_add`, `post`) VALUES
(32, 11, 1, '2021-10-15 21:56:58', 'je commente cette page'),
(33, 16, 1, '2021-10-15 21:57:48', 'éééééééééé'),
(34, 19, 1, '2021-10-16 20:20:10', 'HFYUH'),
(35, 21, 1, '2021-10-19 15:04:23', 'je susdnd'),
(36, 21, 2, '2021-10-20 00:21:39', 'je suis sage'),
(37, 21, 5, '2021-10-20 00:43:17', 'je comment cette page'),
(38, 21, 5, '2021-10-20 00:43:30', 'je veux\r\n'),
(39, 20, 1, '2021-10-20 20:09:33', 'jhgdcsuigvc'),
(40, 24, 1, '2021-10-22 03:17:58', 'tu es my best'),
(41, 24, 3, '2021-10-22 03:22:21', 'salut best je suis là'),
(42, 24, 5, '2021-10-22 03:23:15', 'il a commenté deux fois');

-- --------------------------------------------------------

--
-- Structure de la table `vote`
--

DROP TABLE IF EXISTS `vote`;
CREATE TABLE IF NOT EXISTS `vote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_acteur` int(11) NOT NULL,
  `vote` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_acteur` (`id_acteur`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vote`
--

INSERT INTO `vote` (`id`, `id_user`, `id_acteur`, `vote`) VALUES
(70, 23, 1, 0),
(71, 23, 2, 1),
(72, 20, 3, 0),
(73, 20, 1, 0),
(74, 24, 1, 1),
(75, 24, 3, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `compte` (`id_user`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`id_acteur`) REFERENCES `acteur` (`id_acteur`);

--
-- Contraintes pour la table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `compte` (`id_user`),
  ADD CONSTRAINT `vote_ibfk_2` FOREIGN KEY (`id_acteur`) REFERENCES `acteur` (`id_acteur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
