-- phpMyAdmin SQL Dump
-- version 3.5.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-02-2015 a las 16:13:02
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
(11, 1, 'pelicula terror', 'El cine de terror es un género cinematográfico que se caracteriza por su voluntad de provocar en el espectador sensaciones de pavor, terror, miedo, disgusto, repugnancia, horror, incomodidad o preocupación. Sus argumentos frecuentemente desarrollan la súbita intrusión en un ámbito de normalidad de alguna fuerza, evento o personaje de naturaleza maligna, a menudo de origen criminal o sobrenatural.', 'terror', 'foto2.jpg', '2015-02-01 16:07:31'),
(12, 2, 'pelicula comedia', 'Una comedia cinematográfica es una película con humor o que intenta provocar la risa de la audiencia. Junto con el drama y la ciencia ficción, la comedia es uno de los más importantes géneros cinematográficos.', 'pelicula comedia', 'foto1.jpg', '2015-02-01 16:11:04'),
(13, 2, 'otra comedia', 'El cine cómico o cine de comedia, que se caracteriza por la inclusión de gags, chistes o bromas, tanto visuales como verbales, inicia su andadura prácticamente con el comienzo de este arte. ', 'comedia', 'foto3.png', '2015-02-01 16:12:04');

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
