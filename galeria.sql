-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2019 a las 15:13:23
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `galeria`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `consultaPelicula` ()  select * from pelicula$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(10) NOT NULL,
  `cliente` varchar(30) NOT NULL,
  `year` date NOT NULL,
  `tipo` int(10) NOT NULL,
  `password` int(20) NOT NULL,
  `usuario` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `cliente`, `year`, `tipo`, `password`, `usuario`) VALUES
(5, 'Carlos Sosa', '0000-00-00', 1, 0, 'admin'),
(7, 'Omar Bojalil', '0000-00-00', 1, 321, 'oboja'),
(9, 'Tere', '0000-00-00', 1, 45, 'terea'),
(10, 'Anzures', '0000-00-00', 0, 0, 'anzu'),
(154, 'asdasd', '2014-04-03', 1, 0, 'wqeweq');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id_pelicula` int(10) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `director` varchar(30) NOT NULL,
  `actor` varchar(50) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `descripcion` varchar(110) NOT NULL,
  `ranking` int(11) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `disponibilidad` smallint(6) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id_pelicula`, `titulo`, `director`, `actor`, `imagen`, `descripcion`, `ranking`, `id_cliente`, `disponibilidad`) VALUES
(17, 'Do it yourself', 'Rene Schute', 'Alemania', 'Do-it-yourself.jpg', 'Arte surrealista del siglo XXI', 2, 0, 0),
(20, 'The first race ', 'Clive Metcalfe', 'Francia', 'race.jpg', 'Arte moderno y figurativo', 20, 7, 1),
(21, 'In a Groove', 'oboja', 'Mexico', 'in-a-groove.jpg', 'Obra que representa el movimiento de la mÃºsica jazz en MÃ©xico\r\n    ', 20, 7, 1),
(32, 'Sun Bather', 'admin', 'Grecia', 'sunbather.jpg', 'Pintura realizada en Grecia a principios del XXI', 20, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(10) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ocupacion` varchar(20) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `edad` int(5) NOT NULL,
  `id_cliente` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `foto`, `ocupacion`, `descripcion`, `edad`, `id_cliente`) VALUES
(1, '', 'Diseñador', 'Este es mi perfil personal, bienvenido', 20, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rentas`
--

CREATE TABLE `rentas` (
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_pelicula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rentas`
--

INSERT INTO `rentas` (`fecha_inicio`, `fecha_fin`, `id_cliente`, `id_pelicula`) VALUES
('2018-11-02', '2018-11-07', 1, 1),
('2018-09-12', '2018-09-14', 1, 3),
('2018-09-12', '2018-09-14', 1, 4),
('2018-09-12', '2018-09-14', 1, 5),
('2018-09-12', '2018-09-14', 2, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id_pelicula`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;
--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id_pelicula` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
