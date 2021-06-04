-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2021 a las 08:16:50
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `equipos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_equipos`
--

CREATE TABLE `t_equipos` (
  `id_equipo` int(11) NOT NULL,
  `nombre_equipo` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `ns` varchar(255) NOT NULL,
  `imagen` longblob NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_insert` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_equipos`
--

INSERT INTO `t_equipos` (`id_equipo`, `nombre_equipo`, `modelo`, `ns`, `imagen`, `id_usuario`, `fecha_insert`) VALUES
(8, 'laptop', 'dell', '123454566778', 0x433a66616b6570617468646f632e706e67, 9, '2021-06-04 01:11:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE `t_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido_paterno` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fecha_insert` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_usuarios`
--

INSERT INTO `t_usuarios` (`id_usuario`, `nombre`, `apellido_paterno`, `telefono`, `email`, `fecha_insert`) VALUES
(9, 'marco', 'perez', '892417', 'mail@gmial.com', '2021-06-04 01:10:46');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_equipos`
--
ALTER TABLE `t_equipos`
  ADD PRIMARY KEY (`id_equipo`),
  ADD KEY `fkUsuarioEquipo` (`id_usuario`);

--
-- Indices de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_equipos`
--
ALTER TABLE `t_equipos`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t_equipos`
--
ALTER TABLE `t_equipos`
  ADD CONSTRAINT `fkUsuarioEquipo` FOREIGN KEY (`id_usuario`) REFERENCES `t_usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
