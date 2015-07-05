-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2015 a las 04:24:08
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `obras_publicas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `extra_image`
--

CREATE TABLE IF NOT EXISTS `extra_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_work` int(11) NOT NULL,
  `path` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `extra_info`
--

CREATE TABLE IF NOT EXISTS `extra_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_work` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` varchar(1024) NOT NULL,
  `icon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(512) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `name`, `last_name`, `address`, `tel`, `email`, `type`) VALUES
(5, 0, 'Santiago', 'Roca', 'Lagunilla 2250', '03525482703', 'snroca@hotmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rel_tag_extra_info`
--

CREATE TABLE IF NOT EXISTS `rel_tag_extra_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_work` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(11) NOT NULL,
  `desc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `hash` varchar(1024) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `c` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `d` datetime NOT NULL,
  `u` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `user`, `hash`, `salt`, `c`, `d`, `u`, `active`) VALUES
(9, 'santiiiii', '81cb0164b1115f853c93ebd9378875f30384522144a58192cd008bcec4c0c46b3992cfa96f4da03b3f333323c823cad2fc18b1d015150e3d7f04cd5888edea46', '55989014bb9ca', '2015-07-05 02:01:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `works`
--

CREATE TABLE IF NOT EXISTS `works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `s_desc` varchar(1024) NOT NULL,
  `l_desc_a` varchar(10000) NOT NULL,
  `l_desc_b` varchar(10000) NOT NULL,
  `progress` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
