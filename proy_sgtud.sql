-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2023 a las 03:47:54
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proy_sgtud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especificacion`
--

CREATE TABLE `especificacion` (
  `id` int(11) NOT NULL,
  `especificacion` varchar(250) DEFAULT NULL,
  `id_torneo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `especificacion`
--

INSERT INTO `especificacion` (`id`, `especificacion`, `id_torneo`) VALUES
(1, 'Tener más de 15 años', 1),
(2, 'Ser Estudiante activo', 1),
(3, 'Presentar carnet universitario', 2),
(4, 'Ser Estudiante activo', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `id` int(11) NOT NULL,
  `codigo_carrera` double NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` double NOT NULL,
  `correo` varchar(50) NOT NULL,
  `carrera` varchar(50) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `habilitado` varchar(6) DEFAULT NULL,
  `id_torneo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`id`, `codigo_carrera`, `nombre`, `telefono`, `correo`, `carrera`, `genero`, `habilitado`, `id_torneo`) VALUES
(1, 20202578001, 'Danilo aguilar', 3104839100, 'daguilarm@udistrital.edu.co', 'Sistemas', 'M', 'SI', 1),
(2, 20202578081, 'Yohana Avila', 3104839109, 'ayavilam@udistrital.edu.co', 'Sistemas', 'F', 'SI', 1),
(3, 20202555084, 'Dayana Avila', 3104830119, 'adavilam@udistrital.edu.co', 'Control', 'F', 'SI', 2),
(4, 20202555085, 'David Campos', 3104830129, 'sdcampos@udistrital.edu.co', 'Civiles', 'M', 'SI', 2),
(5, 20202555085, 'Israel Buitrago', 3104830159, 'isbuitrago@udistrital.edu.co', 'Industrial', 'M', 'SI', 3),
(6, 20202555015, 'Adriana Rodriguez', 3104830359, 'avrodriguez@udistrital.edu.co', 'Sistemas', 'F', 'SI', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizador`
--

CREATE TABLE `organizador` (
  `id` int(11) NOT NULL,
  `codigo_carrera` double NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` double NOT NULL,
  `correo` varchar(50) NOT NULL,
  `habilitado` varchar(6) DEFAULT NULL,
  `id_torneo` int(11) DEFAULT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `organizador`
--

INSERT INTO `organizador` (`id`, `codigo_carrera`, `nombre`, `telefono`, `correo`, `habilitado`, `id_torneo`, `contrasena`) VALUES
(1, 20202578111, 'Daniel Aguilar', 3104855100, 'daguilarm@udistrital.edu.co', 'SI', 1, '123'),
(2, 20202578123, 'Diana Avila', 3104839999, 'adavilam@udistrital.edu.co', 'SI', 2, '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partido`
--

CREATE TABLE `partido` (
  `id` int(11) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `contrincante_1` int(11) NOT NULL,
  `contrincante_2` int(11) NOT NULL,
  `id_torneo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `partido`
--

INSERT INTO `partido` (`id`, `hora_inicio`, `hora_fin`, `contrincante_1`, `contrincante_2`, `id_torneo`) VALUES
(1, '09:30:00', '10:00:00', 1, 2, 1),
(2, '09:30:00', '10:00:00', 3, 4, 2),
(3, '09:30:00', '10:00:00', 5, 6, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneo`
--

CREATE TABLE `torneo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `precio` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `torneo`
--

INSERT INTO `torneo` (`id`, `nombre`, `descripcion`, `precio`, `tipo`, `fecha`) VALUES
(1, 'Torneo de Volei a la Media', 'Es un torneo de Voleibol al que todos están invitados', 5000, 'Voleibol', '2023-11-01'),
(2, 'Torneo de Ajedrez a la Tecno', 'Es un torneo de ajedrez al que todos están invitados', 10000, 'Ajedrez', '2023-11-03'),
(3, 'Torneo de XBOX360 a la Tecno', 'Es un torneo de Video juegos al que todos están invitados', 4000, 'XBOX360', '2023-11-05'),
(4, 'Torneo de Baloncesto en el Lectus', 'Es un torneo de Baloncesto al que todos están invitados', 4000, 'Baloncesto', '2023-11-05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `especificacion`
--
ALTER TABLE `especificacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_torneo` (`id_torneo`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_torneo` (`id_torneo`);

--
-- Indices de la tabla `organizador`
--
ALTER TABLE `organizador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_torneo` (`id_torneo`);

--
-- Indices de la tabla `partido`
--
ALTER TABLE `partido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contrincante_1` (`contrincante_1`),
  ADD KEY `contrincante_2` (`contrincante_2`),
  ADD KEY `id_torneo` (`id_torneo`);

--
-- Indices de la tabla `torneo`
--
ALTER TABLE `torneo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `especificacion`
--
ALTER TABLE `especificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `jugador`
--
ALTER TABLE `jugador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `organizador`
--
ALTER TABLE `organizador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `partido`
--
ALTER TABLE `partido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `torneo`
--
ALTER TABLE `torneo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `especificacion`
--
ALTER TABLE `especificacion`
  ADD CONSTRAINT `especificacion_ibfk_1` FOREIGN KEY (`id_torneo`) REFERENCES `torneo` (`id`);

--
-- Filtros para la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD CONSTRAINT `jugador_ibfk_1` FOREIGN KEY (`id_torneo`) REFERENCES `torneo` (`id`);

--
-- Filtros para la tabla `organizador`
--
ALTER TABLE `organizador`
  ADD CONSTRAINT `organizador_ibfk_1` FOREIGN KEY (`id_torneo`) REFERENCES `torneo` (`id`);

--
-- Filtros para la tabla `partido`
--
ALTER TABLE `partido`
  ADD CONSTRAINT `partido_ibfk_1` FOREIGN KEY (`contrincante_1`) REFERENCES `jugador` (`id`),
  ADD CONSTRAINT `partido_ibfk_2` FOREIGN KEY (`contrincante_2`) REFERENCES `jugador` (`id`),
  ADD CONSTRAINT `partido_ibfk_3` FOREIGN KEY (`id_torneo`) REFERENCES `torneo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
