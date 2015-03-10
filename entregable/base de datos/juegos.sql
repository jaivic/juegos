-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-12-2014 a las 18:14:51
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `juegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas`
--

CREATE TABLE IF NOT EXISTS `caracteristicas` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ID_IDIOMA` tinyint(3) unsigned NOT NULL,
  `NOMBRE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DESCRIPCION` text COLLATE utf8_unicode_ci NOT NULL,
  `GRUPO` int(10) unsigned NOT NULL,
  `PERTENECE` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_IDIOMA` (`ID_IDIOMA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificaciones`
--

CREATE TABLE IF NOT EXISTS `clasificaciones` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ID_IDIOMA` tinyint(3) unsigned NOT NULL,
  `NOMBRE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DESCRIPCION` tinytext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_IDIOMA` (`ID_IDIOMA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `claves`
--

CREATE TABLE IF NOT EXISTS `claves` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ID_JUEGOS` int(10) unsigned NOT NULL,
  `DESCRIPCION` tinytext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_JUEGOS` (`ID_JUEGOS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consolas`
--

CREATE TABLE IF NOT EXISTS `consolas` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ID_IDIOMA` tinyint(3) unsigned NOT NULL,
  `NOMBRE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `IMAGEN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IMAGEN_CONTROL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NUMERO_DE_CONTROLES_MAX` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `NOMBRE` (`NOMBRE`),
  KEY `ID_IDIOMA` (`ID_IDIOMA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE IF NOT EXISTS `galeria` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `IMAGEN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DESCRIPCION` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `HTML` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `TIPO_MEDIA` tinyint(4) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE IF NOT EXISTS `generos` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ID_IDIOMA` tinyint(3) unsigned NOT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `GRUPO` int(10) unsigned NOT NULL,
  `DESCRIPCION` tinytext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_IDIOMA` (`ID_IDIOMA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE IF NOT EXISTS `grupo` (
  `ID` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ESTADO` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`ID`, `NOMBRE`, `ESTADO`) VALUES
(1, 'Administracion', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomas`
--

CREATE TABLE IF NOT EXISTS `idiomas` (
  `ID` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `NOMBRE` char(7) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `NOMBRE` (`NOMBRE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE IF NOT EXISTS `juegos` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ID_IDIOMA` tinyint(3) unsigned NOT NULL,
  `ID_CLASIFICACION` int(10) unsigned NOT NULL,
  `NOMBRE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `IMAGEN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `INFORMACION` text COLLATE utf8_unicode_ci NOT NULL,
  `VOTO_BIEN` int(10) unsigned NOT NULL DEFAULT '0',
  `VOTO_MAL` int(10) unsigned NOT NULL DEFAULT '0',
  `VISITAS` int(10) unsigned NOT NULL DEFAULT '0',
  `VALORIZACION` int(10) unsigned NOT NULL DEFAULT '0',
  `GRUPO` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_IDIOMA` (`ID_IDIOMA`),
  KEY `ID_CLASIFICACION` (`ID_CLASIFICACION`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ESTADO` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `NOMBRE` (`NOMBRE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`ID`, `NOMBRE`, `ESTADO`) VALUES
(1, 'Caracteristicas', 0),
(2, 'clasificacion', 0),
(3, 'Consolas', 0),
(4, 'Genero', 0),
(5, 'Galeria', 0),
(6, 'Grupo', 0),
(7, 'Permisos', 0),
(8, 'Idioma', 0),
(9, 'Dar permisos', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `r_consolas_caracteristicas`
--

CREATE TABLE IF NOT EXISTS `r_consolas_caracteristicas` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ID_CONSOLAS` int(10) unsigned NOT NULL,
  `ID_CARACTERISTICAS` int(10) unsigned NOT NULL,
  `VALOR` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_CARACTERISTICAS` (`ID_CARACTERISTICAS`),
  KEY `ID_CONSOLAS` (`ID_CONSOLAS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `r_grupo_permisos`
--

CREATE TABLE IF NOT EXISTS `r_grupo_permisos` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ID_GRUPO` tinyint(10) unsigned NOT NULL,
  `ID_PERMISO` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_USUARIO` (`ID_GRUPO`),
  KEY `ID_PERMISO` (`ID_PERMISO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `r_grupo_permisos`
--

INSERT INTO `r_grupo_permisos` (`ID`, `ID_GRUPO`, `ID_PERMISO`) VALUES
(9, 1, 1),
(10, 1, 2),
(11, 1, 3),
(12, 1, 4),
(13, 1, 5),
(14, 1, 6),
(15, 1, 7),
(18, 1, 8),
(19, 1, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `r_juegos_carateristicas`
--

CREATE TABLE IF NOT EXISTS `r_juegos_carateristicas` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ID_JUEGOS` int(10) unsigned NOT NULL,
  `ID_CARACTERISTICAS` int(10) unsigned NOT NULL,
  `VALOR` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_CARACTERISTICAS` (`ID_CARACTERISTICAS`),
  KEY `ID_JUEGOS` (`ID_JUEGOS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `r_juegos_consolas`
--

CREATE TABLE IF NOT EXISTS `r_juegos_consolas` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ID_JUEGOS` int(10) unsigned NOT NULL,
  `ID_CONSOLAS` int(10) unsigned NOT NULL,
  `DESCRIPCION_ADICIONAL` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_JUEGOS` (`ID_JUEGOS`),
  KEY `ID_CONSOLAS` (`ID_CONSOLAS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `r_juegos_galeria`
--

CREATE TABLE IF NOT EXISTS `r_juegos_galeria` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ID_JUEGOS` int(10) unsigned NOT NULL,
  `ID_GALERIA` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_JUEGOS` (`ID_JUEGOS`),
  KEY `ID_GALERIA` (`ID_GALERIA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `r_juegos_generos`
--

CREATE TABLE IF NOT EXISTS `r_juegos_generos` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ID_JUEGOS` int(10) unsigned NOT NULL,
  `ID_GENEROS` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_JUEGOS` (`ID_JUEGOS`),
  KEY `ID_GENEROS` (`ID_GENEROS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ID_GRUPO` tinyint(3) unsigned NOT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `PASS` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `NOMBRE` (`NOMBRE`),
  KEY `ID_GRUPO` (`ID_GRUPO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD CONSTRAINT `caracteristicas_ibfk_1` FOREIGN KEY (`ID_IDIOMA`) REFERENCES `idiomas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `clasificaciones`
--
ALTER TABLE `clasificaciones`
  ADD CONSTRAINT `clasificaciones_ibfk_1` FOREIGN KEY (`ID_IDIOMA`) REFERENCES `idiomas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `claves`
--
ALTER TABLE `claves`
  ADD CONSTRAINT `claves_ibfk_1` FOREIGN KEY (`ID_JUEGOS`) REFERENCES `juegos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `consolas`
--
ALTER TABLE `consolas`
  ADD CONSTRAINT `consolas_ibfk_1` FOREIGN KEY (`ID_IDIOMA`) REFERENCES `idiomas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `generos`
--
ALTER TABLE `generos`
  ADD CONSTRAINT `generos_ibfk_1` FOREIGN KEY (`ID_IDIOMA`) REFERENCES `idiomas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD CONSTRAINT `juegos_ibfk_1` FOREIGN KEY (`ID_IDIOMA`) REFERENCES `idiomas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `juegos_ibfk_2` FOREIGN KEY (`ID_CLASIFICACION`) REFERENCES `clasificaciones` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `r_consolas_caracteristicas`
--
ALTER TABLE `r_consolas_caracteristicas`
  ADD CONSTRAINT `r_consolas_caracteristicas_ibfk_2` FOREIGN KEY (`ID_CARACTERISTICAS`) REFERENCES `caracteristicas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_consolas_caracteristicas_ibfk_3` FOREIGN KEY (`ID_CONSOLAS`) REFERENCES `consolas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `r_grupo_permisos`
--
ALTER TABLE `r_grupo_permisos`
  ADD CONSTRAINT `r_grupo_permisos_ibfk_3` FOREIGN KEY (`ID_PERMISO`) REFERENCES `permisos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_grupo_permisos_ibfk_4` FOREIGN KEY (`ID_GRUPO`) REFERENCES `grupo` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `r_juegos_carateristicas`
--
ALTER TABLE `r_juegos_carateristicas`
  ADD CONSTRAINT `r_juegos_carateristicas_ibfk_1` FOREIGN KEY (`ID_JUEGOS`) REFERENCES `juegos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_juegos_carateristicas_ibfk_2` FOREIGN KEY (`ID_CARACTERISTICAS`) REFERENCES `caracteristicas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `r_juegos_consolas`
--
ALTER TABLE `r_juegos_consolas`
  ADD CONSTRAINT `r_juegos_consolas_ibfk_1` FOREIGN KEY (`ID_JUEGOS`) REFERENCES `juegos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_juegos_consolas_ibfk_2` FOREIGN KEY (`ID_CONSOLAS`) REFERENCES `consolas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `r_juegos_galeria`
--
ALTER TABLE `r_juegos_galeria`
  ADD CONSTRAINT `r_juegos_galeria_ibfk_1` FOREIGN KEY (`ID_JUEGOS`) REFERENCES `juegos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_juegos_galeria_ibfk_2` FOREIGN KEY (`ID_GALERIA`) REFERENCES `galeria` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `r_juegos_generos`
--
ALTER TABLE `r_juegos_generos`
  ADD CONSTRAINT `r_juegos_generos_ibfk_1` FOREIGN KEY (`ID_JUEGOS`) REFERENCES `juegos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `r_juegos_generos_ibfk_2` FOREIGN KEY (`ID_GENEROS`) REFERENCES `generos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`ID_GRUPO`) REFERENCES `grupo` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
