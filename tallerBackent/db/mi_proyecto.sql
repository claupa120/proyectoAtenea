-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-05-2023 a las 05:17:56
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mi_proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `Apellido` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `Cedula` int NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nombre`, `Apellido`, `Cedula`) VALUES
(1, 'Pepito', 'Perez', 100000000),
(2, 'Camilo', 'Gutiérrez', 200000000),
(3, 'José', 'Pardo', 300000000),
(4, 'Nicolás', 'Pérez', 400000000),
(5, 'ANGEL', 'MENDOZA', 500000000),
(6, 'Diego', 'Rodriguez', 6000000),
(7, 'Hector', 'Beltran', 70000000),
(9, 'Claudia', 'Suarez', 800000000),
(13, 'Julian', 'Acosta', 9000000),
(14, 'Wilmer', 'Alexis', 2147483647),
(15, 'JHOAN', 'CAMACHO', 1200000),
(16, 'MARIANA', 'GARCIA', 1300000),
(17, 'BRAYAN', 'MARTINEZ', 1400000),
(18, 'Laura', 'Espitia', 1500000),
(19, 'CLAUDIA', 'CAMPOS', 12365478);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
