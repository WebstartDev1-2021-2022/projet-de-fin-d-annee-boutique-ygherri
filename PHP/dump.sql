-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 juin 2022 à 09:53
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` longtext DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `date`, `category_id`) VALUES
(5, 'Montre 1', 'vvvhghjv', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `titre`) VALUES
(1, 'Montres Femme'),
(4, 'Montres Homme'),
(5, 'Bracelets de montres');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(11) NOT NULL,
  `prix_total` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `donnees` text DEFAULT NULL,
  `date_commande` date DEFAULT NULL,
  `produits` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id`, `prix_total`, `user_id`, `donnees`, `date_commande`, `produits`) VALUES
(15, 330, 13, 'a:15:{s:10:\"produit_id\";a:3:{i:0;s:4:\"29-1\";i:1;s:4:\"55-1\";i:2;s:4:\"11-1\";}s:13:\"produit-id-29\";s:2:\"29\";s:16:\"produit-titre-29\";s:17:\"Montre connectée\";s:14:\"produit-nbr-29\";s:1:\"1\";s:16:\"produit-total-29\";s:3:\"120\";s:13:\"produit-id-55\";s:2:\"55\";s:16:\"produit-titre-55\";s:27:\"Bracelet silicone Rose Gold\";s:14:\"produit-nbr-55\";s:1:\"1\";s:16:\"produit-total-55\";s:2:\"30\";s:13:\"produit-id-11\";s:2:\"11\";s:16:\"produit-titre-11\";s:21:\"Montre Octagon Charm \";s:14:\"produit-nbr-11\";s:1:\"1\";s:16:\"produit-total-11\";s:3:\"180\";s:14:\"commande-total\";s:3:\"330\";s:7:\"user_id\";s:2:\"13\";}', '2022-06-23', 'a:3:{i:0;s:4:\"29-1\";i:1;s:4:\"55-1\";i:2;s:4:\"11-1\";}'),
(16, 330, 13, 'a:15:{s:10:\"produit_id\";a:3:{i:0;s:4:\"29-1\";i:1;s:4:\"55-1\";i:2;s:4:\"11-1\";}s:13:\"produit-id-29\";s:2:\"29\";s:16:\"produit-titre-29\";s:17:\"Montre connectée\";s:14:\"produit-nbr-29\";s:1:\"1\";s:16:\"produit-total-29\";s:3:\"120\";s:13:\"produit-id-55\";s:2:\"55\";s:16:\"produit-titre-55\";s:27:\"Bracelet silicone Rose Gold\";s:14:\"produit-nbr-55\";s:1:\"1\";s:16:\"produit-total-55\";s:2:\"30\";s:13:\"produit-id-11\";s:2:\"11\";s:16:\"produit-titre-11\";s:21:\"Montre Octagon Charm \";s:14:\"produit-nbr-11\";s:1:\"1\";s:16:\"produit-total-11\";s:3:\"180\";s:14:\"commande-total\";s:3:\"330\";s:7:\"user_id\";s:2:\"13\";}', '2022-06-23', 'a:3:{i:0;s:4:\"29-1\";i:1;s:4:\"55-1\";i:2;s:4:\"11-1\";}'),
(17, 330, 13, 'a:15:{s:10:\"produit_id\";a:3:{i:0;s:4:\"29-1\";i:1;s:4:\"55-1\";i:2;s:4:\"11-1\";}s:13:\"produit-id-29\";s:2:\"29\";s:16:\"produit-titre-29\";s:17:\"Montre connectée\";s:14:\"produit-nbr-29\";s:1:\"1\";s:16:\"produit-total-29\";s:3:\"120\";s:13:\"produit-id-55\";s:2:\"55\";s:16:\"produit-titre-55\";s:27:\"Bracelet silicone Rose Gold\";s:14:\"produit-nbr-55\";s:1:\"1\";s:16:\"produit-total-55\";s:2:\"30\";s:13:\"produit-id-11\";s:2:\"11\";s:16:\"produit-titre-11\";s:21:\"Montre Octagon Charm \";s:14:\"produit-nbr-11\";s:1:\"1\";s:16:\"produit-total-11\";s:3:\"180\";s:14:\"commande-total\";s:3:\"330\";s:7:\"user_id\";s:2:\"13\";}', '2022-06-23', 'a:3:{i:0;s:4:\"29-1\";i:1;s:4:\"55-1\";i:2;s:4:\"11-1\";}'),
(18, 330, 13, 'a:15:{s:10:\"produit_id\";a:3:{i:0;s:4:\"29-1\";i:1;s:4:\"55-1\";i:2;s:4:\"11-1\";}s:13:\"produit-id-29\";s:2:\"29\";s:16:\"produit-titre-29\";s:17:\"Montre connectée\";s:14:\"produit-nbr-29\";s:1:\"1\";s:16:\"produit-total-29\";s:3:\"120\";s:13:\"produit-id-55\";s:2:\"55\";s:16:\"produit-titre-55\";s:27:\"Bracelet silicone Rose Gold\";s:14:\"produit-nbr-55\";s:1:\"1\";s:16:\"produit-total-55\";s:2:\"30\";s:13:\"produit-id-11\";s:2:\"11\";s:16:\"produit-titre-11\";s:21:\"Montre Octagon Charm \";s:14:\"produit-nbr-11\";s:1:\"1\";s:16:\"produit-total-11\";s:3:\"180\";s:14:\"commande-total\";s:3:\"330\";s:7:\"user_id\";s:2:\"13\";}', '2022-06-23', 'a:3:{i:0;s:4:\"29-1\";i:1;s:4:\"55-1\";i:2;s:4:\"11-1\";}'),
(24, 39, 13, 'a:7:{s:10:\"produit_id\";a:1:{i:0;s:4:\"45-1\";}s:13:\"produit-id-45\";s:2:\"45\";s:16:\"produit-titre-45\";s:14:\"Bracelet Or Or\";s:14:\"produit-nbr-45\";s:1:\"1\";s:16:\"produit-total-45\";s:2:\"39\";s:14:\"commande-total\";s:2:\"39\";s:7:\"user_id\";s:2:\"13\";}', '2022-06-23', 'a:1:{i:0;s:4:\"45-1\";}'),
(25, 120, 1, 'a:7:{s:10:\"produit_id\";a:1:{i:0;s:4:\"29-1\";}s:13:\"produit-id-29\";s:2:\"29\";s:16:\"produit-titre-29\";s:17:\"Montre connectée\";s:14:\"produit-nbr-29\";s:1:\"1\";s:16:\"produit-total-29\";s:3:\"120\";s:14:\"commande-total\";s:3:\"120\";s:7:\"user_id\";s:1:\"1\";}', '2022-06-23', 'a:1:{i:0;s:4:\"29-1\";}');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `commande nb` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `prix` float NOT NULL,
  `category_id` int(11) NOT NULL,
  `sous_category_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `titre`, `description`, `img`, `prix`, `category_id`, `sous_category_id`, `date`) VALUES
(8, 'Montre Dorée', 'La collection The Upper East Side représente l\'élégance de New York et la sophistication. Dotées d\'un bracelet acier à maillons, les montres de la collection sont résolumen raffinées.', 'montre-doree.jpeg', 190, 1, 3, '2022-06-17'),
(9, 'Montre Rose Gold', 'La collection The Mercer rend hommage à l\'esprit fashion de New York. Élément classique, le cadran rond est associé à un bracelet en maille milanaise pour une touche de modernité au quotidien.', 'montre-rose.jpeg', 160, 1, 3, '2022-06-17'),
(10, 'Montre Pearl', 'La collection The Boxy est la collection signature de Rosefield. Entre ligne carrée classique et ses multiples bracelets, elle incarne une allure néo vintage. Son cadran 26 mm, l\'un des plus petits, promet un look intemporel et épuré.', 'montre-rose2.jpeg', 119, 1, 3, '2022-06-17'),
(11, 'Montre Octagon Charm ', 'Rosefield lance une nouvelle collection, entre montre et bijou, avec des pièces uniques que vous n\'avez jamais vues ou portées. Dans cette nouveauté, vous retrouvez les formes signatures et iconiques de nos précédentes collections et les dernières tendances mode. Rosefield Studio ce sont des pièces fortes pour un look intemporel et premium.!', 'montre-chaine.jpeg', 180, 1, 3, '2022-06-17'),
(12, 'Montre Vert Olive', 'La collection West village s\'inspire du quartier iconique de New York. Le cuir suédé du bracelet donne à la montre un caractère urbain et ses anneaux métallisés ajoutent une touche chic.', 'montre-verte.jpeg', 170, 1, 3, '2022-06-17'),
(13, 'Montre Cognac', 'La collection West village s\'inspire du quartier iconique de New York. Le cuir suédé du bracelet donne à la montre un caractère urbain et ses anneaux métallisés ajoutent une touche chic.', 'montre-marron.jpeg', 150, 1, 3, '2022-06-17'),
(14, 'Montre Mesh Green', 'Le classique CLUSE, par excellence ! Avec son boîtier de 33 mm, notre montre Minuit ira à n’importe quel poignet. Prête à briller ? Cette montre couleur or ornée d’un cadran brossé vert pierre vous démarquera du lot. Aucun détail superflu, rien que du léger et raffiné. Une conception durable en acier inoxydable, associée à un bracelet en maillons.', 'montre1.jpeg', 118, 1, 2, '2022-06-17'),
(15, 'Boho Chic', 'Ce modèle Boho Chic se compose d’un boîtier de 38 mm de diamètre et est conçu avec précision pour un look sophistiqué et élégant. Blanc coquille d\'oeuf et or rose sont associés à un bracelet en cuir noisette, avec un fermoir en or rose. Le bracelet peut être changé facilement, ce qui vous permet de personnaliser votre montre.', 'montre2.jpeg', 79, 1, 2, '2022-06-17'),
(16, 'Montre La Tétragone', 'Avec leur boîtier carré arrondi aux angles, les montres de la collection La Tétragone jouent sur les lignes, les structures et les formes. Célébrez la force naturelle qui est en vous avec nos bracelets-montres verts façon alligator : ils mettent parfaitement en valeur le cadran blanc et or de cette montre. Comme pour tous les modèles de notre collection La Tétragone, le bracelet de cette montre est interchangeable avec tous les bracelets-montres CLUSE de 16 mm.', 'montre3.jpeg', 99, 1, 2, '2022-06-17'),
(17, 'Steel White', 'Avec leur boîtier carré arrondi aux angles, les montres de la collection La Tétragone jouent sur les lignes, les structures et les formes. Elles mêlent avec élégance féminité et style androgyne. Ce modèle La Tétragone qui combine un cadran blanc classique et un bracelet de montre or à maillons simples est l’expression parfaite d’un design tout à la fois contemporain et intemporel.', 'montre4.jpeg', 80, 1, 2, '2022-06-17'),
(18, 'Montre Féroce', 'Intense. Sophistiquée. Stylée. La Féroce Petite est certes plus petite en taille, mais elle n\'en comporte pas moins de détails. Cette montre Féroce Petite pour femme est composée d\'un boîtier rond de 31.5 mm couleur or, d\'un bracelet 16 mm en cuir croco rose et d\'un cadran couleur blanc cassé effet sable. Cette montre pour femme est l\'accessoire parfait pour mettre un peu de piment à votre tenue.', 'montre5.jpeg', 79, 1, 1, '2022-06-17'),
(19, 'Montre Fluette', 'Notre modèle le plus populaire, la Fluette, joue la carte de l\'élégance avec un air de vintage. Cette montre Fluette pour femmes est composée d\'un boîtier de 30.6 mm couleur or et d\'un cadran blanc cassé effet sable ainsi que d\'un bracelet en cuir noir effet lézard. Grâce au look élégant de cette montre, elle sera idéale à porter en toutes occasions. Que ce soit au travail, pour un verre entre amis ou pour une soirée.', 'montre6.jpeg', 69, 1, 2, '2022-06-17'),
(20, 'Montre Féroce Black', 'Laissez s\'exprimer l\'audace qui est en vous avec notre montre pour femme Féroce Petite Leather Black Alligator couleur or. Avec son boîtier couleur or de 31,5mm et son cadran or poudré, cette petite merveille deviendra très vite votre touche en plus. Cette montre moderne est assortie avec un bracelet en cuir noir effet crocodile de 16mm pour un effet chic et classe.', 'montre7.jpeg', 75, 1, 2, '2022-06-17'),
(21, 'Steel Bicolour', 'Plus petite en taille, mais pas moins jolie pour autant. La montre Féroce Petite en acier inoxydable pour femme bicolore vous accompagnera dans toutes vos aventures quotidiennes et dans vos soirées mondaines. Grâce à son boîtier de 31,55mm couleur argent et or, ce petit trésor est pensé pour aller à la perfection à tous les poignets et tous les styles.', 'montre8.jpeg', 67, 1, 2, '2022-06-17'),
(22, 'Montre Lizard Blue', 'Cette montre au charme contemporain vous accompagne élégamment dans votre vie quotidienne et lors des occasions spéciales. La taille de la Féroce Petite a diminué, mais pas son amour du détail. Son boîtier de 31,5 mm est délicat et raffiné. Le cadran bleu clair est entouré d’un boîtier couleur argent et d’un bracelet bleu lézard, pour une finition unique et chic.', 'montre9.jpeg', 99, 1, 2, '2022-06-17'),
(23, 'Montre Silver', 'Cette pépite moderne sera votre meilleure alliée en terme de style au quotidien mais aussi lors d\'occasions spéciales. La Petite Féroce est certes plus petite en taille, mais pas moins en détails. Cette montre Petite Féroce pour femmes est composée d\'un boîtier rond de 31.5 mm couleur argent, d\'un bracelet à maillons en acier inoxydable argenté et d\'un cadran en perle blanche avec des aiguilles couleur or rose clair.', 'montre10.jpeg', 89, 1, 2, '2022-06-17'),
(24, 'Montre connectée', 'gfdg', 'montre1.jpeg', 23, 1, 1, '2022-06-17'),
(25, 'Montre connectée', 'hfgdhj;bcd', 'montre1.jpeg', 100, 1, 1, '2022-06-17'),
(26, 'Montre ctest', 'hfgdhjbcd', 'montretest.jpeg', 100, 1, 1, '2022-06-17'),
(27, 'Montre test2', 'hfgdhjbcd', 'montretest.jpeg', 100, 1, 1, '2022-06-17'),
(28, 'Montre connectée', 'vrfgdhnbgv', 'montre1montrecon1.png', 120, 1, 1, '2022-06-18'),
(29, 'Montre connectée', 're', 'montre2.jpeg', 120, 1, 4, '2022-06-21'),
(31, 'Bracelet Gris Elephant', 'Le fini sans coutures impeccable du bracelet WEST VILLAGE offre un contraste des plus modernes avec la souplesse du cuir nubuck. Propres à chaque bracelet, les délicats anneaux en métal symbolisent l\'esprit libre régnant dans le quartier. Insufflez à votre look une touche féminine et décontractée grâce au bracelet rose poudré rehaussé d\'un anneau à maillons doré.', '62b226898b14a.jpeg', 49, 5, 9, '2022-06-21'),
(32, 'Bracelet Cognac Or', 'Notre taille la plus populaire - la 33mm est un véritable hommage aux classiques. Compatible avec toute les montres des collection Boxy, West Village, upper East Side, Tribeca, Gabby et September Issue.', '62b226d095e13.jpeg', 45, 5, 9, '2022-06-21'),
(34, 'Bracelet Noir', 'Ce bracelet noir en cuir tendre et travaillé naturellement s\'associe parfaitement avec nos boîtiers fins. Fait main et cousu à la perfection, ce bracelet est un élément indispensable de votre garde-robe qui ne se démode jamais.', '62b2273f0a11b.jpeg', 39, 5, 9, '2022-06-21'),
(35, 'Bracelet Rose Tendre Or Rose', 'Le fini sans coutures impeccable du bracelet WEST VILLAGE offre un contraste des plus modernes avec la souplesse du cuir nubuck. Propres à chaque bracelet, les délicats anneaux en métal symbolisent l\'esprit libre régnant dans le quartier. Insufflez à votre look une touche féminine et décontractée grâce au bracelet rose tendre rehaussé d\'un anneau à maillons couleur or rose.', '62b2276f6aef6.jpeg', 29, 5, 9, '2022-06-21'),
(36, 'Bracelet Vert Olive Or Rose', 'Notre taille la plus populaire - la 33mm est un véritable hommage aux classiques. Compatible avec toute les montres des collection Boxy, West Village, upper East Side, Tribeca, Gabby et September Issue.', '62b227ab6a4ce.jpeg', 39, 5, 9, '2022-06-21'),
(37, 'Bracelet Croco Brun Doré', 'Notre taille la plus populaire - la 33mm est un véritable hommage aux classiques. Compatible avec toute les montres des collection Boxy, West Village, Upper East Side, Tribeca.', '62b2280a67f18.jpeg', 29, 5, 9, '2022-06-21'),
(38, 'Bracelet Gris', 'Ce bracelet gris en cuir tendre et travaillé naturellement s\'associe parfaitement avec nos boîtiers fins. Fait main et cousu à la perfection, ce bracelet est un élément indispensable de votre garde-robe qui ne se démode jamais.', '62b2283c89f5b.jpeg', 39, 5, 9, '2022-06-21'),
(39, 'Tangerine Silver Strap', 'Ce bracelet de montre Tangerine en cuir véritable fonctionne parfaitement avec nos boîtiers de montre minces. Fabriquée à la main et cousue à la perfection, cette sangle est un essentiel de garde-robe classique qui ne se démode jamais.', '62b2287177442.jpeg', 29, 5, 9, '2022-06-21'),
(40, 'Bracelet Croco Gris Rose Doré', 'Notre taille la plus populaire - la 33mm est un véritable hommage aux classiques. Compatible avec toute les montres des collection Boxy, West Village, Upper East Side, Tribeca, Gabby.', '62b228aa753d0.jpeg', 29, 5, 9, '2022-06-21'),
(41, 'Bracelet Marron Or Rose', 'Ce bracelet marron en cuir tendre et travaillé naturellement s\'associe parfaitement avec nos boîtiers fins. Fait main et cousu à la perfection, ce bracelet est un élément indispensable de votre garde-robe qui ne se démode jamais.', '62b228f1b6562.jpeg', 39, 5, 9, '2022-06-21'),
(43, 'Bracelet Vert Forêt Or', 'Notre taille la plus populaire - la 33mm est un véritable hommage aux classiques. Compatible avec toute les montres des collection Boxy, West Village, upper East Side, Tribeca, Gabby et September Issue.', '62b229f5494f7.jpeg', 49, 5, 9, '2022-06-21'),
(44, 'Bracelet Argent - Or', 'Un nouveau look pour notre collection intemporelle : The Boxy. Deux nouveautés, un nouveau style : nos nouvelles montres duotone apportent une touche d\'élégance et de mordernité à tous vos looks. Chaque montre présente un cadran blanc, orné de délicats détails et une bracelet de montre en acier inoxydable réunissant deux teintes : argent / or rose et argent / or. Osez l\'originalité avec une montre chic et intemporelle. Un design unique pour une édition spéciale par Rosefield, livrée dans un coffret signature couleur rose.', '62b22a89973d4.jpeg', 49, 5, 7, '2022-06-21'),
(45, 'Bracelet Or Or', 'Donnez une touche intemporelle et sophistiquéée à votre montre Rosefield 33mm grâce à un de nos bracelets à maillons de la nouvelle collection The Upper East Side. Les bracelets en acier brillant inoxydable offrent un rendu chic et élégant, qui s\'adapte à tous les styles. Offrez une touche de renouveau à votre montre, dès maintenant, avec notre bracelet à maillons couleur Or délicat.', '62b22abcc7ca6.jpeg', 39, 5, 7, '2022-06-21'),
(46, 'Bracelet Or Rose Or Rose', 'Bracelet à mailles en acier inoxydable couleur or rose, adapté aux montres de la collection Upper East Side. Pensé pour un look élégant et aux finitions parfaites, ce bracelet est flexible et léger pour les poignets les plus délicats.', '62b22af3e1887.jpeg', 49, 5, 7, '2022-06-21'),
(47, 'Bracelet Argent', 'Donnez une touche intemporelle et sophistiquéée à votre montre Rosefield 33mm grâce à un de nos bracelets à maillons de la nouvelle collection The Upper East Side. Les bracelets en acier brillant inoxydable offrent un rendu chic et élégant, qui s\'adapte à tous les styles. Offrez une touche de renouveau à votre montre, dès maintenant, avec notre bracelet à maillons couleur Argent glacé.', '62b22b2b874a9.jpeg', 59, 5, 7, '2022-06-21'),
(48, 'Bracelet Silver', 'Notre taille la plus populaire - la 33mm est un véritable hommage aux classiques. Compatible avec toute les montres des collection Boxy, West Village, upper East Side, Tribeca, Gabby et September Issue.', '62b22b717d740.jpeg', 46, 5, 7, '2022-06-21'),
(49, 'Bracelet Argent Personnalisé', 'Personnalisez-la: personnalisez vos montres avec vos initiales sur mesure.\r\n\r\nNotre taille la plus populaire - la 33mm est un véritable hommage aux classiques. Compatible avec toute les montres des collection Boxy, West Village, upper East Side, Tribeca, Gabby et September Issue.', '62b22bcbc77e3.jpeg', 29, 5, 7, '2022-06-21'),
(50, 'Bracelet Or Rose', 'Le bracelet 26mm est parfait pour les poignets fins, et est compatible avec toute la collection Small Edit.', '62b22c1f90b4e.jpeg', 39, 5, 7, '2022-06-21'),
(51, 'Bracelet En Acier Argenté', 'Notre plus petite taille disponible, petite et chic. Le bracelet 22mm est interchangeable avec toutes les montres de la collection Boxy XS & Octagon.', '62b22c59dcd38.jpeg', 29, 5, 7, '2022-06-21'),
(52, 'Bracelet Argent-Or Rose', 'Le bracelet 26mm est parfait pour les poignets fins, et est compatible avec toute la collection Small Edit.', '62b22cd0a0321.jpeg', 37, 5, 7, '2022-06-21'),
(53, 'Bracelet Gold', 'Notre taille la plus populaire - la 33mm est un véritable hommage aux classiques. Compatible avec toute les montres des collection Boxy, West Village, upper East Side, Tribeca, Gabby et September Issue.', '62b22d21acb5c.jpeg', 59, 5, 7, '2022-06-21'),
(54, 'Silicone White, Silver Colour', 'Ce bracelet de montre de 16 mm en silicone blanc apportera un côté décontracté à votre montre CLUSE préférée. Fabriqué à partir de silicone, ce bracelet vous apportera plus de confort et un touché très doux, que vous soyez à la plage ou lors d\'une soirée. Avec sa fermeture à boucle couleur argent, ce bracelet de montre a une finition mate élégante et se présente sans couture. Apportez une touche de bonne humeur à votre style en le combinant à l\'une de nos montres CLUSE compatibles avec les bracelets de 16 mm.', '62b22edf80640.png', 46, 5, 8, '2022-06-21'),
(55, 'Bracelet silicone Rose Gold', 'Ce bracelet de montre de 16 mm en silicone blanc apportera un côté décontracté à votre montre CLUSE préférée. Fabriqué à partir de silicone, ce bracelet vous apportera plus de confort et un touché très doux, que vous soyez à la plage ou lors d\'une soirée. Avec sa fermeture à boucle couleur or rose, ce bracelet de montre a une finition mate élégante et se présente sans couture. Apportez une touche de bonne humeur à votre style en le combinant à l\'une de nos montres CLUSE compatibles avec les bracelets de 16 mm.', '62b22ffd1d924.png', 30, 5, 8, '2022-06-21'),
(56, 'Silicone Orange Rose Gold ', 'Ce bracelet de montre de 16 mm en silicone orange apportera un côté décontracté à votre montre CLUSE préférée. Fabriqué à partir de silicone, ce bracelet vous apportera plus de confort et un touché très doux, que vous soyez à la plage ou lors d\'une soirée. Avec sa fermeture à boucle couleur or rose, ce bracelet de montre a une finition mate élégante et se présente sans couture. Apportez une touche de bonne humeur à votre style en le combinant à l\'une de nos montres CLUSE compatibles avec les bracelets de 16 mm.', '62b2316e9aacf.png', 29, 5, 8, '2022-06-21');

-- --------------------------------------------------------

--
-- Structure de la table `sous_categories`
--

CREATE TABLE `sous_categories` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sous_categories`
--

INSERT INTO `sous_categories` (`id`, `titre`, `category_id`) VALUES
(1, 'Montres connectées', 1),
(2, 'Montres classiques', 1),
(3, 'Montres de luxe', 1),
(4, 'Montres connectées', 4),
(5, 'Montres classiques', 4),
(6, 'Montres de luxe', 4),
(7, 'Acier', 5),
(8, 'Silicone', 5),
(9, 'Cuir', 5);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` char(60) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `tel`, `role`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Yesmine', 'Gherri', 'gherri.yesmine@gmail.com', '0634236567', 'ROLE_ADMIN'),
(7, 'adam.belhaj@gmail.com', '69531ad5b7e3c15ba4d2bbe29b00b4ecb563eb8a', 'adam', 'belhaj', 'adam.belhaj@gmail.com', 'adam.belha', 'ROLE_USER'),
(12, 'yes', '6b3a7351ec119b6c45f6398bb06d7426cd54004f', 'Yesmine', 'Gherri', 'gherri.yesmine@gmail.com', '0634236567', 'ROLE_USER'),
(13, 'ali.belhadjj@gmail.com', 'ea9d64f9cf4680c2c6d83787c70933b4fef6bb03', 'ali', 'belhaj', 'ali.belhadjj@gmail.com', '0658588585', 'ROLE_USER');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `sous_category_id` (`sous_category_id`);

--
-- Index pour la table `sous_categories`
--
ALTER TABLE `sous_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `sous_categories`
--
ALTER TABLE `sous_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `produits_ibfk_2` FOREIGN KEY (`sous_category_id`) REFERENCES `sous_categories` (`id`);

--
-- Contraintes pour la table `sous_categories`
--
ALTER TABLE `sous_categories`
  ADD CONSTRAINT `sous_categories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
