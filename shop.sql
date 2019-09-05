-- Adminer 4.7.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `album`;
CREATE TABLE `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `genre` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `genre` (`genre`),
  KEY `author` (`author`),
  CONSTRAINT `album_ibfk_3` FOREIGN KEY (`genre`) REFERENCES `genre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `album_ibfk_4` FOREIGN KEY (`author`) REFERENCES `artiste` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `album` (`id`, `name`, `image`, `genre`, `author`, `created_at`, `updated_at`) VALUES
(4,	'Nero Nemesis',	'https://e-cdns-images.dzcdn.net/images/cover/3ea4e7a79cb3b6b7cd6cc8b1419bc78a/264x264-000000-80-0-0.jpg',	1,	3,	'2019-09-05 08:41:38',	'2019-09-05 08:41:38'),
(5,	'Album random',	'https://e-cdns-images.dzcdn.net/images/cover/8502fedc336f5d8ceb52fab8bf518721/264x264-000000-80-0-0.jpg',	2,	5,	'2019-09-05 13:34:44',	'2019-09-05 08:41:43'),
(6,	'Brol',	'https://e-cdns-images.dzcdn.net/images/cover/4a2360324af313f73b56fd1f7faaac88/264x264-000000-80-0-0.jpg',	2,	6,	'2019-09-05 09:27:16',	NULL),
(7,	'Get rich or die tryin\'',	'https://e-cdns-images.dzcdn.net/images/cover/8f4dd4d8abf85ceda96b6b4adf217590/264x264-000000-80-0-0.jpg',	1,	7,	'2019-09-05 09:30:07',	NULL),
(8,	'Commando',	'https://e-cdns-images.dzcdn.net/images/cover/e8d42b1801bee58f6f4ca312667b7d84/264x264-000000-80-0-0.jpg',	1,	4,	'2019-09-05 09:35:13',	NULL);

DROP TABLE IF EXISTS `artiste`;
CREATE TABLE `artiste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `genre` int(11) DEFAULT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `genre` (`genre`),
  CONSTRAINT `artiste_ibfk_3` FOREIGN KEY (`genre`) REFERENCES `genre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `artiste_ibfk_4` FOREIGN KEY (`genre`) REFERENCES `genre` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `artiste` (`id`, `name`, `image`, `genre`, `login`, `password`, `created_at`, `updated_at`) VALUES
(2,	'Lorenzo',	'https://e-cdns-images.dzcdn.net/images/artist/95ab840232a0ad7bbbd4d796ecd24056/264x264-000000-80-0-0.jpg',	1,	'lorenzo',	'lorenzo',	'2019-09-05 08:56:10',	'2019-09-05 08:56:10'),
(3,	'Booba',	'https://e-cdns-images.dzcdn.net/images/artist/b354e3298214e7146a05b663f10b6346/528x528-000000-80-0-0.jpg',	1,	'booba',	'booba',	'2019-09-05 08:56:19',	'2019-09-05 08:56:19'),
(4,	'Niska',	'https://e-cdns-images.dzcdn.net/images/artist/f03af182a46b9f16be9c3a16d0771286/156x156-000000-80-0-0.jpg',	1,	'niska',	'niska',	'2019-09-05 09:32:24',	'2019-09-05 08:56:25'),
(5,	'Victor',	'https://avatars2.githubusercontent.com/u/36987377?s=460&v=4',	1,	'login',	'password',	'2019-09-05 08:56:31',	'2019-09-05 08:56:31'),
(6,	'Angèle',	'https://e-cdns-images.dzcdn.net/images/artist/6dcb118635259133ccc05e4d5fd62fcb/264x264-000000-80-0-0.jpg',	2,	'angel',	'angel',	'2019-09-05 09:26:17',	NULL),
(7,	'50 cent',	'https://e-cdns-images.dzcdn.net/images/artist/58da3cca2d598e43c7a7823cf75277e5/264x264-000000-80-0-0.jpg',	1,	'50',	'50',	'2019-09-05 09:28:42',	NULL);

DROP TABLE IF EXISTS `genre`;
CREATE TABLE `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `color_text` text NOT NULL,
  `color_bck` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `genre` (`id`, `name`, `color_text`, `color_bck`) VALUES
(1,	'rap',	'white',	'#cf1e1e'),
(2,	'pop',	'white',	'green'),
(3,	'Latino',	'white',	'orange'),
(4,	'Jazz',	'white',	'#53a4ef'),
(5,	'Dance & EDM',	'white',	'#038FB2'),
(6,	'Electro',	'white',	'#59C5AE'),
(7,	'R&B',	'white',	'#EEBF6A'),
(8,	'Rock',	'white',	'#D86863'),
(9,	'Reegae',	'white',	'#6FD989'),
(10,	'Soul & Funk',	'white',	'#DB96F1'),
(11,	'Country',	'white',	'#918275');

DROP TABLE IF EXISTS `titre`;
CREATE TABLE `titre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `author` int(11) NOT NULL,
  `feat` int(11) DEFAULT NULL,
  `album` int(11) DEFAULT NULL,
  `lyrics` mediumtext,
  `image` text NOT NULL,
  `genre` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `author` (`author`),
  KEY `feat` (`feat`),
  KEY `album` (`album`),
  KEY `genre` (`genre`),
  CONSTRAINT `titre_ibfk_1` FOREIGN KEY (`author`) REFERENCES `artiste` (`id`) ON DELETE CASCADE,
  CONSTRAINT `titre_ibfk_2` FOREIGN KEY (`feat`) REFERENCES `artiste` (`id`) ON DELETE CASCADE,
  CONSTRAINT `titre_ibfk_3` FOREIGN KEY (`album`) REFERENCES `album` (`id`) ON DELETE CASCADE,
  CONSTRAINT `titre_ibfk_4` FOREIGN KEY (`genre`) REFERENCES `genre` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `titre` (`id`, `name`, `author`, `feat`, `album`, `lyrics`, `image`, `genre`, `created_at`, `updated_at`) VALUES
(8,	'Réseaux',	4,	4,	8,	'pouloulou',	'https://e-cdns-images.dzcdn.net/images/cover/948bc3ed8892f398fb1aa8fb68aa25ce/264x264-000000-80-0-0.jpg',	1,	'2019-09-05 09:42:11',	NULL),
(14,	'SongName',	5,	4,	5,	'pouloulou',	'https://e-cdns-images.dzcdn.net/images/cover/f117fdd99c54fddea7e9526794bb03d4/264x264-000000-80-0-0.jpg',	6,	'2019-09-05 15:05:47',	NULL);

-- 2019-09-05 15:12:22
