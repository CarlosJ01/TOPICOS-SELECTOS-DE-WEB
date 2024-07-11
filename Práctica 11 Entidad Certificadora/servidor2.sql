DROP DATABASE IF EXISTS `entidad_certificadora`;
CREATE DATABASE `entidad_certificadora`;
USE `entidad_certificadora`;

DROP TABLE IF EXISTS `firmas`;
CREATE TABLE `firmas` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) NOT NULL,
  `firma` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

insert  into `firmas`(`id`,`usuario`,`firma`) values 
(1,'carlos','tsw1001'),
(2,'tsw','tsw1002'),
(3,'usuario','tsw1003');