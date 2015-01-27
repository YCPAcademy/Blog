-- phpMyAdmin SQL Dump
-- version 3.5.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-01-2015 a las 22:24:38
-- Versión del servidor: 5.5.28-log
-- Versión de PHP: 5.4.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name_category` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'terror'),
(2, 'comedia'),
(3, 'drama');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) NOT NULL,
  `title_post` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `body_post` text COLLATE utf8_unicode_ci NOT NULL,
  `tag_post` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_post` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id_post`, `id_category`, `title_post`, `body_post`, `tag_post`, `image_post`, `date_post`) VALUES
(11, 1, 'pelicula terror', 'esto es una peli de terror', 'terror', 'foto2.jpg', '2015-01-27 21:36:10'),
(12, 2, 'pelicula comedia', 'pelicula comedia ', 'pelicula comedia', 'foto1.jpg', '2015-01-27 18:45:32'),
(13, 2, 'otra comedia', 'otra comedia', 'comedia', 'foto3.png', '2015-01-27 21:56:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email_user` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `pass_user` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `email_user`, `pass_user`) VALUES
(1, 'inma@hotmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
