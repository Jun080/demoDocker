-- Adminer 4.8.1 MySQL 5.5.5-10.9.3-MariaDB-1:10.9.3+maria~ubu2204 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `data`;
CREATE DATABASE `data` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `data`;


DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE `utilisateur` (
                               `id` int(11) NOT NULL AUTO_INCREMENT,
                               `pseudo` varchar(100) DEFAULT NULL,
                               `last_name` varchar(100) DEFAULT NULL,
                               `password` varchar(255) DEFAULT NULL,
                               PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `utilisateur` (`id`, `pseudo`, `last_name`, `password`) VALUES
                                                                        (22,	'jun',	NULL,	'aki'),
                                                                        (23,	'morgane',	NULL,	'dasson'),
                                                                        (31,	'md',	'md',	'md');


-- Adminer 4.8.1 MySQL 5.5.5-10.9.3-MariaDB-1:10.9.3+maria~ubu2204 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `post`;
CREATE DATABASE `post` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `post`;

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
                           `id` int(11) NOT NULL AUTO_INCREMENT,
                           `id_utilisateur` varchar(250) NOT NULL,
                           `message` varchar(250) NOT NULL,
                           PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `message` (`id`, `id_utilisateur`, `message`) VALUES
                                                              (66,	'jun',	'bonjour'),
                                                              (67,	'jun',	'ça va<br />\r\n?'),
                                                              (68,	'jun',	'hello<br />\r\nholà'),
                                                              (69,	'md',	'bonjour jun'),
                                                              (70,	'md',	'je suis md');

-- 2022-10-16 13:11:23