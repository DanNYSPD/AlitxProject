-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-04-2017 a las 15:54:14
-- Versión del servidor: 5.1.37
-- Versión de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u2cr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `nombres` varchar(80) NOT NULL,
  `nocontrol` varchar(8) NOT NULL,
  `carrera` varchar(20) NOT NULL,
  `semestre` varchar(2) NOT NULL,
  `grupo` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(15) NOT NULL,
  PRIMARY KEY (`nocontrol`),
  KEY `nocontrol` (`nocontrol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`nombres`, `nocontrol`, `carrera`, `semestre`, `grupo`, `email`, `pass`) VALUES
('alix michelle rodriguez', '12010306', 'Informatica', '10', '6ab', 'alix@hotmail.com', '123'),
('Antonio Cabrera', '12010307', 'sistemas', '8', '8ab', 'antonio@hotmail.com', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE IF NOT EXISTS `maestro` (
  `nombres` varchar(75) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `grupo1` varchar(5) NOT NULL,
  `grupo2` varchar(5) NOT NULL,
  `grupo3` varchar(5) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `maestro`
--

INSERT INTO `maestro` (`nombres`, `usuario`, `email`, `grupo1`, `grupo2`, `grupo3`, `pass`) VALUES
('ian michel morales rodriguez', 'ian09', 'ian09@gmail.com', '6ab', '7ab', '8ab', 'ian');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
