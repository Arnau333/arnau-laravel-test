CREATE DATABASE IF NOT EXISTS Laravel_test_Arnau;
USE Laravel_test_Arnau;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2021 a las 19:13:17
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel_test_arnau`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `client`
--

INSERT INTO `client` (`id`, `name`, `lastName`, `telephone`, `created_at`, `updated_at`) VALUES
(1, 'Arnau', 'Carrasco', '608345078', '2021-11-10 18:42:49', '2021-11-10 18:42:49'),
(2, 'Enric', 'Carrasco', '879945658', '2021-11-10 18:42:49', '2021-11-10 18:42:49'),
(3, 'Paco', 'Ejemplo', '234645555', '2021-11-10 18:44:11', '2021-11-10 18:44:11'),
(4, 'Juan', 'Guarnizo', '123789876', '2021-11-10 18:44:11', '2021-11-18 18:44:11'),
(5, 'Pedro', 'Garcia', '678903097', '2021-11-10 18:45:42', '2021-11-11 18:45:42'),
(6, 'Laura', 'Lastname', '879900000', '2021-11-10 18:45:42', '2021-11-01 18:45:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domain`
--

CREATE TABLE `domain` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `expirationDate` datetime NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `server_id` int(255) NOT NULL,
  `client_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `domain`
--

INSERT INTO `domain` (`id`, `name`, `expirationDate`, `created_at`, `updated_at`, `server_id`, `client_id`) VALUES
(1, 'web.com', '2022-03-25 18:59:46', '2022-02-01 18:59:46', '2021-11-04 18:59:46', 1, 1),
(2, 'google.es', '2022-07-14 19:05:05', '2021-11-10 18:07:14', '2021-11-10 18:07:14', 1, 6),
(7, 'youtube.com', '2021-11-05 19:07:08', '2022-04-21 19:07:08', '2021-11-10 19:07:08', 2, 2),
(8, 'cdmon.com', '2024-02-17 19:07:49', '2021-11-09 19:07:49', '2021-11-17 19:07:49', 3, 3),
(9, 'stackoverflow.com', '2025-04-12 19:07:49', '2021-11-10 18:42:49', '2021-11-10 18:42:49', 3, 4),
(10, 'github.com', '2022-11-18 19:10:03', '2021-11-10 18:07:14', '2021-11-10 18:07:14', 3, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_server`
--

CREATE TABLE `_server` (
  `id` int(255) NOT NULL,
  `phpVersion` varchar(30) NOT NULL,
  `storageCapacity` varchar(30) NOT NULL,
  `diskType` varchar(30) NOT NULL,
  `_database` varchar(30) NOT NULL,
  `_email` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(230) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `_server`
--

INSERT INTO `_server` (`id`, `phpVersion`, `storageCapacity`, `diskType`, `_database`, `_email`, `username`, `pass`, `created_at`, `updated_at`) VALUES
(1, '5.3.1', '30gb', 'ssd', 'mysql', 'testmail@gmail.com', 'Admin', 'passwd1234', '2021-11-10 18:16:19', '2021-11-10 18:16:19'),
(2, '7.2.3', '300gb', 'ssd', 'MariaDB', 'email@hotmail.com', 'toni', '21310923', '2021-11-11 18:17:39', '2021-11-26 18:17:39'),
(3, '8.2.3', '2300gb', 'hdd', 'MariaDB', 'manolo@hotmail.com', 'adminadmin', 'passwd234', '2001-11-11 18:17:39', '2020-11-26 18:17:39');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `domain`
--
ALTER TABLE `domain`
  ADD PRIMARY KEY (`id`),
  ADD KEY `server_id` (`server_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indices de la tabla `_server`
--
ALTER TABLE `_server`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `domain`
--
ALTER TABLE `domain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `_server`
--
ALTER TABLE `_server`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `domain`
--
ALTER TABLE `domain`
  ADD CONSTRAINT `domain_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `domain_ibfk_2` FOREIGN KEY (`server_id`) REFERENCES `_server` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
