DROP SCHEMA IF EXISTS `fes_aragon`;
-- Crear base de datos

CREATE SCHEMA IF NOT EXISTS `fes_aragon` 
DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;

use `fes_aragon`;

CREATE TABLE `alumno`
(
    `nombre_usuario` text not null,
    `carrera` text not null,
    `no_cuenta` int(10) not null,
    `direccion` text not null,
    `telefono` varchar(10) not null,
    `email` text not null,
    `pass` varchar(10) not null,
    `fecha_registro` datetime not null DEFAULT current_timestamp,
    `permisos` int(11) not null default '2'
);

