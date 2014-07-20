CREATE TABLE IF NOT EXISTS `#__devcloud_subscribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `subscribe` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
