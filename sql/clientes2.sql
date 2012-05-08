-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-04-2012 a las 02:20:58
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `clientes2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `clienteid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tlf` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `web` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`clienteid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`clienteid`, `nombre`, `tlf`, `web`, `image`, `dir`) VALUES
(1, 'pepe', '656661478', 'http://www.plexxoo.com', 'http://images.wikia.com/lotr/es/images/5/59/Eomer.jpg', 'calle de mi casa'),
(3, 'pepe3', '656661479', 'http://www.cajacomun.es', 'http://images.wikia.com/lotr/es/images/5/59/Eomer.jpg', 'calle de mi casa3'),
(4, 'pepe3', '656661479', 'http://www.cajacomun.es', 'http://images.wikia.com/lotr/es/images/5/59/Eomer.jpg', 'calle de mi casa3'),
(5, 'pepe3', '656661479', 'http://www.cajacomun.es', 'http://images.wikia.com/lotr/es/images/5/59/Eomer.jpg', 'calle de mi casa3'),
(7, 'pepe', 'pp', 'pp', 'pp', 'pp'),
(8, 'www', 'www', 'www', 'www', 'ww');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
