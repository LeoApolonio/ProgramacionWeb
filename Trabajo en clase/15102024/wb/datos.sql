-- Eliminar BD si es que ya existe
DROP SCHEMA IF EXISTS `fes_aragon`;

-- Crear nueva BD 
CREATE SCHEMA IF NOT EXISTS `fes_aragon` 

-- Asignar el tipo de caracteres
DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;

-- Usar la base de datos
use `fes_aragon`;

-- Crear tabla
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

alter table `alumno` add primary key (`no_cuenta`);

show tables;