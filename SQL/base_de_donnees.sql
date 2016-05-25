-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Mer 25 Mai 2016 à 14:41
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `infosup_ppe20`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `date_reservation` date NOT NULL,
  `hour_start` time NOT NULL,
  `hour_end` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `reservations`
--

INSERT INTO `reservations` (`id`, `room_id`, `user_id`, `created`, `date_reservation`, `hour_start`, `hour_end`) VALUES
(10, 9, 2, '2016-05-25', '2016-05-25', '11:00:00', '12:00:00'),
(11, 9, 2, '2016-05-25', '2016-05-26', '10:00:00', '13:00:00'),
(12, 11, 2, '2016-05-25', '2016-05-25', '13:00:00', '16:00:00'),
(13, 17, 2, '2016-05-25', '2016-05-26', '07:00:00', '09:00:00'),
(14, 17, 2, '2016-05-25', '2016-05-26', '15:00:00', '10:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `capacity` int(11) NOT NULL,
  `description` text NOT NULL,
  `taille` int(11) NOT NULL,
  `equipements` text NOT NULL,
  `photo1` text NOT NULL,
  `photo2` text NOT NULL,
  `photo3` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `capacity`, `description`, `taille`, `equipements`, `photo1`, `photo2`, `photo3`) VALUES
(8, 'Marjorelle', 12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget justo dapibus erat pulvinar commodo. Curabitur rutrum eget leo ac vehicula. Donec porttitor sem nisi, vel feugiat tellus suscipit sit amet. Morbi porta nulla nec tristique tempus. Morbi in pretium lacus. Cras ultricies metus eu dolor vulputate elementum. Curabitur cursus venenatis purus quis malesuada.\r\n\r\nUt at ligula tempus, fringilla enim quis, laoreet augue. Etiam diam dolor, rhoncus ut porttitor ac, dignissim eu mi. Nunc hendrerit viverra volutpat. Pellentesque dapibus tincidunt mollis. Suspendisse potenti. Fusce ac orci felis. Phasellus eu nibh imperdiet, blandit ipsum at, tincidunt augue. Nulla tristique, dolor at convallis bibendum, libero erat aliquet tellus, at condimentum elit sem nec augue. Nulla turpis arcu, posuere quis nisi porttitor, volutpat fermentum est. Integer vel fermentum nibh, id varius mauris. Aenean tincidunt mollis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;\r\n', 12, 'Wifi;RJ45;Internet fibré;Tableau blanc;Projecteur', 'https://www.bird-office.com/media/cache/thumbPlaceImage/bundles/birdoffice/images/place/espace-independant-au-coeur-du-quartier-de-la-madeleine-f3d.jpeg', '', ''),
(9, 'Lamour', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget justo dapibus erat pulvinar commodo. Curabitur rutrum eget leo ac vehicula. Donec porttitor sem nisi, vel feugiat tellus suscipit sit amet. Morbi porta nulla nec tristique tempus. Morbi in pretium lacus. Cras ultricies metus eu dolor vulputate elementum. Curabitur cursus venenatis purus quis malesuada.\r\n\r\nUt at ligula tempus, fringilla enim quis, laoreet augue. Etiam diam dolor, rhoncus ut porttitor ac, dignissim eu mi. Nunc hendrerit viverra volutpat. Pellentesque dapibus tincidunt mollis. Suspendisse potenti. Fusce ac orci felis. Phasellus eu nibh imperdiet, blandit ipsum at, tincidunt augue. Nulla tristique, dolor at convallis bibendum, libero erat aliquet tellus, at condimentum elit sem nec augue. Nulla turpis arcu, posuere quis nisi porttitor, volutpat fermentum est. Integer vel fermentum nibh, id varius mauris. Aenean tincidunt mollis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;\r\n', 25, 'TV;Wifi;PaperBoard', 'https://www.bird-office.com/media/cache/thumbPlaceImage/bundles/birdoffice/images/place/salle-de-reunion-paris-1er-saint-honore-1f3.jpeg', '', ''),
(11, 'Grûber', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget justo dapibus erat pulvinar commodo. Curabitur rutrum eget leo ac vehicula. Donec porttitor sem nisi, vel feugiat tellus suscipit sit amet. Morbi porta nulla nec tristique tempus. Morbi in pretium lacus. Cras ultricies metus eu dolor vulputate elementum. Curabitur cursus venenatis purus quis malesuada. Ut at ligula tempus, fringilla enim quis, laoreet augue. Etiam diam dolor, rhoncus ut porttitor ac, dignissim eu mi. Nunc hendrerit viverra volutpat. Pellentesque dapibus tincidunt mollis. Suspendisse potenti. Fusce ac orci felis. Phasellus eu nibh imperdiet, blandit ipsum at, tincidunt augue. Nulla tristique, dolor at convallis bibendum, libero erat aliquet tellus, at condimentum elit sem nec augue. Nulla turpis arcu, posuere quis nisi porttitor, volutpat fermentum est. Integer vel fermentum nibh, id varius mauris. Aenean tincidunt mollis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; ', 6, 'Climatisation;Wifi;Micro-ondes;Machine à café', 'https://www.bird-office.com/media/cache/thumbPlaceImage/bundles/birdoffice/images/place/petits-bureaux-place-de-la-madeleine_1458562353.jpeg', '', ''),
(12, 'Amphithéâtre', 100, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget justo dapibus erat pulvinar commodo. Curabitur rutrum eget leo ac vehicula. Donec porttitor sem nisi, vel feugiat tellus suscipit sit amet. Morbi porta nulla nec tristique tempus. Morbi in pretium lacus. Cras ultricies metus eu dolor vulputate elementum. Curabitur cursus venenatis purus quis malesuada. Ut at ligula tempus, fringilla enim quis, laoreet augue. Etiam diam dolor, rhoncus ut porttitor ac, dignissim eu mi. Nunc hendrerit viverra volutpat. Pellentesque dapibus tincidunt mollis. Suspendisse potenti. Fusce ac orci felis. Phasellus eu nibh imperdiet, blandit ipsum at, tincidunt augue. Nulla tristique, dolor at convallis bibendum, libero erat aliquet tellus, at condimentum elit sem nec augue. Nulla turpis arcu, posuere quis nisi porttitor, volutpat fermentum est. Integer vel fermentum nibh, id varius mauris. Aenean tincidunt mollis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; ', 80, 'Climatisation;Wifi;Micro-ondes;Machine à café', 'https://www.bird-office.com/media/cache/thumbPlaceImage/bundles/birdoffice/images/place/petits-bureaux-place-de-la-madeleine_1458562353.jpeg', '', ''),
(13, 'Multimédia', 19, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget justo dapibus erat pulvinar commodo. Curabitur rutrum eget leo ac vehicula. Donec porttitor sem nisi, vel feugiat tellus suscipit sit amet. Morbi porta nulla nec tristique tempus. Morbi in pretium lacus. Cras ultricies metus eu dolor vulputate elementum. Curabitur cursus venenatis purus quis malesuada.\r\n\r\nUt at ligula tempus, fringilla enim quis, laoreet augue. Etiam diam dolor, rhoncus ut porttitor ac, dignissim eu mi. Nunc hendrerit viverra volutpat. Pellentesque dapibus tincidunt mollis. Suspendisse potenti. Fusce ac orci felis. Phasellus eu nibh imperdiet, blandit ipsum at, tincidunt augue. Nulla tristique, dolor at convallis bibendum, libero erat aliquet tellus, at condimentum elit sem nec augue. Nulla turpis arcu, posuere quis nisi porttitor, volutpat fermentum est. Integer vel fermentum nibh, id varius mauris. Aenean tincidunt mollis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;\r\n', 56, 'Wifi;RJ45;Internet fibré;Tableau blanc;Projecteur', 'https://www.bird-office.com/media/cache/thumbPlaceImage/bundles/birdoffice/images/place/espace-independant-au-coeur-du-quartier-de-la-madeleine-f3d.jpeg', '', ''),
(14, 'Longwy', 13, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget justo dapibus erat pulvinar commodo. Curabitur rutrum eget leo ac vehicula. Donec porttitor sem nisi, vel feugiat tellus suscipit sit amet. Morbi porta nulla nec tristique tempus. Morbi in pretium lacus. Cras ultricies metus eu dolor vulputate elementum. Curabitur cursus venenatis purus quis malesuada.\r\n\r\nUt at ligula tempus, fringilla enim quis, laoreet augue. Etiam diam dolor, rhoncus ut porttitor ac, dignissim eu mi. Nunc hendrerit viverra volutpat. Pellentesque dapibus tincidunt mollis. Suspendisse potenti. Fusce ac orci felis. Phasellus eu nibh imperdiet, blandit ipsum at, tincidunt augue. Nulla tristique, dolor at convallis bibendum, libero erat aliquet tellus, at condimentum elit sem nec augue. Nulla turpis arcu, posuere quis nisi porttitor, volutpat fermentum est. Integer vel fermentum nibh, id varius mauris. Aenean tincidunt mollis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;\r\n', 25, 'TV;Wifi;PaperBoard', 'https://www.bird-office.com/media/cache/thumbPlaceImage/bundles/birdoffice/images/place/salle-de-reunion-paris-1er-saint-honore-1f3.jpeg', '', ''),
(15, 'Gallé', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget justo dapibus erat pulvinar commodo. Curabitur rutrum eget leo ac vehicula. Donec porttitor sem nisi, vel feugiat tellus suscipit sit amet. Morbi porta nulla nec tristique tempus. Morbi in pretium lacus. Cras ultricies metus eu dolor vulputate elementum. Curabitur cursus venenatis purus quis malesuada. Ut at ligula tempus, fringilla enim quis, laoreet augue. Etiam diam dolor, rhoncus ut porttitor ac, dignissim eu mi. Nunc hendrerit viverra volutpat. Pellentesque dapibus tincidunt mollis. Suspendisse potenti. Fusce ac orci felis. Phasellus eu nibh imperdiet, blandit ipsum at, tincidunt augue. Nulla tristique, dolor at convallis bibendum, libero erat aliquet tellus, at condimentum elit sem nec augue. Nulla turpis arcu, posuere quis nisi porttitor, volutpat fermentum est. Integer vel fermentum nibh, id varius mauris. Aenean tincidunt mollis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; ', 6, 'Climatisation;Wifi;Micro-ondes;Machine à café', 'https://www.bird-office.com/media/cache/thumbPlaceImage/bundles/birdoffice/images/place/petits-bureaux-place-de-la-madeleine_1458562353.jpeg', '', ''),
(16, 'Corbin', 26, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget justo dapibus erat pulvinar commodo. Curabitur rutrum eget leo ac vehicula. Donec porttitor sem nisi, vel feugiat tellus suscipit sit amet. Morbi porta nulla nec tristique tempus. Morbi in pretium lacus. Cras ultricies metus eu dolor vulputate elementum. Curabitur cursus venenatis purus quis malesuada.\r\n\r\nUt at ligula tempus, fringilla enim quis, laoreet augue. Etiam diam dolor, rhoncus ut porttitor ac, dignissim eu mi. Nunc hendrerit viverra volutpat. Pellentesque dapibus tincidunt mollis. Suspendisse potenti. Fusce ac orci felis. Phasellus eu nibh imperdiet, blandit ipsum at, tincidunt augue. Nulla tristique, dolor at convallis bibendum, libero erat aliquet tellus, at condimentum elit sem nec augue. Nulla turpis arcu, posuere quis nisi porttitor, volutpat fermentum est. Integer vel fermentum nibh, id varius mauris. Aenean tincidunt mollis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;\r\n', 56, 'Wifi;RJ45;Internet fibré;Tableau blanc;Projecteur', 'https://www.bird-office.com/media/cache/thumbPlaceImage/bundles/birdoffice/images/place/espace-independant-au-coeur-du-quartier-de-la-madeleine-f3d.jpeg', '', ''),
(17, 'Baccarat', 19, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget justo dapibus erat pulvinar commodo. Curabitur rutrum eget leo ac vehicula. Donec porttitor sem nisi, vel feugiat tellus suscipit sit amet. Morbi porta nulla nec tristique tempus. Morbi in pretium lacus. Cras ultricies metus eu dolor vulputate elementum. Curabitur cursus venenatis purus quis malesuada.\r\n\r\nUt at ligula tempus, fringilla enim quis, laoreet augue. Etiam diam dolor, rhoncus ut porttitor ac, dignissim eu mi. Nunc hendrerit viverra volutpat. Pellentesque dapibus tincidunt mollis. Suspendisse potenti. Fusce ac orci felis. Phasellus eu nibh imperdiet, blandit ipsum at, tincidunt augue. Nulla tristique, dolor at convallis bibendum, libero erat aliquet tellus, at condimentum elit sem nec augue. Nulla turpis arcu, posuere quis nisi porttitor, volutpat fermentum est. Integer vel fermentum nibh, id varius mauris. Aenean tincidunt mollis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;\r\n', 56, 'Wifi;RJ45;Internet fibré;Tableau blanc;Projecteur', 'https://www.bird-office.com/media/cache/thumbPlaceImage/bundles/birdoffice/images/place/espace-independant-au-coeur-du-quartier-de-la-madeleine-f3d.jpeg', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `RNA_association` varchar(255) NOT NULL,
  `poste_association` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `lastlogin` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf32;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `firstname`, `lastname`, `RNA_association`, `poste_association`, `created`, `updated`, `lastlogin`) VALUES
(1, 'Dylan', 'dylan.guelton@ynov.com', '8a5984292f0f48d8ba266c404d19584ab3c4bc9d', 'Dylan', 'GUELTON', 'W1234567890', 'Président', '2016-03-30 15:56:00', '2016-05-18 14:52:03', '2016-03-30 15:56:00'),
(2, 'JohnSmith', 'john.smith@ynov.com', '099c2cfc2eb5c96b7f1a4c15ef09232cea8086ba', 'John', 'SMITH', 'W1234567890', 'Président', '2016-03-30 15:56:00', '2016-05-18 14:52:03', '2016-03-30 15:56:00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
