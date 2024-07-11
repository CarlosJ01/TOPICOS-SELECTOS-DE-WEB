DROP DATABASE IF EXISTS `servidor_tsw`;
CREATE DATABASE `servidor_tsw`;
USE `servidor_tsw`;

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

insert  into `usuarios`(`id`,`usuario`,`password`) values 
(1,'carlos','123'),
(2,'tsw','itm123'),
(3,'usuario','password');