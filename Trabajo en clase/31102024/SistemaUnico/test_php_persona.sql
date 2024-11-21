DROP TABLE IF EXISTS `persona`;
CREATE TABLE `persona` (
  `numero` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` text NOT NULL,
  `carrera` text NOT NULL,
  `no_cuenta` int(10) NOT NULL,
  `direccion` text NOT NULL,
  `telefono` varchar(8) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(8) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `permisos` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

INSERT INTO `persona` VALUES (14,'Camila Chavez','ICO',320122859,'direccion de camilia','56231489','camila@gmail.com','123456','2024-10-22 11:53:13',2),(26,'Aaron Velasco','ICO',413112576,'direccion de aaron','5641889','aaron@gmail.com','123456','2024-10-24 11:44:48',2),(27,'Alejandro','ICO FES ',320326923,'direccion de ALE','5165165','alejandro@aragon.unam','sxdcfv','2024-10-24 12:03:35',2),(28,'Fer','ICO',320053690,'direcion fer','651651','fer@gmail.com','12121','2024-10-29 11:33:39',2),(29,'Fernando','ICO2.',852,'fireccion2 de fer','852','fer@gmail.com','1234','2024-10-29 11:34:28',2);
