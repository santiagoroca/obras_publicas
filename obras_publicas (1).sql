-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2015 a las 04:17:06
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
-- Estructura de tabla para la tabla `entity`
--

CREATE TABLE IF NOT EXISTS `entity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `entity`
--

INSERT INTO `entity` (`id`, `name`, `tag`) VALUES
(1, 'Municipalidad Colonia Caroya', 'Colonia Caroya');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `extra_image`
--

CREATE TABLE IF NOT EXISTS `extra_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_work` int(11) NOT NULL,
  `path` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `extra_image`
--

INSERT INTO `extra_image` (`id`, `id_work`, `path`) VALUES
(1, 1, 'mVuGAi7rUeR3HcNJNavdxB6ILtbWPeO8zSCYlRGIYaA4NfreH4.jpg'),
(2, 1, 'Cm80ZnMdKUqmtFoUgSxQJgcBW2fbvUZ2w7h9ymtYJSptDnq8m4.jpg'),
(3, 1, '4gXn6nBJwxGfknWiYYAHqUlP9iqu8Ix3PgVmdxiLKDS5p8mFF9.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `extra_info`
--

INSERT INTO `extra_info` (`id`, `id_work`, `title`, `desc`, `icon`) VALUES
(1, 1, 'Ubicación', 'La obra vial está ubicada entre las ciudades de Córdoba, en Córdoba Capital y Rosario, Santa Fe.', '1'),
(2, 1, 'Mejoras', 'La ruta Córdoba-Rosario es utilizada por más de 15 mil vehículos al día, entre camiones, particulares y transporte público. Conecta además las localidades de Pilar, y alguna más.', '4'),
(3, 1, 'Beneficios', 'Doble carril en ambos sentidos; agilización del transporte de carga; reducción del tiempo de viaje en 2 horas.', '6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `high_profile`
--

CREATE TABLE IF NOT EXISTS `high_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_profile` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `entity_id` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `high_profile`
--

INSERT INTO `high_profile` (`id`, `id_profile`, `type`, `entity_id`) VALUES
(1, 1, 1, 1),
(2, 2, 0, 1);

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
  `birthdate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `name`, `last_name`, `address`, `tel`, `email`, `type`, `birthdate`) VALUES
(1, 1, 'Santiago', 'Roca', 'Lagunilla 2250', '03525482703', 'snroca@hotmail.com', 1, ''),
(2, 2, 'Paula', 'Bustamante', 'Lagunilla 2250', '03525482703', 'snroca@hotmail.com', 1, '');

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
  `birth_date` varchar(255) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `user`, `hash`, `salt`, `c`, `d`, `u`, `active`, `birth_date`) VALUES
(1, 'santiiiii', '81cb0164b1115f853c93ebd9378875f30384522144a58192cd008bcec4c0c46b3992cfa96f4da03b3f333323c823cad2fc18b1d015150e3d7f04cd5888edea46', '55989014bb9ca', '2015-07-05 02:01:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '1'),
(2, 'pauuuuu', '81cb0164b1115f853c93ebd9378875f30384522144a58192cd008bcec4c0c46b3992cfa96f4da03b3f333323c823cad2fc18b1d015150e3d7f04cd5888edea46', '55989014bb9ca', '2015-07-05 02:01:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '1');

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
  `owner` int(11) NOT NULL,
  `tags` varchar(10000) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `works`
--

INSERT INTO `works` (`id`, `title`, `s_desc`, `l_desc_a`, `l_desc_b`, `progress`, `owner`, `tags`, `active`) VALUES
(1, 'Cloacas Barrio Parque', 'Se realizo un sistema de cloacas para barrio Parque para evitar las frecuentes inundaciones.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.\n', 100, 1, '', 1),
(2, 'Tendido Electrico', 'Ante la demanda de electricidad se realizo un tendido electrico.', '', '', 100, 1, '', 1),
(3, 'Puente Sinsacate', 'Luego de las fuertes lluvias se planea reconstruir el puente a Sinsacate.', '', '', 0, 2, '', 1),
(4, 'Otra Obra', 'Se realizo otra obra muy importante para colonia caroya.', '', '', 100, 2, '', 1),
(5, 'Destacamento', 'Se esta trabajando en el Destacamento.', '', '', 75, 1, '', 1),
(6, 'Cloacas Colonia Caroya', 'Se realizo un sistema de cloacas para barrio Parque para evitar las frecuentes inundaciones.', '', '', 83, 2, '', 1),
(7, 'Remodelacion Estatuas', 'Esta es la descripcion de esta obra que me sirve para ver como queda.', '', '', 100, 1, '', 1),
(8, 'Cloacas Barrio Parque', 'Se realizo un sistema de cloacas para barrio Parque para evitar las frecuentes inundaciones.', '', '', 35, 2, '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
