-- Adminer 4.8.1 MySQL 8.0.13 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `age` int(3) unsigned NOT NULL,
  `gender` varchar(6) NOT NULL,
  `image` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `users` (`id`, `fullname`, `email`, `age`, `gender`, `image`) VALUES
(2, 'Russel Tajada',  'rus@gmail.com',  20, 'Male', 'https://avatars.dicebear.com/api/initials/Russel+Tajada.svg'),
(3, 'Richard Veloria',  'richard@gmail.com',  20, 'Male', 'https://avatars.dicebear.com/api/initials/Richard+Veloria.svg'),
(4, 'Lenard Mangay-ayam',  'lenard.mangayayam@gmail.com',  20, 'Male', 'https://avatars.dicebear.com/api/initials/JLenard+Mangay-ayam.svg');

-- 2021-10-08 12:10:47
