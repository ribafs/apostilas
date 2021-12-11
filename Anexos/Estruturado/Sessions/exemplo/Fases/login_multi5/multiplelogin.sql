-- Adminer 4.7.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `masterlogin`;
CREATE TABLE `masterlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

INSERT INTO `masterlogin` (`id`, `username`, `email`, `password`, `role`) VALUES
(11,	'hamid',	'hamid@gmail.com',	'123456',	'admin'),
(12,	'ribafs',	'ribafs@gmail.com',	'abir1956',	'employee'),
(13,	'user',	'user@user.com',	'123456',	'user');

-- 2020-03-06 22:30:15

