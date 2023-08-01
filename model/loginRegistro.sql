-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-07-2023 a las 02:29:18
-- Versión del servidor: 10.5.20-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id21090126_cpruebal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loginRegistro`
--

CREATE TABLE `loginRegistro` (
  `id` int(11) NOT NULL,
  `token` varchar(200) NOT NULL,
  `nombre` text NOT NULL,
  `apellidos` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `loginRegistro`
--

INSERT INTO `loginRegistro` (`id`, `token`, `nombre`, `apellidos`, `email`, `password`, `fecha`) VALUES
(1, '6390a0a9b8702028ae054e91b242df9c', 'Antonio', 'Sanchez Pacheco', 'antonio6pache6@gmail.com', '1234', '2023-07-29 20:33:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `loginRegistro`
--
ALTER TABLE `loginRegistro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `loginRegistro`
--
ALTER TABLE `loginRegistro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
