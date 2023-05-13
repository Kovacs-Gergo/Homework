CREATE DATABASE `databaseh`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `databaseh`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `first_name` varchar(45) NOT NULL default '',
  `last_name` varchar(45) NOT NULL default '',
  `user_name` varchar(40) NOT NULL default '',
  `password` varchar(40) NOT NULL default '',
  `e_mail` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE `messages` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(40) NOT NULL default '',
  `e_mail` varchar(50) NOT NULL default '',
  `textarea` VARCHAR(80) NOT NULL,
  `write_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
  )
  ENGINE = MYISAM
  CHARACTER SET utf8 COLLATE utf8_general_ci;