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
                               `name` varchar(100) DEFAULT NULL,
                               `last_name` varchar(100) DEFAULT NULL,
                               `password` varchar(255) DEFAULT NULL,
                               PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO `utilisateur` (`id`, `name`, `last_name`, `password`) VALUES
                                                                      (1,	'francis',	'huster',	'toto'),
                                                                      (2,	'Jean Claude',	'Vandammz',	NULL),
                                                                      (3,	'fafretrezt',	'rtreztreztre',	'ztreztreztrez');

